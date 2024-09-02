<!-- resources/views/admin/services/index.blade.php -->

@extends('Admin.dashboard')

@section('maincontent')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h3 class="mb-4">Services List</h3>
            
            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Service Name</th>
                        <th>Slug</th>
                        <th>Feature Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->service_name }}</td>
                            <td>{{ $service->slug }}</td>
                            <td>
                                @if($service->feature_image)
                                    <img src="{{ asset('storage/' . $service->feature_image) }}" alt="{{ $service->service_name }}" width="100">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                {{-- {{ route('admin.services.edit', $service->id) }} --}}
                                <!-- Delete Button -->
                                <form action="" method="POST" style="display:inline-block;">
                                    {{-- {{ route('admin.services.destroy', $service->id) }} --}}
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
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
