@extends('layouts.backend.main')
@section('title', 'Add New Career')

@section('breadcrumbTitle', 'Career Opportunities')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('careers.index') }}">Careers</a></li>
<li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
<!-- Include Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

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

    .btn-submit {
        background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%);
        color: white;
        border-radius: 12px;
        padding: 14px 45px;
        font-weight: 700;
        border: none;
        transition: all 0.3s;
        box-shadow: 0 10px 15px -3px rgba(109, 40, 217, 0.3);
    }

    .note-editor.note-frame {
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        overflow: hidden;
    }
</style>

<div class="row justify-content-center">
    <div class="col-xl-12">
        <div class="card form-card shadow-sm">
            <div class="card-body p-4 p-md-5">
                <form action="{{ route('careers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-lg-8">
                            <h4 class="mb-4 text-dark fw-bold"><i class="fas fa-plus-circle text-primary me-2"></i> Create New Career Listing</h4>
                            
                            <div class="mb-4">
                                <label class="form-label">Job Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" placeholder="e.g. Business Strategy Consultant" value="{{ old('title') }}" required>
                                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Job Type (e.g. Full-time)</label>
                                    <input type="text" name="job_type" class="form-control" placeholder="e.g. Full time job" value="{{ old('job_type') }}">
                                    @error('job_type') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Category (e.g. On-site)</label>
                                    <input type="text" name="category" class="form-control" placeholder="e.g. On site / Remote" value="{{ old('category') }}">
                                    @error('category') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Salary Range</label>
                                    <input type="text" name="salary" class="form-control" placeholder="e.g. $400 - $550" value="{{ old('salary') }}">
                                    @error('salary') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Salary Unit</label>
                                    <input type="text" name="salary_unit" class="form-control" placeholder="e.g. week / month" value="{{ old('salary_unit', 'week') }}">
                                    @error('salary_unit') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Location</label>
                                <input type="text" name="location" class="form-control" placeholder="e.g. London, UK" value="{{ old('location') }}">
                                @error('location') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Short Description</label>
                                <textarea name="short_description" class="form-control" rows="3" placeholder="Brief overview of the vacancy...">{{ old('short_description') }}</textarea>
                                @error('short_description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Job Details (Rich Text)</label>
                                <textarea id="summernote" name="description">{{ old('description') }}</textarea>
                                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="p-3 bg-light rounded-4 mb-4">
                                <h6 class="fw-bold mb-3">Job Settings</h6>
                                
                                <div class="mb-4">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select shadow-none">
                                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <div class="mb-4 d-flex align-items-center">
                                    <div class="form-check form-switch card-radio-custom">
                                        <input class="form-check-input" type="checkbox" name="is_urgent" id="is_urgent" {{ old('is_urgent') ? 'checked' : '' }}>
                                        <label class="form-check-label fw-bold ms-2" for="is_urgent">Mark as Urgent</label>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Job Icon / Feature Image</label>
                                    <input type="file" name="feature_image" class="form-control" accept="image/*" id="featureImageInput">
                                    <div class="mt-2 text-center border rounded-3 p-2 bg-white" style="min-height: 100px; display: flex; align-items: center; justify-content: center;">
                                        <img id="featureImagePreview" src="#" alt="Preview" style="max-width: 100%; max-height: 150px; display: none; border-radius: 8px;">
                                        <div id="featureImagePlaceholder" class="text-muted small">
                                            <i class="fas fa-image fa-2x mb-2 d-block"></i>
                                            Select an image
                                        </div>
                                    </div>
                                    @error('feature_image') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 pt-3 border-top text-end">
                        <a href="{{ route('careers.index') }}" class="btn btn-light rounded-pill px-4 me-2 fw-semibold">Cancel</a>
                        <button type="submit" class="btn btn-primary rounded-pill px-5 fw-bold shadow">
                            <i class="fas fa-save me-2"></i> Save Career
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery and Summernote JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Summernote
        $('#summernote').summernote({
            placeholder: 'Write detailed information about this job vacancy...',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        // Feature Image Preview
        $('#featureImageInput').change(function() {
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    $('#featureImagePreview').attr('src', event.target.result).show();
                    $('#featureImagePlaceholder').hide();
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>
@endsection
