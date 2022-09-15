@extends('admin.layout.layout')
@section('title')
Update Customer Opinion
@endsection
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
                    <h6 class="mb-4">Edit Customer Opinion</h6>
                    <form action="{{ route('site.customer-opinion.div.update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        {{-- ID --}}
                        <div class="mb-3" style="display: none">
                            <label for="IdInput" class="form-label">ID</label>
                            <input type="text" class="form-control" id="IdInput" value="{{ $div->id }}"
                                name="id">
                            @error('id')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- File Input --}}
                        <div class="mb-3">
                            <label for="customerPhotoFile" class="form-label">Customer Photo</label>
                            <input class="form-control bg-dark" type="file" id="customerPhotoFile" name="customerPhoto" value="{{ $div->img }}">
                            @error('customerPhoto')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Name --}}
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameInput" value="{{ $div->name }}"
                                name="name">
                            @error('name')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Job Title --}}
                        <div class="mb-3">
                            <label for="jobTitleInput" class="form-label">Job Title</label>
                            <input type="text" class="form-control" id="jobTitleInput" value="{{ $div->job_title }}"
                                name="jobTitle">
                            @error('header')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Opinion --}}
                        <div class="mb-3">
                            <label for="opinionInput" class="form-label">Opinion</label>
                            <textarea class="form-control" placeholder="Leave Your Opinion Here" id="opinionInput" style="height: 150px;"
                                name="opinion">{{ $div->opinion }}</textarea>
                            @error('opinion')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
