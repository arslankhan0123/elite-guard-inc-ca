@extends('layouts.backend.main')
@section('title', 'Quote Requests')

@section('breadcrumbTitle', 'Quote Requests')

@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Quote Requests</li>
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
                                <th>Company</th>
                                <th>Service / Product</th>
                                <th>Type / Line</th>
                                <th>Country</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($quotes as $quote)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $quote->name }}</td>
                                <td>{{ $quote->company_name ?: 'Individual' }}</td>
                                <td>
                                    @if($quote->service)
                                        <span class="badge bg-success" style="font-size: 13px;">{{ $quote->service->name }}</span>
                                    @elseif($quote->product)
                                        <span class="badge bg-secondary" style="font-size: 13px;">{{ $quote->product->name }} (Product)</span>
                                    @else
                                        <span class="text-muted">Other / Not Listed</span>
                                    @endif
                                </td>
                                <td>
                                    @if($quote->property_type)
                                        {{ ucwords(str_replace('_', ' ', $quote->property_type)) }}
                                    @elseif($quote->business_line)
                                        {{ ucwords(str_replace('_', ' ', $quote->business_line)) }}
                                    @else
                                        Legacy Request
                                    @endif
                                </td>
                                <td>{{ $quote->country ?: '-' }}</td>
                                <td>{{ $quote->created_at->format('M d, Y') }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Quote Actions">
                                        <a class="text-decoration-none text-dark" href="{{ route('admin.quotes.show', $quote->id) }}" data-bs-toggle="tooltip" title="View Quote">
                                            <button class="view_btn me-2">
                                            </button>
                                        </a>
                                        <form action="{{ route('admin.quotes.destroy', $quote->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bin-button ml-1" data-bs-toggle="tooltip" title="Delete Quote" onclick="return confirm('Are you sure you want to delete this quote request?')">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
