@extends('layouts.app')
@section('content')
@include('FrontendPages.partials.header')

<div id="middle">
            <div id="bodyFormatNT" class="wrap  ip ls">
               <br style="content:'';display:inline-block;width:100%;height:15px;" />
               <!-- header ends -->
               <p class="aj">Find Residential &amp; Commercial Property in Sector 79 Mohali. R S Real Estate is  providing Mohali Sector 79 Properties Sell Rent Classifieds database . Contact with us for instant Buy sell .</p>
               <br>
               <div id="search_filter_data">
                  <form name="prop_search" method="get" action="#">
                     <div class="bdr mc searchProperty horizontal">
                        <div class="h h2 desk_dn">
                           <b class="plusMinus"></b>
                           <p class="b dif rHead">Search Property</p>
                        </div>
                        <div class="fo ic showHide_rp">
                           <!--START-->	
                           <div class="fl">
                              <p class="mb2px b">I Want to</p>
                              <div class="mb10px">
                                 <select class="w90" name="want_to" onchange="showme(this.value)">
                                    <option value="1" selected="selected" >Buy</option>
                                    <option value="2" >Rent</option>
                                 </select>
                              </div>
                           </div>
                           <div class="fl">
                              <p class="mb2px b">Property Type</p>
                              <div class="mb10px">
                                 <select class="w90" name="property_type">
                                    <option value="">Any</option>
                                    <option value="5" >Residential Property</option>
                                    <option value="11" >--Builder Floor</option>
                                    <option value="8" >--Flats &amp; Apartments</option>
                                    <option value="9" >--Individual Houses</option>
                                    <option value="25" >--Residential Plot</option>
                                    <option value="6" >Commercial Property</option>
                                    <option value="15" >--Commercial Shops</option>
                                    <option value="28" >--Industrial Land / Plot</option>
                                    <option value="17" >--Office Space</option>
                                    <option value="16" >--Showrooms</option>
                                    <option value="40" >--Warehouse/Godown</option>
                                 </select>
                              </div>
                           </div>
                           <div class="fl">
                              <p class="mb2px b">City</p>
                              <div class="mb10px">
                                 <select name="city_id" class="w90">
                                    <option value="489" >Chandigarh</option>
                                    <option value="6842" >--Sector 33</option>
                                    <option value="6843" >--Sector 35</option>
                                    <option value="944" >Faridabad</option>
                                    <option value="9093" >--Sector 70</option>
                                    <option value="6829" >Mohali</option>
                                    <option value="7591" >--Acme Heights Colony</option>
                                    <option value="13941" >--Aerocity</option>
                                    <option value="18474" >--Phase 1</option>
                                    <option value="15509" >--Phase 10</option>
                                    <option value="7630" >--Phase 11</option>
                                    <option value="15647" >--Phase 2</option>
                                    <option value="18477" >--Phase 3</option>
                                    <option value="20970" >--Phase 3A</option>
                                    <option value="28243" >--Phase 3B-1</option>
                                    <option value="15270" >--Phase 3B2</option>
                                    <option value="7635" >--Phase 4</option>
                                    <option value="15271" >--Phase 5</option>
                                    <option value="15508" >--Phase 7</option>
                                    <option value="33337" >--Phase 7 Sector 61</option>
                                    <option value="7593" >--Phase 8b</option>
                                    <option value="33510" >--Phase 8B, Sector 74</option>
                                    <option value="26631" >--Sahibzada Ajit Singh Nagar</option>
                                    <option value="7638" >--Sas Nagar Phase 10</option>
                                    <option value="7643" >--SAS Nagar Phase 11</option>
                                    <option value="7640" >--Sas Nagar Phase 2</option>
                                    <option value="7642" >--SAS Nagar Phase 3a</option>
                                    <option value="7636" >--Sas Nagar Phase 4</option>
                                    <option value="7603" >--Sector 104</option>
                                    <option value="15382" >--Sector 123</option>
                                    <option value="24449" >--Sector 54</option>
                                    <option value="7624" >--Sector 60</option>
                                    <option value="7601" >--Sector 61</option>
                                    <option value="7609" >--Sector 63</option>
                                    <option value="7602" >--Sector 66</option>
                                    <option value="15649" >--Sector 66A</option>
                                    <option value="33128" >--Sector 66B</option>
                                    <option value="7623" >--Sector 67</option>
                                    <option value="7610" >--Sector 68</option>
                                    <option value="7618" >--Sector 69</option>
                                    <option value="7626" >--Sector 70</option>
                                    <option value="7604" >--Sector 71</option>
                                    <option value="7600" >--Sector 74a</option>
                                    <option value="7620" >--Sector 77</option>
                                    <option value="7596" >--Sector 78</option>
                                    <option value="7605"  selected="selected" >--Sector 79</option>
                                    <option value="7613" >--Sector 80</option>
                                    <option value="7641" >--Sector 82</option>
                                    <option value="13940" >--Sector 88</option>
                                    <option value="29385" >--Sector 89</option>
                                    <option value="7621" >--Sector 90</option>
                                    <option value="7598" >--Sector 91</option>
                                    <option value="22362" >--Sector 94</option>
                                 </select>
                              </div>
                           </div>
                           <div class="fl">
                              <p class="mb2px b">Locality</p>
                              <div class="mb10px">
                                 <input type="text" name="locality" class="w85 input" value="">
                              </div>
                           </div>
                           <div class="fl">
                              <p class="mb2px b">Budget</p>
                              <div class="mb10px haif-input" style="display:none" id="rent">
                                 <input class="vam input w30" type="text" name="rent_price_from" placeholder="Min (K)" maxlength="3"> <input class="w30 vam input" type="text" name="rent_price_to" placeholder="Max (K)" maxlength="3">
                              </div>
                              <div class="mb10px haif-input" style="display:block" id="sell">
                                 <input class="vam input w30" type="text" name="sell_price_from" placeholder="Min (Lacs)"> <input class="w30 vam input" type="text" name="sell_price_to" placeholder="Max (Lacs)">
                              </div>
                           </div>
                           <span class="fl mt20px">
                              <input type="hidden" name="action" value="prop-search" />
                              <input type="hidden" name="id" value="property_by_city" />
                              <input type="hidden" name="slno" value="104495" />
                              <input type="hidden" name="title" value="Property in Sector 79 Mohali" />
                              <input type="hidden" name="format" value="7" />
                              <!--input type="hidden" name="cond1" value="and (sub_city=7605 or city=7605 or sub_city IN (select city_id from state_city where city_tree LIKE \'%^7605%\')) and propertyfor=1 order by property_id desc" /-->
                              <input type="hidden" name="cond2" value="" />
                              <input type="hidden" name="cityid" value="7605" />
                              <input type="hidden" name="catg_id" value="" />
                              <input type="hidden" name="propertyfor" value="1" />
                              <input type="hidden" name="bhk" value="" />
                              <input type="hidden" name="sms_service" value="0" />
                              <input type="hidden" name="disp_type" value="html" />
                              <input type="hidden" name="member_id" value="88260" />
                              <input type="hidden" name="web_address" value="index.html" />
                              <input type="hidden" name="main_temp_id" value="12569" />
                              <input type="hidden" name="src" value="rei" />
                              <input type="hidden" name="oi" value="" />
                              <input type="hidden" name="theme_col_id" value="12570" />
                              <input type="hidden" name="modify_status" value="" />
                              <input type="hidden" name="records_per_page" value="50" />
                              <input type="hidden" name="id1" value="" />
                              <input type="hidden" name="offset" value="" />
                              <input type="hidden" name="pageno" value="" />
                              <input type="hidden" name="file_name" value="property-for-sale-in-sector-79-mohali.html" />
                              <input type="hidden" name="multiple_website_status" value="0" />
                              <input type="hidden" name="show_in_rei" value="N" />
                              <input type="hidden" name="beta_status" value="N" />
                              <input type="hidden" name="final_product" value="" />
                              <input class="button p7px b large" type="submit" value="SEARCH">
                           </span>
                           <!--end-->
                        </div>
                     </div>
                  </form>
                  <div class="row1 dt columns12">
                     <div class="col-2 wideColumn ip ls thinFormat">
                        <div class="mt15px"></div>
                        <div class="cf_4img">
                           <ul class="lsn m0px p0px fo idv_eqheight cols_similar">
                              <li>
                                 <div class="bdr btmBtnSpace pr cp table-link box-sector-property" data-url="sell/4-bhk-flats-apartments-sector-79-mohali_1273604.html">
                                    <div class="pr ofh lh0">
                                       <div class="clsifd_img picBg lh0 pr"><img loading="lazy" src="https://rei.wlimg.com/prop_images/88260/1273604_2-350x350.jpeg"  width="350" height="261" alt="4 BHK Flats &amp; Apartments for Sale in Sector 79, Mohali (1800 Sq.ft.)"  ></div>
                                       <div class="abs-cont pa lh15em al p10px15px large">
                                          <h2> <a href="sell/4-bhk-flats-apartments-sector-79-mohali_1273604.html" title="4 BHK Flats &amp; Apartments for Sale in Sector 79, Mohali (1800 Sq.ft.)">4 BHK Flats &amp; Apartments For Sale In Sector 7...</a> </h2>
                                       </div>
                                       <div class="propertyId ttu p2px10px dib lh14em"> REI1273604 </div>
                                    </div>
                                    <div class="lh13em p10px al">
                                       <p class="mb10px fw6"><i class="fa fa-map-marker mr5px"></i> Sector 79 Mohali</p>
                                       <div class="mt15px">
                                          <p class="mb5px"><span class="alpha75">Bedroom</span> : 4 BHK  </p>
                                          <p class="mb5px"><span class="alpha75">Build up Area</span> : 1800 Sq.ft. </p>
                                          <p class="mb5px"><span class="alpha75">Property Type</span> : Flats &amp; Apartments </p>
                                       </div>
                                       <p class="mt15px al fw6"><span class="xlarge"><i class="fa fa-inr"></i> 2.30 Cr. </span></p>
                                    </div>
                                    <div class="mb10px small alpha75 absBtmBtn ac">
                                       <form class="inquiry-form" name="prop_1273604" id="prop_1273604" method="post" action="https://www.chandigarhhouse.com/enquiry-form-10017.htm">
                                          <input type="hidden" name="enqtype" value="property" />
                                          <input type="hidden" name="subject" value="Inquiry For Property - 4 BHK Flats &amp; Apartments for Sale in Sector 79, Mohali (1800 Sq.ft.) - REI1273604" />
                                          <input type="hidden" name="property_id" value="1273604" />
                                       </form>
                                       <a href="sell/4-bhk-flats-apartments-sector-79-mohali_1273604.html" class="large data c5px dib p17px pt7px pb7px">View Details</a>
                                       <a href="javascript:void(0);" class="submit-inquiry large buttonBig ts0 c5px dib p17px pt7px pb7px">Send Enquiry</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="bdr btmBtnSpace pr cp table-link box-sector-property" data-url="sell/6-bhk-individual-houses-villas-sector-79-mohali_1217394.html">
                                    <div class="pr ofh lh0">
                                       <div class="clsifd_img picBg lh0 pr"><img loading="lazy" src="https://rei.wlimg.com/prop_images/88260/1217394_1-350x350.jpeg"  width="350" height="262" alt="6 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (500 Sq. Yards)"  ></div>
                                       <div class="abs-cont pa lh15em al p10px15px large">
                                          <h2> <a href="sell/6-bhk-individual-houses-villas-sector-79-mohali_1217394.html" title="6 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (500 Sq. Yards)">6 BHK Individual Houses / Villas For Sale In ...</a> </h2>
                                       </div>
                                       <div class="propertyId ttu p2px10px dib lh14em"> REI1217394 </div>
                                    </div>
                                    <div class="lh13em p10px al">
                                       <p class="mb10px fw6"><i class="fa fa-map-marker mr5px"></i> Sector 79 Mohali</p>
                                       <div class="mt15px">
                                          <p class="mb5px"><span class="alpha75">Bedroom</span> : 6 BHK  </p>
                                          <p class="mb5px"><span class="alpha75">Build up Area</span> : 500 Sq. Yards </p>
                                          <p class="mb5px"><span class="alpha75">Property Type</span> : Individual Houses </p>
                                       </div>
                                       <p class="mt15px al fw6"><span class="xlarge"><i class="fa fa-inr"></i> 11.50 Cr. </span></p>
                                    </div>
                                    <div class="mb10px small alpha75 absBtmBtn ac">
                                       <form class="inquiry-form" name="prop_1217394" id="prop_1217394" method="post" action="https://www.chandigarhhouse.com/enquiry-form-10017.htm">
                                          <input type="hidden" name="enqtype" value="property" />
                                          <input type="hidden" name="subject" value="Inquiry For Property - 6 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (500 Sq. Yards) - REI1217394" />
                                          <input type="hidden" name="property_id" value="1217394" />
                                       </form>
                                       <a href="sell/6-bhk-individual-houses-villas-sector-79-mohali_1217394.html" class="large data c5px dib p17px pt7px pb7px">View Details</a>
                                       <a href="javascript:void(0);" class="submit-inquiry large buttonBig ts0 c5px dib p17px pt7px pb7px">Send Enquiry</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="bdr btmBtnSpace pr cp table-link box-sector-property" data-url="sell/2-bhk-individual-houses-villas-sector-79-mohali_1216750.html">
                                    <div class="pr ofh lh0">
                                       <div class="clsifd_img picBg lh0 pr">
                                          <div style="background:#056ADB" class="tac picBg dt w100 ac">
                                             <p class="dtc ac vam"><img style="margin:0;min-height: auto;width: auto;position:inherit;" src="http://catalog.wlimg.com/main-common/no-property-image.png" alt=""></p>
                                          </div>
                                       </div>
                                       <div class="abs-cont pa lh15em al p10px15px large">
                                          <h2> <a href="sell/2-bhk-individual-houses-villas-sector-79-mohali_1216750.html" title="2 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (150 Sq.ft.)">2 BHK Individual Houses / Villas For Sale In ...</a> </h2>
                                       </div>
                                       <div class="propertyId ttu p2px10px dib lh14em"> REI1216750 </div>
                                    </div>
                                    <div class="lh13em p10px al">
                                       <p class="mb10px fw6"><i class="fa fa-map-marker mr5px"></i> Sector 79 Mohali</p>
                                       <div class="mt15px">
                                          <p class="mb5px"><span class="alpha75">Bedroom</span> : 2 BHK  </p>
                                          <p class="mb5px"><span class="alpha75">Build up Area</span> : 150 Sq.ft. </p>
                                          <p class="mb5px"><span class="alpha75">Property Type</span> : Individual Houses </p>
                                       </div>
                                       <p class="mt15px al fw6"><span class="xlarge"><i class="fa fa-inr"></i> 2.35 Cr. </span></p>
                                    </div>
                                    <div class="mb10px small alpha75 absBtmBtn ac">
                                       <form class="inquiry-form" name="prop_1216750" id="prop_1216750" method="post" action="https://www.chandigarhhouse.com/enquiry-form-10017.htm">
                                          <input type="hidden" name="enqtype" value="property" />
                                          <input type="hidden" name="subject" value="Inquiry For Property - 2 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (150 Sq.ft.) - REI1216750" />
                                          <input type="hidden" name="property_id" value="1216750" />
                                       </form>
                                       <a href="sell/2-bhk-individual-houses-villas-sector-79-mohali_1216750.html" class="large data c5px dib p17px pt7px pb7px">View Details</a>
                                       <a href="javascript:void(0);" class="submit-inquiry large buttonBig ts0 c5px dib p17px pt7px pb7px">Send Enquiry</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="bdr btmBtnSpace pr cp table-link box-sector-property" data-url="sell/2-bhk-individual-houses-villas-sector-79-mohali_1216742.html">
                                    <div class="pr ofh lh0">
                                       <div class="clsifd_img picBg lh0 pr">
                                          <div style="background:#2A90D3" class="tac picBg dt w100 ac">
                                             <p class="dtc ac vam"><img style="margin:0;min-height: auto;width: auto;position:inherit;" src="http://catalog.wlimg.com/main-common/no-property-image.png" alt=""></p>
                                          </div>
                                       </div>
                                       <div class="abs-cont pa lh15em al p10px15px large">
                                          <h2> <a href="sell/2-bhk-individual-houses-villas-sector-79-mohali_1216742.html" title="2 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (155 Sq. Yards)">2 BHK Individual Houses / Villas For Sale In ...</a> </h2>
                                       </div>
                                       <div class="propertyId ttu p2px10px dib lh14em"> REI1216742 </div>
                                    </div>
                                    <div class="lh13em p10px al">
                                       <p class="mb10px fw6"><i class="fa fa-map-marker mr5px"></i> Sector 79 Mohali</p>
                                       <div class="mt15px">
                                          <p class="mb5px"><span class="alpha75">Bedroom</span> : 2 BHK  </p>
                                          <p class="mb5px"><span class="alpha75">Build up Area</span> : 155 Sq. Yards </p>
                                          <p class="mb5px"><span class="alpha75">Property Type</span> : Individual Houses </p>
                                       </div>
                                       <p class="mt15px al fw6"><span class="xlarge"><i class="fa fa-inr"></i> 3.25 Cr. </span></p>
                                    </div>
                                    <div class="mb10px small alpha75 absBtmBtn ac">
                                       <form class="inquiry-form" name="prop_1216742" id="prop_1216742" method="post" action="https://www.chandigarhhouse.com/enquiry-form-10017.htm">
                                          <input type="hidden" name="enqtype" value="property" />
                                          <input type="hidden" name="subject" value="Inquiry For Property - 2 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (155 Sq. Yards) - REI1216742" />
                                          <input type="hidden" name="property_id" value="1216742" />
                                       </form>
                                       <a href="sell/2-bhk-individual-houses-villas-sector-79-mohali_1216742.html" class="large data c5px dib p17px pt7px pb7px">View Details</a>
                                       <a href="javascript:void(0);" class="submit-inquiry large buttonBig ts0 c5px dib p17px pt7px pb7px">Send Enquiry</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="bdr btmBtnSpace pr cp table-link box-sector-property" data-url="sell/3-bhk-individual-houses-villas-sector-79-mohali_1200632.html">
                                    <div class="pr ofh lh0">
                                       <div class="clsifd_img picBg lh0 pr"><img loading="lazy" src="https://rei.wlimg.com/prop_images/88260/1200632_5-350x350.jpeg"  width="262" height="349" alt="3 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (200 Sq. Yards)"  ></div>
                                       <div class="abs-cont pa lh15em al p10px15px large">
                                          <h2> <a href="sell/3-bhk-individual-houses-villas-sector-79-mohali_1200632.html" title="3 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (200 Sq. Yards)">3 BHK Individual Houses / Villas For Sale In ...</a> </h2>
                                       </div>
                                       <div class="propertyId ttu p2px10px dib lh14em"> REI1200632 </div>
                                    </div>
                                    <div class="lh13em p10px al">
                                       <p class="mb10px fw6"><i class="fa fa-map-marker mr5px"></i> Sector 79 Mohali</p>
                                       <div class="mt15px">
                                          <p class="mb5px"><span class="alpha75">Bedroom</span> : 3 BHK  </p>
                                          <p class="mb5px"><span class="alpha75">Build up Area</span> : 200 Sq. Yards </p>
                                          <p class="mb5px"><span class="alpha75">Property Type</span> : Individual Houses </p>
                                       </div>
                                       <p class="mt15px al fw6"><span class="xlarge"><i class="fa fa-inr"></i> 1.35 Cr. </span></p>
                                    </div>
                                    <div class="mb10px small alpha75 absBtmBtn ac">
                                       <form class="inquiry-form" name="prop_1200632" id="prop_1200632" method="post" action="https://www.chandigarhhouse.com/enquiry-form-10017.htm">
                                          <input type="hidden" name="enqtype" value="property" />
                                          <input type="hidden" name="subject" value="Inquiry For Property - 3 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (200 Sq. Yards) - REI1200632" />
                                          <input type="hidden" name="property_id" value="1200632" />
                                       </form>
                                       <a href="sell/3-bhk-individual-houses-villas-sector-79-mohali_1200632.html" class="large data c5px dib p17px pt7px pb7px">View Details</a>
                                       <a href="javascript:void(0);" class="submit-inquiry large buttonBig ts0 c5px dib p17px pt7px pb7px">Send Enquiry</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="bdr btmBtnSpace pr cp table-link box-sector-property" data-url="sell/6-bhk-individual-houses-villas-sector-79-mohali_1192415.html">
                                    <div class="pr ofh lh0">
                                       <div class="clsifd_img picBg lh0 pr">
                                          <div style="background:#9988E8" class="tac picBg dt w100 ac">
                                             <p class="dtc ac vam"><img style="margin:0;min-height: auto;width: auto;position:inherit;" src="http://catalog.wlimg.com/main-common/no-property-image.png" alt=""></p>
                                          </div>
                                       </div>
                                       <div class="abs-cont pa lh15em al p10px15px large">
                                          <h2> <a href="sell/6-bhk-individual-houses-villas-sector-79-mohali_1192415.html" title="6 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (500 Sq. Yards)">6 BHK Individual Houses / Villas For Sale In ...</a> </h2>
                                       </div>
                                       <div class="propertyId ttu p2px10px dib lh14em"> REI1192415 </div>
                                    </div>
                                    <div class="lh13em p10px al">
                                       <p class="mb10px fw6"><i class="fa fa-map-marker mr5px"></i> Sector 79 Mohali</p>
                                       <div class="mt15px">
                                          <p class="mb5px"><span class="alpha75">Bedroom</span> : 6 BHK  </p>
                                          <p class="mb5px"><span class="alpha75">Build up Area</span> : 500 Sq. Yards </p>
                                          <p class="mb5px"><span class="alpha75">Property Type</span> : Individual Houses </p>
                                       </div>
                                       <p class="mt15px al fw6"><span class="xlarge"><i class="fa fa-inr"></i> 9 Cr. </span></p>
                                    </div>
                                    <div class="mb10px small alpha75 absBtmBtn ac">
                                       <form class="inquiry-form" name="prop_1192415" id="prop_1192415" method="post" action="https://www.chandigarhhouse.com/enquiry-form-10017.htm">
                                          <input type="hidden" name="enqtype" value="property" />
                                          <input type="hidden" name="subject" value="Inquiry For Property - 6 BHK Individual Houses / Villas for Sale in Sector 79, Mohali (500 Sq. Yards) - REI1192415" />
                                          <input type="hidden" name="property_id" value="1192415" />
                                       </form>
                                       <a href="sell/6-bhk-individual-houses-villas-sector-79-mohali_1192415.html" class="large data c5px dib p17px pt7px pb7px">View Details</a>
                                       <a href="javascript:void(0);" class="submit-inquiry large buttonBig ts0 c5px dib p17px pt7px pb7px">Send Enquiry</a>
                                    </div>
                                 </div>

                           </ul>
                        </div>
                        <div id="myModal" class="modal fade dn pf" role="dialog" style="z-index:9999;left:0;top:0%;width:100%;height:100%;background-color:rgba(0,0,0,0.6);overflow-x: hidden; overflow-y: auto;">
                           <!-- Modal content-->
                           <div style="max-width:700px;margin-top: 50px;min-height:400px;" class="modal-content data m0a p10px pr">
                              <div class="modal-header">
                                 <a style="right:25px;top:25px;color: #fff;" class="pa b xlarge" data-dismiss="modal"><span class="xlarge">&times;</span></a>	        
                              </div>
                              <div class="modal-body">
                                 <p>Loading...</p>
                              </div>
                              <div class="modal-footer">
                              </div>
                           </div>
                        </div>
                        <script type="text/javascript">
                           jQuery(document).ready(function(){
                           	jQuery(document).on("click", ".submit-inquiry" , function(e){e.stopPropagation()
                           		var form = jQuery(this).parent().find(".inquiry-form");
                           		if(form.length){
                           			jQuery.ajax({
                           				url: form.attr("action"),
                           				type: form.attr("method"),
                           				data:form.serialize(),
                           				crossDomain:true,
                           				success:function(res){
                           					jQuery("#myModal .modal-body").html(res);
                           				}
                           			});
                           		}
                           	});
                           	jQuery(document).on("click", "[data-dismiss=modal]", function(){
                           		jQuery("#myModal .modal-body").html("<p>Loading...</p>");
                           		jQuery("#myModal").hide();
                           	});
                           	jQuery(document).on("submit", "form[name=static_form]", function(e){				
                           		e.preventDefault();
                           		var isValidForm =static_inq_form_validate(jQuery(this).attr("form-id"));
                           		if(isValidForm == undefined){
                           			var form = jQuery(this);
                           			if(form.length){
                           				jQuery.ajax({
                           					url: form.attr("action"),
                           					type: form.attr("method"),
                           					data:form.serialize(),
                           					crossDomain:true,
                           					beforeSend:function(){
                           						jQuery("#myModal .modal-footer").html("");
                           					},
                           					success:function(res){
                           						jQuery("#myModal .modal-body").html(res);
                           						setTimeout(function(){
                           							jQuery("#myModal", document).hide();
                           							jQuery("#myModal .modal-body").html("<p>Loading...</p>");
                           							},2000)
                           					}
                           				});
                           			}
                           		}
                           	});
                           	var modal = jQuery("#myModal", document);
                           
                           	jQuery(document).on("click", ".submit-inquiry" , function(){
                           	    modal.show();
                           	});
                           
                           	window.onclick = function(event) {
                           	    if (jQuery(event.target) == modal) {
                           	        modal.css("display","none");
                           	    }
                           	}
                           });
                           
                           jQuery(document).on('click', '.table-link', function() {
                                var dg = jQuery(this).data('url');
                                jQuery(this).append('<a class="ps_c" href="' + dg + '" />');
                                jQuery('a.ps_c', this)[0].click();
                                jQuery('.ps_c', this).remove();
                            })
                            jQuery(document).on('click', '.table-link a',function(e){
                              e.stopPropagation();
                            });
                        </script>
                     </div>
                     <div class="col-3 thinColumn">
                        <!--MIDDLE ROW1 COL-1 STARTS-->
                        <div class="column_Box mc">
                           <div class="tcl bullet divider">
                              <div class="h h2">
                                 <b class="plusMinus"></b>
                                 <p class="b dif rHead">Property by Category</p>
                              </div>
                              <div class="ic showHide_rp">
                                 <div>
                                    <span class="db p5px10px c2px mr7px mb7px ">
                                       <a href="individual-house-for-sale-in-sector-79-mohali.html" class="dif " title="Individual Houses for Sale in Sector 79 Mohali">Individual Houses</a> <b class="alpha50 bn small">(22)</b>
                                       <p class="uu small">
                                          <a href="2-bhk-individual-house-for-sale-in-sector-79-mohali.html" class="" title="2 BHK Individual Houses for Sale in Sector 79 Mohali">2 BHK</a> | 
                                          <a href="3-bhk-individual-house-for-sale-in-sector-79-mohali.html" class="" title="3 BHK Individual Houses for Sale in Sector 79 Mohali">3 BHK</a> | 
                                          <a href="5-bhk-individual-house-for-sale-in-sector-79-mohali.html" class="" title="5 BHK Individual Houses for Sale in Sector 79 Mohali">5 BHK</a> | 
                                          <a href="6-bhk-individual-house-for-sale-in-sector-79-mohali.html" class="" title="6 BHK Individual Houses for Sale in Sector 79 Mohali">6 BHK</a> | 
                                          <a href="1-rk-individual-house-for-sale-in-sector-79-mohali.html" class="" title="1 RK Individual Houses for Sale in Sector 79 Mohali">1 RK</a>		
                                       </p>
                                    </span>
                                    <span class="db p5px10px c2px mr7px mb7px bdrT">
                                       <a href="builder-floor-for-sale-in-sector-79-mohali.html" class="dif " title="Builder Floor for Sale in Sector 79 Mohali">Builder Floor</a> <b class="alpha50 bn small">(3)</b>
                                       <p class="uu small">
                                          <a href="3-bhk-builder-floor-for-sale-in-sector-79-mohali.html" class="" title="3 BHK Builder Floor for Sale in Sector 79 Mohali">3 BHK</a> | 
                                          <a href="1-rk-builder-floor-for-sale-in-sector-79-mohali.html" class="" title="1 RK Builder Floor for Sale in Sector 79 Mohali">1 RK</a>		
                                       </p>
                                    </span>
                                    <span class="db p5px10px c2px mr7px mb7px bdrT"><a href="residential-land-for-sale-in-sector-79-mohali.html" class="dif " title="Residential Plot for Sale in Sector 79 Mohali">Residential Plot</a> <b class="alpha50 bn small">(3)</b>
                                    </span>
                                    <span class="db p5px10px c2px mr7px mb7px bdrT">
                                       <a href="flats-apartments-for-sale-in-sector-79-mohali.html" class="dif " title="Flats & Apartments for Sale in Sector 79 Mohali">Flats & Apartments</a> <b class="alpha50 bn small">(1)</b>
                                       <p class="uu small">
                                          <a href="4-bhk-flats-apartments-for-sale-in-sector-79-mohali.html" class="" title="4 BHK Flats & Apartments for Sale in Sector 79 Mohali">4 BHK</a>		
                                       </p>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="column_Box mc">
                           <div class="tcl bullet divider">
                              <div class="h h2">
                                 <b class="plusMinus"></b>
                                 <p class="b dif rHead">Locations in Mohali</p>
                              </div>
                              <div class="ic showHide_rp">
                                 <div class="mt10px">
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-for-sale-in-sector-79-mohali.html" class="dif b" title="Property for Sale in Sector 79 Mohali">Sector 79</a> <b class="alpha50 bn small">(29)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-for-sale-in-phase-10-mohali.html" class="dif " title="Property for Sale in Phase 10, Mohali">Phase 10</a> <b class="alpha50 bn small">(13)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-for-sale-in-sector-69-mohali.html" class="dif " title="Property for Sale in Sector 69 Mohali">Sector 69</a> <b class="alpha50 bn small">(11)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-for-sale-in-sector-70-mohali.html" class="dif " title="Property for Sale in Sector 70 Mohali">Sector 70</a> <b class="alpha50 bn small">(10)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-for-sale-in-aerocity-mohali.html" class="dif " title="Property for Sale in Aerocity, Mohali">Aerocity</a> <b class="alpha50 bn small">(10)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-for-sale-in-sector-68-mohali.html" class="dif " title="Property for Sale in Sector 68 Mohali">Sector 68</a> <b class="alpha50 bn small">(8)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-for-sale-in-phase-4-mohali.html" class="dif " title="Property for Sale in Phase 4, Mohali">Phase 4</a> <b class="alpha50 bn small">(7)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-for-sale-in-phase-7-mohali.html" class="dif " title="Property for Sale in Phase 7, Mohali">Phase 7</a> <b class="alpha50 bn small">(7)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-for-sale-in-phase-3b-1-mohali.html" class="dif " title="Property for Sale in Phase 3B-1, Mohali">Phase 3B-1</a> <b class="alpha50 bn small">(7)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-for-sale-in-sector-66a-mohali.html" class="dif " title="Property for Sale in Sector 66A Mohali">Sector 66A</a> <b class="alpha50 bn small">(6)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-phase-7-sector-61-mohali.html" class="dif " title="Property for Sale in Phase 7 Sector 61, Mohali">Phase 7 Sector 61</a> <b class="alpha50 bn small">(5)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-91-mohali.html" class="dif " title="Property for Sale in Sector 91 Mohali">Sector 91</a> <b class="alpha50 bn small">(5)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-phase-3a-mohali.html" class="dif " title="Property for Sale in Phase 3A, Mohali">Phase 3A</a> <b class="alpha50 bn small">(5)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-71-mohali.html" class="dif " title="Property for Sale in Sector 71 Mohali">Sector 71</a> <b class="alpha50 bn small">(5)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-88-mohali.html" class="dif " title="Property for Sale in Sector 88 Mohali">Sector 88</a> <b class="alpha50 bn small">(4)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-phase-1-mohali.html" class="dif " title="Property for Sale in Phase 1, Mohali">Phase 1</a> <b class="alpha50 bn small">(4)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sahibzada-ajit-singh-nagar-mohali.html" class="dif " title="Property for Sale in Sahibzada Ajit Singh Nagar, Mohali">Sahibzada Ajit Singh Nagar</a> <b class="alpha50 bn small">(4)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-78-mohali.html" class="dif " title="Property for Sale in Sector 78 Mohali">Sector 78</a> <b class="alpha50 bn small">(4)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-phase-11-mohali.html" class="dif " title="Property for Sale in Phase 11, Mohali">Phase 11</a> <b class="alpha50 bn small">(4)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-89-mohali.html" class="dif " title="Property for Sale in Sector 89, Mohali">Sector 89</a> <b class="alpha50 bn small">(4)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-phase-2-mohali.html" class="dif " title="Property for Sale in Phase 2, Mohali">Phase 2</a> <b class="alpha50 bn small">(3)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-54-mohali.html" class="dif " title="Property for Sale in Sector 54, Mohali">Sector 54</a> <b class="alpha50 bn small">(2)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sas-nagar-phase-3a-mohali.html" class="dif " title="Property for Sale in SAS Nagar Phase 3a, Mohali">SAS Nagar Phase 3a</a> <b class="alpha50 bn small">(2)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-77-mohali.html" class="dif " title="Property for Sale in Sector 77 Mohali">Sector 77</a> <b class="alpha50 bn small">(2)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-phase-3b2-mohali.html" class="dif " title="Property for Sale in Phase 3B2, Mohali">Phase 3B2</a> <b class="alpha50 bn small">(2)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-90-mohali.html" class="dif " title="Property for Sale in Sector 90 Mohali">Sector 90</a> <b class="alpha50 bn small">(2)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-phase-3-mohali.html" class="dif " title="Property for Sale in Phase 3, Mohali">Phase 3</a> <b class="alpha50 bn small">(2)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-66-mohali.html" class="dif " title="Property for Sale in Sector 66 Mohali">Sector 66</a> <b class="alpha50 bn small">(2)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-80-mohali.html" class="dif " title="Property for Sale in Sector 80 Mohali">Sector 80</a> <b class="alpha50 bn small">(2)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-phase-5-mohali.html" class="dif " title="Property for Sale in Phase 5, Mohali">Phase 5</a> <b class="alpha50 bn small">(2)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sas-nagar-phase-10-mohali.html" class="dif " title="Property for Sale in Sas Nagar Phase 10, Mohali">Sas Nagar Phase 10</a> <b class="alpha50 bn small">(2)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-67-mohali.html" class="dif " title="Property for Sale in Sector 67 Mohali">Sector 67</a> <b class="alpha50 bn small">(2)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sas-nagar-phase-2-mohali.html" class="dif " title="Property for Sale in Sas Nagar Phase 2, Mohali">Sas Nagar Phase 2</a> <b class="alpha50 bn small">(1)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-123-mohali.html" class="dif " title="Property for Sale in Sector 123 Mohali">Sector 123</a> <b class="alpha50 bn small">(1)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sas-nagar-phase-11-mohali.html" class="dif " title="Property for Sale in SAS Nagar Phase 11, Mohali">SAS Nagar Phase 11</a> <b class="alpha50 bn small">(1)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-phase-8b-sector-74-mohali.html" class="dif " title="Property for Sale in Phase 8B, Sector 74, Mohali">Phase 8B, Sector 74</a> <b class="alpha50 bn small">(1)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-phase-8b-mohali.html" class="dif " title="Property for Sale in Phase 8b, Mohali">Phase 8b</a> <b class="alpha50 bn small">(1)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-94-mohali.html" class="dif " title="Property for Sale in Sector 94 Mohali">Sector 94</a> <b class="alpha50 bn small">(1)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px spanlist dn"><a href="property-for-sale-in-sector-60-mohali.html" class="dif " title="Property for Sale in Sector 60 Mohali">Sector 60</a> <b class="alpha50 bn small">(1)</b></span>
                                    <span class="uu db ar"><a class="showallspan" data-target="show" href="javascript:void(0)" >View More</a></span>		
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="column_Box mc">
                           <div class="tcl bullet divider">
                              <div class="h h2">
                                 <b class="plusMinus"></b>
                                 <p class="b dif rHead">Property by City</p>
                              </div>
                              <div class="ic showHide_rp">
                                 <div class="mt10px">
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-in-mohali.html" class="dif " title="Property in Mohali">Mohali</a> <b class="alpha50 bn small">(244)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-in-chandigarh.html" class="dif " title="Property in Chandigarh">Chandigarh</a> <b class="alpha50 bn small">(3)</b></span>
                                    <span class="dib p5px10px c2px headVr mr7px mb7px "><a href="property-in-faridabad.html" class="dif " title="Property in Faridabad">Faridabad</a> <b class="alpha50 bn small">(1)</b></span>		
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <script>
                     window.addEventListener("DOMContentLoaded", function(){
                     	jQuery(document).on("click", ".showallspan", function(){
                     		if(jQuery(this).attr("data-target") === 'show'){
                     			jQuery(this).text("View Less");
                     			jQuery(this).attr("data-target", "hide");
                     			jQuery(this).closest("div").find(".spanlist").removeClass("dn");
                     		}else{
                     			jQuery(this).text("View More");
                     			jQuery(this).attr("data-target", "show");
                     			jQuery(this).closest("div").find(".spanlist").addClass("dn");
                     		}
                     	});
                     });
                  </script>	
               </div>
               <script>
                  var propSearchUrl = 'https://www.realestateindia.com/catalog-scripts/resp-catalog-property-classifieds.php';
                  (function($){
                  	function handleFileterResponse(url){
                  	$.ajax({
                  		url:url,
                  		type:'get',
                  		crossDomain: true,
                  		success:function(res){
                  			console.log("Res", res);
                  			$("#search_filter_data",document).html(res);
                  		}
                  	});
                  }
                  document.addEventListener("DOMContentLoaded", function(event) {
                  		(function($){
                  			$(document).on('submit', 'form[name=prop_search]', function(e){
                  				e.preventDefault();
                  				var form = $(this);
                  				var options = {
                  					url:propSearchUrl,
                  					data:form.serialize(),
                  					type:'post',
                  					crossDomain: true,
                  					beforeSend:function(){
                  						$(".wideColumn", document).html('<div id="search_filter_load" class="ac pt30px"><h2 style="font-size: 16px;">Loading...</h2></div>');
                  					},
                  					success:handleFileterResponse
                  				};
                  				$.ajax(options);
                  			});
                  		})(jQuery);
                  	});
                  })(jQuery);
               </script>
               <!-- footer -->
               <br style="content:'';display:inline-block;width:100%;height:15px;" />
            </div>
         </div>


@include('FrontendPages.partials.footer')

@endsection