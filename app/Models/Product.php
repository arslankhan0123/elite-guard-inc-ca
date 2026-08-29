<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'slug', 'sku', 'purchase_price', 'sale_price',
        'stock_quantity', 'short_description', 'long_description', 'feature_image', 'status',
    ];

    protected $casts = [
        'purchase_price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'stock_quantity' => 'integer',
    ];

    public function category() { return $this->belongsTo(Category::class); }
    public function galleries() { return $this->hasMany(ProductGallery::class); }

    public function getFeatureImageUrlAttribute(): ?string
    {
        if (! $this->feature_image) {
            return null;
        }

        return str_starts_with($this->feature_image, 'uploads/')
            ? asset($this->feature_image)
            : Storage::url($this->feature_image);
    }
}
