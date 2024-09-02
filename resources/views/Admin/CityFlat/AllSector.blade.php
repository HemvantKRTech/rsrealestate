@extends('Admin.dashboard')

@section('maincontent')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h3 class="mb-4">Sector List</h3>
            
            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Add Service Button -->
            <div class="mb-3">
                <a href="{{ route('sectore.form') }}" class="btn btn-primary">Add New Sector</a>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sector Name</th>
                        <th>City Name</th>
                        <th>Status</th>
                       
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sector as $index=> $service)
                        <tr>
                            <td>{{ $index +1 }}</td>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->city->name }}</td>

                            <td>{{ $service->status }}</td>
                            <td>
                                <a href="{{ route('sector.edit', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                {{-- {{ route('services.edit', $service->id) }} --}}
                                <!-- Delete Button -->
                                <form action="{{ route('sector.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Sector?')">Delete</button>
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
