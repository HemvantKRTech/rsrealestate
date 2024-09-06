@extends('Admin.dashboard')

@section('maincontent')

<div class="container mt-5">

    <!-- Success message handling -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form for creating or updating a category -->
    <h1>{{ isset($editCategory) ? 'Edit Category' : 'Create New Category' }}</h1>

    <form action="{{ isset($editCategory) ? route('categories.update', $editCategory->id) : route('categories.store') }}" method="POST">
        @csrf
        @if(isset($editCategory))
            @method('PUT')  <!-- For updating categories -->
        @endif

        <!-- Category Name Field -->
        <div class="mb-3">
            <label for="name" class="form-label">Category Name *</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" 
                   value="{{ isset($editCategory) ? $editCategory->name : old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Status Field -->
        <div class="mb-3">
            <label for="status" class="form-label">Status *</label>
            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                <option value="1" {{ (isset($editCategory) && $editCategory->status == '1') || old('status') == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ (isset($editCategory) && $editCategory->status == '0') || old('status') == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">
            {{ isset($editCategory) ? 'Update Category' : 'Create Category' }}
        </button>
    </form>

    <hr>

    <!-- List of Categories -->
    <h2>Categories</h2>
    @if($categories->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            @if($category->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <!-- Edit button (populates form with existing data) -->
                            <a href="{{ route('category.create', ['edit' => $category->id]) }}" class="btn btn-sm btn-warning">Edit</a>

                            <!-- Delete form -->
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this category?');">
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
        {{ $categories->links() }}
    @else
        <p>No categories found.</p>
    @endif
</div>

@endsection
