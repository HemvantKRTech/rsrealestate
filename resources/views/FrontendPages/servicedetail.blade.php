@extends('layouts.app') @section('content') @include('FrontendPages.partials.header')
@section('title', 'Service Detail ')
<section class="headBg theme2 bread-right">
    <div class="wrap">
        <div class="page-title-inner fo">
            <!-- header ends -->

            <div class="h1">
                <h1>Buying Property in Mohali</h1>
            </div>
            <p class="breadcrumb ar uu small"><a href="index.html" title="Home">Home</a> <b class="ffv p2px">›</b> Buying Property In Mohali</p>
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
                        <div class="h h2"><b class="plusMinus"></b>
                            <p class="b dif rHead">Hot Property</p>
                        </div>
                        <div class="ic showHide_rp">
                            <ul>
                                @foreach ($hotProperties as $item)
                                <li><b class="b2 fl"></b>
                                    <p class="ofh"><a href="{{route('propertydetail',$item->id)}}" title="{{$item->ad_title}} for {{$item->category->name}} in{{$item->sector->name}}, {{$item->city->name}}">{{$item->ad_title}} for {{$item->category->name}} in{{$item->sector->name}}, {{$item->city->name}}</a></p>
                                </li> 
                                @endforeach
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column_Box mc thinColumnLink dif">
                    <div class="tcl bullet divider">
                        <div class="h h2"><b class="plusMinus"></b>
                            <p class="b dif rHead">Property By City</p>
                        </div>
                        <div class="ic showHide_rp">
                            <ul>
                                @foreach ($city as $item)
                                <li><b class="b2 fl"></b>
                                    <p class="ofh"><a href="{{route('city.details',$item->name)}}" title="Property in {{$item->name}}">Property in {{$item->name}}</a></p>
                                </li>
                                @endforeach
                                
                                {{-- <li><b class="b2 fl"></b>
                                    <p class="ofh"><a href="property-in-mohali.html" title="Property in Mohali">Property in Mohali</a></p>
                                </li>
                                <li><b class="b2 fl"></b>
                                    <p class="ofh"><a href="property-in-zirakpur.html" title="Property in Zirakpur">Property in Zirakpur</a></p>
                                </li> --}}
                            </ul>
                            <p class="cb"></p>
                        </div>
                    </div>
                </div>
                <div class="column_Box mc qc">
                    <div class="h h2"><b class="plusMinus"></b>
                        <p class="b dif rHead">Contact Us</p>
                    </div>
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

                <div class="pdf">
                    <div class="ac">
                        <table class="frwm">
                            <tbody>
                                <tr>
                                    <td><img loading="lazy" src="{{ asset('storage/' . $service->feature_image) }}"
                                        class="bdr bw5px p1px" style="width:100%;max-width: 400px;max-height: 400px;" alt="Buying Property in Mohali" title="Buying Property in Mohali"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="aj large lh17em">
                        <p>{!! $service->service_content !!}.</p>
                    </div>
                    <p class="cb"></p>
                    <br> @if (session('status'))
                    <p>{{ session('status') }}</p>
                    @endif
                    <form name="static_form" method="post" action="{{ route('inquiries.store') }}" onsubmit="return static_inq_form_validate(10007);" enctype="multipart/form-data" class="inputs-p7px inputs-br5px inputs-bs10px">
                        @csrf
                        <input type="hidden" name="enquiry_submission_section" value="products">
                        <input type="hidden" name="subject" value="Buying Property">
                        <input type="hidden" name="enqtype" value="enquiry">
                        <input type="hidden" name="desc_valid" value="Y">
                        <div class="enquiry-form p12px"><span class="fr"><span class="star">*</span> fields are mandatory</span>
                            <span class="xlarge">Enquiry Details</span></div>

                        <div class="post_frm headVr p15px pt7px">

                            <div class="rowFlex mt10px">
                                <div class="col-flx-33 ar fw6"><span class="pt7px pb5px db"><b class="star">*</b> Your Name <b class="pl5px">:</b></span></div>
                                <div class="col-flx-66">
                                    <div class="post_frm_box">
                                        <input type="text" name="dynFrm_contact_person" id="dyn_contact_person" value="" class="input">
                                        <span class="red small"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="rowFlex mt10px">
                                <div class="col-flx-33 ar fw6"><span class="pt7px pb5px db"><b class="star">*</b> E-mail <b class="pl5px">:</b></span></div>
                                <div class="col-flx-66">
                                    <div class="post_frm_box">
                                        <input type="text" name="dynFrm_email_id" id="dyn_email_id" value="" class="input">
                                        <span class="red small"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="rowFlex mt10px">
                                <div class="col-flx-33 ar fw6"><span class="pt7px pb5px db"><b class="star">*</b> Phone <b class="pl5px">:</b></span></div>
                                <div class="col-flx-66">
                                    <div class="post_frm_box">
                                        <input type="number" name="dynFrm_phone" value="" class="input">
                                        <span class="red small"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="rowFlex mt10px">
                                <div class="col-flx-33 ar fw6"><span class="pt7px pb5px db"><b class="star">*</b> Description <b class="pl5px">:</b></span></div>
                                <div class="col-flx-66">
                                    <div class="post_frm_box">
                                        <textarea name="dynFrm_details_2" id="dyn_details_2" maxlength="1000" rows="3"></textarea>
                                        <span class="red small"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="rowFlex mt10px">
                                <div class="col-flx-33 ar"></div>
                                <div class="col-flx-66">
                                    <input type="submit" name="submit" value="Submit" class="button p10px pl15px pr15px b">
                                    <input type="reset" name="reset" value="Reset" class="resetbtn p10px pl15px pr15px b">
                                </div>
                            </div>
                        </div>
                        <script src="http://catalog.wlimg.com/main-common/intlTelInput.js"></script>
                        <link href="http://catalog.wlimg.com/main-common/intlTelInput.css" rel="stylesheet">
                        <script>
                            jQuery("#phone_popup").bind('keydown',function (e) {
                            			// Allow : backspace, delete, tab, escape, enter and .
                            			if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                            				 // Allow : Ctrl+A, Command+A
                            				(e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
                            				 // Allow : home, end, left, right, down, up
                            				(e.keyCode >= 35 && e.keyCode <= 40)) {
                            					 // let it happen, don't do anything
                            					 return;
                            			}
                            			// Ensure that it is a number and stop the keypress
                            			if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                            				e.preventDefault();
                            			}
                            		}).intlTelInput({
                            		   geoIpLookup : function(callback) {
                            			 jQuery.get("https://ipinfo.io/", function() {}, "jsonp").always(function(resp) {
                            			   var countryCode = (resp && resp.country) ? resp.country  : "";
                            			   callback(countryCode);
                            			 });
                            		   },
                            		   initialCountry : "in"
                            		})
                            		jQuery(document).ready(function(){jQuery(".country-list li").click(function(){var DG=jQuery(this).attr('data-country-code').toUpperCase()+'^'+jQuery(this).attr("data-dial-code");jQuery("input[id=country_code_quote]").val(DG)})})
                        </script>
                        <input type="hidden" name="current_url" value="https://www.chandigarhhouse.com/buying-property-in-mohali.htm">
                        <input type="hidden" name="web_address" value="https://www.chandigarhhouse.com">
                        <input type="hidden" name="inq_thanks_msg" value="Thank you for inquiry.<br /><br />We have received your business request. Our Sales Team will soon get in touch with you.<br /><br /><br />">
                        <input type="hidden" name="inq_thanks_title" value="Enquiry">
                        <input type="hidden" name="redirected_url" value="https://www.chandigarhhouse.com/thanks.htm">
                        <input type="hidden" name="catalog_mi" value="88260">
                        <input type="hidden" name="id" value="static_form">
                        <input type="hidden" name="form_id" value="10007">
                    </form>
                </div>
                <br>
                <section class="pt20px pb10px topRightArrow bx1">
                    <div class="fo">
                        <div class="ac mb7px">
                            <div>
                                <h2 class="hd_NT">Explore More Services</h2>
                            </div>
                        </div>
                        <div class="ic" id="1102_3-1">
                            <div class="slider idv_eqheight">
                                <div class="bx-wrapper" style="max-width: 1117px;">
                                    <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 299px;">
                                        <ul class="bxslider987" style="width: 715%; position: relative; transition-duration: 1s;">
                                            @foreach($allservices as $service)
                                                <li class="ac cp" onclick="location.href='{{ route('service.show', $service->slug) }}';" style="float: left; list-style: none; position: relative; width: 268px; margin-right: 15px; height: 299px;">
                                                    <div class="data p10px" style="height: 277.4px;">
                                                        <div class="dib">
                                                            <div class="imgFrame w250px h200px m0a">
                                                                <div class="imgFrame w250px h200px picBg dtc ac vam lh0">
                                                                    <a href="{{ route('service.show', $service->slug) }}" title="">
                                                                        <img src="{{ asset('storage/' .$service->feature_image) }}" class="m0a" alt="{{ $service->service_name }}" title="{{ $service->service_name }}" style="max-width:100%; max-height:100%">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="dif b h xlarge pl5px pr5px lh12em mt10px">
                                                                <a href="{{ route('service.show', $service->slug) }}" title="">{{ $service->service_name }}</a>
                                                            </div>
                                                            <div class="mt15px">
                                                                <a class="buttonBig p5px15px ts0 br3px" href="{{ route('service.show', $service->slug) }}" title="">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="bx-controls bx-has-pager">
                                        <div class="bx-pager bx-default-pager">
                                            @foreach($allservices as $index => $service)
                                                <div class="bx-pager-item">
                                                    <a href="" data-slide-index="{{ $index }}" class="bx-pager-link">{{ $index + 1 }}</a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $('.bxslider987').bxSlider({
                                        mode: 'horizontal',
                                        slideWidth: 268,
                                        infiniteLoop: false,
                                        minSlides: 1,
                                        maxSlides: 4,
                                        slideMargin: 15,
                                        auto: true,
                                        autoDirection: 'next',
                                        moveSlides: 1,
                                        pause: 3000,
                                        pager: true,
                                        pagerType: 'full',
                                        autoControls: false,
                                        controls: false,
                                        autoHover: true,
                                        speed: 1000
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </section>
                
                <!-- footer -->
            </div>
        </div>
        <br style="content:'';display:inline-block;width:100%;height:15px;">
    </div>
</div>

@include('FrontendPages.partials.footer') @endsection