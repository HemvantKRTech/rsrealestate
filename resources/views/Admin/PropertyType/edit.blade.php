@extends('Admin.dashboard')
@section('maincontent')

<div class="container mt-5">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="mb-4">Update Property Type</h3>
            <form action="{{ route('propertytype.update', $property->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <!-- Property Type Name -->
                <div class="form-group">
                    <label for="propertyName">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="propertyName" name="name" value="{{ old('name', $property->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
        
                <!-- Status -->
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                        <option value="">Select Status</option>
                        <option value="active" {{ old('status', $property->status) == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status', $property->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
        
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection


