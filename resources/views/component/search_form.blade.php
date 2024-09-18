<form name="frmreisearch" method="get" action="{{route('search_property')}}">
   <div class="slider-content2" style="text-align:left;line-height:inherit;">
       <div class="menu">
           <div class="column_box">
               <div class="searchProperty horizontal">
                   <div class="h hd_h2">
                       <div class="ac">
                           <h2 class="hd_NT ttu">Search Properties</h2>
                       </div>
                   </div>
                   <div class="ic fo mt7px">
                       <div class="fl w120px">
                           <p class="mb2px b">I Want to</p>
                           <div class="mb10px">
                               <select class="w90" name="want_to" onchange="showme(this.value)" aria-label="want_to">
                                   @foreach ($category as $item)
                                       <option value="{{ $item->id }}">{{ $item->name }}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="fl w175px">
                           <p class="mb2px b">Property Type</p>
                           <div class="mb10px">
                               <select class="w90" name="property_type" aria-label="property_type">
                                   <option value="">Any</option>
                                   @foreach ($type as $item)
                                       <option class="b" value="{{ $item->id }}">{{ $item->name }}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="fl w175px">
                           <p class="mb2px b">City</p>
                           <div class="mb10px">
                               <select id="city_id" name="city_id" class="w90" aria-label="city_id">
                                   <option value="">Any</option>
                                   @foreach ($cities as $city)
                                       <option value="{{ $city->id }}">{{ $city->name }}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="fl w175px mr15px">
                           <p class="mb2px b">Sector</p>
                           <div class="mb10px">
                               <select id="sector_id" name="sector_id" class="w90">
                                   <option value="">Select Sector</option>
                               </select>
                           </div>
                       </div>
                       <div class="fl w175px">
                           <p class="mb2px b">Budget</p>
                           <div class="mb10px">
                               <div style="display:block" id="sell">
                                   <input class="vam input w33 p5px" type="text" name="sell_price_from" placeholder="Min (Lacs)">
                                   to
                                   <input class="w33 vam input p5px" type="text" name="sell_price_to" placeholder="Max (Lacs)">
                               </div>
                               <div style="display:none" id="rent">
                                   <input class="vam input w33 p5px" type="text" name="rent_price_from" placeholder="Min (K)" maxlength="3">
                                   to
                                   <input class="w33 vam input p5px" type="text" name="rent_price_to" placeholder="Max (K)" maxlength="3">
                               </div>
                           </div>
                       </div>
                       <p class="fl w50px mt20px">
                           <input class="button-search p5px10px b large" type="submit" value="SEARCH">
                       </p>
                       <p class="cb"></p>
                   </div>
               </div>
           </div>
       </div>
   </div>
</form>

<script>
   document.addEventListener('DOMContentLoaded', function () {
       document.getElementById('city_id').addEventListener('change', function () {
           var cityId = this.value;
           var sectorDropdown = document.getElementById('sector_id');

           // Clear existing options
           sectorDropdown.innerHTML = '<option value="">Select Sector</option>';

           if (cityId) {
               fetch(`/api/sectors/${cityId}`)
                   .then(response => response.json())
                   .then(data => {
                       data.forEach(sector => {
                           var option = document.createElement('option');
                           option.value = sector.id;
                           option.textContent = sector.name;
                           sectorDropdown.appendChild(option);
                       });
                   })
                   .catch(error => console.error('Error fetching sectors:', error));
           }
       });
   });
</script>
