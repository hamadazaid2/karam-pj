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
                    <h6 class="mb-4">Site Configuration Update</h6>
                    <form action="{{ route('site.config.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- File Input --}}
                        <div class="mb-3">
                            <label for="logoFile" class="form-label">Website Logo</label>
                            <input class="form-control bg-dark" type="file" id="logoFile"
                                value="{{ $data[0]->content }}" name="logo">
                            @error('logo')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Address --}}
                        <div class="mb-3">
                            <label for="addressInput" class="form-label">Address</label>
                            <input type="text" class="form-control" id="addressInput" value="{{ $data[1]->content }}"
                                name="address">
                            @error('address')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailInput" value="{{ $data[2]->content }}"
                                name="email">
                            @error('email')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Phone --}}
                        <div class="mb-3">
                            <label for="phoneInput" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phoneInput" value="{{ $data[3]->content }}"
                                name="phone">
                            @error('phone')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Linked In --}}
                        <div class="mb-3">
                            <label for="linkedInInput" class="form-label">Linked In URL</label>
                            <input type="url" class="form-control" id="linkedInInput" value="{{ $data[4]->content }}"
                                name="linkedIn">
                            @error('linkedIn')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Instagram --}}
                        <div class="mb-3">
                            <label for="instagramInput" class="form-label">Intgram URL</label>
                            <input type="url" class="form-control" id="instagramInput" value="{{ $data[5]->content }}"
                                name="instagram">
                            @error('instagram')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Twitter --}}
                        <div class="mb-3">
                            <label for="twitterInput" class="form-label">Twitter URL</label>
                            <input type="url" class="form-control" id="twitterInput" value="{{ $data[6]->content }}"
                                name="twitter">
                            @error('twitter')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Facebook --}}
                        <div class="mb-3">
                            <label for="facebookInput" class="form-label">Facebook URL</label>
                            <input type="url" class="form-control" id="facebookInput" value="{{ $data[7]->content }}"
                                name="facebook">
                            @error('facebook')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- App Store --}}
                        <div class="mb-3">
                            <label for="appStoreInput" class="form-label">App URL In App Store</label>
                            <input type="url" class="form-control" id="appStoreInput" value="{{ $data[8]->content }}"
                                name="appStore">
                            @error('appStore')
                                <small class="small-error-message">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Google Play --}}
                        <div class="mb-3">
                            <label for="googlePlayInput" class="form-label">App URL In Google Play</label>
                            <input type="url" class="form-control" id="googlePlayInput" value="{{ $data[9]->content }}"
                                name="googlePlay">
                            @error('googlePlay')
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
