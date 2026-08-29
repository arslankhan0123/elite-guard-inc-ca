@extends('layouts.frontend.main')
@section('title', $product->name)

@section('content')
<style>
    .product-breadcrumb{padding:38px 0 0}.product-breadcrumb__inner{position:relative;min-height:280px;padding:52px 56px;border-radius:18px;overflow:hidden;background-position:center;background-size:cover;display:flex;flex-direction:column;justify-content:flex-end}.product-breadcrumb__inner:before{content:"";position:absolute;inset:0;background:linear-gradient(90deg,rgba(0,26,25,.92),rgba(0,26,25,.5));z-index:0}.product-breadcrumb__inner>*{position:relative;z-index:1}.product-breadcrumb__list{display:flex;align-items:center;flex-wrap:wrap;gap:10px;margin:0 0 16px;padding:0;list-style:none}.product-breadcrumb__list,.product-breadcrumb__list a{color:rgba(255,255,255,.8);font-size:14px}.product-breadcrumb__list i{font-size:10px}.product-breadcrumb__title{max-width:850px;margin:0;color:#fff;font-size:clamp(36px,4.2vw,62px);line-height:1.08;letter-spacing:-1.5px}.product-details{padding:70px 0 90px}.product-media{overflow:hidden;border-radius:16px;background:#eef2f1}.product-media>img{display:block;width:100%;height:clamp(330px,36vw,520px);object-fit:cover}.product-gallery img{width:100%;height:110px;object-fit:cover;border-radius:10px}.product-copy{padding-left:12px}.product-category{display:inline-flex;align-items:center;gap:8px;color:#34a853;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.08em}.product-category:before{content:"";width:22px;height:2px;background:#34a853}.product-title{margin:16px 0 14px;color:#002524;font-size:clamp(34px,4vw,54px);line-height:1.08;letter-spacing:-1px}.product-sku{display:inline-block;margin-bottom:22px;padding:7px 13px;border-radius:6px;background:#f1f5f4;color:#5c6867;font-size:13px}.product-summary{max-width:650px;color:#5d6867;font-size:17px;line-height:1.75}.product-status-card{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px;margin:28px 0}.product-status-item{padding:18px 20px;border:1px solid rgba(0,37,36,.09);border-radius:10px;background:#fff}.product-status-item small{display:block;margin-bottom:4px;color:#7a8584;font-size:12px;text-transform:uppercase;letter-spacing:.06em}.product-status-item strong{color:#002524;font-size:17px}.product-description{margin-top:58px;padding-top:45px;border-top:1px solid rgba(0,37,36,.1)}.product-description h2{margin-bottom:20px;color:#002524;font-size:34px}.product-description__body{max-width:900px;color:#586665;font-size:17px;line-height:1.85}.product-sidebar{position:sticky;top:110px;padding:28px;border-radius:14px;background:#002524}.product-sidebar h3{margin-bottom:18px;color:#fff;font-size:22px}.product-sidebar ul{margin:0;padding:0;list-style:none}.product-sidebar li+li{border-top:1px solid rgba(255,255,255,.1)}.product-sidebar a{display:flex;align-items:center;justify-content:space-between;gap:15px;padding:14px 0;color:rgba(255,255,255,.78);font-size:15px}.product-sidebar a:hover{color:#72ed4f}.product-sidebar a i{font-size:12px}.product-help{margin-top:22px;padding-top:22px;border-top:1px solid rgba(255,255,255,.12)}.product-help p{color:rgba(255,255,255,.65);font-size:14px;line-height:1.6}.product-help .rts-btn{width:100%;justify-content:center;padding:13px 20px}.product-empty-image{height:440px;display:flex;align-items:center;justify-content:center;color:#8a9695;font-size:50px}@media(max-width:991px){.product-copy{padding-left:0}.product-sidebar{position:static;margin-top:10px}.product-breadcrumb__inner{min-height:240px;padding:40px}.product-details{padding-top:55px}}@media(max-width:575px){.product-breadcrumb{padding-top:20px}.product-breadcrumb__inner{min-height:210px;padding:28px 24px}.product-breadcrumb__title{font-size:34px}.product-details{padding:42px 0 65px}.product-media>img{height:290px}.product-status-card{grid-template-columns:1fr}.product-description{margin-top:40px;padding-top:34px}}
</style>

<section class="product-breadcrumb">
    <div class="container-1428">
        <div class="product-breadcrumb__inner" @if($product->feature_image) style="background-image:url('{{ $product->feature_image_url }}')" @endif>
            <ul class="product-breadcrumb__list">
                <li><a href="{{ route('home') }}">Home</a></li><li><i class="fa-solid fa-chevron-right"></i></li><li>Products</li><li><i class="fa-solid fa-chevron-right"></i></li><li>{{ $product->category?->name }}</li>
            </ul>
            <h1 class="product-breadcrumb__title">{{ $product->name }}</h1>
        </div>
    </div>
</section>

<section class="product-details">
    <div class="container-1428">
        <div class="row g-5 align-items-start">
            <div class="col-lg-8">
                <div class="row g-4 align-items-center">
                    <div class="col-md-7">
                        <div class="product-media">
                            @if($product->feature_image)<img src="{{ $product->feature_image_url }}" alt="{{ $product->name }}">@else<div class="product-empty-image"><i class="fa-regular fa-image"></i></div>@endif
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="product-copy">
                            <span class="product-category">{{ $product->category?->name }}</span>
                            <h2 class="product-title">{{ $product->name }}</h2>
                            @if($product->sku)<span class="product-sku">SKU: {{ $product->sku }}</span>@endif
                            @if($product->short_description)<p class="product-summary">{{ $product->short_description }}</p>@endif
                            <div class="product-status-card">
                                <div class="product-status-item"><small>Pricing</small><strong>{{ $product->sale_price > 0 ? number_format($product->sale_price, 2) : 'Price on Request' }}</strong></div>
                                <div class="product-status-item"><small>Availability</small><strong>{{ $product->stock_quantity > 0 ? 'In Stock' : 'Contact for Availability' }}</strong></div>
                            </div>
                            <a href="{{ route('quote', ['product' => $product->id]) }}" class="rts-btn btn-primary">Request a Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                @if($product->long_description)
                    <div class="product-description">
                        <span class="product-category">Product Overview</span>
                        <h2>About This Product</h2>
                        <div class="product-description__body">{!! nl2br(str_replace('\n', "\n", $product->long_description)) !!}</div>
                    </div>
                @endif

                @if($product->galleries->isNotEmpty())
                    <div class="row g-3 product-gallery mt-4">@foreach($product->galleries as $gallery)<div class="col-6 col-md-4"><img src="{{ Storage::url($gallery->image) }}" alt="{{ $product->name }}"></div>@endforeach</div>
                @endif
            </div>

            <div class="col-lg-4">
                <aside class="product-sidebar">
                    <h3>Related Products</h3>
                    <ul>@forelse($relatedProducts as $relatedProduct)<li><a href="{{ route('products.details', $relatedProduct->id) }}"><span>{{ $relatedProduct->name }}</span><i class="fa-solid fa-arrow-right"></i></a></li>@empty<li><span class="text-white-50">More products coming soon.</span></li>@endforelse</ul>
                    <div class="product-help">
                        <h3>Need Sourcing Help?</h3>
                        <p>Share your specifications, quantity and delivery location for a tailored quotation.</p>
                        <a href="{{ route('quote', ['product' => $product->id]) }}" class="rts-btn btn-primary">Get a Quote <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<!-- @include('frontend.shared.company-cta') -->
@endsection
