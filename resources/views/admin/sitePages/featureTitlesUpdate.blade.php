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
                    <h6 class="mb-4">Feature Title Update</h6>
                    <form action="{{ route('site.feature.titles.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- Header --}}
                        <div class="mb-3">
                            <label for="headInput" class="form-label">Head</label>
                            <input type="text" class="form-control" id="headInput" value="{{ $data['header']->text }}"
                                name="head">
                            @error('head')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Paragraph --}}
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a header paragraph here" id="paragraphInput" style="height: 150px;"
                                name="paragraph">{{ $data['paragraph']->text }}</textarea>
                            <label for="paragraphInput">Paragraph</label>
                            @error('paragraph')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- File Input --}}
                        <div class="mb-3">
                            <label for="imgInput" class="form-label">Header Image</label>
                            <input class="form-control bg-dark" type="file" id="imgInput"
                                name="img">
                            @error('img')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>

                        <br>
                        {{--  --}}
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
