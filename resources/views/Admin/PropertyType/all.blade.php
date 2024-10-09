@extends('Admin.dashboard')

@section('maincontent')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h3 class="mb-4">Property Type List</h3>
            
            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Add Property Type Button -->
            <div class="mb-3">
                <a href="{{ route('propertytype.create') }}" class="btn btn-primary">Add New Property Type</a>
            </div>

            <!-- Property Type Table -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($property as $index => $service)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->status }}</td>
                            <td>
                                <a href="{{ route('propertytype.edit', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                
                                <!-- Delete Button -->
                                <form action="{{ route('property.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Property Type?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <hr> <!-- Divider between tables -->

    <!-- Subproperty Types Table -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="mb-4">Subproperty Type List</h3>
            
            <!-- Add Subproperty Button -->
            <div class="mb-3">
                {{-- <a href="{{ route('subpropertytype.create') }}" class="btn btn-primary">Add New Subproperty Type</a> --}}
            </div>

            <!-- Subproperty Type Table -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Subproperty Name</th>
                        <th>Parent Property Type</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subproperties as $index => $subproperty)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $subproperty->name }}</td>
                            <td>{{ $subproperty->propertyType->name }}</td> <!-- Showing parent property type name -->
                            <td>{{ $subproperty->status }}</td>
                            <td>
                                <!-- Status Toggle Button -->
                                <form action="{{ route('subpropertytype.toggleStatus', $subproperty->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm {{ $subproperty->status === 'active' ? 'btn-success' : 'btn-secondary' }}">
                                        {{ $subproperty->status === 'active' ? 'Deactivate' : 'Activate' }}
                                    </button>
                                </form>
                
                                <!-- Edit Button -->
                                {{-- <a href="{{ route('subpropertytype.edit', $subproperty->id) }}" class="btn btn-sm btn-warning">Edit</a> --}}
                
                                <!-- Delete Button -->
                                <form action="{{ route('subpropertytype.destroy', $subproperty->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Subproperty Type?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
