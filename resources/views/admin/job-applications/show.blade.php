@extends('layouts.backend.main')
@section('title', 'Application Details')

@section('breadcrumbTitle', 'Application Details')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.applications.index') }}">Job Applications</a></li>
<li class="breadcrumb-item active">Details</li>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card shadow-sm border-0" style="border-radius: 20px; overflow: hidden;">
            <div class="card-header bg-primary text-white p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 text-white"><i class="fas fa-briefcase me-2"></i> Application Details</h5>
                    <span class="badge {{ $application->status == 'unread' ? 'bg-danger' : 'bg-success' }}">
                        {{ ucfirst($application->status) }}
                    </span>
                </div>
            </div>
            <div class="card-body p-4 p-md-5 bg-white">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Applicant Name</label>
                        <h5 class="text-dark fw-bold">{{ $application->name }}</h5>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Date Applied</label>
                        <p class="text-dark fw-semibold">{{ $application->created_at->format('M d, Y h:i A') }}</p>
                    </div>
                </div>

                <div class="row mb-4 pb-4 border-bottom">
                    <div class="col-md-4">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Email Address</label>
                        <p class="mb-0"><a href="mailto:{{ $application->email }}" class="text-primary fw-semibold">{{ $application->email }}</a></p>
                    </div>
                    <div class="col-md-4">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Phone Number</label>
                        <p class="mb-0 text-dark fw-semibold">{{ $application->phone ?: 'Not provided' }}</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <label class="text-muted small text-uppercase fw-bold mb-1">Applied For Job</label>
                        <p class="mb-0"><span class="badge bg-primary px-3 rounded-pill">{{ $application->career->title ?? 'Unknown Job' }}</span></p>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="text-muted small text-uppercase fw-bold mb-3 d-block">Resume / CV</label>
                    @if($application->cv_path)
                        <a href="{{ asset($application->cv_path) }}" target="_blank" class="btn btn-outline-primary rounded-pill px-4 fw-semibold">
                            <i class="fas fa-download me-2"></i> View / Download CV
                        </a>
                    @else
                        <p class="text-danger fw-semibold">No CV attached.</p>
                    @endif
                </div>

                @if($application->message)
                <div class="mb-5 p-4 bg-light rounded-4">
                    <label class="text-muted small text-uppercase fw-bold mb-3 d-block">Cover Letter / Message</label>
                    <div class="text-dark" style="line-height: 1.8; white-space: pre-wrap;">{{ $application->message }}</div>
                </div>
                @endif

                <div class="d-flex justify-content-between mt-5">
                    <a href="{{ route('admin.applications.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold">
                        <i class="fas fa-arrow-left me-2"></i> Back to List
                    </a>
                    
                    <form action="{{ route('admin.applications.destroy', $application->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this application?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger rounded-pill px-4 fw-bold">
                            <i class="fas fa-trash-alt me-2"></i> Delete Application
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
