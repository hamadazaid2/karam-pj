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
                    <h6 class="mb-4">Add New About Div</h6>
                    <form action="{{ route('site.about.div.new.store') }}" method="POST">
                        @csrf
                        {{-- Span --}}
                        <div class="mb-3">
                            <label for="spanInput" class="form-label">Span</label>
                            <input type="text" class="form-control" id="spanInput"
                                name="span">
                            @error('span')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Header --}}
                        <div class="mb-3">
                            <label for="headerInput" class="form-label">Header</label>
                            <input type="text" class="form-control" id="headerInput"
                                name="header">
                            @error('header')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Paragraph --}}
                        <div class="mb-3">
                            <label for="paragraphInput" class="form-label">Paragraph</label>
                            <input type="text" class="form-control" id="paragraphInput"
                                name="paragraph">
                            @error('paragraph')
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
