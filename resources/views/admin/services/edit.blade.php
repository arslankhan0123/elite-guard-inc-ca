@extends('layouts.backend.main')
@section('title', 'Edit Service')

@section('breadcrumbTitle', 'Update Service')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></li>
<li class="breadcrumb-item active">Edit</li>
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

    .gallery-item {
        position: relative;
    }

    .gallery-item .delete-btn {
        position: absolute;
        top: 5px;
        right: 5px;
        background: rgba(255, 0, 0, 0.8);
        color: white;
        border-radius: 50%;
        width: 25px;
        height: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        opacity: 0;
        transition: 0.3s;
        border: none;
    }

    .gallery-item:hover .delete-btn {
        opacity: 1;
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
                <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Using POST because the user's web.php might only have POST for store/update or maybe they want to use spoofing -->
                    @method('POST') 
                    
                    <div class="row">
                        <div class="col-lg-8">
                            <h4 class="mb-4 text-dark fw-bold"><i class="fas fa-edit text-primary me-2"></i> Update Service Details</h4>
                            
                            <div class="mb-4">
                                <label class="form-label">Category <span class="text-danger">*</span></label>
                                <select name="category_id" class="form-select shadow-none" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id', $service->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Service Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="e.g. VIP Shadow Protection" value="{{ old('name', $service->name) }}" required>
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Short Description</label>
                                <textarea name="short_description" class="form-control" rows="3" placeholder="Brief overview of the service...">{{ old('short_description', $service->short_description) }}</textarea>
                                @error('short_description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Long Description (Rich Text)</label>
                                <textarea id="summernote" name="long_description">{{ old('long_description', $service->long_description) }}</textarea>
                                @error('long_description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="p-3 bg-light rounded-4 mb-4">
                                <h6 class="fw-bold mb-3">Service Settings</h6>
                                
                                <div class="mb-4">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select shadow-none">
                                        <option value="active" {{ old('status', $service->status) == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ old('status', $service->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Feature Image</label>
                                    <input type="file" name="feature_image" class="form-control" accept="image/*" id="featureImageInput">
                                    <div class="mt-2 text-center border rounded-3 p-2 bg-white" style="min-height: 100px; display: flex; align-items: center; justify-content: center;">
                                        @if($service->feature_image)
                                            <img id="featureImagePreview" src="{{ asset($service->feature_image) }}" alt="Preview" style="max-width: 100%; max-height: 150px; border-radius: 8px;">
                                            <div id="featureImagePlaceholder" class="text-muted small" style="display: none;">
                                                <i class="fas fa-image fa-2x mb-2 d-block"></i>
                                                Select an image
                                            </div>
                                        @else
                                            <img id="featureImagePreview" src="#" alt="Preview" style="max-width: 100%; max-height: 150px; display: none; border-radius: 8px;">
                                            <div id="featureImagePlaceholder" class="text-muted small">
                                                <i class="fas fa-image fa-2x mb-2 d-block"></i>
                                                Select an image
                                            </div>
                                        @endif
                                    </div>
                                    @error('feature_image') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="p-3 bg-light rounded-4">
                                <h6 class="fw-bold mb-3">Gallery Management</h6>
                                
                                <div class="mb-3">
                                    <label class="form-label">Add More Images</label>
                                    <input type="file" name="gallery_images[]" class="form-control" multiple accept="image/*" id="galleryImagesInput">
                                </div>

                                <div id="currentGallery" class="row g-2 mb-3">
                                    @foreach($service->galleries as $gallery)
                                        <div class="col-4 gallery-item" id="gallery-{{ $gallery->id }}">
                                            <div class="ratio ratio-1x1 border rounded-3 overflow-hidden bg-white">
                                                <img src="{{ asset($gallery->image) }}" style="object-fit: cover;">
                                            </div>
                                            <button type="button" class="delete-btn" onclick="deleteGalleryImage({{ $gallery->id }})">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>

                                <div id="galleryPreviewContainer" class="row g-2">
                                    <!-- New gallery previews will appear here -->
                                </div>
                                @error('gallery_images.*') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Service Highlights Section (max 3) --}}
                    <div class="mt-4 p-4 bg-light rounded-4">
                        <h6 class="fw-bold mb-3"><i class="fas fa-star text-warning me-2"></i>Service Highlights <small class="text-muted fw-normal">(Max 3)</small></h6>
                        @for($i = 0; $i < 3; $i++)
                        @php $highlight = $service->highlights->get($i); @endphp
                        <div class="faq-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-primary rounded-circle me-2" style="width:28px;height:28px;line-height:28px;text-align:center;">{{ sprintf('%02d', $i + 1) }}</span>
                                <span class="fw-semibold text-dark">Highlight {{ $i + 1 }}</span>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Title</label>
                                <input type="text" name="highlight_title[]" class="form-control"
                                    placeholder="e.g. Increased Customer Satisfaction"
                                    value="{{ $highlight->title ?? '' }}">
                            </div>
                            <div>
                                <label class="form-label">Description</label>
                                <textarea name="highlight_description[]" class="form-control" rows="2"
                                    placeholder="Short description...">{{ $highlight->description ?? '' }}</textarea>
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

                        {{-- Existing FAQs --}}
                        <div id="existingFaqContainer">
                            @foreach($service->faqs as $faq)
                            <div class="faq-item" id="saved-faq-{{ $faq->id }}">
                                <button type="button" class="faq-remove-btn" onclick="deleteSavedFaq({{ $faq->id }})">
                                    <i class="fas fa-times"></i>
                                </button>
                                <div class="mb-2">
                                    <label class="form-label">Question</label>
                                    <input type="text" class="form-control" value="{{ $faq->question }}" disabled style="background:#f8f9fa;">
                                </div>
                                <div>
                                    <label class="form-label">Answer</label>
                                    <textarea class="form-control" rows="2" disabled style="background:#f8f9fa;">{{ $faq->answer }}</textarea>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        {{-- New FAQs --}}
                        <div id="faqContainer"></div>
                        <p class="text-muted small mb-0" id="faqEmptyMsg" {{ $service->faqs->count() > 0 ? 'style=display:none' : '' }}>
                            <i class="fas fa-info-circle me-1"></i> Click "Add Question" to add FAQs.
                        </p>
                    </div>

                    <div class="mt-5 pt-3 border-top text-end">
                        <a href="{{ route('services.index') }}" class="btn btn-light rounded-pill px-4 me-2 fw-semibold">Cancel</a>
                        <button type="submit" class="btn btn-primary rounded-pill px-5 fw-bold shadow">
                            <i class="fas fa-save me-2"></i> Update Service
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery and Summernote JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
                                <div class="ratio ratio-1x1 border rounded-3 overflow-hidden bg-white shadow-sm" style="border-style: dashed !important; border-color: #7c3aed !important;">
                                    <img src="${event.target.result}" style="object-fit: cover; opacity: 0.7;">
                                </div>
                            </div>
                        `;
                        $('#galleryPreviewContainer').append(html);
                    }
                    reader.readAsDataURL(file);
                });
            }
        });
    });

    function deleteGalleryImage(id) {
        if (confirm('Are you sure you want to delete this gallery image?')) {
            $.ajax({
                url: `/services/gallery/delete/${id}`,
                type: 'DELETE',
                data: { _token: '{{ csrf_token() }}' },
                success: function(response) {
                    if (response.success) {
                        $(`#gallery-${id}`).fadeOut(300, function() { $(this).remove(); });
                    }
                },
                error: function() { alert('Error deleting image. Please try again.'); }
            });
        }
    }

    function deleteSavedFaq(id) {
        if (confirm('Are you sure you want to delete this FAQ?')) {
            $.ajax({
                url: `/services/faq/delete/${id}`,
                type: 'DELETE',
                data: { _token: '{{ csrf_token() }}' },
                success: function(response) {
                    if (response.success) {
                        $(`#saved-faq-${id}`).fadeOut(300, function() { $(this).remove(); });
                    }
                },
                error: function() { alert('Error deleting FAQ. Please try again.'); }
            });
        }
    }

    // Dynamic new FAQ rows
    let faqCount = 0;
    $(document).ready(function() {
        $('#addFaqBtn').on('click', function() {
            faqCount++;
            $('#faqEmptyMsg').hide();
            const html = `
                <div class="faq-item" id="faq-row-${faqCount}">
                    <button type="button" class="faq-remove-btn" onclick="removeFaqRow(${faqCount})"><i class="fas fa-times"></i></button>
                    <div class="mb-2">
                        <label class="form-label">Question</label>
                        <input type="text" name="faq_question[]" class="form-control" placeholder="e.g. What is included?">
                    </div>
                    <div>
                        <label class="form-label">Answer</label>
                        <textarea name="faq_answer[]" class="form-control" rows="3" placeholder="Your answer..."></textarea>
                    </div>
                </div>
            `;
            $('#faqContainer').append(html);
        });
    });

    function removeFaqRow(id) {
        $(`#faq-row-${id}`).remove();
        if ($('#faqContainer .faq-item').length === 0 && $('#existingFaqContainer .faq-item').length === 0) {
            $('#faqEmptyMsg').show();
        }
    }
</script>
@endsection
