<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from www.chandigarhhouse.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Aug 2024 08:47:42 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
      <title>{{$sitesetting->site_title}} | @yield('title')</title>
     @foreach ($metatags as $item)
     <meta name="{{$item->meta_name}}" content="{{$item->meta_content}}">
     @endforeach
      <link rel="canonical" href="index.html">
      <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-53199383-2"></script><script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-53199383-2');</script>
      <link rel="preload" as="style" href="https://catalog.wlimg.com/main-common/catalog_common.css">
      <link rel="stylesheet" href="https://catalog.wlimg.com/main-common/catalog_common.css" >
      <link rel="preload" as="style" href="https://catalog.wlimg.com/templates-images/12569/12570/catalog.css">
      <link rel="stylesheet" href="https://catalog.wlimg.com/templates-images/12569/12570/catalog.css" >
      <link rel="stylesheet" href="https://catalog.wlimg.com/templates-images/12569/12570/responsive.css" media="(min-width:641px) and (max-width:980px)">
      <link rel="stylesheet" href="https://catalog.wlimg.com/templates-images/12569/12570/mobile.css" media="(max-width:640px)">
      <link rel="preload" as="style" href="https://catalog.wlimg.com/templates-images/12569/12570/preset.css">
      <link rel="stylesheet" href="https://catalog.wlimg.com/templates-images/12569/12570/preset.css" >
      <link rel="shortcut icon" href="https://catalog.wlimg.com/3/88260/other-images/favicon.ico" type="image/x-icon">
      <link href="https://catalog.weblink.in/dynamic-files/rei/other-files/88260/88260.css" rel="stylesheet">
      <style> @import url('https://fonts.googleapis.com/css2?family=Lexend&amp;display=swap');	body,html body,h1,h2,h3,h4,h5,h6,.smsBtn, .emailBtn,.ffpp,.ffos,.ffrr,.input,input,select,textarea	{font-family: 'Lexend', sans-serif !important;font-weight:normal;}	.ddsmoothmenu ul li a{font-family: 'Lexend', sans-serif !important;}</style>
      <style>.company_logo .com_title a{font-weight:600;}</style>
      <script>var loadDeferredStyles = function() {	var addStylesNode = document.getElementsByClassName("deferred-styles");	var replacement = document.createElement("div");	replacement.innerHTML = '';	for (var i = 0; i < addStylesNode.length; i++) {	replacement.innerHTML += addStylesNode[i].textContent;	}	if((replacement.innerHTML).trim() != ''){	document.body.appendChild(replacement);	}	}; var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame; if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); }); else window.addEventListener('load', loadDeferredStyles); </script>
      <link rel="preload" as="script" href="https://catalog.wlimg.com/main-common/catalog_common_new.js">
      <script src="https://catalog.wlimg.com/main-common/catalog_common_new.js"></script>
      <link rel="preload" as="script" href="https://catalog.wlimg.com/templates-images/12569/common/catalog_new.js">
      <script src="https://catalog.wlimg.com/templates-images/12569/common/catalog_new.js"></script><script>jQuery('.fancybox').fancybox();	jQuery( document ).ready(function() {	jQuery('[data-fancybox="showZoomImage"]').fancybox({	thumbs : {	autoStart : true,	axis : 'x'	}	});	});</script><script>jQuery(document).ready(function(e) {	jQuery('.myTabs').tabs({'fxShow': true,'bookmarkable':false});	jQuery(".tcl .plus").live("click", function() {	jQuery(this).toggleClass('act').parent().find('ul').slideToggle('slow');	});	jQuery(".plusMinus").on("click", function(){	jQuery(this).toggleClass('act').parent().next('.showHide_rp').slideToggle('slow');	});	if ($(window).width() < 992) {	jQuery('.right-head .icon').click(function(event){	jQuery(this).toggleClass('open');	jQuery(this).parent('.right-head').toggleClass('open');	jQuery('.right-head .dropdown').slideToggle(300);	event.stopPropagation()	});	jQuery('html, body').click(function(){	jQuery('.right-head, .right-head .icon').removeClass('open');	jQuery('.right-head .dropdown').slideUp(300)	});	jQuery('.right-head .dropdown').on('click',function(event){	event.stopPropagation();	});	$('[data-fancybox]').fancybox({ protect: true	});	}	});</script><script src="hitcounter/index72b7.html?mem_id=73879"></script><script>jQuery(window).load(function(e) {	function triggerHtmlEvent(element, eventName)	{ var event; if(document.createEvent) { event = document.createEvent('HTMLEvents'); event.initEvent(eventName, true, true); element.dispatchEvent(event); } else { event = document.createEventObject(); event.eventType = eventName; element.fireEvent('on' + event.eventType, event); }	}$('.translation-links a').click(function(e)	{	e.preventDefault();	var lang = $(this).data('lang');	$('#google_translate_element select option').each(function(){	if($(this).text().indexOf(lang) > -1) {	$(this).parent().val($(this).val());	var container = document.getElementById('google_translate_element');	var select = container.getElementsByTagName('select')[0];	triggerHtmlEvent(select, 'change');	} });	});	})</script><script>function showme(val) {	if(val=="2" || val=="3") {	document.getElementById('rent').style.display = 'block';	document.getElementById('sell').style.display = 'none';	}	else if(val=="1") {	document.getElementById('rent').style.display = 'none';	document.getElementById('sell').style.display = 'block';	}	}</script>
      <style>.horizontal180291 .imgFrame, .horizontal180291 .imgLeft .td-1, .horizontal180291 .imgRight .td-2{width:250px; height:160px;}	.horizontal180291 .imgFrame .imgWidth, .horizontal180291 li .imgWidth, .horizontal180291 .floatLiFommat li .imgWidth, .horizontal180291 .floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180291 .floatLiFommat .imgLeft .td-2 .imgWidth {width:250px; height:160px;overflow: hidden;}	.horizontal180291 .imgFrame .imgWidth img, .horizontal180291 li .imgWidth img, .horizontal180291 .floatLiFommat li .imgWidth img, .horizontal180291 .floatLiFommat .imgLeft .td-1 .imgWidth img, .horizontal180291 .floatLiFommat .imgLeft .td-2 .imgWidth img {min-height: 250px; width: 100%;z-index: -1;margin-left: -1000px;}	.horizontal180291 .imgFrame img, .horizontal180291 .imgLeft .td-1 img, .horizontal180291 .imgRight .td-2 img{ max-width:250px; max-height:250px;}	@media(max-width:480px){	.horizontal180291 .floatLiFommat .imgLeft .td-1, .horizontal180291 .floatLiFommat .imgRight .td-2{display: block;margin: 10px auto;padding:0;}	}	.horizontal180292 .imgFrame, .horizontal180292 .imgLeft .td-1, .horizontal180292 .imgRight .td-2{width:250px; height:160px;}	.horizontal180292 .imgFrame .imgWidth, .horizontal180292 li .imgWidth, .horizontal180292 .floatLiFommat li .imgWidth, .horizontal180292 .floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180292 .floatLiFommat .imgLeft .td-2 .imgWidth {width:250px; height:160px;overflow: hidden;}	.horizontal180292 .imgFrame .imgWidth img, .horizontal180292 li .imgWidth img, .horizontal180292 .floatLiFommat li .imgWidth img, .horizontal180292 .floatLiFommat .imgLeft .td-1 .imgWidth img, .horizontal180292 .floatLiFommat .imgLeft .td-2 .imgWidth img {min-height: 250px; width: 100%;z-index: -1;margin-left: -1000px;}	.horizontal180292 .imgFrame img, .horizontal180292 .imgLeft .td-1 img, .horizontal180292 .imgRight .td-2 img{ max-width:250px; max-height:250px;}	@media(max-width:480px){	.horizontal180292 .floatLiFommat .imgLeft .td-1, .horizontal180292 .floatLiFommat .imgRight .td-2{display: block;margin: 10px auto;padding:0;}	}	.horizontal180293 .no-scroll180293 li,.horizontal180293 .no-scroll180293.floatLiFommat li{width:226px;padding-right:15px;padding-left:15px;box-sizing:border-box;}	.horizontal180293 .imgFrame, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-1, .horizontal180293 .no-scroll180293.floatLiFommat .imgRight .td-2{width:200px; height:200px;}	.horizontal180293 .imgFrame img, .horizontal180293 .no-scroll180293 li img, .horizontal180293 .no-scroll180293.floatLiFommat li img, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-1 img, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-2 img {width:200px;}	.horizontal180293 .imgFrame .imgWidth, .horizontal180293 .no-scroll180293 li .imgWidth, .horizontal180293 .no-scroll180293.floatLiFommat li .imgWidth, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-2 .imgWidth {width:200px; height:200px;overflow: hidden;}	.horizontal180293 .imgFrame .imgWidth img, .horizontal180293 .no-scroll180293 li .imgWidth img, .horizontal180293 .no-scroll180293.floatLiFommat li .imgWidth img, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-1 .imgWidth img, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-2 .imgWidth img {min-height: 200px; width: 100%;z-index: -1;margin-left: -1000px;}	.horizontal180293 .no-scroll180293:before,.no-scroll180293:after{content:"";display:table;}	.horizontal180293 .no-scroll180293:after{clear:both;}	.horizontal180293 .no-scroll180293 li{float:left;margin-bottom:15px;}	@media(max-width:1024px){	.horizontal180293 .no-scroll180293 li{width:20%;box-sizing:border-box;}.horizontal180293 .no-scroll180293.floatLiFommat li{width:20%;box-sizing:border-box;}	.horizontal180293 .imgFrame img, .horizontal180293 .no-scroll180293 li img, .horizontal180293 .no-scroll180293.floatLiFommat li img, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-1 img, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-2 img {width:180px; max-height:180px;}	.horizontal180293 .imgFrame .imgWidth, .horizontal180293 .no-scroll180293 li .imgWidth, .horizontal180293 .no-scroll180293.floatLiFommat li .imgWidth, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-2 .imgWidth {width:180px; height:180px;}	.horizontal180293 .imgFrame, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-1, .horizontal180293 .no-scroll180293.floatLiFommat .imgRight .td-2{width:180px; height:180px;}	}	@media(max-width:800px){	.horizontal180293 .no-scroll180293 li{width:33%;}.horizontal180293 .no-scroll180293.floatLiFommat li{width:33%;}	}	@media(max-width:640px){	.horizontal180293 .no-scroll180293 li{width:49.5%;}.horizontal180293 .no-scroll180293.floatLiFommat li{width:49.5%;}	.horizontal180293 .imgFrame,.horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-1, .horizontal180293 .no-scroll180293.floatLiFommat .imgRight .td-2{display: block;margin: 10px auto;}	}	@media(max-width:480px){	.horizontal180293 .no-scroll180293 li{width:100%;margin-right:0;}	.horizontal180293 .no-scroll180293.floatLiFommat li{width:100%;margin-right:0;padding:0;}	}	@media(max-width:360px){	.horizontal180293 .imgFrame img, .horizontal180293 .no-scroll180293 li img, .horizontal180293 .no-scroll180293.floatLiFommat li img, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-1 img, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-2 img {max-width:250px; max-height:250px;}	.horizontal180293 .imgFrame .imgWidth, .horizontal180293 .no-scroll180293 li .imgWidth, .horizontal180293 .no-scroll180293.floatLiFommat li .imgWidth, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-2 .imgWidth {max-width:250px; max-height:250px;}	.horizontal180293 .imgFrame, .horizontal180293 .no-scroll180293.floatLiFommat .imgLeft .td-1, .horizontal180293 .no-scroll180293.floatLiFommat .imgRight .td-2{max-width:250px; max-height:250px;}	}	.horizontal180294 .no-scroll180294 li,.horizontal180294 .no-scroll180294.floatLiFommat li{width:560px;padding-right:15px;padding-left:15px;box-sizing:border-box;}	.horizontal180294 .imgFrame, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-1, .horizontal180294 .no-scroll180294.floatLiFommat .imgRight .td-2{width:150px; height:150px;}	.horizontal180294 .imgFrame img, .horizontal180294 .no-scroll180294 li img, .horizontal180294 .no-scroll180294.floatLiFommat li img, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-1 img, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-2 img {width:150px;}	.horizontal180294 .imgFrame .imgWidth, .horizontal180294 .no-scroll180294 li .imgWidth, .horizontal180294 .no-scroll180294.floatLiFommat li .imgWidth, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-2 .imgWidth {width:150px; height:150px;overflow: hidden;}	.horizontal180294 .imgFrame .imgWidth img, .horizontal180294 .no-scroll180294 li .imgWidth img, .horizontal180294 .no-scroll180294.floatLiFommat li .imgWidth img, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-1 .imgWidth img, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-2 .imgWidth img {min-height: 150px; width: 100%;z-index: -1;margin-left: -1000px;}	.horizontal180294 .no-scroll180294:before,.no-scroll180294:after{content:"";display:table;}	.horizontal180294 .no-scroll180294:after{clear:both;}	.horizontal180294 .no-scroll180294 li{float:left;margin-bottom:15px;}	@media(max-width:1024px){	.horizontal180294 .no-scroll180294 li{width:49.5%;box-sizing:border-box;}.horizontal180294 .no-scroll180294.floatLiFommat li{width:49.5%;box-sizing:border-box;}	.horizontal180294 .imgFrame img, .horizontal180294 .no-scroll180294 li img, .horizontal180294 .no-scroll180294.floatLiFommat li img, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-1 img, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-2 img {width:135px; max-height:135px;}	.horizontal180294 .imgFrame .imgWidth, .horizontal180294 .no-scroll180294 li .imgWidth, .horizontal180294 .no-scroll180294.floatLiFommat li .imgWidth, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-2 .imgWidth {width:135px; height:135px;}	.horizontal180294 .imgFrame, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-1, .horizontal180294 .no-scroll180294.floatLiFommat .imgRight .td-2{width:135px; height:135px;}	}	@media(max-width:800px){	.horizontal180294 .no-scroll180294 li{width:100%;}.horizontal180294 .no-scroll180294.floatLiFommat li{width:100%;}	}	@media(max-width:640px){	.horizontal180294 .no-scroll180294 li{width:49.5%;}.horizontal180294 .no-scroll180294.floatLiFommat li{width:49.5%;}	.horizontal180294 .imgFrame,.horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-1, .horizontal180294 .no-scroll180294.floatLiFommat .imgRight .td-2{display: block;margin: 10px auto;}	}	@media(max-width:480px){	.horizontal180294 .no-scroll180294 li{width:100%;margin-right:0;text-align:center;padding:0;}	.horizontal180294 .no-scroll180294.floatLiFommat li{width:100%;margin-right:0;text-align:center;padding:0;}	}	@media(max-width:360px){	.horizontal180294 .imgFrame img, .horizontal180294 .no-scroll180294 li img, .horizontal180294 .no-scroll180294.floatLiFommat li img, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-1 img, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-2 img {max-width:250px; max-height:250px;}	.horizontal180294 .imgFrame .imgWidth, .horizontal180294 .no-scroll180294 li .imgWidth, .horizontal180294 .no-scroll180294.floatLiFommat li .imgWidth, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-2 .imgWidth {max-width:250px; max-height:250px;}	.horizontal180294 .imgFrame, .horizontal180294 .no-scroll180294.floatLiFommat .imgLeft .td-1, .horizontal180294 .no-scroll180294.floatLiFommat .imgRight .td-2{max-width:250px; max-height:250px;}	}	.horizontal180295 .no-scroll180295 li,.horizontal180295 .no-scroll180295.floatLiFommat li{width:365px;padding-right:10px;padding-left:10px;box-sizing:border-box;}	.horizontal180295 .imgFrame, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-1, .horizontal180295 .no-scroll180295.floatLiFommat .imgRight .td-2{width:200px; height:200px;}	.horizontal180295 .imgFrame img, .horizontal180295 .no-scroll180295 li img, .horizontal180295 .no-scroll180295.floatLiFommat li img, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-1 img, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-2 img {width:200px;}	.horizontal180295 .imgFrame .imgWidth, .horizontal180295 .no-scroll180295 li .imgWidth, .horizontal180295 .no-scroll180295.floatLiFommat li .imgWidth, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-2 .imgWidth {width:200px; height:200px;overflow: hidden;}	.horizontal180295 .imgFrame .imgWidth img, .horizontal180295 .no-scroll180295 li .imgWidth img, .horizontal180295 .no-scroll180295.floatLiFommat li .imgWidth img, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-1 .imgWidth img, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-2 .imgWidth img {min-height: 200px; width: 100%;z-index: -1;margin-left: -1000px;}	.horizontal180295 .no-scroll180295:before,.no-scroll180295:after{content:"";display:table;}	.horizontal180295 .no-scroll180295:after{clear:both;}	.horizontal180295 .no-scroll180295 li{float:left;margin-bottom:15px;}	@media(max-width:1024px){	.horizontal180295 .no-scroll180295 li{width:33%;box-sizing:border-box;}.horizontal180295 .no-scroll180295.floatLiFommat li{width:33%;box-sizing:border-box;}	.horizontal180295 .imgFrame img, .horizontal180295 .no-scroll180295 li img, .horizontal180295 .no-scroll180295.floatLiFommat li img, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-1 img, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-2 img {width:180px; max-height:180px;}	.horizontal180295 .imgFrame .imgWidth, .horizontal180295 .no-scroll180295 li .imgWidth, .horizontal180295 .no-scroll180295.floatLiFommat li .imgWidth, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-2 .imgWidth {width:180px; height:180px;}	.horizontal180295 .imgFrame, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-1, .horizontal180295 .no-scroll180295.floatLiFommat .imgRight .td-2{width:180px; height:180px;}	}	@media(max-width:800px){	.horizontal180295 .no-scroll180295 li{width:49.5%;}.horizontal180295 .no-scroll180295.floatLiFommat li{width:49.5%;}	}	@media(max-width:480px){	.horizontal180295 .imgFrame,.horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-1, .horizontal180295 .no-scroll180295.floatLiFommat .imgRight .td-2{display: block;margin: 10px auto;}	}	@media(max-width:480px){	.horizontal180295 .no-scroll180295 li{width:100%;margin-right:0;text-align:center;padding:0;}	.horizontal180295 .no-scroll180295.floatLiFommat li{width:100%;margin-right:0;text-align:center;padding:0;}	}	@media(max-width:360px){	.horizontal180295 .imgFrame img, .horizontal180295 .no-scroll180295 li img, .horizontal180295 .no-scroll180295.floatLiFommat li img, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-1 img, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-2 img {max-width:250px; max-height:250px;}	.horizontal180295 .imgFrame .imgWidth, .horizontal180295 .no-scroll180295 li .imgWidth, .horizontal180295 .no-scroll180295.floatLiFommat li .imgWidth, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-2 .imgWidth {max-width:250px; max-height:250px;}	.horizontal180295 .imgFrame, .horizontal180295 .no-scroll180295.floatLiFommat .imgLeft .td-1, .horizontal180295 .no-scroll180295.floatLiFommat .imgRight .td-2{max-width:250px; max-height:250px;}	}	.horizontal180296 .imgFrame, .horizontal180296 .imgLeft .td-1, .horizontal180296 .imgRight .td-2{width:140px; height:140px;}	.horizontal180296 .imgFrame .imgWidth, .horizontal180296 .no-scroll180295 li .imgWidth, .horizontal180296 .no-scroll180295.floatLiFommat li .imgWidth, .horizontal180296 .no-scroll180295.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180296 .no-scroll180295.floatLiFommat .imgLeft .td-2 .imgWidth {width:140px; height:140px;overflow: hidden;}	.horizontal180296 .imgFrame .imgWidth img, .horizontal180296 .no-scroll180295 li .imgWidth img, .horizontal180296 .no-scroll180295.floatLiFommat li .imgWidth img, .horizontal180296 .no-scroll180295.floatLiFommat .imgLeft .td-1 .imgWidth img, .horizontal180296 .no-scroll180295.floatLiFommat .imgLeft .td-2 .imgWidth img {min-height: 140px; width: 100%;z-index: -1;margin-left: -1000px;}	.horizontal180296 .imgFrame img, .horizontal180296 .imgLeft .td-1 img, .horizontal180296 .imgRight .td-2 img{ max-width:140px; max-height:140px;}	@media(max-width:480px){	.horizontal180296 .floatLiFommat .imgLeft .td-1, .horizontal180296 .floatLiFommat .imgRight .td-2{display: block;margin: 10px auto;padding:0;}	}	.horizontal180297 .no-scroll180297 li,.horizontal180297 .no-scroll180297.floatLiFommat li{width:225px;box-sizing:border-box;}	.horizontal180297 .imgFrame, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-1, .horizontal180297 .no-scroll180297.floatLiFommat .imgRight .td-2{width:200px; height:200px;}	.horizontal180297 .imgFrame img, .horizontal180297 .no-scroll180297 li img, .horizontal180297 .no-scroll180297.floatLiFommat li img, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-1 img, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-2 img {width:200px;}	.horizontal180297 .imgFrame .imgWidth, .horizontal180297 .no-scroll180297 li .imgWidth, .horizontal180297 .no-scroll180297.floatLiFommat li .imgWidth, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-2 .imgWidth {width:200px; height:200px;overflow: hidden;}	.horizontal180297 .imgFrame .imgWidth img, .horizontal180297 .no-scroll180297 li .imgWidth img, .horizontal180297 .no-scroll180297.floatLiFommat li .imgWidth img, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-1 .imgWidth img, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-2 .imgWidth img {min-height: 200px; width: 100%;z-index: -1;margin-left: -1000px;}	.horizontal180297 .no-scroll180297:before,.no-scroll180297:after{content:"";display:table;}	.horizontal180297 .no-scroll180297:after{clear:both;}	.horizontal180297 .no-scroll180297 li{float:left;margin-bottom:15px;}	@media(max-width:1024px){	.horizontal180297 .no-scroll180297 li{width:49.5%;box-sizing:border-box;}.horizontal180297 .no-scroll180297.floatLiFommat li{width:49.5%;box-sizing:border-box;}	.horizontal180297 .imgFrame img, .horizontal180297 .no-scroll180297 li img, .horizontal180297 .no-scroll180297.floatLiFommat li img, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-1 img, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-2 img {width:180px; max-height:180px;}	.horizontal180297 .imgFrame .imgWidth, .horizontal180297 .no-scroll180297 li .imgWidth, .horizontal180297 .no-scroll180297.floatLiFommat li .imgWidth, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-2 .imgWidth {width:180px; height:180px;}	.horizontal180297 .imgFrame, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-1, .horizontal180297 .no-scroll180297.floatLiFommat .imgRight .td-2{width:180px; height:180px;}	}	@media(max-width:800px){	.horizontal180297 .no-scroll180297 li{width:100%;}.horizontal180297 .no-scroll180297.floatLiFommat li{width:100%;}	}	@media(max-width:640px){	.horizontal180297 .no-scroll180297 li{width:49.5%;}.horizontal180297 .no-scroll180297.floatLiFommat li{width:49.5%;}	.horizontal180297 .imgFrame,.horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-1, .horizontal180297 .no-scroll180297.floatLiFommat .imgRight .td-2{display: block;margin: 10px auto;}	}	@media(max-width:480px){	.horizontal180297 .no-scroll180297 li{width:100%;margin-right:0;text-align:center;padding:0;}	.horizontal180297 .no-scroll180297.floatLiFommat li{width:100%;margin-right:0;text-align:center;padding:0;}	}	@media(max-width:360px){	.horizontal180297 .imgFrame img, .horizontal180297 .no-scroll180297 li img, .horizontal180297 .no-scroll180297.floatLiFommat li img, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-1 img, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-2 img {max-width:250px; max-height:250px;}	.horizontal180297 .imgFrame .imgWidth, .horizontal180297 .no-scroll180297 li .imgWidth, .horizontal180297 .no-scroll180297.floatLiFommat li .imgWidth, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-1 .imgWidth, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-2 .imgWidth {max-width:250px; max-height:250px;}	.horizontal180297 .imgFrame, .horizontal180297 .no-scroll180297.floatLiFommat .imgLeft .td-1, .horizontal180297 .no-scroll180297.floatLiFommat .imgRight .td-2{max-width:250px; max-height:250px;}	}</style>
      <script>jQuery(window).load(function(){	var DG_T = jQuery('.fixer').offset().top;	var WH1 = jQuery(window).innerHeight();	var FH1 = jQuery('.fixer').outerHeight();	var DH1 = jQuery(document).innerHeight()-(FH1+DG_T*2.3);	var SH1 = WH1+FH1;	if(DH1>= SH1){	jQuery(window).scroll(function(){if(jQuery(this).scrollTop()>DG_T){jQuery('.fixer').addClass('t2_fixer'); jQuery('.top_space').show();}else{jQuery('.fixer').removeClass('t2_fixer'); jQuery('.top_space').hide();}	})}	}) </script>
      <style>/***** MODIFY THEME *****/	#saveThemeContainer{top:130px; z-index:999999}	#saveThemeToggle,#saveThemeContent{background:#222 none no-repeat center center;border:1px solid #fff;border-left:0;border-top:0;box-shadow:0 0 7px #000;}	#saveThemeToggle{background-image:url(https://catalog.wlimg.com/templates-images/12569/12570/setting-icon.gif);width:30px;height:30px;margin-left:-1px;}	body.boxed{max-width:1200px; margin:0 auto;-webkit-box-shadow: 0px 0px 8px 1px rgba(0,0,0,0.2);-moz-box-shadow:0px 0px 8px 1px rgba(0,0,0,0.2);box-shadow: 0px 0px 8px 1px rgba(0,0,0,0.2); position:relative;}	.layout-style{padding-top:12px;text-align: center;} .layout-style p{color:#fff;font-size:14px;line-height:22px;text-align:center; }	.page-style{width:40px;padding:8px;border:1px solid #b0b0b0;margin:2px;display:inline-block;background:#ffffff;color:#333; cursor:pointer;font-size:12px;text-align:center; }	.page-style.active{color:#00abed; border:1px solid #00abed; }	.bg1, .bg2, .bg3, .bg4{width:12px;height:8px;background-size:cover;border:4px solid #fff;margin-bottom:0px; }	.reset{width:12px;height:8px;border:4px solid #fff;margin-bottom:0px;background:#000;}	.bg1{background:url(https://catalog.wlimg.com/templates-images/12569/12570/bg1.jpg);} .bg2{background:url(https://catalog.wlimg.com/templates-images/12569/12570/bg2.jpg);}	.bg3{background:url(https://catalog.wlimg.com/templates-images/12569/12570/bg3.jpg);} .bg4{background:url(https://catalog.wlimg.com/templates-images/12569/12570/bg4.jpg);}</style>
      <style id="styleBackgroundColor_02"> #headerFormatNT nav.f1, a.button, .button a, .category li:hover .bg,footer,.right-head .icon span, .right-head .icon span::before, .right-head .icon span::after, .headRw_f3.headHr, .clfd-price, .slider-content3 a + a, .slider-content4 a + a, .services-list .ser-icon, a.site-btn, button.site-btn, #middle .ui-tabs-nav .ui-tabs-selected a, #middle .ui-tabs-nav a:hover, #middle .ui-tabs-nav a:focus, #middle .ui-tabs-nav a:active, #middle .ui-tabs-nav .ui-tabs-active a, #middle .ui-tabs-nav .ui-state-active a, footer .headHr, .headHr, .paging span.on, .paging a:hover, a.buttonBig:hover, input.buttonBig:hover, .buttonBig a:hover,.bx-wrapper .bx-pager.bx-default-pager a:hover,.bx-wrapper .bx-pager.bx-default-pager a.active,.back, .clfd-details .bx-wrapper .bx-prev, .nslider .bx-wrapper .bx-prev,.clfd-details .bx-wrapper .bx-next, .nslider .bx-wrapper .bx-next, .saleRent .bx-wrapper .bx-prev,.saleRent .bx-wrapper .bx-next, .headFormat.f6, .resort-box2:hover .iconBox, .theme1, .head-bdrb::before, input.button:hover, .hd_frmt_f6_outer, header.f6Tree_bg ~ .headBg.theme2,.shapeLtPolyg::before, input.razorpay-payment-button:hover, .tstArrow .testimonial_fm ul li > div span.i.large:before{background-color: #204215;} header.f48 .row2:after{border-right-color:#204215;} .logoBg::before, .logoBg::after,.ui-tabs-nav .ui-tabs-selected a:after{border-top-color:#204215;} .contDtls .smsBtn.theme2,.theme1Bdr{border-color:#204215;}</style>
      <style id="styleBackgroundColor_03"> .ddsmoothmenu > ul > li > a.selected, .ddsmoothmenu ul li a:hover, .ddsmoothmenu ul li.on>a, nav.f2 .ddsmoothmenu ul li a:hover, nav.f2 .ddsmoothmenu ul li.on > a, nav.f3 .ddsmoothmenu ul li a:hover, nav.f3 .ddsmoothmenu > ul > li > a.selected, nav.f3 .ddsmoothmenu ul li a:hover, nav.f3 .ddsmoothmenu ul li.on > a, a.buttonBig, input.buttonBig, .buttonBig a,.category .bg, .slider-content h1::after, .slider-content .hd1::after, a.button:hover, .button a:hover, input.button, .slider-content2 .search-btn, .search-btn, .slider-content3 a, .slider-content4 a, .contact-icon, button.site-btn, #middle .ui-tabs-nav a, #middle .ui-tabs-nav .ui-tabs-disabled a:hover, #middle .ui-tabs-nav .ui-tabs-disabled a:focus, #middle .ui-tabs-nav .ui-tabs-disabled a:active, #tml > ul >li.on > a, #tml > ul > li:hover > a, #footerFormat1 a.button,.project_tml > li.on a, .project_tml > li a:hover,#projectMoreLinksDiv a:hover,.front, #bx-pager ul li a.active, .resort-box .overlay, .clfd-details .bx-wrapper .bx-next:hover, .nslider .bx-wrapper .bx-next:hover, .clfd-details .bx-wrapper .bx-prev:hover, .nslider .bx-wrapper .bx-prev:hover, .borderB::after, .saleRent .bx-wrapper .bx-prev:hover,.saleRent .bx-wrapper .bx-next:hover, .resort-box2 .iconBox, .supHead, .sale, .clfd-icon li:hover, .theme2, .left_Frmt h2 + p::after, #footerFormat1 .button, .head-bdrb::after, .f16-service .back, .ttw-navbg .t2_fixer, .menu.f6-ttw::before, .hd_frmt_f6_outer::before, .tour-clfd ul li .h a:before, .bdr-btn:hover, .bdr-btn a:hover, .reiDetail-nav ul li a:hover, .reiDetail-nav ul li a.on, .step-services .slider li > div:hover, header.f48 .tgl li:hover, .headingBbdr .h1::after, .ddsmoothmenu ul li ul a.selected, .ddsmoothmenu ul li ul a:hover, .ddsmoothmenu ul li ul li.on > a, .logoPolyg::before, .shapeRtPolyg::before, .shapeRtPolyg::after, input.razorpay-payment-button, .relOtherinfo .slider ul li:nth-child(2) > div.tstImgView::after, nav.f3.f3_trans .ddsmoothmenu > ul > li > a:hover::before, nav.f3.f3_trans .ddsmoothmenu > ul > li > a.selected::before, nav.f3.f3_trans .ddsmoothmenu > ul > li.on > a::before, .themeProBg .slider ul li .data:hover, .themeCinfo ul li:hover > .cInfo-box, .tp_f3 .slider ul li > .data:hover, .tp_f3 .slider ul li > .data:hover > .dib, .rei-ser .slider ul li .data:hover, div.ddsmoothmobile ul li.on a, div.ddsmoothmobile ul li.selected a, div.ddsmoothmobile ul li:hover a, .reiSlBtm .fluid_dg_caption .btns a:hover, .arwBtn a.buttonBig::before, .hoverHdDt .slider ul li > div::before{background-color:#599e44;} .h2 h2, .h2 h3, #middle .h2 p.rHead,.project_tml,.shadowList ul li:hover .cdctent.bdrB, .enq-frm input:focus, .enq-frm select:focus, .headFormat.f6::before, .banner_area.f6 .fluid_dg_visThumb.fluid_dgcurrent, .bdr-btn, .bdr-btn a, .single-product .single-box-bdr, .contDtls .emailBtn.theme1, .headingBbdr.fullAbt .buttonBig::after, .relImgCont .row1.dt .col-1.w25 > .pr,.themeBdr, .theme2Bdr, .sngTitle.btmArrw .ic {border-color:#599e44; } .intro-f3 .enter-btn:after{border-left-color:#599e44; } .ttw-navbg::before, .clickBox, .trngleAbtshape .DynBanner::after, .trngleBtmShape .imgShape::after {border-bottom-color:#599e44;} .contDtls .emailBtn.theme1, footer .planNwsltr input.button, .sngTitle .slider ul li:hover .clfd-view .heading a{color:#599e44;} .trngleAbtshape .DynBanner::before, .triangle-topleft::after{border-top-color: #599e44;} .svgCompInfo .iconBox svg{fill:#599e44;} .slRghtCont .fluid_dg_caption > div{ border-color:#599e44;}</style>
      <style id="styleBackgroundColor_04"> .dif, .dif a, a.dif, .dif2 span, .dif2 span a, a:hover, #middle .bxslider .h, #middle .bxslider .h a, div.ddsmoothmobile ul li a:hover, #middle .h2 h2, .ttw-serbg .data .dif a, .ttw-serbg .data .dif, .ttw-serbg .data a.dif, .indService ul li > div:before, .contDtls .smsBtn.theme2, nav.f3.f3_trans .ddsmoothmenu > ul > li.on > a, nav.f3.f3_trans .ddsmoothmenu > ul > li > a:hover, nav.f3.f3_trans .ddsmoothmenu > ul > li > a.selected, .reiSlBtm .fluid_dg_caption .btns a, .arwBtn a.buttonBig{color: #599e44; }</style>
      <style id="styleBackgroundColor_05"> #bodyFormatNT.evenOdd section:nth-child(odd), #bodyFormatNT.oddEven section:nth-child(even), .bodycontent,#headerFormatNT nav.f3, .t2_fixer.bg_df{background-color:#ffffff;}	.headFormat.f6.hd_new.f6-ttw::before{border-bottom-color:#ffffff; }	.banner_area.f16::before,.single-product .single-product, header.f48 .row2:before{border-right-color:#ffffff;}	.f16-service::after,.ltTrng::before{border-left-color:#ffffff; }	#bodyFormatNT.evenOdd section:nth-child(odd) .data .view-arrow, #bodyFormatNT.oddEven section:nth-child(even) .data .view-arrow{background:#ffffff;}</style>
      <style id="styleBackgroundColor_06"> #bodyFormatNT.evenOdd section:nth-child(even), #bodyFormatNT.oddEven section:nth-child(odd){background-color:#f3f3f3;} #bodyFormatNT.evenOdd section:nth-child(even) .data .view-arrow, #bodyFormatNT.oddEven section:nth-child(odd) .data .view-arrow{background:#f3f3f3;}</style>
      <style id="styleBackgroundColor_07"> html body{background-color:#ffffff;} </style>
      <style id="styleBackgroundColor_08"> .head-c1{color:#204215;} </style>
      <style id="styleBackgroundColor_09"> .head-c2{color:#599e44;} </style>
      <style id="styleBackgroundColor_10"> .theme3{background-color:#204215;} </style>
      <style id="styleBackgroundColor_11"> .theme4{background-color:#f6ba22;} .theme4c{color:#f6ba22; } </style>
      <style id="styleBackgroundColor_14"> .theme5, .ttw-navbg .ddsmoothmenu ul li a:hover, .ttw-navbg .ddsmoothmenu ul li a:hover, .ttw-navbg .ddsmoothmenu ul li.on > a{background-color:#e92f2f; } </style>
      <style id="styleBackgroundColor_12"> .headVr{background-color:#f1f1f1; } </style>
      <style id="styleBackgroundColor_13"> .data, .testimonial_fm li > div.data, .smsEmailTop .smsEmail .theme1{background-color:#fcfcfc; } </style>
      <style>#footerFormat1 .bgReverce{background-image:url(https://catalog.wlimg.com/templates-images/12569/12570/rei_footerbg.png);}</style>
      <script type="application/ld+json">{ "@context": "https://schema.org", "@type": "RealEstateAgent", "name": "R S Real Estate", "priceRange": "$$", "image": "https://catalog.wlimg.com/3/88260/other-images/12569-comp-image.png", "logo": "https://catalog.wlimg.com/3/88260/other-images/12569-comp-image.png", "description": "R S Real Estate is a highly venerated Real Estate Agent Serving the Clients in Mohali and Chandigarh Services related to Buy, Sell, Rent &amp; Lease of Properties,Real Estate Agent in Mohali,Flats for Sale in S.A.S. Nagar Mohali.", "url" : "https://www.chandigarhhouse.com", "sameAs" : [ ""],	"address": {	"@type": "PostalAddress",	"streetAddress": "SCF-19 , 2nd Floor",	"addressLocality": "Phase 7, Mohali",	"addressRegion": "Punjab",	"postalCode": "",	"addressCountry": "India",	"telephone" : "+91-9872023591",	"email": "chadha_in@yahoo.com" }, "contactPoint" : [	{ "@type" : "ContactPoint",	"telephone" : "+91-9872023591",	"contactType" : "Customer Support",	"contactOption" : "TollFree",	"areaServed" : "India"	} ] }</script><script type="application/ld+json" >[	{ "@context": "www.schema.org",	"@type": "LocalBusiness",	"name": "R S Real Estate",	"url": "https://www.chandigarhhouse.com",	"image": "https://catalog.wlimg.com/3/88260/other-images/12569-comp-image.png",	"description": "R S Real Estate is a highly venerated Real Estate Agent Serving the Clients in Mohali and Chandigarh Services related to Buy, Sell, Rent &amp; Lease of Properties,Real Estate Agent in Mohali,Flats for Sale in S.A.S. Nagar Mohali.",	"telephone": "+91-9872023591",	"address": {	"@type": "PostalAddress",	"streetAddress": "SCF-19 , 2nd Floor",	"addressLocality": "Phase 7, Mohali",	"addressRegion": "Punjab",	"postalCode": "",	"addressCountry": "India"	},	"geo": {	"@type": "GeoCoordinates",	"latitude": "30.704",	"longitude": "76.7296"	}	}	]</script><script src="https://catalog.wlimg.com/main-common/jquery.ui.totop.js"></script><script>jQuery(document).ready(function(e){	jQuery().UItoTop({ easingType:'easeOutQuart' });	});</script>
   </head>
   <body>
      <div class="popup-container" id="popup-container">
         <div class="popup">
             <!-- Close Button -->
             <span class="close-popup" id="close-popup" aria-label="Close Popup">&times;</span>
             
             <!-- Popup Content -->
             <div class="ac fancy-popup darkBdr" style="max-width:700px;padding:0px;">
                 <div class="ffos large pr lh17em">
                     <!-- Inquiry Form -->
                     <form id="inquiryForm" name="form1" method="post" action="{{ route('property.enquiry.submitpop') }}" onsubmit="return frmvalidation();">
                         @csrf 
                         <div class="p25px pb15px db headVr bdr0 enq-form">
                             <div class="ffrc xxxlarge mb20px db ac">Instant Inquiry to <span class="dif">{{ $sitesetting->site_title }}</span></div>
                             <div id="form-message" style="display: none; color: green; margin-bottom: 15px;"></div>
                             <ul class="fo">
                                 <li class="input-3-33">
                                     <div>
                                         <input type="text" name="name" id="your_name" placeholder="* Your Name" required>
                                     </div>
                                 </li>
                                 <li class="input-3-33">
                                     <div>
                                         <input type="text" name="phone" id="mobile" onkeyup="return NotIsNumeric(this.value);" placeholder="* Your Mobile No" required>
                                     </div>
                                 </li>
                                 <li class="input-3-33">
                                     <div>
                                         <input type="email" name="email" id="email" placeholder="* Your Email Id" required>
                                     </div>
                                 </li>
                             </ul>
                             <div class="input-3-100 lh0">
                                 <div>
                                     <textarea rows="3" placeholder="Your Query" name="message" required></textarea>
                                 </div>
                             </div>
                             <div class="ac">
                                 <input class="button p10px20px dib c3px large w200px" name="submit_frm" type="submit" value="Send Inquiry">
                             </div>
                         </div>
                     </form>
     
                     <!-- Contact Details -->
                     <div class="p25px pb0px db data bdr0 bdrT bdreee tableStr">
                         <div class="dt w100 ac-dtr acac-dtc al">
                             <ul>
                                 <li class="w120px alpha75">Contact Person</li>
                                 <li class="w15px ac">:</li>
                                 <li><span class="mb7px db">{{ $sitesetting->site_title }}</span></li>
                             </ul>
                             <ul>
                                 <li class="alpha75">Address</li>
                                 <li class="w5px ac">:</li>
                                 <li><span class="black mb7px db">{{ $sitesetting->address }}</span></li>
                             </ul>
                             <ul>
                                 <li class="alpha75">Mobile No.</li>
                                 <li class="w5px ac">:</li>
                                 <li><span class="mb7px db">{{ $sitesetting->mobile }}</span></li>
                             </ul>
                             <ul>
                                 <li class="alpha75">Email ID</li>
                                 <li class="w5px ac">:</li>
                                 <li><span class="mb7px db"><a href="mailto:{{ $sitesetting->email }}" class="dif">{{ $sitesetting->email }}</a></span></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     
     <!-- JavaScript for handling the form submission and popup -->
     <script>
         document.addEventListener('DOMContentLoaded', function () {
             // Handle form submission
             const form = document.getElementById('inquiryForm');
             const messageDiv = document.getElementById('form-message');
             const popupContainer = document.getElementById('popup-container');
     
             form.addEventListener('submit', function (event) {
                 event.preventDefault(); // Prevent the default form submission
                 
                 // Clear previous messages
                 messageDiv.style.display = 'none';
                 messageDiv.textContent = '';
     
                 // Prepare form data
                 const formData = new FormData(form);
     
                 fetch(form.action, {
                     method: 'POST',
                     body: formData,
                     headers: {
                         'X-Requested-With': 'XMLHttpRequest'
                     }
                 })
                 .then(response => response.json())
                 .then(response => {
                     // Check if the response contains a success message
                     if (response.mailsuccess) {
                        form.reset();
                         messageDiv.textContent = response.mailsuccess; // Show success message
                     } else {
                         messageDiv.textContent = 'There was an error sending your message. Please try again.'; // Show error message
                     }
     
                     messageDiv.style.display = 'block'; // Show the message
     
                     // Close the form after 3 seconds
                     setTimeout(function () {
                         popupContainer.style.display = 'none'; // Close the popup
                     }, 3000);
                 })
                 .catch(error => {
                     messageDiv.textContent = 'An error occurred. Please try again later.'; // Show error message
                     messageDiv.style.display = 'block'; // Show the message
                     console.error(error);
                 });
             });
     
             // Close popup
             const closePopupBtn = document.getElementById('close-popup');
             closePopupBtn.addEventListener('click', function () {
                 popupContainer.style.display = 'none'; // Hide the popup
             });
     
             // Close popup when clicking outside of it
             window.addEventListener('click', function (event) {
                 if (event.target === popupContainer) {
                     popupContainer.style.display = 'none'; // Hide the popup
                 }
             });
         });
     
           // Check if popup has been shown before using localStorage
    if (!localStorage.getItem('popupShown')) {
        // Function to show the popup after a specific time
        setTimeout(function () {
            document.getElementById('popup-container').style.display = 'flex'; // Show the popup
            localStorage.setItem('popupShown', 'true'); // Mark the popup as shown
        }, 5000); // Show popup after 5 seconds
    }
     </script>
     
     <!-- Add CSS for the popup styling if needed -->
     <style>
         /* Basic styling for the popup */
         .popup-container {
             position: fixed;
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
             display: none; /* Hidden by default */
             justify-content: center;
             align-items: center;
             z-index: 1000;
         }
     
         .popup {
             background-color: white;
             padding: 20px;
             border-radius: 10px;
             box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
             max-width: 700px;
             width: 100%;
         }
     
         .close-popup {
             position: absolute;
             top: 10px;
             right: 20px;
             font-size: 24px;
             cursor: pointer;
             color: #fff;
         }
     </style>
     
    @yield('content')
   </body>
   <!-- Mirrored from www.chandigarhhouse.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Aug 2024 08:50:01 GMT -->
</html>