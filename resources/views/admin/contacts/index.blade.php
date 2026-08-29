@extends('layouts.backend.main')
@section('title', 'Contact Messages')

@section('breadcrumbTitle', 'Contact Messages')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Contact Messages</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow-sm border-0" style="border-radius: 15px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0" id="custom-table">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ Str::limit($contact->subject, 30) }}</td>
                                <td>{{ $contact->created_at->format('M d, Y') }}</td>
                                <td>
                                    @if($contact->status == 'unread')
                                        <span class="badge bg-danger">Unread</span>
                                    @else
                                        <span class="badge bg-success">Read</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Service Actions">
                                        <a class="text-decoration-none text-dark" fdprocessedid="pxicc" href="{{ route('contacts.show', $contact->id) }}" data-bs-toggle="tooltip" title="View Message">
                                            <button class="view_btn me-2" fdprocessedid="pxicc">
                                            </button>
                                        </a>
                                        <a href="{{ route('contacts.destroy', $contact->id) }}" class="bin-button ml-1" data-bs-toggle="tooltip" title="Delete Service" onclick="return confirm('Are you sure you want to delete this service?')">
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
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
