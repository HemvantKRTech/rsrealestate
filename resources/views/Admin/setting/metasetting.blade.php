<!-- resources/views/admin/meta_tags/create.blade.php -->

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
                            @foreach($metaTags as $index => $metaTag)
                                <div class="meta-tag-field">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <label for="meta_name" class="form-label">Meta Name</label>
                                                <input type="text" class="form-control" name="meta_tags[{{ $index }}][meta_name]" placeholder="Enter meta name" value="{{ old("meta_tags.$index.meta_name", $metaTag->meta_name) }}">
                                                @error("meta_tags.$index.meta_name")
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <label for="meta_content" class="form-label">Meta Content</label>
                                                <input type="text" class="form-control" name="meta_tags[{{ $index }}][meta_content]" placeholder="Enter meta content" value="{{ old("meta_tags.$index.meta_content", $metaTag->meta_content) }}">
                                                @error("meta_tags.$index.meta_content")
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center">
                                            <button type="button" class="btn btn-danger remove-meta-tag-field">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
        let metaTagFieldIndex = {{ count($metaTags) }};

        document.getElementById('add-meta-tag-field').addEventListener('click', function () {
            const newMetaTagField = document.querySelector('.meta-tag-field').cloneNode(true);
            newMetaTagField.querySelectorAll('input').forEach(function (input) {
                input.value = '';
                input.name = input.name.replace(/\d+/, metaTagFieldIndex);
            });
            document.getElementById('meta-tag-fields').appendChild(newMetaTagField);
            metaTagFieldIndex++;
        });

        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-meta-tag-field')) {
                if (document.querySelectorAll('.meta-tag-field').length > 1) {
                    event.target.closest('.meta-tag-field').remove();
                }
            }
        });
    });
</script>
@endsection
