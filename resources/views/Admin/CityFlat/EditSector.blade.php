<!-- resources/views/Admin/CityFlat/EditSector.blade.php -->

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
            <h3 class="mb-4">Edit Sector</h3>
            <form action="{{ route('sector.update', $sector->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- City Name -->
                <div class="form-group">
                    <label for="city">City</label>
                    <select class="form-control @error('city') is-invalid @enderror" id="city" name="city" required>
                        <option value="">Select City</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}" {{ $city->id == $sector->city_id ? 'selected' : '' }}>
                                {{ $city->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('city')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Sector Name -->
                <div class="form-group">
                    <label for="sectorName">Sector Name</label>
                    <input type="text" class="form-control @error('sectorname') is-invalid @enderror" id="sectorName" name="sectorname" value="{{ old('sectorname', $sector->name) }}" required>
                    @error('sectorname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
        
                <!-- Status -->
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                        <option value="">Select Status</option>
                        <option value="active" {{ $sector->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $sector->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
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
