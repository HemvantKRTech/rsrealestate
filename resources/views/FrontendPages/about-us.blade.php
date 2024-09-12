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

                <div class="aj">R S REAL ESTATE deemed as a highly venerated real estate agent serving the clients in Mohali and Chandigarh worthwhile services. We are headquartered in Mohali, Punjab and which is also the reveled work station of many highly qualified
                    and experienced professionals associated with us. Do you want to invest in some property? Do you need any assistance related to buying, selling, renting and leasing? We provide services for all these and our gamut of services also
                    include building construction services and property legal advisory services. We deal in all type of property verticals such as residential, commercial, industrial and agricultural. R S REAL ESTATE was established in 2009 and the company
                    is being run and owned by Mr. Satinder Singh Chadha. the CEO of the company, he has ingrained the values like honesty and perseverance deeply in the employees of the company. Today the company is swinging in the winds of success due
                    to the hard efforts of the team that leave no stone unturned to give the clients one big wow every time they attain services from us. We are philosophical and believe giving something to others is also a need and we satiate this human
                    need of ours by offering honest and an impressive value of money to those who purchase our services.

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