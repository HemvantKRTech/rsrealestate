@extends('Admin.dashboard')

@section('maincontent')

<div class="container mt-5">
    <h1>All Properties</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($properties->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Property Name</th>
                        <th>Bedrooms</th>
                        <th>Bathrooms</th>
                        <th>Price (₹)</th>
                        <th>Property Type</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($properties as $property)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $property->ad_title }}</td>
                            <td>{{ $property->bedrooms }}</td>
                            <td>{{ $property->bathrooms }}</td>
                            <td>₹ {{ number_format($property->price) }}</td>
                            <td>{{ $property->propertyType->name }}</td> <!-- Assuming propertyType relationship -->
                            <td>{{ $property->address }}</td>
                            <td>
                             
                                <!-- Edit Button -->
                                <a href="{{ route('property.edit', $property->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <!-- Delete Form -->
                                <form action="{{ route('property.destroy', $property->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this property?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        {{ $properties->links() }}
    @else
        <p>No properties found.</p>
    @endif
</div>

@endsection
