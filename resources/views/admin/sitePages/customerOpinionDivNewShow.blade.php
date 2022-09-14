@extends('admin.layout.layout')
@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Add New Customer Opinion</h6>
                    <form action="{{ route('site.customer-opinion.div.new.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- File Input --}}
                        <div class="mb-3">
                            <label for="customerPhotoFile" class="form-label">Customer Photo</label>
                            <input class="form-control bg-dark" type="file" id="customerPhotoFile" name="customerPhoto">
                            @error('customerPhoto')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Span --}}
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameInput" name="name">
                            @error('name')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Header --}}
                        <div class="mb-3">
                            <label for="jobTitleInput" class="form-label">Job Title</label>
                            <input type="text" class="form-control" id="jobTitleInput" name="jobTitle">
                            @error('jobTitle')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Opinion --}}
                        <div class="mb-3">
                            <label for="opinionInput" class="form-label">Paragraph</label>
                            <input type="text" class="form-control" id="opinionInput" name="opinion">
                            @error('opinion')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
