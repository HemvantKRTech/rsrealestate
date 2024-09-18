@extends('layouts.app')
@section('content')
@include('FrontendPages.partials.header')

<div id="middle">
      <div id="search-page" class="wrap thinFormat">
         <div class="row1 dt columns12">
            <div class="col-1 thinColumn">
               <div class="column_Box mc thinColumnLink">
                  <div class="tcl bullet divider uu dif">
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
                           @foreach ($city as $item)
                           <li>
                              <b class="b2 fl"></b>
                              <p class="ofh"><a href="{{route('propertydetail',$item->id)}}"   title="Property in Manimajra" >Property in {{$item->name}}</a></p>
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
            <div class="col-2 wideColumn ip ls">
               <br style="content:'';display:inline-block;width:100%;height:15px;">
               <!-- header ends -->
               <div class="thinFormat">
                  <div class="fo mt30px mb30px cf_3img">
                     <ul class="lsn fo idv_eqheight">
                        @foreach ($properties as $item)
    <li>
       <div class="bdr cp box-sector-property" onclick="location.href='{{ route('propertydetail',  $item->id) }}'" style="height: 298.4px;">
          <div class="clsifd_img lh0 pr img-zoom ofh">
            @php
            $imageUrls = json_decode($item->images, true);
            $imageUrl = $imageUrls[0] ?? 'default-image-url.jpg'; // Use the first image or a default if none exists
        @endphp
        
        <img loading="lazy" src="{{ asset('storage/'.$imageUrl) }}" width="262" height="349" alt="{{ $item->ad_title }}">
        
          </div>
          <div class="p10px">
             <div class="proj-dt">
                <div class="proj-dtc">
                   <div class="proj-cont vat pl2px">
                      <p class="xlarge dif">
                         <a href="{{ route('propertydetail',  $item->id) }}" title="{{ $item->ad_title }}">{{ $item->ad_title }}</a>
                      </p>
                      <p class="mt7px alpha75">
                         <span class="w20px dib alpha50"><i class="fa large fa-map-marker"></i></span> {{ $item->sector->name ?? 'Sector Not Available' }}, {{ $item->city->name }}
                      </p>
                      <p class="alpha75 mt2px">
                         <span class="w20px dib alpha50"><i class="fa fa-area-chart"></i></span> {{ $item->super_builtup_area }} Sq.ft.
                      </p>
                      <p class="mt5px">
                         <span class="w20px dib alpha50"><i class="fa fa-building-o"></i></span> {{ $item->bedrooms }} BHK
                      </p>
                   </div>
                </div>
                <div class="proj-dtc vat ar w120px">
                   <p class="fw6 xlarge">
                       <i class="fa fa-inr"></i> {{ number_format($item->price) }}
                   </p>
                   <p class="mt10px">
                       <a href="{{ route('propertydetail',  $item->id) }}" class="dib p5px c3px ts0 pl15px pr15px buttonBig">More Details</a>
                   </p>
                </div>
             </div>
          </div>
       </div>
    </li>
@endforeach

                        
                       
                     </ul>
                  </div>
               </div>
               <!-- footer -->
            </div>
         </div>
         <br style="content:'';display:inline-block;width:100%;height:15px;">
      </div>
   </div>

@include('FrontendPages.partials.footer')

@endsection