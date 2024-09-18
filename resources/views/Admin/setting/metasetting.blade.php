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
            <div class="card">
                <div class="card-header">
                    <h4>Add Meta Tags</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('meta-tags.store') }}" method="POST">
                        @csrf

                        <div id="meta-tag-fields">
                            @forelse($metaTags as $index => $metaTag)
                                <div class="meta-tag-field mb-3">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="meta_name" class="form-label">Meta Name</label>
                                            <input type="text" class="form-control" name="meta_tags[{{ $index }}][meta_name]" value="{{ old('meta_tags.'.$index.'.meta_name', $metaTag->meta_name) }}" placeholder="Enter meta name">
                                            @error("meta_tags.$index.meta_name")
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-5">
                                            <label for="meta_content" class="form-label">Meta Content</label>
                                            <input type="text" class="form-control" name="meta_tags[{{ $index }}][meta_content]" value="{{ old('meta_tags.'.$index.'.meta_content', $metaTag->meta_content) }}" placeholder="Enter meta content">
                                            @error("meta_tags.$index.meta_content")
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center">
                                            <button type="button" class="btn btn-danger remove-meta-tag-field">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                {{-- Display at least one empty input box if there are no existing meta tags --}}
                                <div class="meta-tag-field mb-3">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="meta_name" class="form-label">Meta Name</label>
                                            <input type="text" class="form-control" name="meta_tags[0][meta_name]" placeholder="Enter meta name">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="meta_content" class="form-label">Meta Content</label>
                                            <input type="text" class="form-control" name="meta_tags[0][meta_content]" placeholder="Enter meta content">
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center">
                                            <button type="button" class="btn btn-danger remove-meta-tag-field">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </div>

                        <button type="button" class="btn btn-secondary mb-3" id="add-meta-tag-field">Add Meta Tag</button>
                        <button type="submit" class="btn btn-primary">Save Meta Tags</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let metaTagFieldIndex = {{ count($metaTags) > 0 ? count($metaTags) : 1 }};  // Start with the count of existing meta tags or 1 if none exist

        // Add new meta tag field
        document.getElementById('add-meta-tag-field').addEventListener('click', function () {
            const originalMetaTagField = document.querySelector('.meta-tag-field').cloneNode(true);
            const metaTagFieldsContainer = document.getElementById('meta-tag-fields');

            // Clear input values in the cloned field and set new index
            originalMetaTagField.querySelectorAll('input').forEach(function (input) {
                input.value = '';  // Clear value
                input.name = input.name.replace(/\d+/, metaTagFieldIndex);  // Update the index in the name attribute
            });

            // Append new meta tag field to the container
            metaTagFieldsContainer.appendChild(originalMetaTagField);
            metaTagFieldIndex++;
        });

        // Remove meta tag field
        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-meta-tag-field')) {
                const metaTagFields = document.querySelectorAll('.meta-tag-field');
                if (metaTagFields.length > 1) {  // Prevent removing the last field
                    event.target.closest('.meta-tag-field').remove();
                }
            }
        });
    });
</script>
@endsection
