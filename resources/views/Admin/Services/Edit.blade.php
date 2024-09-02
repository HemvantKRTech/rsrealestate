@extends('Admin.dashboard')

@section('maincontent')

<div class="container mt-5">
    @if(session('error'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="mb-4">Edit Service</h3>
            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Service Name -->
                <div class="mb-3">
                    <label for="serviceName" class="form-label">Service Name</label>
                    <input type="text" class="form-control @error('service_name') is-invalid @enderror" id="serviceName" name="service_name" value="{{ old('service_name', $service->service_name) }}" required>
                    @error('service_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Slug -->
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $service->slug) }}" readonly required>
                    @error('slug')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Feature Image -->
                <div class="mb-3">
                    <label for="featureImage" class="form-label">Feature Image</label>
                    <input type="file" class="form-control @error('feature_image') is-invalid @enderror" id="featureImage" name="feature_image" accept="image/*">
                    @if ($service->feature_image)
                        <img src="{{ asset('storage/' . $service->feature_image) }}" alt="{{ $service->service_name }}" width="100">
                    @endif
                    @error('feature_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Content -->
                <div class="mb-3">
                    <label for="serviceContent" class="form-label">Service Content</label>
                    <textarea id="serviceContent" name="service_content" class="form-control summernote @error('service_content') is-invalid @enderror" rows="4" required>{{ old('service_content', $service->service_content) }}</textarea>
                    @error('service_content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update Service</button>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Initialize Summernote
        $('.summernote').summernote({
            placeholder: 'Enter service content here...',
            tabsize: 2,
            height: 200
        });

        // Generate slug based on service name
        $('#serviceName').on('input', function() {
            var serviceName = $(this).val();
            var slug = serviceName.toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '') // Remove invalid chars
                .replace(/\s+/g, '-') // Collapse whitespace and replace by -
                .replace(/-+/g, '-'); // Collapse dashes
            $('#slug').val(slug);
        });
    });
</script>
@endpush
