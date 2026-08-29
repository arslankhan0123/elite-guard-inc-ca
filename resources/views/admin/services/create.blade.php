@extends('layouts.backend.main')
@section('title', 'Add New Service')

@section('breadcrumbTitle', 'Our Services')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></li>
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

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 20px 25px -5px rgba(109, 40, 217, 0.4);
    }

    .image-preview-container {
        border: 2px dashed #cbd5e1;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        background: #f8fafc;
        transition: all 0.3s;
        cursor: pointer;
    }

    .image-preview-container:hover {
        border-color: #7c3aed;
        background: #f5f3ff;
    }

    .note-editor.note-frame {
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        overflow: hidden;
    }

    .faq-item {
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 16px;
        position: relative;
        margin-bottom: 12px;
    }

    .faq-remove-btn {
        position: absolute;
        top: 10px;
        right: 12px;
        background: #fef2f2;
        border: none;
        color: #ef4444;
        border-radius: 50%;
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 13px;
    }
</style>

<div class="row justify-content-center">
    <div class="col-xl-12">
        <div class="card form-card shadow-sm">
            <div class="card-body p-4 p-md-5">
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-lg-8">
                            <h4 class="mb-4 text-dark fw-bold"><i class="fas fa-plus-circle text-primary me-2"></i> Create New Service</h4>
                            
                            <div class="mb-4">
                                <label class="form-label">Category <span class="text-danger">*</span></label>
                                <select name="category_id" class="form-select shadow-none" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Service Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. VIP Shadow Protection" value="{{ old('name') }}" required>
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Short Description</label>
                                <textarea name="short_description" class="form-control" rows="3" placeholder="Brief overview of the service...">{{ old('short_description') }}</textarea>
                                @error('short_description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Long Description (Rich Text)</label>
                                <textarea id="summernote" name="long_description">{{ old('long_description') }}</textarea>
                                @error('long_description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="p-3 bg-light rounded-4 mb-4">
                                <h6 class="fw-bold mb-3">Service Settings</h6>
                                
                                <div class="mb-4">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select shadow-none">
                                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Feature Image</label>
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

                            <div class="p-3 bg-light rounded-4">
                                <h6 class="fw-bold mb-3">Gallery Images</h6>
                                <label class="form-label">Select Multiple Images</label>
                                <input type="file" name="gallery_images[]" class="form-control" multiple accept="image/*" id="galleryImagesInput">
                                <div id="galleryPreviewContainer" class="row g-2 mt-2">
                                    <!-- Gallery previews will appear here -->
                                </div>
                                @error('gallery_images.*') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Service Highlights Section (max 3) --}}
                    <div class="mt-4 p-4 bg-light rounded-4">
                        <h6 class="fw-bold mb-3"><i class="fas fa-star text-warning me-2"></i>Service Highlights <small class="text-muted fw-normal">(Max 3)</small></h6>
                        @for($i = 1; $i <= 3; $i++)
                        <div class="faq-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-primary rounded-circle me-2" style="width:28px;height:28px;line-height:28px;text-align:center;">{{ sprintf('%02d', $i) }}</span>
                                <span class="fw-semibold text-dark">Highlight {{ $i }}</span>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Title</label>
                                <input type="text" name="highlight_title[]" class="form-control" placeholder="e.g. Increased Customer Satisfaction">
                            </div>
                            <div>
                                <label class="form-label">Description</label>
                                <textarea name="highlight_description[]" class="form-control" rows="2" placeholder="Short description..."></textarea>
                            </div>
                        </div>
                        @endfor
                    </div>

                    {{-- FAQ Section --}}
                    <div class="mt-4 p-4 bg-light rounded-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h6 class="fw-bold mb-0"><i class="fas fa-question-circle text-primary me-2"></i>Frequently Asked Questions</h6>
                            <button type="button" class="btn btn-sm btn-primary rounded-pill px-3" id="addFaqBtn">
                                <i class="fas fa-plus me-1"></i> Add Question
                            </button>
                        </div>
                        <div id="faqContainer">
                            {{-- FAQ items will be added here --}}
                        </div>
                        <p class="text-muted small mb-0" id="faqEmptyMsg"><i class="fas fa-info-circle me-1"></i> Click "Add Question" to add FAQs for this service.</p>
                    </div>

                    <div class="mt-5 pt-3 border-top text-end">
                        <a href="{{ route('services.index') }}" class="btn btn-light rounded-pill px-4 me-2 fw-semibold">Cancel</a>
                        <button type="submit" class="btn btn-primary rounded-pill px-5 fw-bold shadow">
                            <i class="fas fa-save me-2"></i> Save Service
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
            placeholder: 'Write detailed information about this security service...',
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

        // Gallery Images Preview
        $('#galleryImagesInput').change(function() {
            $('#galleryPreviewContainer').empty();
            if (this.files) {
                Array.from(this.files).forEach(file => {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        let html = `
                            <div class="col-4">
                                <div class="ratio ratio-1x1 border rounded-3 overflow-hidden bg-white">
                                    <img src="${event.target.result}" style="object-fit: cover;">
                                </div>
                            </div>
                        `;
                        $('#galleryPreviewContainer').append(html);
                    }
                    reader.readAsDataURL(file);
                });
            }
        });

        // Dynamic FAQ
        let faqCount = 0;
        $('#addFaqBtn').on('click', function() {
            faqCount++;
            $('#faqEmptyMsg').hide();
            const html = `
                <div class="faq-item" id="faq-row-${faqCount}">
                    <button type="button" class="faq-remove-btn" onclick="removeFaqRow(${faqCount})"><i class="fas fa-times"></i></button>
                    <div class="mb-2">
                        <label class="form-label">Question</label>
                        <input type="text" name="faq_question[]" class="form-control" placeholder="e.g. What is included in this service?">
                    </div>
                    <div>
                        <label class="form-label">Answer</label>
                        <textarea name="faq_answer[]" class="form-control" rows="3" placeholder="Your detailed answer..."></textarea>
                    </div>
                </div>
            `;
            $('#faqContainer').append(html);
        });
    });

    function removeFaqRow(id) {
        $('#faq-row-' + id).remove();
        if ($('#faqContainer .faq-item').length === 0) {
            $('#faqEmptyMsg').show();
        }
    }
</script>
@endsection