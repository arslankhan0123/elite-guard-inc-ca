@extends('layouts.backend.main')
@section('title', 'Manage Categories')

@section('breadcrumbTitle', 'Category Directory')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="fw-bold mb-1">Service Categories</h4>
                        <p class="text-muted mb-0">Total of {{ $categories->count() }} registered categories.</p>
                    </div>
                    <a href="{{ route('categories.create') }}" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm">
                        <i data-feather="plus" class="me-1"></i> Add Category
                    </a>
                </div>

                <div class="table-responsive">
                    <table id="custom-table" class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th style="width: 80px;">Order</th>
                                <th>Category Name</th>
                                <th>Slug</th>
                                <th style="width: 120px;">Status</th>
                                <th class="text-center" style="width: 150px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr data-id="{{ $category->id }}">
                                <td>
                                    <span class="drag-handle" style="cursor: move; margin-right: 8px;">
                                        <i class="fas fa-grip-vertical text-muted"></i>
                                    </span>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <div class="fw-bold text-dark">{{ $category->name }}</div>
                                </td>
                                <td><span class="text-muted small">{{ $category->slug }}</span></td>
                                <td>
                                    @if($category->status == 'active')
                                        <span class="badge bg-soft-success text-success rounded-pill px-3 py-2"><i class="fas fa-check-circle me-1"></i> Active</span>
                                    @else
                                        <span class="badge bg-soft-danger text-danger rounded-pill px-3 py-2"><i class="fas fa-times-circle me-1"></i> Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Category Actions">
                                        <a class="text-decoration-none me-2 text-dark ml-1" href="{{ route('categories.edit', $category->id) }}" data-bs-toggle="tooltip" title="Edit Category">
                                            <button class="editBtn">
                                                <svg height="1em" viewBox="0 0 512 512">
                                                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                                </svg>
                                            </button>
                                        </a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bin-button ml-1" data-bs-toggle="tooltip" title="Delete Category" onclick="return confirm('Are you sure you want to delete this category?')">
                                                <svg class="bin-top" viewBox="0 0 39 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <line y1="5" x2="39" y2="5" stroke="white" stroke-width="4"></line>
                                                    <line x1="12" y1="1.5" x2="26.0357" y2="1.5" stroke="white" stroke-width="3"></line>
                                                </svg>
                                                <svg class="bin-bottom" viewBox="0 0 33 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <mask id="path-1-inside-1_8_19" fill="white">
                                                        <path d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z"></path>
                                                    </mask>
                                                    <path d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z" fill="white" mask="url(#path-1-inside-1_8_19)"></path>
                                                    <path d="M12 6L12 29" stroke="white" stroke-width="4"></path>
                                                    <path d="M21 6V29" stroke="white" stroke-width="4"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @if($categories->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="fas fa-folder-open fa-3x mb-3 d-block"></i>
                                        <span class="fw-semibold">No categories found.</span><br>
                                        Click the "Add Category" button to create your first category.
                                    </div>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
    $(document).ready(function() {
        const tbody = document.querySelector('#custom-table tbody');
        if (tbody) {
            new Sortable(tbody, {
                handle: '.drag-handle',
                animation: 150,
                onEnd: function() {
                    let order = [];
                    $('#custom-table tbody tr').each(function() {
                        let id = $(this).data('id');
                        if (id) {
                            order.push(id);
                        }
                    });

                    $.ajax({
                        url: "{{ route('categories.reorder') }}",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            order: order
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                toastr.success(response.message);
                                // Update loop numbers visually
                                $('#custom-table tbody tr').each(function(index) {
                                    $(this).find('td:first-child').html(
                                        `<span class="drag-handle" style="cursor: move; margin-right: 8px;">
                                            <i class="fas fa-grip-vertical text-muted"></i>
                                        </span>` + (index + 1)
                                    );
                                });
                            }
                        },
                        error: function(xhr) {
                            toastr.error('Something went wrong. Please try again.');
                        }
                    });
                }
            });
        }
    });
</script>
@endsection
