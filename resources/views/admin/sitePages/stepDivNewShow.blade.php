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
                    <h6 class="mb-4">Add New Step</h6>
                    <form action="{{ route('site.step.div.new.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- Header --}}
                        <div class="mb-3">
                            <label for="headerInput" class="form-label">Header</label>
                            <input type="text" class="form-control" id="headerInput" name="header">
                            @error('header')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Paragraph --}}
                        <div class="mb-3">
                            <label for="paragraphInput" class="form-label">Paragraph</label>
                            <input type="text" class="form-control" id="paragraphInput" name="paragraph">
                            @error('paragraph')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- File Input --}}
                        <div class="mb-3">
                            <label for="imgFile" class="form-label">Image</label>
                            <input class="form-control bg-dark" type="file" id="customerPhotoFile" name="img">
                            @error('img')
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
