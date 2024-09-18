@extends('Admin.dashboard')

@section('maincontent')

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1>Property Details Form</h1>
    <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Category Field -->
            <div class="col">
                <label for="category">Category *</label>
                <select id="category" name="category" class="form-control">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                    <option value="">Select Property Type</option>
                    @foreach ($types as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="bedrooms">Bedrooms *</label>
                <select id="bedrooms" name="bedrooms" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="4+">4+</option>
                </select>
                @error('bedrooms')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="bathrooms">Bathrooms *</label>
                <select id="bathrooms" name="bathrooms" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="4+">4+</option>
                </select>
                @error('bathrooms')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Furnishing, Construction Status, Listed by -->
        <div class="row mt-3">
            <div class="col">
                <label for="furnishing">Furnishing *</label>
                <select id="furnishing" name="furnishing" class="form-control">
                    <option value="furnished">Furnished</option>
                    <option value="semi_furnished">Semi-Furnished</option>
                    <option value="unfurnished">Unfurnished</option>
                </select>
                @error('furnishing')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="construction_status">Construction Status *</label>
                <select id="construction_status" name="construction_status" class="form-control">
                    <option value="new_launch">New Launch</option>
                    <option value="ready_to_move">Ready to Move</option>
                    <option value="under_construction">Under Construction</option>
                </select>
                @error('construction_status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="listed_by">Listed by *</label>
                <select id="listed_by" name="listed_by" class="form-control">
                    <option value="builder">Builder</option>
                    <option value="dealer">Dealer</option>
                    <option value="owner">Owner</option>
                </select>
                @error('listed_by')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Super Builtup Area, Carpet Area, Maintenance -->
        <div class="row mt-3">
            <div class="col">
                <label for="super_builtup_area">Super Builtup Area (ft²) *</label>
                <input id="super_builtup_area" name="super_builtup_area" type="number" class="form-control" min="0" step="1" value="">
                @error('super_builtup_area')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="carpet_area">Carpet Area (ft²) *</label>
                <input id="carpet_area" name="carpet_area" type="number" class="form-control" min="0" step="1" value="">
                @error('carpet_area')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="maintenance">Maintenance (Monthly)</label>
                <input id="maintenance" name="maintenance" type="number" class="form-control" min="0" step="1" value="">
                @error('maintenance')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Total Floors, Floor No, Car Parking -->
        <div class="row mt-3">
            <div class="col">
                <label for="total_floors">Total Floors *</label>
                <input id="total_floors" name="total_floors" type="number" class="form-control" min="0" step="1" value="">
                @error('total_floors')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="floor_no">Floor No *</label>
                <input id="floor_no" name="floor_no" type="number" class="form-control" min="0" step="1" value="">
                @error('floor_no')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="car_parking">Car Parking *</label>
                <select id="car_parking" name="car_parking" class="form-control">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3+">3+</option>
                </select>
                @error('car_parking')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Facing, Project Name, Ad Title -->
        <div class="row mt-3">
            <div class="col">
                <label for="facing">Facing *</label>
                <select id="facing" name="facing" class="form-control">
                    <option value="">Select</option>
                    <option value="east">East</option>
                    <option value="north">North</option>
                    <option value="northeast">North-East</option>
                    <option value="northwest">North-West</option>
                    <option value="south">South</option>
                    <option value="southeast">South-East</option>
                    <option value="southwest">South-West</option>
                    <option value="west">West</option>
                </select>
                @error('facing')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="project_name">Project Name *</label>
                <input id="project_name" name="project_name" type="text" class="form-control" maxlength="70" value="">
                @error('project_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="ad_title">Ad Title *</label>
                <input id="ad_title" name="ad_title" type="text" class="form-control" maxlength="70" value="">
                @error('ad_title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- City and Sector Dropdowns -->
        <div class="row mt-3">
            <div class="col">
                <label for="city">City *</label>
                <select id="city" name="city" class="form-control">
                    <option value="">Select City</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
                @error('city')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="sector">Sector *</label>
                <select id="sector" name="sector" class="form-control">
                    <option value="">Select Sector</option>
                    {{-- @foreach ($sectors as $sector)
                        <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                    @endforeach --}}
                </select>
                @error('sector')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Address Field -->
        <div class="row mt-3">
            <div class="col">
                <label for="address">Address *</label>
                <textarea id="address" name="address" class="form-control" maxlength="255" rows="1"></textarea>
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Description, Price, Negotiable -->
        <div class="row mt-3">
            <div class="col">
                <label for="description">Description *</label>
                <textarea id="description" name="description" class="form-control" maxlength="4000" rows="3"></textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="price">Price *</label>
                <input id="price" name="price" type="number" class="form-control" min="0" step="0.01" value="">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="negotiable">Negotiable *</label>
                <select id="negotiable" name="negotiable" class="form-control">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                @error('negotiable')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Images Upload -->
        <div class="row mt-3">
            <div class="col">
                <label for="images">Images *</label>
                <input id="images" name="images[]" type="file" class="form-control-file" multiple>
                @error('images')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Amenities Distances -->
        <div class="row mt-3">
            <div class="col">
                <label for="hospital_distance">Distance to Hospital (km)</label>
                <input id="hospital_distance" name="hospital_distance" type="number" class="form-control" min="0" step="0.01" value="">
                @error('hospital_distance')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="atm_distance">Distance to ATM (km)</label>
                <input id="atm_distance" name="atm_distance" type="number" class="form-control" min="0" step="0.01" value="">
                @error('atm_distance')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="railway_distance">Distance to Railway Station (km)</label>
                <input id="railway_distance" name="railway_distance" type="number" class="form-control" min="0" step="0.01" value="">
                @error('railway_distance')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="school_distance">Distance to School (km)</label>
                <input id="school_distance" name="school_distance" type="number" class="form-control" min="0" step="0.01" value="">
                @error('school_distance')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="airport_distance">Distance to Airport (km)</label>
                <input id="airport_distance" name="airport_distance" type="number" class="form-control" min="0" step="0.01" value="">
                @error('airport_distance')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="bank_distance">Distance to Bank (km)</label>
                <input id="bank_distance" name="bank_distance" type="number" class="form-control" min="0" step="0.01" value="">
                @error('bank_distance')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Submit Button -->
        <div class="form-row mt-3">
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#city').on('change', function() {
            var cityId = $(this).val();
            if(cityId) {
                $.ajax({
                    url: '{{ route("getSectorsByCity") }}',
                    type: 'GET',
                    data: {city_id: cityId},
                    dataType: 'json',
                    success: function(data) {
                        $('#sector').empty();
                        $('#sector').append('<option value="">Select Sector</option>');
                        $.each(data, function(key, value) {
                            $('#sector').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            } else {
                $('#sector').empty();
                $('#sector').append('<option value="">Select Sector</option>');
            }
        });
    });
</script>
@endsection
