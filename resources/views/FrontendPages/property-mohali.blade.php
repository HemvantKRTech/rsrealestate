@extends('layouts.app')
@section('content')
@include('FrontendPages.partials.header')
@section('title', 'City Property')
<div id="middle">
   <div class="wrap">
      <div class="mohali-content-post">
         <div class="aj large lh17em">Mohali is one of the most popular towns in the Northern part of India, situated in Punjab. The city is a commercial hub lying south-west of Chandigarh and is well-equipped with transportation facilities where you will be stay connected with all the major places of the region. As the city is developing rapidly as an IT hub of the state and is a well-known industrial hub, a large number of people are shifting in the city for their livelihood and thus, the demand for property for sale and rent in Mohali is rising every day. Mohali has obtained a healthy demand for residential and commercial properties due to the availability of quality houses, flats, or commercial properties in all budget categories. Investors get several options in the city to choose from gated communities to villas and high-end apartments.<br>
            <br>
            In order to meet this demand, we at R S Real Estate are highly involved in providing affordable properties for sale and rent in the best locations in Mohali. As an efficient real estate agent in Mohali, we are having complete information about the area and property rates around. With the motto to provide ease in all real estate operations, we are engaged in rendering the services with flexible and hassle-free management.<br>
            <br>
            We are prominent in providing properties for sale and rent in Mohali. Our company has a comprehensive range of property listings. We can help to get the finest properties in best locations in Mohali. Our offered properties include residential plot for sale in IT city Mohali, Industrial and Commercial plot for sale in IT city Mohali, and many more.<br>
            <br>
            Our company is backed with a team of professionals and functions on the fundamental trust, expertise, and transparency. With the objective to provide ease in all real estate operations, we at R S Real Estate have been successful in establishing ourselves with a solid base. Our professionals are immensely engaged in solving the queries of the clients and also assist in getting property loans and property registration. Browse through our verified properties to get affordable properties for sale or rent in Mohali.
         </div>
         <div class="mohali-post">
            <div class="hot-property">
               <div class="col-1 thinColumn">
                  <div class="column_Box mc thinColumnLink">
                     <div class="tcl bullet divider uu">
                        <div class="h h2">
                           <b class="plusMinus"></b> 
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
                        <div class="h h2">
                           <b class="plusMinus"></b> 
                           <p class="b dif rHead">Property By City</p>
                        </div>
                        <div class="ic showHide_rp">
                           <ul>
                              @foreach ($sectors as $item)
                              <li>
                                 <b class="b2 fl"></b>
                                 <p class="ofh"><a href="property-in-manimajra.html"   title="Property in Manimajra" >Property in {{$item->name}}</a></p>
                              </li>  
                              @endforeach
                              
                             
                           </ul>
                           <p class="cb"></p>
                        </div>
                     </div>
                  </div>
                  <div class="column_Box mc qc">
                     <div class="h h2">
                        <b class="plusMinus"></b> 
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
            </div>
            <div class="mohali-property-post">
               <section class="two-row-section">
                  <!-- First Row -->
                  <div class="row">
                     @foreach ($properties as $item)
                     @php
                         // Decode the images JSON and get the first image or use a default image if none exists
                         $images = json_decode($item->images);
                         $image = !empty($images) && count($images) > 0 ? asset('storage/' . $images[0]) : 'https://rei.wlimg.com/prop_images/88260/1290327_1-350x350.jpg';
                     @endphp
                     <div class="box">
                         <div class="imgWidth" style="background-image:url('{{ $image }}');background-size:cover;background-position:center;width:100%;height:260px;overflow:hidden;border-radius: 10px;">
                             <img loading="lazy" src="{{ $image }}" width="350" height="262" alt="{{ $item->ad_title }}" style="max-height:150px;max-width:150px;z-index: -1;margin-left: -1000px;">
                         </div>
                         <p class="mb5px">
                             <a class="dif b large" href="{{ route('property.show', $item->id) }}" title="{{ $item->ad_title }}">
                                 {{ $item->ad_title }}
                             </a>
                         </p>
                         <div class="p-tag">
                             <p> ({{ $item->city->name }}) <br />
                                 Area: {{ $item->carpet_area }} Sq. Yards | 
                                 {{ $item->bedrooms }} Bedrooms | 
                                 {{ $item->bathrooms }} Bathrooms | 
                                 {{ number_format($item->price, 2) }} Rs.
                             </p>
                         </div>
                     </div>
                 @endforeach
                 
                  </div>
                  
                  <!-- Second Row -->
                  <div class="row">
                      @foreach ($properties->skip(3) as $item) <!-- Assuming you want to skip the first 3 properties -->
                          @php
                              $image = $item->images->isNotEmpty() ? asset('storage/' . $item->images->first()->path) : 'https://rei.wlimg.com/prop_images/88260/1290327_1-350x350.jpg';
                          @endphp
                          <div class="box">
                              <div class="imgWidth" style="background-image:url({{ $image }});background-size:cover;background-position:center;width:100%;height:260px;overflow:hidden;border-radius: 10px;">
                                  <img loading="lazy" src="{{ $image }}" width="350" height="262" alt="{{ $item->ad_title }}" style="max-height:150px;max-width:150px;z-index: -1;margin-left: -1000px;">
                              </div>
                              <p class="mb5px">
                                  <a class="dif b large" href="{{ route('property.show', $item->id) }}" title="{{ $item->ad_title }}">
                                      {{ $item->ad_title }}
                                  </a>
                              </p>
                              <div class="p-tag">
                                  <p> ({{ $item->city->name }}) <br />
                                      Area: {{ $item->carpet_area }} Sq. Yards | 
                                      {{ $item->bedrooms }} Bedrooms | 
                                      {{ $item->bathrooms }} Bathrooms | 
                                      {{ number_format($item->price, 2) }} Cr.
                                  </p>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </section>
              
            </div>
         </div>
      </div>
   </div>
</div>

@include('FrontendPages.partials.footer')

@endsection