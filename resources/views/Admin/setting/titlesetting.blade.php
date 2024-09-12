@extends('Admin.dashboard')

@section('maincontent')
<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Update Site Title</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.settings.siteTitle.store') }}" method="POST">
                        @csrf
                    
                        <!-- Site Title -->
                        <div class="mb-3">
                            <label for="site_title" class="form-label">Site Title</label>
                            <input type="text" class="form-control" id="site_title" name="site_title" placeholder="Enter site title" value="{{ old('site_title', $setting->site_title ?? '') }}">
                            @error('site_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="{{ old('address', $setting->address ?? '') }}">
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email', $setting->email ?? '') }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <!-- Mobile -->
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number" value="{{ old('mobile', $setting->mobile ?? '') }}">
                            @error('mobile')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <!-- Calling Mobile -->
                        <div class="mb-3">
                            <label for="calling_mobile" class="form-label">Calling Mobile</label>
                            <input type="text" class="form-control" id="calling_mobile" name="calling_mobile" placeholder="Enter calling mobile number" value="{{ old('calling_mobile', $setting->calling_mobile ?? '') }}">
                            @error('calling_mobile')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Save Settings</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
