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
            <h3 class="mb-4">Add New Property for Listing</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
            
                <!-- Row with three inputs -->
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="number_of_bathrooms">Number of Bathrooms:</label>
                        <input type="number" class="form-control" id="number_of_bathrooms" name="number_of_bathrooms" required>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="property_floor_number">Property Floor Number:</label>
                        <input type="number" class="form-control" id="property_floor_number" name="property_floor_number" required>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="transaction_type">Transaction Type:</label>
                        <select class="form-control" id="transaction_type" name="transaction_type" required>
                            <option value="sale">Sale</option>
                            <option value="rent">Rent</option>
                        </select>
                    </div>
                </div>
            
                <!-- Additional form fields -->
            
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="total_floors">Total Floors:</label>
                        <input type="number" class="form-control" id="total_floors" name="total_floors" required>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="built_up_area">Built-up Area (sq ft):</label>
                        <input type="text" class="form-control" id="built_up_area" name="built_up_area" required>
                    </div>
            
                    <div class="form-group col-md-4">
                        <label for="super_area">Super Area (sq ft):</label>
                        <input type="text" class="form-control" id="super_area" name="super_area" required>
                    </div>
                </div>
            
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="property_type">Property Type:</label>
                        <input type="text" class="form-control" id="property_type" name="property_type" required>
                    </div>
            
                    <div class="form-group col-md-6">
                        <label for="number_of_bedrooms">Number of Bedrooms:</label>
                        <input type="number" class="form-control" id="number_of_bedrooms" name="number_of_bedrooms" required>
                    </div>
                </div>
            
                <div class="form-group">
                    <label for="property_description">Property Description:</label>
                    <textarea class="form-control" id="property_description" name="property_description" rows="3" required></textarea>
                </div>
            
                <div class="form-group">
                    <label for="images">Property Images:</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            
        </div>
    </div>
</div>
@endsection


