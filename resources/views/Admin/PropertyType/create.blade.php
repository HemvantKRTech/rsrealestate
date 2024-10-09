@extends('Admin.dashboard')
@section('maincontent')

<div class="container mt-5">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row">
        <!-- Add Property Type Form -->
        <div class="col-md-6">
            <h3 class="mb-4">Add New Property Type</h3>
            <form action="{{ route('propertytype.store') }}" method="POST">
                @csrf
                <!-- Property Type Name -->
                <div class="form-group">
                    <label for="propertyName">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="propertyName" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Property Type Status -->
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
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

        <!-- Add Subproperty Type Form -->
        <div class="col-md-6">
            <h3 class="mb-4">Add New Subproperty Type</h3>
            <form action="{{ route('subpropertytype.store') }}" method="POST">
                @csrf
                <!-- Subproperty Type Name -->
                <div class="form-group">
                    <label for="subpropertyName">Subproperty Name</label>
                    <input type="text" class="form-control @error('subproperty_name') is-invalid @enderror" id="subpropertyName" name="subproperty_name" value="{{ old('subproperty_name') }}" required>
                    @error('subproperty_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Property Type Dropdown -->
                <div class="form-group">
                    <label for="propertyType">Property Type</label>
                    <select class="form-control @error('property_type_id') is-invalid @enderror" id="propertyType" name="property_type_id" required>
                        <option value="">Select Property Type</option>
                        @foreach($propertyTypes as $propertyType)
                            <option value="{{ $propertyType->id }}" {{ old('property_type_id') == $propertyType->id ? 'selected' : '' }}>
                                {{ $propertyType->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('property_type_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Subproperty Type Status -->
                <div class="form-group">
                    <label for="substatus">Status</label>
                    <select class="form-control @error('substatus') is-invalid @enderror" id="substatus" name="substatus" required>
                        <option value="">Select Status</option>
                        <option value="active" {{ old('substatus') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('substatus') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('substatus')
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
