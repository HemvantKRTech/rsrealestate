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
                    <h4> News</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('storenews') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <!-- Logo -->
                        
                
                        <!-- Site Title -->
                        <div class="mb-3">
                            <label for="site_title" class="form-label">News</label>
                            <input type="text" class="form-control" id="news" name="news" placeholder="Enter News" value="{{ old('site_title', $setting->site_title ?? '') }}">
                            @error('news')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status *</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        
                
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Save news</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h2>News Items</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>News</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($newsItems as $news)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $news->news }}</td>
                    <td>
                        <span class="badge {{ $news->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                            {{ ucfirst($news->status) }}
                        </span>
                    </td>
                    <td>
                        <!-- Toggle Status Button -->
                        <form action="{{ route('toggle.status', $news->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-warning btn-sm">
                                {{ $news->status == 'active' ? 'Deactivate' : 'Activate' }}
                            </button>
                        </form>
                        
                        <!-- Delete Button -->
                        <form action="{{ route('delete.news', $news->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
