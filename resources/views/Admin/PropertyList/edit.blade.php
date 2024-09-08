@extends('Admin.dashboard')

@section('maincontent')

<div class="container mt-5">
    <h1>Edit Property</h1>
    <form action="{{ route('property.update', $property->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- {{ route('property.update', $property->id) }} --}}
        @method('PUT') <!-- Use PUT for updating -->
        <div class="row">
            <!-- Category Field -->
            <div class="col">
                <label for="category">Category *</label>
                <select id="category" name="category" class="form-control">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $property->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="type">Property Type *</label>
                <select id="type" name="type" class="form-control">
                    <option value="">Select property Type</option>
                    @foreach ($types as $item)
                        <option value="{{ $item->id }}" {{ $property->type == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="bedrooms">Bedrooms *</label>
                <select id="bedrooms" name="bedrooms" class="form-control">
                    <option value="1" {{ $property->bedrooms == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ $property->bedrooms == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ $property->bedrooms == '3' ? 'selected' : '' }}>3</option>
                    <option value="4" {{ $property->bedrooms == '4' ? 'selected' : '' }}>4</option>
                    <option value="4+" {{ $property->bedrooms == '4+' ? 'selected' : '' }}>4+</option>
                </select>
                @error('bedrooms')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="bathrooms">Bathrooms *</label>
                <select id="bathrooms" name="bathrooms" class="form-control">
                    <option value="1" {{ $property->bathrooms == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ $property->bathrooms == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ $property->bathrooms == '3' ? 'selected' : '' }}>3</option>
                    <option value="4" {{ $property->bathrooms == '4' ? 'selected' : '' }}>4</option>
                    <option value="4+" {{ $property->bathrooms == '4+' ? 'selected' : '' }}>4+</option>
                </select>
                @error('bathrooms')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="furnishing">Furnishing *</label>
                <select id="furnishing" name="furnishing" class="form-control">
                    <option value="furnished" {{ $property->furnishing == 'furnished' ? 'selected' : '' }}>Furnished</option>
                    <option value="semi_furnished" {{ $property->furnishing == 'semi_furnished' ? 'selected' : '' }}>Semi-Furnished</option>
                    <option value="unfurnished" {{ $property->furnishing == 'unfurnished' ? 'selected' : '' }}>Unfurnished</option>
                </select>
                @error('furnishing')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="construction_status">Construction Status *</label>
                <select id="construction_status" name="construction_status" class="form-control">
                    <option value="new_launch" {{ $property->construction_status == 'new_launch' ? 'selected' : '' }}>New Launch</option>
                    <option value="ready_to_move" {{ $property->construction_status == 'ready_to_move' ? 'selected' : '' }}>Ready to Move</option>
                    <option value="under_construction" {{ $property->construction_status == 'under_construction' ? 'selected' : '' }}>Under Construction</option>
                </select>
                @error('construction_status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="listed_by">Listed by *</label>
                <select id="listed_by" name="listed_by" class="form-control">
                    <option value="builder" {{ $property->listed_by == 'builder' ? 'selected' : '' }}>Builder</option>
                    <option value="dealer" {{ $property->listed_by == 'dealer' ? 'selected' : '' }}>Dealer</option>
                    <option value="owner" {{ $property->listed_by == 'owner' ? 'selected' : '' }}>Owner</option>
                </select>
                @error('listed_by')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="super_builtup_area">Super Builtup Area (ft²) *</label>
                <input id="super_builtup_area" name="super_builtup_area" type="number" class="form-control" min="0" step="1" value="{{ $property->super_builtup_area }}">
                @error('super_builtup_area')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="carpet_area">Carpet Area (ft²) *</label>
                <input id="carpet_area" name="carpet_area" type="number" class="form-control" min="0" step="1" value="{{ $property->carpet_area }}">
                @error('carpet_area')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="maintenance">Maintenance (Monthly)</label>
                <input id="maintenance" name="maintenance" type="number" class="form-control" min="0" step="1" value="{{ $property->maintenance }}">
                @error('maintenance')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="total_floors">Total Floors *</label>
                <input id="total_floors" name="total_floors" type="number" class="form-control" min="0" step="1" value="{{ $property->total_floors }}">
                @error('total_floors')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="floor_no">Floor No *</label>
                <input id="floor_no" name="floor_no" type="number" class="form-control" min="0" step="1" value="{{ $property->floor_no }}">
                @error('floor_no')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="car_parking">Car Parking *</label>
                <select id="car_parking" name="car_parking" class="form-control">
                    <option value="0" {{ $property->car_parking == '0' ? 'selected' : '' }}>0</option>
                    <option value="1" {{ $property->car_parking == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ $property->car_parking == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ $property->car_parking == '3' ? 'selected' : '' }}>3</option>
                    <option value="3+" {{ $property->car_parking == '3+' ? 'selected' : '' }}>3+</option>
                </select>
                @error('car_parking')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="facing">Facing *</label>
                <select id="facing" name="facing" class="form-control">
                    <option value="" {{ is_null($property->facing) ? 'selected' : '' }}>Select</option>
                    <option value="east" {{ $property->facing == 'east' ? 'selected' : '' }}>East</option>
                    <option value="north" {{ $property->facing == 'north' ? 'selected' : '' }}>North</option>
                    <option value="northeast" {{ $property->facing == 'northeast' ? 'selected' : '' }}>North-East</option>
                    <option value="northwest" {{ $property->facing == 'northwest' ? 'selected' : '' }}>North-West</option>
                    <option value="south" {{ $property->facing == 'south' ? 'selected' : '' }}>South</option>
                    <option value="southeast" {{ $property->facing == 'southeast' ? 'selected' : '' }}>South-East</option>
                    <option value="southwest" {{ $property->facing == 'southwest' ? 'selected' : '' }}>South-West</option>
                    <option value="west" {{ $property->facing == 'west' ? 'selected' : '' }}>West</option>
                </select>
                @error('facing')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="project_name">Project Name *</label>
                <input id="project_name" name="project_name" type="text" class="form-control" maxlength="70" value="{{ $property->project_name }}">
                @error('project_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="ad_title">Ad Title *</label>
                <input id="ad_title" name="ad_title" type="text" class="form-control" maxlength="70" value="{{ $property->ad_title }}">
                @error('ad_title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="price">Price *</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">₹</span>
                    </div>
                    <input id="price" name="price" type="text" class="form-control" min="0" pattern="(\d+[., \s]?\d?)*" value="{{ $property->price }}">
                </div>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="address">Address *</label>
                <textarea id="address" name="address" class="form-control" maxlength="255" rows="1">{{ $property->address }}</textarea>
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="description">Description *</label>
                <textarea id="description" name="description" class="form-control" maxlength="4096" rows="5">{{ $property->description }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="images">Upload Property Images (Leave empty to keep existing images)</label>
                <input id="images" name="images[]" type="file" class="form-control" accept="image/*" multiple>
                @error('images')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-row mt-3">
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Update Property</button>
            </div>
        </div>
    </form>
</div>

@endsection
