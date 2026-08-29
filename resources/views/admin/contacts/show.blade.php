@extends('layouts.backend.main')
@section('title', 'Message Details')

@section('breadcrumbTitle', 'Message Details')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('contacts.index') }}">Contact Messages</a></li>
<li class="breadcrumb-item active">Details</li>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card shadow-sm border-0" style="border-radius: 20px; overflow: hidden;">
            <div class="card-header bg-primary text-white p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 text-white"><i class="fas fa-envelope me-2"></i> Message Details</h5>
                    <span class="badge {{ $contact->status == 'unread' ? 'bg-danger' : 'bg-success' }}">
                        {{ ucfirst($contact->status) }}
                    </span>
                </div>
            </div>
            <div class="card-body p-4 p-md-5 bg-white">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="text-muted small text-uppercase fw-bold mb-1">From</label>
                        <h5 class="text-dark fw-bold">{{ $contact->name }}</h5>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Date Received</label>
                        <p class="text-dark">{{ $contact->created_at->format('M d, Y h:i A') }}</p>
                    </div>
                </div>

                <div class="row mb-4 pb-4 border-bottom">
                    <div class="col-md-6">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Email Address</label>
                        <p class="mb-0"><a href="mailto:{{ $contact->email }}" class="text-primary fw-semibold">{{ $contact->email }}</a></p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Phone Number</label>
                        <p class="mb-0 text-dark fw-semibold">{{ $contact->phone }}</p>
                    </div>
                </div>

                <div class="mb-4 pt-2">
                    <label class="text-muted small text-uppercase fw-bold mb-1">Subject</label>
                    <h5 class="text-dark fw-bold">{{ $contact->subject }}</h5>
                </div>

                <div class="mb-5 p-4 bg-light rounded-4">
                    <label class="text-muted small text-uppercase fw-bold mb-3 d-block">Message Content</label>
                    <div class="text-dark" style="line-height: 1.8; white-space: pre-wrap;">{{ $contact->message }}</div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold">
                        <i class="fas fa-arrow-left me-2"></i> Back to List
                    </a>
                    
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="GET" onsubmit="return confirm('Are you sure you want to delete this message?')">
                        @csrf
                        <button type="submit" class="btn btn-danger rounded-pill px-4 fw-bold">
                            <i class="fas fa-trash-alt me-2"></i> Delete Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
