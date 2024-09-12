@extends('layouts.app')
@section('content')
@include('FrontendPages.partials.header')
@section('title', 'Post Your property')
<section class="headBg theme2 bread-right">
    <div class="wrap">
     <div class="page-title-inner fo"> 
     <!-- header ends -->
         
         <div class="h1"><h1>Buying Property in Mohali</h1>
         </div><p class="breadcrumb ar uu small"><a href="index.html" title="Home">Home</a> <b class="ffv p2px">›</b> Buying Property In Mohali</p>
         <!-- footer -->
    </div>
  </div>
 </section>
 <div id="middle">
    <div id="bodyFormatNT" class="wrap thinFormat">	
        <div class="row1 dt columns12">
            <div class="col-1 thinColumn">
	          <div class="column_Box mc thinColumnLink">
	<div class="tcl bullet divider uu">
	    <div class="h h2"><b class="plusMinus"></b> <p class="b dif rHead">Hot Property</p></div>
	    <div class="ic showHide_rp">
				<ul>
                    @foreach ($hotProperties as $item)
                    <li><b class="b2 fl"></b>
                        <p class="ofh"><a href="{{route('propertydetail',$item->id)}}" title="{{$item->ad_title}} for {{$item->category->name}} in{{$item->sector->name}}, {{$item->city->name}}">{{$item->ad_title}} for {{$item->category->name}} in{{$item->sector->name}}, {{$item->city->name}}</a></p>
                    </li> 
                    @endforeach
											</ul></div>
	</div>
</div><div class="column_Box mc thinColumnLink dif">
	<div class="tcl bullet divider">
	    <div class="h h2"><b class="plusMinus"></b> <p class="b dif rHead">Property By City</p></div>
	    <div class="ic showHide_rp">
				<ul>
					@foreach ($city as $item)
                                <li><b class="b2 fl"></b>
                                    <p class="ofh"><a href="{{route('city.details',$item->name)}}" title="Property in {{$item->name}}">Property in {{$item->name}}</a></p>
                                </li>
                                @endforeach
				</ul>
				<p class="cb"></p></div>
	</div>
</div>
	          <div class="column_Box mc qc">
	<div class="h h2"><b class="plusMinus"></b> <p class="b dif rHead">Contact Us</p></div>
	<div class="ic showHide_rp">
		<div class="uu lh13em">
            <p class="dif b">{{$sitesetting->site_title}}</p>
            <p class="hr bdrB"></p>
            <p>{{$sitesetting->address}}</p>
            <p class="hr bdrB"></p>
            <p><b>Mobile :</b> +91-{{$sitesetting->mobile}}</p>
            <p class="hr bdrB"></p>
            <p><b>Call Us : </b><span class="b dif xlarge fw6">
                {{$sitesetting->calling_mobile}}					</span>
            </p>
            <p class="hr bdrB"></p>
            <p><b>E-mail :</b> <a href="mailto:{{$sitesetting->email}}">{{$sitesetting->email}}</a></p>
        </div>
	</div>
