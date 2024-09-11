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
                        <div class="mb-3">
                            <label for="site_title" class="form-label">Site Title</label>
                            <input type="text" class="form-control" id="site_title" name="site_title" placeholder="Enter site title" value="{{ old('site_title', $setting->site_title ?? '') }}">
                            @error('site_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save Title</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
