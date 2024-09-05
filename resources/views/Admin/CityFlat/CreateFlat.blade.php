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
            <h3 class="mb-4">Add New Sector</h3>
            <form action="{{ route('sector.store') }}" method="POST">
                @csrf
        
                <!-- City Name -->
                <div class="form-group">
                    <label for="cityName">City Name</label>
                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="city"  value="{{ old('city') }}" required>
                        <option value="">Select City</option>
                        @foreach ($city as $item)
                        <option value=" {{ $item->id}}">{{$item->name}}</option>
                        @endforeach
                        
                       
                    </select>
                    @error('city')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <!-- Status -->
                <div class="form-group">
                    <label for="status">Sector Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="cityName" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status') }}" required>
                        <option value="">Select Status</option>
                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
        
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection


