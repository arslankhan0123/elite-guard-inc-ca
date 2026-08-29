@extends('layouts.backend.main')
@section('title', 'Quote Request Details')

@section('breadcrumbTitle', 'Quote Request Details')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.quotes.index') }}">Quote Requests</a></li>
<li class="breadcrumb-item active">Details</li>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card shadow-sm border-0" style="border-radius: 20px; overflow: hidden;">
            <div class="card-header bg-primary text-white p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 text-white"><i class="fas fa-file-invoice me-2"></i> Quote Request Details</h5>
                    <span class="badge bg-info">
                        {{ ucfirst($quote->status) }}
                    </span>
                </div>
            </div>
            <div class="card-body p-4 p-md-5 bg-white">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Contact Name</label>
                        <h5 class="text-dark fw-bold">{{ $quote->name }}</h5>
                        @if($quote->company_name)<p class="mb-0 text-muted">{{ $quote->company_name }}</p>@endif
                    </div>
                    <div class="col-md-6 text-md-end">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Date Submitted</label>
                        <p class="text-dark">{{ $quote->created_at->format('M d, Y h:i A') }}</p>
                    </div>
                </div>

                <div class="row g-4 mb-4 pb-4 border-bottom">
                    <div class="col-md-3">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Email Address</label>
                        <p class="mb-0"><a href="mailto:{{ $quote->email }}" class="text-primary fw-semibold">{{ $quote->email }}</a></p>
                    </div>
                    <div class="col-md-3">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Phone Number</label>
                        <p class="mb-0 text-dark fw-semibold">{{ $quote->phone }}</p>
                    </div>
                    <div class="col-md-3">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Country / Delivery</label>
                        <p class="mb-0 text-dark fw-semibold">{{ $quote->country ?: '-' }}</p>
                    </div>
                    <div class="col-md-3">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Business Line</label>
                        <p class="mb-0 text-dark fw-semibold">{{ $quote->business_line ? ucwords(str_replace('_', ' ', $quote->business_line)) : 'Legacy Request' }}</p>
                    </div>
                </div>

                <div class="row g-4 mb-4 pt-2">
                    <div class="col-md-3">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Product</label>
                        <h5 class="text-dark fw-bold">{{ $quote->product?->name ?: 'Other / Not Listed' }}</h5>
                    </div>
                    <div class="col-md-3">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Condition</label>
                        <p class="mb-0 text-dark fw-semibold">{{ $quote->equipment_condition ? ucfirst($quote->equipment_condition) : '-' }}</p>
                    </div>
                    <div class="col-md-3">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Quantity</label>
                        <p class="mb-0 text-dark fw-semibold">{{ $quote->quantity ?: '-' }}</p>
                    </div>
                    <div class="col-md-3">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Required By</label>
                        <p class="mb-0 text-dark fw-semibold">{{ $quote->required_by?->format('M d, Y') ?: 'Not specified' }}</p>
                    </div>
                </div>

                <div class="mb-5 p-4 bg-light rounded-4">
                    <label class="text-muted small text-uppercase fw-bold mb-3 d-block">Product Specifications / Requirements</label>
                    <div class="text-dark" style="line-height: 1.8; white-space: pre-wrap;">{{ $quote->message }}</div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.quotes.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold">
                        <i class="fas fa-arrow-left me-2"></i> Back to List
                    </a>
                    
                    <form action="{{ route('admin.quotes.destroy', $quote->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this quote request?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-pill px-4 fw-bold">
                            <i class="fas fa-trash-alt me-2"></i> Delete Request
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