</div>
            </div>
            <div class="col-2 wideColumn ip ls">
	          <br style="content:'';display:inline-block;width:100%;height:15px;">
	          <!-- header ends -->
		
			<div class="aj">Maximize the exposure of your property for rent or for sale or lease to an elite clientele. Please Go ahead and fill the form to give us a chance to serve you:-</div>
		<p class="cb"></p>
		<br> @if (session('success'))
        <p class="message-color">{{ session('success') }}</p>
    @endif
			<br>
            <form  method="post" action="{{route('frontendproperty.store')}}"  enctype="multipart/form-data" class="inputs-p7px inputs-br5px inputs-bs10px">
                @csrf    
                <table class="formTable w100">
                    <tbody>
                        <tr>
                            <td colspan="2" class="post-property-form p5px b">
                                <b class="n fr"><b class="star">*</b> fields are mandatory</b>Basic Information
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Property Category &nbsp;</td>
                            <td class="w70 data p5px">
                                @foreach ($categories as $category)
                                <input type="radio" value="{{$category->id}}" name="category_id" >{{$category->name}} &nbsp;
                                &nbsp; @endforeach
                                 
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Property type <b class="star">*</b> &nbsp;</td>
                            <td class="w70 data p5px">
                                <select name="type" id="r_please-select-property-category" class="w65">
                                    <option value="" selected="selected">Select One</option>
                                    
                                    @foreach ($types as $item)
                                    <option value="{{ $item->id }}" >{{ $item->name }}</option>
                                    @endforeach
                                   
                                </select>
                                @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Property Title <b class="star">*</b> &nbsp;</td>
                            <td class="w70 data p5px">
                                <input id="ad_title" name="ad_title" type="text" class="form-control input"  value="">
                                @error('ad_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Bedrooms <b class="star">*</b> &nbsp;</td>
                            <td class="w70 data p5px">
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
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Bathrooms <b class="star">*</b> &nbsp;</td>
                            <td class="w70 data p5px">
                            <select id="bedrooms" name="bathrooms" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="4+">4+</option>
                            </select>
                            @error('bathrooms')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Furnishing <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                                <select name="furnishing" class="w65">
                                    <option value="" selected="selected">Select</option>
                                    <option value="furnished">Furnished</option>
                                    <option value="semi_furnished">Semi-Furnished</option>
                                    <option value="unfurnished">Unfurnished</option>
                                </select>
                                @error('furnishing')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Construction Status <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <select id="construction_status" name="construction_status" class="form-control">
                            <option value="new_launch">New Launch</option>
                            <option value="ready_to_move">Ready to Move</option>
                            <option value="under_construction">Under Construction</option>
                            </select>
                            @error('construction_status')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Listed by <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <select id="listed_by" name="listed_by" class="form-control">
                            <option value="builder">Builder</option>
                            <option value="dealer">Dealer</option>
                            <option value="owner">Owner</option>
                            </select>
                            @error('listed_by')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                            </td>
                        </tr>
                        <tr>
                            <td for="super_builtup_area" class="w30 headVr p5px ar b">Super Builtup Area (ft²) <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <input id="super_builtup_area" name="super_builtup_area" type="number" class="form-control input" min="0" step="1" value="">
                            @error('super_builtup_area')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror   
                        </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Carpet Area (ft²) <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <input id="carpet_area" name="carpet_area" type="number" class="form-control input" min="0" step="1" value="">
                            @error('carpet_area')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror    
                        </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Maintenance (Monthly)&nbsp;</td>
                            <td class="w70 data p5px">
                            <input id="maintenance" name="maintenance" type="number" class="form-control input" min="0" step="1" value="" placeholder="Rs:">
                            @error('maintenance')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror    
                        </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Totle Floor <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <input id="total_floors" name="total_floors" type="number" class="form-control input" min="0" step="1" value="">
                            @error('total_floors')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror</td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Floor No <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <input id="floor_no" name="floor_no" type="number" class="form-control input" min="0" step="1" value="">
                            @error('floor_no')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror</td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Car Parking <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <select id="car_parking" name="car_parking" class="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3+">3+</option>
                            </select>
                            @error('car_parking')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror  </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Facing <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
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
                        @enderror</td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Price <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <input id="price" name="price" type="number" class="form-control input" min="0" step="1" value="" placeholder="Rs:">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Negotiable <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <select id="negotiable" name="negotiable" class="form-control">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Property Image <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                                <!-- <input type="file" name="dynFrm_property_image_file"> -->
                                <input id="images" name="images[]" type="file" class="form-control input" multiple>
                                @error('images')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror</td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Property Description &nbsp;</td>
                            <td class="w70 data p5px">
                                <!-- <textarea name="dynFrm_property_description" cols="50" rows="4" class="input w65"></textarea> -->
                                <textarea id="description" name="description" class="form-control input"  cols="50" rows="4"></textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="post-property-form p5px b">Near Property Location</td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Hospital (km) <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <input id="hospital_distance" name="hospital_distance" type="number" class="form-control input" min="0" step="0.01" value="">
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">ATM (km) <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <input id="atm_distance" name="atm_distance" type="number" class="form-control input" min="0" step="0.01" value="">
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Bank (km) <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <input id="bank_distance" name="bank_distance" type="number" class="form-control input" min="0" step="0.01" value="">
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Railway Station (km) <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <input id="railway_distance" name="railway_distance" type="number" class="form-control input" min="0" step="0.01" value="">
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">School (km) <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <input id="school_distance" name="school_distance" type="number" class="form-control input" min="0" step="0.01" value="">
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Airport (km) <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <input id="airport_distance" name="airport_distance" type="number" class="form-control input" min="0" step="0.01" value="">
                            </td>
                        </tr>
                
                        <tr>
                            <td colspan="2" class="post-property-form p5px b">Property Location</td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Address <b class="star">*</b> &nbsp;</td>
                            <td class="w70 data p5px">
                                <textarea id="address" name="address" cols="50" rows="4" class="form-control input"></textarea>
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror</td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">City  <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <select id="city" name="city_id" class="form-control">
                            <option value="" selected="selected">Select City</option>
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Sector  <b class="star">*</b>&nbsp;</td>
                            <td class="w70 data p5px">
                            <select id="sector" name="sector_id" class="form-control">
                            <option value="" selected="selected">Select Sector</option>
                            
                            </select>
                            @error('sector')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror </td>
                        </tr>
                        
                        <tr>
                            <td colspan="2" class="post-property-form p5px b">Contact Details</td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Your Name <b class="star">*</b> &nbsp;</td>
                            <td class="w70 data p5px">
                                <input type="text" name="user_name" value="" size="35" maxlength="90" class="form-control input">
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Email ID <b class="star">*</b> &nbsp;</td>
                            <td class="w70 data p5px">
                                <input type="text" name="user_email" value="" size="35" maxlength="90" class="form-control input">
                            </td>
                        </tr>
                        <tr>
                            <td class="w30 headVr p5px ar b">Address <b class="star">*</b> &nbsp;</td>
                            <td class="w70 data p5px">
                                <textarea id="address" name="user_address" cols="50" rows="4" class="form-control input"></textarea>
                            </td>
                        </tr>
                        
                        
                        <tr>
                            <td colspan="2" class="p10px ac">
                                <button type="submit"  class="button p10px pl15px pr15px b">Submit</button>
                            {{-- <input type="submit" name="submit" value="Submit" class="button p10px pl15px pr15px b"> --}}
                            <input type="reset" name="reset" value="Reset" class="resetbtn p10px pl15px pr15px b">
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </form>
            
		<!-- footer -->
            </div>
        </div>
<br style="content:'';display:inline-block;width:100%;height:15px;">
    </div>
</div>

   @include('FrontendPages.partials.footer')
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
