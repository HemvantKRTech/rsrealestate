@extends('layouts.app')
@section('content')
@include('FrontendPages.partials.header')
@section('title', 'Contact Us')
<div id="middle">
    <section class="headBg theme2 bread-right">
       <div class="wrap">
        <div class="page-title-inner fo"> 
        <!-- header ends -->
            <p class="breadcrumb ar uu small"><a href="index.html" title="Home">Home</a> <b class="ffv p2px">›</b> Contact Us</p>
            <!-- footer -->
       </div>
     </div>
    </section>
        <div id="bodyFormatNT" class="wrap  ip ls">	
            <br style="content:'';display:inline-block;width:100%;height:15px;">
        <!-- header ends -->
            
                <div class="row1 bdr dt columns12 contFull ">
                <div class="col-1 headVr width50 bdr0">
                <div class="p30px pr7px contact-form-padding">
                    <div style="margin-bottom:0;" class="h1"><h1>ARORA ESTATES </h1>
                    <p><span class="btmBdr theme2 dib w75px pt2px"></span></p></div>							
                    <div class="contView">
                    
                    <div class="pt15px pb15px">
                    <div class="df-dt">
                    <div class="df-dtc w50px"><div class="theme2 dib contVicon w30px h35px pl7px pr7px p5px pr c30px"><i class="fa fa-user xxlarge"></i> </div></div>
                    <div class="df-dtc vam pl10px"> 
                    <p class="xlarge fw6 mb7px ffpp contHd">Contact Person</p>
                    <p class="alpha75">Mr. Arora Ji</p>
                    </div>
                    </div></div>
                    
                    <div class="bdrT dashed"></div>	
                    <div class="pt15px pb15px">
                    <div class="df-dt">
                    <div class="df-dtc w50px"><div class="theme2 dib contVicon w30px h35px pl7px pr7px p5px pr c30px"><i class="fa fa-map-marker xxlarge"></i> </div></div>
                    <div class="df-dtc vam pl10px"> 
                    <p class="xlarge fw6 mb7px ffpp contHd">Address</p>
                    <p class="alpha75">{{$sitesetting->address}}</p>
                    </div>
                    </div></div>	
                            <div class="bdrT dashed"></div>					
                            <div class="pt15px pb15px">
                            <div class="df-dt">
                            <div class="df-dtc w50px"><div class="theme2 dib contVicon w30px h35px pl7px pr7px p5px pr c30px"><i class="fa fa-mobile xxxlarge"></i> </div></div>
                            <div class="df-dtc vam pl10px"> 
                            <p class="xlarge fw6 mb7px ffpp contHd">Call Us</p>
                            <p class="alpha75">+91-{{$sitesetting->mobile}}</p>
                            </div>
                            </div></div>
                        <div class="bdrT dashed"></div>
                        <div class="pt15px pb15px">
                        <div class="df-dt">
                        <div class="df-dtc w50px"><div class="theme2 dib contVicon w30px h35px pl7px pr7px p5px pr c30px"><i class="fa fa-vphone xxlarge"></i> </div></div>
                        <div class="df-dtc vam pl10px"> 
                        <p class="xlarge fw6 mb7px ffpp contHd">Call Us</p>
                        <p class="alpha75 lh12em"><span class="xlarge dif fw6">0{{$sitesetting->calling_mobile}}</span>
                        </p>
                        <p class="alpha75 small"></p>
                        </div>
                        </div></div>
                                <div class="bdrT dashed"></div>
                                <div class="pt15px pb15px">
                                <div class="df-dt">
                                <div class="df-dtc w50px"><div class="theme2 dib contVicon w30px h35px pl7px pr7px p5px pr c30px"><i class="fa fa-envelope xxlarge"></i> </div></div>
                                <div class="df-dtc vam pl10px"> 
                                <p class="xlarge fw6 mb7px ffpp contHd">Email</p>
                                <p class="alpha75"><a href="#" class="hover">{{$sitesetting->email}}</a></p>
                                </div>
                                </div></div>
                            <div class="bdrT dashed"></div>
                            <div class="pt15px pb15px">
                            <div class="df-dt">
                            <div class="df-dtc w50px"><div class="theme2 dib contVicon w30px h35px pl7px pr7px p5px pr c30px"><i class="fa fa-building-o xxlarge"></i> </div></div>
                            <div class="df-dtc vam pl10px"> 
                            <p class="xlarge fw6 mb7px ffpp contHd">RERA No.</p>
                            <p class="alpha75">PBRERA-SAS81-REA1294</p>
                            </div>
                            </div></div>
                </div>
                </div>
                </div>
                <div class="col-2 data bdr0">
                    <div class="fo p30px">   
                    
                    <div class="large hp_full_inquiry" style="width:100%;margin-top:0px;">
                        @if (session('status'))
                        <p>{{ session('status') }}</p>
                    @endif
                <form name="Quick_Inquiry_REI" method="post" action="{{route('contacts.store')}}" onsubmit="return dynamic_form_validation(this);" enctype="multipart/form-data">
                    @csrf
                <input type="hidden" name="enquiry_submission_section" value="contact">
                <input type="hidden" name="subject" value="Send Inquiry"><div class="db mb5px">Name <span class="star xsmall">*</span></div><div class="mb17px"><input type="text" name="dynFrm_name" value="" size="20" maxlength="90" class="input w120px" id="r_please-fill-your-name."> </div><div class="db mb5px">Address </div><div class="mb17px"><input type="text" name="dynFrm_address" value="" size="20" maxlength="90" class="input w120px"> </div><div class="db mb5px">E-mail <span class="star xsmall">*</span></div><div class="mb17px"><input type="text" name="dynFrm_e_mail" value="" size="20" maxlength="90" class="input w120px" id="rp-4_please-fill-your-email-address."> </div><div class="db mb5px">Cell / Ph. <span class="star xsmall">*</span></div><div class="mb17px"><input type="text" name="dynFrm_cell_ph" value="" size="20" maxlength="90" class="input w120px" id="rp-5_please-fill-your-mobile-number."> </div><div class="db mb5px">Country <span class="star xsmall">*</span></div><div class="mb17px">
                                <script type="text/javascript">
                                jQuery(window).load(function () {
                                showcountrylist("Quick_Inquiry_REI","dynFrm_country","");
                                })
                                </script>
                                <select class="w120px" name="dynFrm_country" id="r_please-select-your-country.">
                                <option value="">Select Country</option>
                                <option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BS">Bassas da India</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="MM">Burma/Myanmar</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote d'Ivoire/Ivory Coast</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech</option><option value="CD">Democratic Republic of the Congo</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="EU">Europa Island</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="FR">French Southern and Antarctic Lands</option><option value="ZD">Fyro Macedonia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GZ">Gaza Strip</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="RG">Gibraltar</option><option value="GO">Glorioso Islands</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="VA">Holy See (Vatican City)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="JO">Juan de Nova Island</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KR">Korea, South</option><option value="KP">North Korea</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="IB">Man, Isle of</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MW">Midway Islands</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="ME">Montenegro(Karadag)</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="VL">Navassa Island</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NFK">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PK">Palau</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PCN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="SD">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TE">Tromelin Island</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UY">Uruguay</option><option value="VI">US Virgin Islands</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VN">Vietnam</option><option value="VE">Venezuela</option><option value="WQ">Wake Island</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select></div><div class="db mb5px">I want to </div><div class="mb17px"><select name="dynFrm_i_want_to" class="w120px">
            <option value="Buy a Property" selected="selected">Buy a Property</option>
            <option value="Rent-IN Property">Rent-IN Property</option>
            <option value="Rent-Out Property">Rent-Out Property</option>
            <option value="Sell a Property">Sell a Property</option></select></div><div class="db mb5px">Detail </div><div class="mb17px"><textarea name="dynFrm_detail" cols="30" rows="5" class="input w120px" maxlength="1000"></textarea></div>
                <div class="mb10px sub-center"><input type="submit" name="submit" value="Submit" class="button">&nbsp;&nbsp;&nbsp;
            <input type="hidden" name="username" value="chadha_in@yahoo.com">
            <input type="hidden" name="catalog_mi" value="88260">
              <input type="hidden" name="redirected_url" value="https://www.chandigarhhouse.com/thanks.htm"><input type="hidden" name="referrer" value="">
              <input type="hidden" name="web_address" value="https://www.chandigarhhouse.com">
              <input type="hidden" name="enqtype" value="enquiry">
              <input type="hidden" name="form_type" value="enquiry">
              <input type="hidden" name="storedb" value="y">
              <input type="hidden" name="form_id" value="21">
              <input type="hidden" name="inq_thanks_msg" value="Thank you for inquiry.<br /><br />We have received your business request. Our Sales Team will soon get in touch with you.<br /><br /><br />">
              <input type="hidden" name="inq_thanks_title" value="Enquiry"><input type="hidden" name="formArr_Name" value="dynFrm_name~~your_name"><input type="hidden" name="formArr_Address" value="dynFrm_address~~address"><input type="hidden" name="formArr_E-mail" value="dynFrm_e_mail~~username"><input type="hidden" name="formArr_Cell / Ph." value="dynFrm_cell_ph~~phone"><input type="hidden" name="formArr_Country" value="dynFrm_country~~country"><input type="hidden" name="formArr_I want to" value="dynFrm_i_want_to~~"><input type="hidden" name="formArr_Detail" value="dynFrm_detail~~message_detail">
                            <input type="hidden" name="formValArr[dynFrm_name]" value="Please Fill Your Name.~~~1">
                            <input type="hidden" name="formValArr[dynFrm_e_mail]" value="Please Fill Your Email Address.~~~4">
                            <input type="hidden" name="formValArr[dynFrm_cell_ph]" value="Please Fill Your Mobile Number.~~~5">
                            <input type="hidden" name="formValArr[dynFrm_country]" value="Please select Your Country.~~~1"></div>
                </form>
                    </div>
                    </div>
                </div>
                </div>
            <!-- footer -->
        <br style="content:'';display:inline-block;width:100%;height:15px;">
        </div>
    </div>

   @include('FrontendPages.partials.footer')

@endsection
