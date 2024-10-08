@extends('layouts.app')
@section('content')
@include('FrontendPages.partials.header')
@section('title', 'Single Property Details')


         <section id="middle" class="propDtls headVr">
            <div class="searchFilter data bdr0 pr mb10px">
               {{-- <div class="wrap">
                  <div class="fo w100">
                     <div class="fl filterS-box mr10px">
                        <form name="key_search" method="get" action="https://www.chandigarhhouse.com/rei-search.php">
                           <div class="df-dt w100">
                              <div class="df-dtc"><input type="text" class="p17px" name="locality" placeholder="Search Properties.. Enter Landmark, Location, Project Name etc." /></div>
                              <span class="df-dtc w120px"><button type="submit" class="bdr0 xlarge dib p17px" style="background:transparent;"><i class="fa fa-search alpha50 mr5px"></i> Search</button></span>
                           </div>
                        </form>
                     </div>
                     <div class="fl pl5px vat"><a href="javascript:void(0)" class="xlarge dib p17px fltrBtn"> <i class="fa fa-filter alpha50 mr5px"></i> Filter </a></div>
                     <div class="black-popupBg"></div>
                     <div class="right-filter data bdr">
                        <div class="theme2 p10px15px">
                           <a href="javascript:viod()" class="fltrClose xlarge pa p7px" style="top:3px;right:8px;"><i class="fa fa-times alpha50"></i></a>
                           <p class="xxlarge"><i class="fa fa-filter"></i> Advance Filter </p>
                        </div>
                        <form name="frmreisearch" method="get" id="property_search" action="https://www.chandigarhhouse.com/rei-search.php">
                           <div class="fo form-bdr p15px pt10px">
                              <div class="mb10px">
                                 <select name="property_type">
                                    <option value="">Type of property you are looking for</option>
                                    <option value="5">Residential Property</option>
                                    <option value="11">--Builder Floor</option>
                                    <option value="8">--Flats &amp; Apartments</option>
                                    <option value="9">--Individual Houses</option>
                                    <option value="25">--Residential Plot</option>
                                    <option value="6">Commercial Property</option>
                                    <option value="15">--Commercial Shops</option>
                                    <option value="28">--Industrial Land / Plot</option>
                                    <option value="17">--Office Space</option>
                                    <option value="16">--Showrooms</option>
                                    <option value="40">--Warehouse/Godown</option>
                                 </select>
                              </div>
                              <div class="mb10px">
                                 <select name="want_to" onchange="showme(this.value)">
                                    <option value="">Transction Type</option>
                                    <option value="1">Buy</option>
                                    <option value="2">Rent</option>
                                 </select>
                              </div>
                              <div class="mb10px">
                                 <select name="city_id">
                                    <option value="">City</option>
                                    <option value="489">Chandigarh</option>
                                    <option value="6842">--Sector 33</option>
                                    <option value="6843">--Sector 35</option>
                                    <option value="944">Faridabad</option>
                                    <option value="9093">--Sector 70</option>
                                    <option value="6829">Mohali</option>
                                    <option value="7591">--Acme Heights Colony</option>
                                    <option value="13941">--Aerocity</option>
                                    <option value="18474">--Phase 1</option>
                                    <option value="15509">--Phase 10</option>
                                    <option value="7630">--Phase 11</option>
                                    <option value="15647">--Phase 2</option>
                                    <option value="18477">--Phase 3</option>
                                    <option value="20970">--Phase 3A</option>
                                    <option value="28243">--Phase 3B-1</option>
                                    <option value="15270">--Phase 3B2</option>
                                    <option value="7635">--Phase 4</option>
                                    <option value="15271">--Phase 5</option>
                                    <option value="15508">--Phase 7</option>
                                    <option value="33337">--Phase 7 Sector 61</option>
                                    <option value="7593">--Phase 8b</option>
                                    <option value="33510">--Phase 8B, Sector 74</option>
                                    <option value="26631">--Sahibzada Ajit Singh Nagar</option>
                                    <option value="7638">--Sas Nagar Phase 10</option>
                                    <option value="7643">--SAS Nagar Phase 11</option>
                                    <option value="7640">--Sas Nagar Phase 2</option>
                                    <option value="7642">--SAS Nagar Phase 3a</option>
                                    <option value="7636">--Sas Nagar Phase 4</option>
                                    <option value="7603">--Sector 104</option>
                                    <option value="15382">--Sector 123</option>
                                    <option value="24449">--Sector 54</option>
                                    <option value="7624">--Sector 60</option>
                                    <option value="7601">--Sector 61</option>
                                    <option value="7609">--Sector 63</option>
                                    <option value="7602">--Sector 66</option>
                                    <option value="15649">--Sector 66A</option>
                                    <option value="33128">--Sector 66B</option>
                                    <option value="7623">--Sector 67</option>
                                    <option value="7610">--Sector 68</option>
                                    <option value="7618">--Sector 69</option>
                                    <option value="7626">--Sector 70</option>
                                    <option value="7604">--Sector 71</option>
                                    <option value="7600">--Sector 74a</option>
                                    <option value="7620">--Sector 77</option>
                                    <option value="7596">--Sector 78</option>
                                    <option value="7605">--Sector 79</option>
                                    <option value="7613">--Sector 80</option>
                                    <option value="7641">--Sector 82</option>
                                    <option value="13940">--Sector 88</option>
                                    <option value="29385">--Sector 89</option>
                                    <option value="7621">--Sector 90</option>
                                    <option value="7598">--Sector 91</option>
                                    <option value="22362">--Sector 94</option>
                                 </select>
                              </div>
                              <div class="mb10px">
                                 <input type="text" name="locality" Placeholder="Locality" />
                              </div>
                              <div class="mb15px">
                                 <p class="large fw6 mb10px">Price Range </p>
                                 <div class="dt w100" style="display:none" id="rent">
                                    <div class="dtc w49 mr2px">
                                       <input type="text" name="rent_price_from" placeholder="Min (K)" maxlength="3" />
                                    </div>
                                    <div class="dtc w49 ml5px">
                                       <input type="text" name="rent_price_to" placeholder="Max (K)" maxlength="3" />
                                    </div>
                                 </div>
                                 <div class="dt w100" style="display:block" id="sell">
                                    <div class="dtc w49 mr2px">
                                       <input type="text" name="sell_price_from" placeholder="Min (Lacs)" />
                                    </div>
                                    <div class="dtc w49 ml5px">
                                       <input type="text" name="sell_price_to" placeholder="Max (Lacs)" />
                                    </div>
                                 </div>
                              </div>
                              <div class="mb15px">
                                 <a href="javascript:{}" onclick="document.getElementById('property_search').submit();" class="button ts0 large p7px pl30px pr30px dib" style="border-radius:0px;">Apply</a>
                                 <a href="javascript:void();" class="fltrClose ts0 large p7px pl20px pr20px dib">Cancel</a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div> --}}
            </div>
            <div class="wrap" id="bodyFormatNT">
               <p class="breadcrumb ar uu small db"><span class="pl15px pr15px db"><a href="/">Home</a><b class="ffv p2px">&rsaquo;</b> {{$property->ad_title}}</span></p>
               <div class="row1 dt columns12">
                  <!--MIDDLE ROW1 STARTS-->
                  <div class="col-1 wideColumn ip ls">
                     <!--MIDDLE ROW1 COL-2 STARTS-->
                     <div class="fo mb20px res_clr">
                        <div class="xxlarge mb10px lh15em">
                           <h1 class="xxlarge fw6">{{$property->ad_title}} In {{$property->sector->name}}, {{$property->city->name}} ({{$property->super_builtup_area}} Sq. Yards)</h1>
                        </div>
                        <div class="adrsDtls">
                           <div class="large"><i class="fa fa-map-marker mr5px"></i>{{$property->sector->name}}, {{$property->city->name}}</div>
                           <div class="ShareDropdown">
                              <span class="data"><i class="fa fa-share-alt xxlarge vam"></i></span>
                              <ul class="shareList data bdr0">
                                 <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.chandigarhhouse.com/sell/5-bhk-individual-houses-sector-70-mohali_1290327.htm" class="facebook" title="Facebook"><i class="fa fa-facebook-official"> Facebook</i></a></li>
                                 <li><a target="_blank" href="https://www.instagram.com/?url=https://www.chandigarhhouse.com/sell/5-bhk-individual-houses-sector-70-mohali_1290327.htm" class="instagram" title="Instagram"><i class="fa fa-instagram"></i> Instagram</a></li>
                                 <li><a target="_blank" href="https://wa.me/?text=https://www.chandigarhhouse.com/sell/5-bhk-individual-houses-sector-70-mohali_1290327.htm" class="whatsapp" title="Whatsapp"><i class="fa fa fa-whatsapp"></i> WhatsApp</a></li>
                                 <li><a target="_blank" href="https://twitter.com/intent/tweet?text=5%20BHK%20Individual%20Houses%20for%20Sale%20in%20Sector%2070,%20Mohali%20(400%20Sq.%20Yards)&amp;url=https://www.chandigarhhouse.com/sell/5-bhk-individual-houses-sector-70-mohali_1290327.htm" class="twitter" title="Twitter"><img src="https://catalog.wlimg.com/mobile/social-networking-img/1002.svg" alt="Twitter" style="width:14px;height:16px;vertical-align:middle;margin-right:6px;"> Twitter</a></li>
                                 <li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.chandigarhhouse.com/sell/5-bhk-individual-houses-sector-70-mohali_1290327.htm&amp;title=5%20BHK%20Individual%20Houses%20for%20Sale%20in%20Sector%2070,%20Mohali%20(400%20Sq.%20Yards)" class="linkedin" title="Linkedin"><i class="fa fa-linkedin-square"></i> Linkedin</a></li>
                                 <li><a target="_blank" href="https://pinterest.com/pin/create/button/?url=https://www.chandigarhhouse.com/sell/5-bhk-individual-houses-sector-70-mohali_1290327.htm&amp;description=5%20BHK%20Individual%20Houses%20for%20Sale%20in%20Sector%2070,%20Mohali%20(400%20Sq.%20Yards)" class="pinterest" title="Pinterest"><i class="fa fa-pinterest-square"></i> Pinterest</a></li>
                              </ul>
                           </div>
                        </div>
                        <script>
                           $(document).ready(function(){
                           $('.ShareDropdown span').click(function(){
                            $('.ShareDropdown').toggleClass("active");
                           }); 
                           });
                        </script>
                     </div>
                     <section class="fo data">
                        <div class="w100">
                           <div class="vat lh0 propDtls-banner ac pr">
                              <div class="mb10px" style="z-index:99;">
                                 <div class="bxslider2">
                                    @foreach (json_decode($property->images) as $item)
                                    <div class="pr ofh" style="padding:0px;">
                                        <div class="lh0 pa blur-bg">
                                            @if (strpos($item, '.mp4') !== false || strpos($item, '.webm') !== false) <!-- Check if it's a video -->
                                                <video autoplay muted loop style="width: 100%; height: auto;">
                                                    <source src="{{ asset('storage/' . $item) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @else <!-- It's an image -->
                                                <div style="background-image:url({{ asset('storage/' . $item) }}); height: 100%; width: 100%; background-size: cover;"></div>
                                            @endif
                                        </div>
                                        <div class="pr ac">
                                            <a data-fancybox="showZoomImage" 
                                               title="{{ $property->name }}" 
                                               href="{{ asset('storage/' . $item) }}">
                                               <img loading="lazy" 
                                                    src="{{ asset('storage/' . $item) }}" 
                                                    width="800" 
                                                    height="600" 
                                                    alt="{{ $property->name }}">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                                

                                    
                                    
                                 </div>
                                 <script>
                                    $('.bxslider2').bxSlider({
                                    auto: true,
                                    autoControls: false,
                                    stopAutoOnClick: true,
                                    pager: false,
                                    responsive: true,
                                    slideWidth: 730
                                    });
                                 </script>
                              </div>
                              <div class="pa propDtls-tag p10px15px lh15em reiDtSaleBtn theme2" style="right:0px;top:10px;bottom:auto;">For Sale</div>
                              <div class="pa propDtls-tag p10px15px lh15em" style="left:0px;">Property ID : REI1290327</div>
                           </div>
                           <script>
                              $("[data-fancybox]").fancybox({
                                  iframe : {
                                      css : {
                                          width : '500px'
                                      }
                                  }
                              });
                              
                              jQuery('.fancybox').fancybox();
                                jQuery(document).ready(function() {
                                jQuery('[data-fancybox]').fancybox({
                                thumbs : {
                                autoStart : true,
                                axis      : 'x'
                                }
                                });
                              });
                           </script>
                           <div class="vat ffos db p15px pt5px">
                              <div class="fo mb25px bdrB bdreee pb7px" style="border-color:#eee;">
                                 <div class="dib xxlarge alpha75 mt10px"><span class="xlarge"><i class="fa fa-inr small red mr2px"></i> <span class="fw6">{{number_format($property->price, 0, '.', ',')}}</span></span>
                                    {{-- <span class="xsmall ml5px dib">@ Rs per Sq. Yards</span> --}}
                                 </div>
                              </div>
                              <ul class="lsn m0px p0px wp33 ac-mb10px">
                                 <li><span class="alpha75">Bedrooms </span><span class="large db mb7px"> {{$property->bedrooms}} </span></li>
                                 <li><span class="alpha75">Bathrooms </span><span class="large db mb7px"> {{$property->bathrooms}} </span></li>
                                 <li><span class="alpha75">Transaction Type </span><span class="large db mb7px"> Resale Property </span></li>
                                 <li><span class="alpha75">Total Floor </span><span class="large db mb7px"> {{$property->total_floors}} </span></li>
                                 <!-- Built Up Area Section -->
