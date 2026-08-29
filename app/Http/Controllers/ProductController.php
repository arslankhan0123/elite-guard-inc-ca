<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('status', 'active')->orderBy('name')->get();
        $nextSku = $this->skuForId((Product::max('id') ?? 0) + 1);
        return view('admin.products.create', compact('categories', 'nextSku'));
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['slug'] = $this->uniqueSlug($data['slug'] ?: $data['name']);
        $data['feature_image'] = $this->upload($request, 'feature_image', 'feature_images');
        $product = Product::create($data);
        $product->update(['sku' => $this->skuForId($product->id)]);
        $this->saveGallery($request, $product);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $product->load('galleries');
        $categories = Category::where('status', 'active')->orWhere('id', $product->category_id)->orderBy('name')->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $this->validated($request, $product);
        $data['slug'] = $this->uniqueSlug($data['slug'] ?: $data['name'], $product->id);
        if ($request->hasFile('feature_image')) {
            $this->deleteFile($product->feature_image);
            $data['feature_image'] = $this->upload($request, 'feature_image', 'feature_images');
        }
        $product->update($data);
        $this->saveGallery($request, $product);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $this->deleteFile($product->feature_image);
        foreach ($product->galleries as $gallery) $this->deleteFile($gallery->image);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function deleteGalleryImage(ProductGallery $gallery)
    {
        $this->deleteFile($gallery->image);
        $gallery->delete();
        return response()->json(['success' => true]);
    }

    private function validated(Request $request, ?Product $product = null): array
    {
        return $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'purchase_price' => ['required', 'numeric', 'min:0'],
            'sale_price' => ['required', 'numeric', 'min:0'],
            'stock_quantity' => ['required', 'integer', 'min:0'],
            'short_description' => ['nullable', 'string'],
            'long_description' => ['nullable', 'string'],
            'feature_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp,svg', 'max:4096'],
            'gallery_images' => ['nullable', 'array'],
            'gallery_images.*' => ['image', 'mimes:jpeg,png,jpg,gif,webp,svg', 'max:4096'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ]);
    }

    private function uniqueSlug(string $value, ?int $ignore = null): string
    {
        $base = Str::slug($value) ?: Str::random(8);
        $slug = $base; $number = 2;
        while (Product::where('slug', $slug)->when($ignore, fn ($q) => $q->whereKeyNot($ignore))->exists()) {
            $slug = $base.'-'.$number++;
        }
        return $slug;
    }

    private function skuForId(int $id): string
    {
        return 'PRD-'.str_pad((string) $id, 3, '0', STR_PAD_LEFT);
    }

    private function upload(Request $request, string $field, string $folder): ?string
    {
        if (!$request->hasFile($field)) return null;
        $file = $request->file($field);
        $name = Str::uuid().'.'.$file->getClientOriginalExtension();
        return $file->storeAs("products/$folder", $name, 'public');
    }

    private function saveGallery(Request $request, Product $product): void
    {
        foreach ($request->file('gallery_images', []) as $file) {
            $name = Str::uuid().'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('products/galleries', $name, 'public');
            $product->galleries()->create(['image' => $path]);
        }
    }

    private function deleteFile(?string $path): void
    {
        if ($path) Storage::disk('public')->delete($path);
    }
}
