@extends('layouts.backend.main')
@section('title','Edit Product')
@section('breadcrumbTitle','Products')
@section('breadcrumbs')<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li><li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li><li class="breadcrumb-item active">Edit</li>@endsection
@section('content')<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet"><div class="card border-0 rounded-4 shadow-sm"><div class="card-body p-4 p-md-5"><form action="{{ route('products.update',$product) }}" method="POST" enctype="multipart/form-data">@csrf @method('PUT') @include('admin.products._form')</form></div></div>@endsection