<li>
   <span class="alpha75">Built Up Area</span>
   <span class="db">
       <span id="builtupArea_span" class="large dib mb17px"></span> <!-- Initially empty, filled by JS -->
       <span class="pr">
           <a onClick="document.getElementById('builtUp').style.display='block'; event.stopPropagation();" id="builtUpConvertedValue" class="headVr pl5px pr5px small dib vam ml5px">Sq. Yards &#9660;</a>
           <div id="builtUp" style="width:120px; display:none; top:-1px; left:0px;" class="pa">
               <span class="data p5px15px pb10px dib xlarge b pr" id="builtupAreaLabel">Sq. Yards</span>
               <ul class="lsn m0px p0px data small bdrB0 pr uo">
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Sq.Ft.">Sq. Feet</a></li>
                   {{-- <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Cent">Cent</a></li> --}}
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Sq.Yards">Sq. Yards</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Ares">Ares</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Acres">Acres</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Sq.Meter">Sq. Meter</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Bigha">Bigha</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Hectares">Hectares</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Guntha">Guntha</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Marla">Marla</a></li>
               </ul>
           </div>
       </span>
   </span>
</li>

<!-- Carpet Area Section -->
<li>
   <span class="alpha75">Carpet Area</span>
   <span class="db">
       <span id="catpetArea_span" class="large dib mb17px">{{$property->carpet_area}}</span> <!-- Initially filled by JS -->
       <span class="pr">
           <a onClick="document.getElementById('catpetArea').style.display='block'; event.stopPropagation();" id="catpetAreaConvertedValue" class="headVr pl5px pr5px small dib vam ml5px">Sq. Yards &#9660;</a>
           <div id="catpetArea" style="width:120px; display:none; top:-1px; left:0px;" class="pa">
               <span class="data p5px15px pb10px dib xlarge b pr" id="catpetAreaLabel">Sq. Yards</span>
               <ul class="lsn m0px p0px data small bdrB0 pr uo">
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Sq.Ft.">Sq. Feet</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Sq.Yards">Sq. Yards</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Ares">Ares</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Acres">Acres</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Sq.Meter">Sq. Meter</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Bigha">Bigha</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Hectares">Hectares</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Guntha">Guntha</a></li>
                   <li style="width:100%;" class="vat"><a class="bdrB db p2px10px unit-selector" data-unit="Marla">Marla</a></li>
               </ul>
           </div>
       </span>
   </span>
</li>

<script type="text/javascript">
   // Function to create an area conversion map with updated values
   function createAreaArr() {
       return {
           'Sq.Ft.': 9.000000878,
           'Sq.Yards': 1,
           'Sq.Meter': 0.8361274413,
           'Guntha': 0.008264463616,
           'Ares': 0.00008361274413,
           'Acres': 0.0002066115903,
           'Bigha': 0.0003305785446,
           'Hectares': 0.00008361274413,
           'Marla': 0.03305785446
       };
   }

   // Function to convert area from square yards to selected unit
   function convertArea(selectedUnit, areaInSqYards) {
       const conversionMap = createAreaArr();
       return (areaInSqYards * conversionMap[selectedUnit]).toFixed(2);
   }

   // Function to update displayed area value and unit label
   function updateDisplayedArea(areaId, labelId, convertedValueId, areaInSqYards, selectedUnit) {
       const convertedValue = convertArea(selectedUnit, areaInSqYards);
       document.getElementById(areaId).innerHTML = convertedValue;
       document.getElementById(labelId).innerHTML = selectedUnit;
       document.getElementById(convertedValueId).innerHTML = selectedUnit + ' &#9660;';
   }

   // Initialization on document ready
   document.addEventListener('DOMContentLoaded', function () {
       const builtUpBaseValue = {{$property->super_builtup_area}}; // Assuming this is in Sq. Yards
       const carpetBaseValue = {{$property->carpet_area}}; // Assuming this is in Sq. Yards
       const defaultUnit = 'Sq.Yards';

       // Set initial displayed values
       updateDisplayedArea('builtupArea_span', 'builtupAreaLabel', 'builtUpConvertedValue', builtUpBaseValue, defaultUnit);
       updateDisplayedArea('catpetArea_span', 'catpetAreaLabel', 'catpetAreaConvertedValue', carpetBaseValue, defaultUnit);

       // Event listeners for dropdown selection
       const unitLinks = document.querySelectorAll('.unit-selector');
       unitLinks.forEach(link => {
           link.addEventListener('click', function (event) {
               const selectedUnit = this.getAttribute('data-unit');

               // Check which dropdown is clicked and update accordingly
               if (this.closest('#builtUp')) {
                   updateDisplayedArea('builtupArea_span', 'builtupAreaLabel', 'builtUpConvertedValue', builtUpBaseValue, selectedUnit);
                   document.getElementById('builtUp').style.display = 'none'; // Hide dropdown
               } else if (this.closest('#catpetArea')) {
                   updateDisplayedArea('catpetArea_span', 'catpetAreaLabel', 'catpetAreaConvertedValue', carpetBaseValue, selectedUnit);
                   document.getElementById('catpetArea').style.display = 'none'; // Hide dropdown
               }

               event.stopPropagation(); // Prevent body click event
           });
       });

       // Hide dropdown when clicking outside
       document.body.addEventListener('click', function () {
           document.getElementById('builtUp').style.display = 'none';
           document.getElementById('catpetArea').style.display = 'none';
       });
   });
</script>


                                
                                 <li><span class="alpha75">Property Type</span><span class="large db mb7px">Individual Houses </span></li>
                              </ul>
                           </div>
                           <div class="exp_property">
                              {{-- <ul> --}}
                                 {{-- <li><span class="data"><i class="fa fa-check dif mr2px"></i> Servant Room</span></li> --}}
                                 {{-- <section class="data p15px"> --}}
                                    <div class="xxlarge hdBrbb pb12px mt10px mb15px">Property Description </div>
                                    <div class="lh18em aj alpha75">
                                       {{$property->description}}.							
                                    </div>
                                 {{-- </section> --}}
                              {{-- </ul> --}}
                           </div>
                        </div>
                     </section>
                     <br>
                     <section class="data p15px" id="landmarkSection">
                        <div class="xxlarge hdBrbb pb12px mt10px mb20px">Land Mark</div>
                        <div class="cf_3img propLandMark">
                            <ul class="lsn fo ac-fl m0px p0px ac-mb10px ac ac-p10px" id="amenitiesList">
                                <li class="amenity" data-distance="{{$property->hospital_distance}}">
                                    <div class="df-dt vam mb5px">
                                        <div class="df-dtc w30px"><i class="si w20px icon-hospital mr5px"></i></div>
                                        <div class="df-dtc vam al"> Hospital <span class="db fw6 mt1px"> {{$property->hospital_distance}} kms</span></div>
                                    </div>
                                </li>
                                <li class="amenity" data-distance="{{$property->airport_distance}}">
                                    <div class="df-dt vam mb5px">
                                        <div class="df-dtc w30px"><i class="si w20px icon-airport mr5px"></i></div>
                                        <div class="df-dtc vam al"> Airport <span class="db fw6 mt1px"> {{$property->airport_distance}} kms</span></div>
                                    </div>
                                </li>
                                <li class="amenity" data-distance="{{$property->railway_distance}}">
                                    <div class="df-dt vam mb5px">
                                        <div class="df-dtc w30px"><i class="si w20px icon-railway-station mr5px"></i></div>
                                        <div class="df-dtc vam al"> Railway <span class="db fw6 mt1px"> {{$property->railway_distance}} kms</span></div>
                                    </div>
                                </li>
                                <li class="amenity" data-distance="{{$property->school_distance}}">
                                    <div class="df-dt vam mb5px">
                                        <div class="df-dtc w30px"><i class="si w20px icon-school mr5px"></i></div>
                                        <div class="df-dtc vam al"> School <span class="db fw6 mt1px"> {{$property->school_distance}} kms</span></div>
                                    </div>
                                </li>
                                <li class="amenity" data-distance="{{$property->atm_distance}}">
                                    <div class="df-dt vam mb5px">
                                        <div class="df-dtc w30px"><i class="si w20px icon-atm-card mr5px"></i></div>
                                        <div class="df-dtc vam al"> Atm <span class="db fw6 mt1px"> {{$property->atm_distance}} kms</span></div>
                                    </div>
                                </li>
                                <li class="amenity" data-distance="{{$property->bank_distance}}">
                                    <div class="df-dt vam mb5px">
                                        <div class="df-dtc w30px"><i class="si w20px icon-bank mr5px"></i></div>
                                        <div class="df-dtc vam al"> Bank <span class="db fw6 mt1px"> {{$property->bank_distance}} kms</span></div>
                                    </div>
                                </li>
                            </ul>
                            
                            <script type="text/javascript">
                                document.addEventListener('DOMContentLoaded', function() {
                                    const amenities = document.querySelectorAll('#amenitiesList .amenity');
                                    let hasVisibleAmenities = false; // Flag to track if any amenity is visible
                    
                                    amenities.forEach(function(item) {
                                        const distance = item.getAttribute('data-distance');
                                        if (!distance || distance <= 0) {
                                            item.style.display = 'none'; // Hide the item if no distance is provided
                                        } else {
                                            hasVisibleAmenities = true; // Set flag to true if there's at least one visible amenity
                                        }
                                    });
                    
                                    // Hide the section if no amenities are visible
                                    if (!hasVisibleAmenities) {
                                        document.getElementById('landmarkSection').style.display = 'none';
                                    }
                                });
                            </script>
                            
                        </div>
                    </section>
                    
                     <br>
                     <section class="data p15px amentMb">
                        <div class="xxlarge hdBrbb pb12px mt10px mb20px">Amenities</div>
                        <div class="cf_4img-flex propAmenities">
                           <ul class="lsn fo ac-fl m0px p0px ac-mb10px ac ac-p10px">
                              <li class="pt10px pb10px"><i class="si-rei w40px carParking alpha50" title="Reserved Parking"></i> <span class="db mt10px mb15px alpha75">Reserved Parking</span></li>
                           </ul>
                        </div>
                     </section>
                     <br>
                     {{-- <section class="data p15px">
                        <div class="xxlarge hdBrbb pb12px mt10px mb15px">Property Description </div>
                        <div class="lh18em aj alpha75">
                           {{$property->description}}.							
                        </div>
                     </section> --}}
                     <br />
                     <!-- InstanceEndEditable -->
                     <!--MIDDLE ROW1 COL-2 ENDS-->
                  </div>
                  <div class="col-2 rightPropEnq">
                     <!--MIDDLE ROW1 COL-1 STARTS-->		  
                     <div class="column_Box mc">
                        @include('component.enquiry')
                     </div>
                  </div>
               </div>
               <!--MIDDLE ROW1 COL-1 ENDS-->
               <!--MIDDLE ROW1 ENDS--> 
            </div>
            <section class="pt30px pb30px rel-prop">
               <br/>
               <div class="wrap">
                  <div class="xxxlarge mb30px ac mdlBdr-head">
                     <h2 class="headVr bdr0 pl20px pr20px pr zi1">Related Properties in {{$property->city->name}}</h2>
                  </div>
                  <div class="cf_3img mt30px">
                     <ul class="lsn m0px p0px fo idv_eqheight">
                        @foreach ($relatedProperty as $item)
                        @php
                            $images = json_decode($item->images); // Decode the JSON string into an array
                            $firstMedia = !empty($images) ? $images[0] : null; // Get the first media item
                            $isVideo = $firstMedia && preg_match('/\.(mp4|webm|ogg)$/i', $firstMedia); // Check if the first media item is a video
                        @endphp
                        <li>
                            <div class="data db bdr0 p10px bs3px3px cp" onclick="location.href='{{ route('propertydetail', $item->id) }}'">
                                <div class="df-dt w100">
                                    <div class="df-dtc w110px h110px vam ac lh0">
                                        <a href="{{ route('propertydetail', $item->id) }}" title="{{ $item->ad_title }}" class="dib lh0">
                                            @if ($isVideo)
                                                <video width="109" height="109" controls>
                                                    <source src="{{ asset('storage/' . $firstMedia) }}" type="video/mp4">
                                                    <source src="{{ asset('storage/' . $firstMedia) }}" type="video/webm">
                                                    <source src="{{ asset('storage/' . $firstMedia) }}" type="video/ogg">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @else
                                                <img loading="lazy" src="{{ asset('storage/' . $firstMedia) }}" width="350" height="262" alt="{{ $item->ad_title }}" style="width:109px;height:109px;">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="df-dtc pl15px al">
                                        <p class="large mb5px fw6 lh12em">
                                            <a href="{{ route('propertydetail', $item->id) }}" title="{{ $item->ad_title }}">{{ $item->ad_title }}</a>
                                        </p>
                                        <p class="mb2px lh15em alpha75"></p>
                                        <p class="lh15em">{{ $item->super_builtup_area }} Sq. Yards</p>
                                        <p class="large mt5px fw7"><i class="fa fa-inr mr2px"></i> {{ number_format($item->price) }} RS.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    
                    
                        
                        
                     </ul>
                  </div>
                  <script type="text/javascript">
                     $(document).ready(function() {
                     $(".fancy-popup" ).fancybox({						
                     'transitionIn'      : 'elastic',
                     'transitionOut'     : 'elastic',
                     'height'            : '60%',
                     'type'              : 'iframe'          
                     });
                     });
                  </script>
               </div>
               <br/> 	
            </section>
         </section>
         <br style="content:'';display:inline-block;width:100%;height:15px;" />
         <!--Created By - Weblink.In-->
      </div>

      <script>
         $(document).ready(function() {
         	$(".fancy-popup" ).fancybox({
         		toolbar  : false,
         		smallBtn : true,
         		type : 'iframe',		
         		iframe : {
         		preload : false,
         		css : {
         			maxWidth  : '715px',
         			maxHeight : '422px'
         		}
         		},
         		centerOnScroll : true 
         	});
         });
         
         $(document).ready(function() {
         	$(".fancy-popup-service" ).fancybox({
         		toolbar  : false,
         		smallBtn : true,
         		type : 'iframe',		
         		iframe : {
         		preload : false,
         		css : {
         			maxWidth  : '715px',
         			maxHeight : '330px'
         		}
         		},
         		centerOnScroll : true 
         	});
         });
      </script>
      <script>
         jQuery(document).ready(function(e){
           jQuery('.whatsappBtn').on('click',function(event){
         	jQuery('.whChatSec').toggleClass('wh-active');
         	jQuery('.whTxt').toggleClass('downTooltip');
           });
           jQuery('.whtCls').on('click',function(){	
         	jQuery('.whChatSec').removeClass('wh-active');	
           });
           if ($(window).width() > 993) {
           $.fn.scrollEnd = function(callback, timeout) {          
           jQuery(this).scroll(function(){
             var $this = jQuery(this);
             if ($this.data('scrollTimeout')) {
               clearTimeout($this.data('scrollTimeout'));
             }
              $this.data('scrollTimeout', setTimeout(callback,timeout));
             });
            };
            jQuery(window).scroll(function(){
             jQuery('.whatsappBtn').addClass('wh-close');
            });
            jQuery(window).scrollEnd(function(){
             jQuery('.whatsappBtn').removeClass('wh-close');
            }, 1800);
            };
         });
         
      </script>




@include('FrontendPages.partials.footer')

@endsection