@extends('layouts.backend.main')
@section('title', 'Edit Category')

@section('breadcrumbTitle', 'Service Categories')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
<li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<style>
    .form-card {
        border: none;
        border-radius: 20px;
        background: #ffffff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    .form-label {
        font-weight: 600;
        color: #475569;
        margin-bottom: 8px;
        font-size: 0.9rem;
    }

    .form-control,
    .form-select {
        border-radius: 12px;
        padding: 12px 16px;
        border: 1px solid #e2e8f0;
        transition: all 0.3s;
        background-color: #fcfdfe;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #7c3aed;
        box-shadow: 0 0 0 4px rgba(124, 58, 237, 0.1);
        background-color: #fff;
    }
</style>

<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12">
        <div class="card form-card shadow-sm">
            <div class="card-body p-4 p-md-5">
                <h4 class="mb-4 text-dark fw-bold"><i class="fas fa-edit text-primary me-2"></i> Edit Category</h4>
                
                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="form-label">Category Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="e.g. Landscaping" value="{{ old('name', $category->name) }}" required>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select shadow-none">
                            <option value="active" {{ old('status', $category->status) == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status', $category->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mt-5 pt-3 border-top text-end">
                        <a href="{{ route('categories.index') }}" class="btn btn-light rounded-pill px-4 me-2 fw-semibold">Cancel</a>
                        <button type="submit" class="btn btn-primary rounded-pill px-5 fw-bold shadow">
                            <i class="fas fa-save me-2"></i> Update Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
