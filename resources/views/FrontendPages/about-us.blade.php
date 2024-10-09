@extends('layouts.app') @section('content') @include('FrontendPages.partials.header') @section('title', 'About Us')

<section class="headBg theme2 bread-right" style="
    display: contents;">
    <div class="wrap">
        <div class="page-title-inner fo">
            <!-- header ends -->

            <div class="h1">
                <h1>About Us</h1>
            </div>
            <!-- footer -->
        </div>
    </div>
</section>

<div class="wrap">

    <div class="about">
        <!-- header ends -->

        <div class="about-h1 b dif">
            <h1>About Us</h1>
        </div>

        <!-- footer -->
    </div>

</div>

<div id="middle">
    <div class="wrap thinFormat">
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
                <br style="content:'';display:inline-block;width:100%;height:15px;" />
                <!-- header ends -->

                <div class="aj">Welcome to Arora Estates, your trusted partner in real estate solutions. With a deep understanding of the property market, we specialize in offering a comprehensive range of services, including buying, selling, and renting properties. Whether you're looking for your dream home, a commercial space, or an investment opportunity, we bring you tailored solutions that meet your needs.

                    At Arora Estate, we pride ourselves on our professionalism, market expertise, and commitment to providing exceptional customer service. Our dedicated team is here to guide you through every step of your real estate journey, ensuring a smooth and stress-free experience.
                    
                    Let Arora Estate be the bridge to your perfect property solution.
                    <br>
                    <b>Services:-</b>
                    <ul>
                        <li>We offer services related to buying, selling, renting and leasing of residential, commercial, industrial and agricultural properties.</li>
                        <li>We offer construction services for residential, commercial and industrial properties</li>
                        <li>We provide property legal advisory services.</ul>
                    </li>
                </div>
                <p class="cb"></p>
                <br>
                <!-- footer -->
            </div>
        </div>
        <br style="content:'';display:inline-block;width:100%;height:15px;" />
    </div>
</div>
<br style="content:'';display:inline-block;width:100%;height:15px;" /> @include('FrontendPages.partials.footer') @endsection