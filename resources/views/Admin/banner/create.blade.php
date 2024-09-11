<!-- resources/views/Admin/banner/create.blade.php -->

@extends('Admin.dashboard')

@section('maincontent')
<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form to Create a New Banner -->
    <h1>Create New Banner</h1>
    <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Banner Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Banner Name *</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Multiple Image Upload -->
        <div class="mb-3">
            <label for="images" class="form-label">Upload Images *</label>
            <input type="file" name="images[]" id="images" class="form-control @error('images') is-invalid @enderror" multiple required>
            @error('images')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Create Banner</button>
    </form>

    <hr>

    <!-- List of Banners -->
    <h2>Banners</h2>
    @if($banners->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Images</th>
                <th>Status</th> <!-- New Column for Status -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $banner->name }}</td>
                    <td>
                        @foreach(json_decode($banner->images) as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="banner image" style="width: 100px; height: 100px;">
                        @endforeach
                    </td>
                    <td>
                        <form action="{{ route('banners.updateStatus', $banner->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-sm {{ $banner->status === 'active' ? 'btn-success' : 'btn-secondary' }}">
                                {{ $banner->status === 'active' ? 'Active' : 'Inactive' }}
                            </button>
                        </form>
                    </td>
                    
                    <td>
                        <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this banner?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    

        <!-- Pagination Links -->
        {{ $banners->links() }}
    @else
        <p>No banners found.</p>
    @endif
</div>
@endsection
