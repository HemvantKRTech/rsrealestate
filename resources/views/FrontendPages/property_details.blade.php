@extends('layouts.app')
@section('content')
@include('FrontendPages.partials.header')



         <section id="middle" class="propDtls headVr">
            <div class="searchFilter data bdr0 pr mb10px">
               <div class="wrap">
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
               </div>
            </div>
            <div class="wrap" id="bodyFormatNT">
               <p class="breadcrumb ar uu small db"><span class="pl15px pr15px db"><a href="../index.html">Home</a> <b class="ffv p2px">&rsaquo;</b><a href="../property-in-mohali.html" title="Property in Mohali">Property in Mohali</a><b class="ffv p2px">&rsaquo;</b><a href="../property-for-sale-in-sector-70-mohali.html" title="Property for Sale in Sector 70 Mohali">Property for Sale in Sector 70 Mohali</a> <b class="ffv p2px">&rsaquo;</b> Property Detail</span></p>
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
        <div class="lh0 pa blur-bg" style="background-image:url({{ asset('storage/' . $item) }});"></div>
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
                                 <div class="dib xxlarge alpha75 mt10px"><span class="xlarge"><i class="fa fa-inr small red mr2px"></i> <span class="fw6">6.25 Cr.</span></span>
                                    <span class="xsmall ml5px dib">@ Rs {{$property->price}} per Sq. Yards</span>
                                 </div>
                              </div>
                              <ul class="lsn m0px p0px wp33 ac-mb10px">
                                 <li><span class="alpha75">Bedrooms </span><span class="large db mb7px"> {{$property->bedrooms}} </span></li>
                                 <li><span class="alpha75">Bathrooms </span><span class="large db mb7px"> {{$property->bathrooms}} </span></li>
                                 <li><span class="alpha75">Transaction Type </span><span class="large db mb7px"> Resale Property </span></li>
                                 <li><span class="alpha75">Total Floor </span><span class="large db mb7px"> {{$property->total_floors}} </span></li>
                                 <script type="text/javascript">
                                    area_conversion=function(b,f,e){var c=createAreaArr();if(e==1){if(b<20&&b!=18){var a=f/c[b];return a}else{return 0}}else{if(e==2){if(b<20&&b!=18){var d=f*c[b];return d}else{return 0}}}};
                                    
                                    function createAreaArr(){
                                    	var a={
                                    		1:1,
                                    		2:0.1111111111111,
                                    		3:0.093,
                                    		4:0.00041666667,
                                    		5:0.013890889,
                                    		6:0.000091810503,
                                    		7:0.002222222222222223,
                                    		8:0.0036724201,
                                    		9:0.0009182736455464,
                                    		10:0.00092936802973,
                                    		11:0.0000028696051,
                                    		12:0.00002295663,
                                    		13:0.000057392103,
                                    		14:0.0013888889,
                                    		15:0.0000092904166,
                                    		16:0.003673095,
                                    		17:0.0000092605969,
                                    		19:0.002295684
                                    	};
                                    	return a;
                                    }
                                    
                                    function updateArea(a,c,d,h,b,w,z){
                                    	var g=createAreaArr();
                                    	 
                                    	var bu = {
                                        'Sq.ft.':'1',
                                        'Sq. Yards':'2',
                                        'Sq. Meter':'3',
                                        'Guntha':'9',
                                        'Ares':'10',
                                        'Acre':'12',
                                        'Bigha':'13',
                                        'Hectares':'15',
                                        'Marla':'16',
                                        'Cent':'19',
                                        };
                                    	if(w=='Sq. Feet'){
                                    		var e=d*(parseFloat(g[c]));
                                    	}
                                    	else{
                                    		var e=parseFloat(g[c])*(d/ parseFloat(g[bu[w]]));
                                    	} 
                                    	
                                    	if(b=="Y"){
                                    		jQuery("#"+h+"_span").html(e.toFixed(2));
                                    	}else{
                                    		if(b=="N"){
                                    			jQuery("#"+h).html(jQuery("#"+h).html+e.toFixed(2));
                                    			console.log("#"+h);
                                    		}
                                    	}
                                    	jQuery("#"+h+"Label").html(" "+a);
                                    	jQuery("#"+z).html(a+" &#9660;")
                                    }
                                    
                                 </script>						
                                 <li>
                                    <span class="alpha75">Built Up Area </span>
                                    <script type="text/javascript">
                                       function convert(basetext,baseindex,baseunit){
                                            if(400 > 0 )  updateArea(basetext,baseindex,400,'builtupArea','Y',baseunit,'DrpDownTab');   }
                                    </script>  
                                    <span class="db">
                                       <span id="builtupArea_span" class="large dib mb17px">{{$property->super_builtup_area}}</span>
                                       <span class="pr">
                                          <a onClick="jQuery('#builtUp').show();event.stopPropagation();" class="headVr pl5px pr5px small dib vam ml5px" id="DrpDownTab">Sq. Yards &#9660;</a>
                                          <div id="builtUp" style="width:120px;display:none;top:-1px;left:0px;" class="pa">
                                             <span class="data p5px15px pb10px dib xlarge b pr" style="border-bottom:none;z-index:101;" id="builtupAreaLabel">Sq. Yards</span>
                                             <ul class="lsn m0px p0px data small bdrB0 pr uo" style="top:-1px;z-index:100;">
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert('Sq.%20Feet',1,'Sq. Yards');">Sq. Feet</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert('Cent',19,'Sq. Yards');">Cent</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert('Sq.%20Yards',2,'Sq. Yards');">Sq. Yards</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert('Ares',10,'Sq. Yards');">Ares</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert('Acre',12,'Sq. Yards');">Acres</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert('Sq.%20Meter',3,'Sq. Yards');">Sq. Meter</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert('Bigha',13,'Sq. Yards');">Bigha</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert('Hectares',15,'Sq. Yards');">Hectares</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert('Guntha',9,'Sq. Yards');">Guntha</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert('Marla',16,'Sq. Yards');">Marla</a></li>
                                             </ul>
                                          </div>
                                       </span>
                                    </span>
                                    <script>
                                       jQuery(document).ready(function(e) {
                                       	jQuery('body').click(function(){
                                       		jQuery('#builtUp').hide();
                                       		
                                       	})
                                       });
                                    </script>
                                 </li>
                                 <li>
                                    <span class="alpha75">Carpet Area </span>
                                    <script type="text/javascript">
                                       function convert2(basetext,baseindex,baseunit){
                                            if(300 > 0 )  updateArea(basetext,baseindex,300,'catpetArea','Y',baseunit,'DrpDownTab2');   }
                                    </script> 
                                    <span class="db">
                                       <span id="catpetArea_span" class="large dib mb17px">{{$property->carpet_area}}</span>
                                       <span class="pr">
                                          <a onClick="jQuery('#catpetArea').show();event.stopPropagation();" class="headVr pl5px pr5px small dib vam ml5px" id="DrpDownTab2">Sq. Yards &#9660;</a>
                                          <div id="catpetArea" style="width:120px;display:none;top:-1px;left:0px;" class="pa">
                                             <span class="data p5px15px pb10px dib xlarge b pr" style="border-bottom:none;z-index:101;" id="catpetAreaLabel">Sq. Yards</span>
                                             <ul class="lsn m0px p0px data small bdrB0 pr uo" style="top:-1px;z-index:100;">
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Sq.%20Feet',1,'Sq. Yards');">Sq.Feet</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Cent',19,'Sq. Yards');">Cent</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Sq.%20Yards',2,'Sq. Yards');">Sq. Yards</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Ares',10,'Sq. Yards');">Ares</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Acre',12,'Sq. Yards');">Acres</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Sq.%20Meter',3,'Sq. Yards');">Sq. Meter</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Bigha',13,'Sq. Yards');">Bigha</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Hectares',15,'Sq. Yards');">Hectares</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Guntha',9,'Sq. Yards');">Guntha</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Marla',16,'Sq. Yards');">Marla</a></li>
                                             </ul>
                                          </div>
                                       </span>
                                    </span>
                                    <script>
                                       jQuery(document).ready(function(e) {
                                       	jQuery('body').click(function(){
                                       		jQuery('#catpetArea').hide();
                                       		
                                       	})
                                       });
                                    </script>
                                 </li>
                                 <li>
                                    <span class="alpha75">Super Area </span>
                                    <script type="text/javascript">
                                       function convert2(basetext,baseindex,baseunit){
                                            if(401 > 0 )  updateArea(basetext,baseindex,401,'superArea','Y',baseunit,'DrpDownTab2');   }
                                    </script> 
                                    <span class="db">
                                       <span id="superArea_span" class="large dib mb17px">401</span>
                                       <span class="pr">
                                          <a onClick="jQuery('#superArea').show();event.stopPropagation();" class="headVr pl5px pr5px small dib vam ml5px" id="DrpDownTab2">Sq. Yards &#9660;</a>
                                          <div id="superArea" style="width:120px;display:none;top:-1px;left:0px;" class="pa">
                                             <span class="data p5px15px pb10px dib xlarge b pr" style="border-bottom:none;z-index:101;" id="superAreaLabel">Sq. Yards</span>
                                             <ul class="lsn m0px p0px data small bdrB0 pr uo" style="top:-1px;z-index:100;">
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Sq.%20Feet',1,'Sq. Yards');">Sq.Feet</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Cent',19,'Sq. Yards');">Cent</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Sq.%20Yards',2,'Sq. Yards');">Sq. Yards</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Ares',10,'Sq. Yards');">Ares</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Acre',12,'Sq. Yards');">Acres</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Sq.%20Meter',3,'Sq. Yards');">Sq. Meter</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Bigha',13,'Sq. Yards');">Bigha</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Hectares',15,'Sq. Yards');">Hectares</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Guntha',9,'Sq. Yards');">Guntha</a></li>
                                                <li style="width:100%;" class="vat"><a class="bdrB db p2px10px" href="javascript:convert2('Marla',16,'Sq. Yards');">Marla</a></li>
                                             </ul>
                                          </div>
                                       </span>
                                    </span>
                                    <script>
                                       jQuery(document).ready(function(e) {
                                       	jQuery('body').click(function(){
                                       		jQuery('#superArea').hide();
                                       		
                                       	})
                                       });
                                    </script>
                                 </li>
                                 <li><span class="alpha75">Property Type</span><span class="large db mb7px">Individual Houses </span></li>
                              </ul>
                           </div>
                           <div class="exp_property">
                              <ul>
                                 <li><span class="data"><i class="fa fa-check dif mr2px"></i> Servant Room</span></li>
                              </ul>
                           </div>
                        </div>
                     </section>
                     <br>
                     <section class="data p15px">
                        <div class="xxlarge hdBrbb pb12px mt10px mb20px">Land Mark</div>
                        <div class="cf_3img propLandMark">
                           <ul class="lsn fo ac-fl m0px p0px ac-mb10px ac ac-p10px">
                              <li>
                                 <div class="df-dt vam mb5px">
                                    <div class="df-dtc w30px"><i class="si w20px icon-hospital mr5px"></i></div>
                                    <div class="df-dtc vam al"> Hospital <span class="db fw6 mt1px"> {{$property->hospital_distance}} kms</span></div>
                                 </div>
                              </li>
                              <li>
                                 <div class="df-dt vam mb5px">
                                    <div class="df-dtc w30px"><i class="si w20px icon-airport mr5px"></i></div>
                                    <div class="df-dtc vam al"> Airport <span class="db fw6 mt1px"> {{$property->airport_distance}} kms</span></div>
                                 </div>
                              </li>
                              <li>
                                 <div class="df-dt vam mb5px">
                                    <div class="df-dtc w30px"><i class="si w20px icon-railway-station mr5px"></i></div>
                                    <div class="df-dtc vam al"> Railway <span class="db fw6 mt1px"> {{$property->railway_distance}} kms</span></div>
                                 </div>
                              </li>
                              <li>
                                 <div class="df-dt vam mb5px">
                                    <div class="df-dtc w30px"><i class="si w20px icon-school mr5px"></i></div>
                                    <div class="df-dtc vam al"> School <span class="db fw6 mt1px"> {{$property->school_distance}} kms</span></div>
                                 </div>
                              </li>
                              <li>
                                 <div class="df-dt vam mb5px">
                                    <div class="df-dtc w30px"><i class="si w20px icon-atm-card mr5px"></i></div>
                                    <div class="df-dtc vam al"> Atm <span class="db fw6 mt1px"> {{$property->atm_distance}} kms</span></div>
                                 </div>
                              </li>
                              <li>
                                 <div class="df-dt vam mb5px">
                                    <div class="df-dtc w30px"><i class="si w20px icon-bank mr5px"></i></div>
                                    <div class="df-dtc vam al"> Bank <span class="db fw6 mt1px"> {{$property->bank_distance}} kms</span></div>
                                 </div>
                              </li>
                           </ul>
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
                     <section class="data p15px">
                        <div class="xxlarge hdBrbb pb12px mt10px mb15px">Property Description </div>
                        <div class="lh18em aj alpha75">
                           {{$property->description}}.							
                        </div>
                     </section>
                     <br />
                     <!-- InstanceEndEditable -->
                     <!--MIDDLE ROW1 COL-2 ENDS-->
                  </div>
                  <div class="col-2 rightPropEnq">
                     <!--MIDDLE ROW1 COL-1 STARTS-->		  
                     <div class="column_Box mc">
                        <div class="tcl bullet data divider p15px propEnq bs3px3px">
                           <div class="h h2 fw6"><b class="plusMinus"></b>
                              Send an enquiry for this property?
                           </div>
                           <div class="showHide_rp mt7px">
                              <p><span class="alpha75">Contact Person</span> : Mr. Satinder Singh Chadha </p>
                              <div class="fo mt15px"><span class="db bdr p12px pl20px pr20px xxlarge"><i class="fa fa-phone mr5px"></i> <span class="dif"> 9872023591 </span></span></div>
                              <form name="static_form" method="post" action="http://catalog.realestateindia.com/catalog-enquiry.php" onsubmit="return static_inq_form_validate(10025);">
                                 <div class="fo mt25px form-bdr">
                                    <div class="mb15px">
                                       <input type="text" name="dynFrm_contact_person" id="dynFrm_contact_person_10025" placeholder="Name" />
                                       <span class="red small"></span>
                                    </div>
                                    <div class="mb15px">
                                       <input type="text" name="dynFrm_email_id" id="dynFrm_email_id_10025" placeholder="Email" />
                                       <span class="red small"></span>
                                    </div>
                                    <div class="mb20px fl w100">
                                       <div class="w50px pr fl ofh">
                                          <div id="isdpropCode" class="isdCode pr0px">+ 91</div>
                                          <select class="contSelect" name="dynFrm_country" onChange="document.getElementById('phone_property_isd').value=this.value.substr(3, 4); document.getElementById('isdpropCode').innerHTML=this.value.substr(3, 4);">
                                             <option value="AF^+93" >Afghanistan +93</option>
                                             <option value="AL^+335" >Albania +335</option>
                                             <option value="DZ^+213" >Algeria +213</option>
                                             <option value="AS^+684" >American Samoa +684</option>
                                             <option value="AD^+376" >Andorra +376</option>
                                             <option value="AO^+244" >Angola +244</option>
                                             <option value="AI^+264" >Anguilla +264</option>
                                             <option value="AQ^+672" >Antarctica +672</option>
                                             <option value="AG^+268" >Antigua and Barbuda +268</option>
                                             <option value="AR^+54" >Argentina +54</option>
                                             <option value="AM^+374" >Armenia +374</option>
                                             <option value="AW^+297" >Aruba +297</option>
                                             <option value="AU^+61" >Australia +61</option>
                                             <option value="AT^+43" >Austria +43</option>
                                             <option value="AZ^+994" >Azerbaijan +994</option>
                                             <option value="BS^+242" >Bahamas +242</option>
                                             <option value="BH^+973" >Bahrain +973</option>
                                             <option value="BD^+880" >Bangladesh +880</option>
                                             <option value="BB^+246" >Barbados +246</option>
                                             <option value="BY^+375" >Belarus +375</option>
                                             <option value="BE^+32" >Belgium +32</option>
                                             <option value="BZ^+501" >Belize +501</option>
                                             <option value="BJ^+229" >Benin +229</option>
                                             <option value="BM^+441" >Bermuda +441</option>
                                             <option value="BT^+975" >Bhutan +975</option>
                                             <option value="BO^+591" >Bolivia +591</option>
                                             <option value="BA^+387" >Bosnia and Herzegowina +387</option>
                                             <option value="BW^+267" >Botswana +267</option>
                                             <option value="BV^+47" >Bouvet Island +47</option>
                                             <option value="BR^+55" >Brazil +55</option>
                                             <option value="IO^+246" >British Indian Ocean Territory +246</option>
                                             <option value="BN^+673" >Brunei Darussalam +673</option>
                                             <option value="BG^+359" >Bulgaria +359</option>
                                             <option value="BF^+226" >Burkina Faso +226</option>
                                             <option value="BI^+257" >Burundi +257</option>
                                             <option value="KH^+855" >Cambodia +855</option>
                                             <option value="CM^+237" >Cameroon +237</option>
                                             <option value="CA^+1" >Canada +1</option>
                                             <option value="CV^+238" >Cape Verde +238</option>
                                             <option value="KY^+345" >Cayman Islands +345</option>
                                             <option value="CF^+236" >Central African Republic +236</option>
                                             <option value="TD^+235" >Chad +235</option>
                                             <option value="CL^+56" >Chile +56</option>
                                             <option value="CN^+86" >China +86</option>
                                             <option value="CX^+61" >Christmas Island +61</option>
                                             <option value="CC^+61" >Cocos (Keeling) Islands +61</option>
                                             <option value="CO^+57" >Colombia +57</option>
                                             <option value="KM^+269" >Comoros +269</option>
                                             <option value="CG^+242" >Congo +242</option>
                                             <option value="ZR^+243" >Congo, The Democratic Republic Of The +243</option>
                                             <option value="CK^+682" >Cook Islands +682</option>
                                             <option value="CR^+506" >Costa Rica +506</option>
                                             <option value="CI^+225" >Cote +225</option>
                                             <option value="HR^+385" >Croatia (local name: Hrvatska) +385</option>
                                             <option value="CY^+357" >Cyprus +357</option>
                                             <option value="CZ^+420" >Czech Republic +420</option>
                                             <option value="DK^+45" >Denmark +45</option>
                                             <option value="DJ^+253" >Djibouti +253</option>
                                             <option value="DM^+767" >Dominica +767</option>
                                             <option value="DO^+809" >Dominican Republic +809</option>
                                             <option value="TP^+670" >East Timor +670</option>
                                             <option value="EC^+593" >Ecuador +593</option>
                                             <option value="EG^+20" >Egypt +20</option>
                                             <option value="SV^+503" >El Salvador +503</option>
                                             <option value="GQ^+240" >Equatorial Guinea +240</option>
                                             <option value="ER^+291" >Eritrea +291</option>
                                             <option value="EE^+372" >Estonia +372</option>
                                             <option value="ET^+251" >Ethiopia +251</option>
                                             <option value="FK^+500" >Falkland Islands (Malvinas) +500</option>
                                             <option value="FO^+298" >Faroe Islands +298</option>
                                             <option value="FJ^+679" >Fiji +679</option>
                                             <option value="FI^+358" >Finland +358</option>
                                             <option value="FR^+33" >France +33</option>
                                             <option value="FX^+590" >France Metropolitan +590</option>
                                             <option value="GF^+594" >French Guiana +594</option>
                                             <option value="PF^+689" >French Polynesia +689</option>
                                             <option value="TF^+590" >French Southern Territories +590</option>
                                             <option value="GA^+241" >Gabon +241</option>
                                             <option value="GM^+220" >Gambia +220</option>
                                             <option value="GE^+995" >Georgia +995</option>
                                             <option value="DE^+49" >Germany +49</option>
                                             <option value="GH^+233" >Ghana +233</option>
                                             <option value="GI^+350" >Gibraltar +350</option>
                                             <option value="GR^+30" >Greece +30</option>
                                             <option value="GL^+299" >Greenland +299</option>
                                             <option value="GD^+809" >Grenada +809</option>
                                             <option value="GP^+590" >Guadeloupe +590</option>
                                             <option value="GU^+1" >Guam +1</option>
                                             <option value="GT^+502" >Guatemala +502</option>
                                             <option value="GN^+224" >Guinea +224</option>
                                             <option value="GW^+245" >Guinea-Bissau +245</option>
                                             <option value="GY^+592" >Guyana +592</option>
                                             <option value="HT^+509" >Haiti +509</option>
                                             <option value="HM^+61" >Heard and Mc Donald Islands +61</option>
                                             <option value="HN^+504" >Honduras +504</option>
                                             <option value="HK^+852" >Hong Kong +852</option>
                                             <option value="HU^+36" >Hungary +36</option>
                                             <option value="IS^+354" >Iceland +354</option>
                                             <option value="IN^+91"  selected="selected" >India +91</option>
                                             <option value="ID^+62" >Indonesia +62</option>
                                             <option value="IQ^+964" >Iraq +964</option>
                                             <option value="IE^+353" >Ireland +353</option>
                                             <option value="IL^+972" >Israel +972</option>
                                             <option value="IT^+39" >Italy +39</option>
                                             <option value="JM^+876" >Jamaica +876</option>
                                             <option value="JP^+81" >Japan +81</option>
                                             <option value="JO^+962" >Jordan +962</option>
                                             <option value="KZ^+7" >Kazakhstan +7</option>
                                             <option value="KE^+254" >Kenya +254</option>
                                             <option value="KI^+686" >Kiribati +686</option>
                                             <option value="KW^+965" >Kuwait +965</option>
                                             <option value="KG^+7" >Kyrgyzstan +7</option>
                                             <option value="LA^+856" >Lao +856</option>
                                             <option value="LV^+371" >Latvia +371</option>
                                             <option value="LB^+961" >Lebanon +961</option>
                                             <option value="LS^+266" >Lesotho +266</option>
                                             <option value="LR^+231" >Liberia +231</option>
                                             <option value="LY^+218" >Libyan Arab Jamahiriya +218</option>
                                             <option value="LI^+423" >Liechtenstein +423</option>
                                             <option value="LT^+370" >Lithuania +370</option>
                                             <option value="LU^+352" >Luxembourg +352</option>
                                             <option value="MO^+853" >Macao +853</option>
                                             <option value="MK^+389" >Macedonia +389</option>
                                             <option value="MG^+261" >Madagascar +261</option>
                                             <option value="MW^+265" >Malawi +265</option>
                                             <option value="MY^+60" >Malaysia +60</option>
                                             <option value="MV^+960" >Maldives +960</option>
                                             <option value="ML^+223" >Mali +223</option>
                                             <option value="MT^+356" >Malta +356</option>
                                             <option value="MH^+692" >Marshall Islands +692</option>
                                             <option value="MQ^+596" >Martinique +596</option>
                                             <option value="MR^+222" >Mauritania +222</option>
                                             <option value="MU^+230" >Mauritius +230</option>
                                             <option value="YT^+269" >Mayotte +269</option>
                                             <option value="MX^+52" >Mexico +52</option>
                                             <option value="FM^+691" >Micronesia +691</option>
                                             <option value="MD^+373" >Moldova +373</option>
                                             <option value="MC^+377" >Monaco +377</option>
                                             <option value="MN^+976" >Mongolia +976</option>
                                             <option value="ME^+382" >Montenegro +382</option>
                                             <option value="MS^+664" >Montserrat +664</option>
                                             <option value="MA^+212" >Morocco +212</option>
                                             <option value="MZ^+258" >Mozambique +258</option>
                                             <option value="MM^+95" >Myanmar +95</option>
                                             <option value="NA^+264" >Namibia +264</option>
                                             <option value="NR^+674" >Nauru +674</option>
                                             <option value="NP^+977" >Nepal +977</option>
                                             <option value="NL^+31" >Netherlands +31</option>
                                             <option value="AN^+599" >Netherlands Antilles +599</option>
                                             <option value="NC^+687" >New Caledonia +687</option>
                                             <option value="NZ^+64" >New Zealand +64</option>
                                             <option value="NI^+505" >Nicaragua +505</option>
                                             <option value="NE^+227" >Niger +227</option>
                                             <option value="NG^+234" >Nigeria +234</option>
                                             <option value="NU^+683" >Niue +683</option>
                                             <option value="NF^+672" >Norfolk Island +672</option>
                                             <option value="MP^+670" >Northern Mariana Islands +670</option>
                                             <option value="NO^+47" >Norway +47</option>
                                             <option value="OM^+968" >Oman +968</option>
                                             <option value="PK^+92" >Pakistan +92</option>
                                             <option value="PW^+680" >Palau +680</option>
                                             <option value="PA^+507" >Panama +507</option>
                                             <option value="PG^+675" >Papua New Guinea +675</option>
                                             <option value="PY^+595" >Paraguay +595</option>
                                             <option value="PE^+51" >Peru +51</option>
                                             <option value="PH^+63" >Philippines +63</option>
                                             <option value="PN^+872" >Pitcairn +872</option>
                                             <option value="PL^+48" >Poland +48</option>
                                             <option value="PT^+351" >Portugal +351</option>
                                             <option value="PR^+787" >Puerto Rico +787</option>
                                             <option value="QA^+974" >Qatar +974</option>
                                             <option value="RE^+262" >Reunion +262</option>
                                             <option value="RO^+40" >Romania +40</option>
                                             <option value="RU^+7" >Russian Federation +7</option>
                                             <option value="RW^+250" >Rwanda +250</option>
                                             <option value="KN^+869" >Saint Kitts and Nevis +869</option>
                                             <option value="LC^+758" >Saint Lucia +758</option>
                                             <option value="VC^+784" >Saint Vincent and the Grenadines +784</option>
                                             <option value="WS^+685" >Samoa +685</option>
                                             <option value="SM^+378" >San Marino +378</option>
                                             <option value="ST^+239" >Sao Tome and Principe +239</option>
                                             <option value="SA^+966" >Saudi Arabia +966</option>
                                             <option value="SN^+221" >Senegal +221</option>
                                             <option value="RS^+381" >Serbia +381</option>
                                             <option value="SC^+248" >Seychelles +248</option>
                                             <option value="SL^+232" >Sierra Leone +232</option>
                                             <option value="SG^+65" >Singapore +65</option>
                                             <option value="SK^+421" >Slovakia (Slovak Republic) +421</option>
                                             <option value="SI^+386" >Slovenia +386</option>
                                             <option value="SB^+677" >Solomon Islands +677</option>
                                             <option value="SO^+252" >Somalia +252</option>
                                             <option value="ZA^+27" >South Africa +27</option>
                                             <option value="GS^+44" >South Georgia and the South Sandwich Islands +44</option>
                                             <option value="KR^+82" >South Korea +82</option>
                                             <option value="SS^+211" >South Sudan +211</option>
                                             <option value="ES^+34" >Spain +34</option>
                                             <option value="LK^+94" >Sri Lanka +94</option>
                                             <option value="SH^+290" >St. Helena +290</option>
                                             <option value="PM^+508" >St. Pierre and Miquelon +508</option>
                                             <option value="SD^+249" >Sudan +249</option>
                                             <option value="SR^+597" >Suriname +597</option>
                                             <option value="SJ^+47" >Svalbard and Jan Mayen Islands +47</option>
                                             <option value="SZ^+268" >Swaziland +268</option>
                                             <option value="SE^+46" >Sweden +46</option>
                                             <option value="CH^+41" >Switzerland +41</option>
                                             <option value="TW^+886" >Taiwan +886</option>
                                             <option value="TJ^+7" >Tajikistan +7</option>
                                             <option value="TZ^+255" >Tanzania +255</option>
                                             <option value="TH^+66" >Thailand +66</option>
                                             <option value="TG^+228" >Togo +228</option>
                                             <option value="TK^+64" >Tokelau +64</option>
                                             <option value="TO^+676" >Tonga +676</option>
                                             <option value="TT^+868" >Trinidad and Tobago +868</option>
                                             <option value="TN^+216" >Tunisia +216</option>
                                             <option value="TR^+90" >Turkey +90</option>
                                             <option value="TM^+993" >Turkmenistan +993</option>
                                             <option value="TC^+649" >Turks and Caicos Islands +649</option>
                                             <option value="TV^+688" >Tuvalu +688</option>
                                             <option value="UG^+256" >Uganda +256</option>
                                             <option value="UA^+380" >Ukraine +380</option>
                                             <option value="AE^+971" >United Arab Emirates +971</option>
                                             <option value="GB^+44" >United Kingdom +44</option>
                                             <option value="US^+1" >United States +1</option>
                                             <option value="UM^+1" >United States Minor Outlying Islands +1</option>
                                             <option value="UY^+598" >Uruguay +598</option>
                                             <option value="UZ^+998" >Uzbekistan +998</option>
                                             <option value="VU^+678" >Vanuatu +678</option>
                                             <option value="VA^+39" >Vatican City State (Holy See) +39</option>
                                             <option value="VE^+58" >Venezuela +58</option>
                                             <option value="VN^+84" >Vietnam +84</option>
                                             <option value="VG^+1" >Virgin Islands (British) +1</option>
                                             <option value="VI^+1" >Virgin Islands (U.S.) +1</option>
                                             <option value="WF^+681" >Wallis And Futuna Islands +681</option>
                                             <option value="EH^+212" >Western Sahara +212</option>
                                             <option value="YE^+967" >Yemen +967</option>
                                             <option value="YU^+381" >Yugoslavia +381</option>
                                             <option value="ZM^+260" >Zambia +260</option>
                                             <option value="ZW^+263" >Zimbabwe +263</option>
                                          </select>
                                       </div>
                                       <input type="text" name="dynFrm_phone" id="dynFrm_phone_10025" class="fl ml10px" style="width:calc(100% - 70px);" placeholder="Mobile No" />
                                       <span class="fl red small"></span>
                                    </div>
                                    <div class="fl w100 mb15px">
                                       <textarea name="dynFrm_details_2" id="dynFrm_details_2_10025" rows="3">Looking to purchase 5 BHK House measuring 400 Sq. Yards in Sector 70 Mohali</textarea>
                                       <span class="fl red small"></span>
                                    </div>
                                    <div class="mt25px mb15px">
                                       <input type="submit" name="submit" value="Send Enquiry" class="db theme2 xlarge fw6 p12px bdr ttu">
                                       <input type="hidden" name="phone_isd" id="phone_property_isd" value="+91">
                                       <input type="hidden" name="subject" value="Inquiry For Property - 5 BHK Individual Houses for Sale in Sector 70, Mohali (400 Sq. Yards) - REI1290327">
                                       <input type="hidden" name="property_id" value="1290327">
                                       <input type="hidden" name="enqtype" value="property">
                                       <input type="hidden" name="current_url" value="5-bhk-individual-houses-sector-70-mohali_1290327.html">
                                       <input type="hidden" name="web_address" value="../index.html">
                                       <input type="hidden" name="inq_thanks_msg" value="Thank you for inquiry.<br /><br />We have received your business request. Our Sales Team will soon get in touch with you.<br /><br /><br />">
                                       <input type="hidden" name="inq_thanks_title" value="Enquiry">
                                       <input type="hidden" name="redirected_url" value="../thanks.html">
                                       <input type="hidden" name="catalog_mi" value="88260">
                                       <input type="hidden" name="id" value="static_form">
                                       <input type="hidden" name="form_id" value="10025">
                              </form>
                              </div>
                              </div>					
                           </div>
                        </div>
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
                        <li>
                           <div class="data db bdr0 p10px bs3px3px cp" onclick="location.href='6-bhk-individual-houses-villas-sector-79-mohali_1217394.html'">
                              <div class="df-dt w100">
                                 <div class="df-dtc w110px h110px vam ac lh0"><a href="6-bhk-individual-houses-villas-sector-79-mohali_1217394.html" title="6 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (500 Sq. Yards)" class="dib lh0"><img loading="lazy" src="https://rei.wlimg.com/prop_images/88260/1217394_1-350x350.jpeg"  width="350" height="262" alt="6 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (500 Sq. Yards)"  style="width:109px;height:109px;"  ></a></div>
                                 <div class="df-dtc pl15px al">
                                    <p class="large mb5px fw6 lh12em"><a href="{{route('propertydetail',$item->id)}}" title="6 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (500 Sq. Yards)">{{$item->ad_title}}</a></p>
                                    <p class="mb2px lh15em alpha75"></p>
                                    <p class="lh15em">{{$item->super_builtup_area}} Sq. Yards</p>
                                    <p class="large mt5px fw7"><i class="fa fa-inr mr2px"></i> {{$item->price}} RS. </p>
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