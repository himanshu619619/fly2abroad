@extends('layout')
@section('title', 'Fly 2 Abroad')
@section('content')
		
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href="{{asset('public/css/block-library/style91d5.css?ver=5.4')}}" type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href="{{asset('public/css/block-library/theme91d5.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='fontawesome-css'  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" type='text/css' media='all' />

<link rel='stylesheet' id='iconize-flaticon-font-styles-css'  href="{{asset('public/css/iconselect/flaticon8daf.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='flaticon-css'  href="{{asset('public/css/flaticonf488.css')}}" type='text/css' media='all' />

<style id='yith-wcwl-main-inline-css' type='text/css'>
.yith-wcwl-share li a{color: #FFFFFF;}.yith-wcwl-share li a:hover{color: #FFFFFF;}.yith-wcwl-share a.facebook{background: #39599E; background-color: #39599E;}.yith-wcwl-share a.facebook:hover{background: #39599E; background-color: #39599E;}.yith-wcwl-share a.twitter{background: #45AFE2; background-color: #45AFE2;}.yith-wcwl-share a.twitter:hover{background: #39599E; background-color: #39599E;}.yith-wcwl-share a.pinterest{background: #AB2E31; background-color: #AB2E31;}.yith-wcwl-share a.pinterest:hover{background: #39599E; background-color: #39599E;}.yith-wcwl-share a.email{background: #FBB102; background-color: #FBB102;}.yith-wcwl-share a.email:hover{background: #39599E; background-color: #39599E;}.yith-wcwl-share a.whatsapp{background: #00A901; background-color: #00A901;}.yith-wcwl-share a.whatsapp:hover{background: #39599E; background-color: #39599E;}
</style>

<link rel='stylesheet' id='dashicons-css'  href="{{asset('public/css/dashicons.min91d5.css')}}" type='text/css' media='all' />
<style id='dashicons-inline-css' type='text/css'>
[data-font="Dashicons"]:before {font-family: 'Dashicons' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
</style>

<link rel='stylesheet' id='iconize-tonicons-font-styles-css'  href="{{asset('public/css/iconselect/tonicons8daf.css')}}" type='text/css' media='all' />

<style id='yith-quick-view-inline-css' type='text/css'>

				#yith-quick-view-modal .yith-wcqv-main{background:#ffffff;}
				#yith-quick-view-close{color:#cdcdcd;}
				#yith-quick-view-close:hover{color:#ff0000;}
</style>

<link rel='stylesheet' id='immiex-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C700%2C900%7CMuli%3A400%2C600%2C700%2C800%2C900%26display%3Dswap&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href="{{asset('public/css/bootstrap.mind8d3.css')}}" type='text/css' media='all' />
<style id='bootstrap-inline-css' type='text/css'>
.btn-secondary:hover,.btn{ background-color:#D33234;border-color:#D33234;}.btn-primary:hover{ background-color: #D33234;border-color: #D33234; }
</style>

<link rel='stylesheet' id='selectize-bootstrap4-css'  href="{{asset('public/css/selectize.bootstrap4d8d3.css')}}" type='text/css' media='all' />

<link rel='stylesheet' id='tonicons-css'  href="{{asset('public/css/tonicons5152.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='v4-shims-css'  href="{{asset('public/css/v4-shimsbb93.css')}}" type='text/css' media='all' />

<link rel='stylesheet' id='jquery-datetimepicker-css'  href="{{asset('public/css/jquery.datetimepicker.mind8d3.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href="{{asset('public/css/magnific-popupd8d3.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'  href="{{asset('public/css/owl.carousel.mind8d3.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='owl-theme-default-css'  href="{{asset('public/css/owl.theme.default.mind8d3.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='timetable-css'  href="{{asset('public/css/timetabled8d3.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='tweenmax-css'  href="{{asset('public/css/tweenmaxd8d3.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='fade-up-css'  href="{{asset('public/css/dropdown-effects/fade-upd8d3.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='immiex-woocommerce-css'  href="{{asset('public/css/woocommerced8d3.css')}}" type='text/css' media='all' />
<style id='immiex-woocommerce-inline-css' type='text/css'>
 .woocommerce-info > a:hover,.woocommerce-info::before,.woocommerce-MyAccount-content p a,.page-content .woocommerce-MyAccount-navigation ul .active a,.woocommerce .single-widget a:hover,.woocommerce .single-widget a:focus,.product_meta a,.order-total .amount,.product-name strong,.single-product .summary .yith-wcwl-add-to-wishlist a, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,.woocommerce div.product p.price, .woocommerce div.product span.price{color: #D33234;}.loop-item-hover-in .btn:hover,.loop-item-hover-in .btn:focus,#headersearch .caret,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.product-inner-buttons .yith-wcwl-wishlistaddedbrowse a,.product-inner-buttons .yith-wcwl-wishlistexistsbrowse a,.product-inner-buttons .yith-wcqv-button:hover,.product-inner-buttons .yith-wcqv-button:focus,.product-inner-buttons a.add_to_wishlist:hover,.product-inner-buttons a.add_to_wishlist:focus,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{background-color: #D33234;}.loop-item-hover-in .btn:hover,.loop-item-hover-in .btn:focus,.product-item .product-inner-buttons .yith-wcwl-wishlistaddedbrowse a,.product-item .product-inner-buttons .yith-wcwl-wishlistexistsbrowse a,.product-inner-buttons a.add_to_wishlist:hover,.product-inner-buttons a.add_to_wishlist:focus,.product-inner-buttons .yith-wcqv-button:hover,.product-inner-buttons .yith-wcqv-button:focus{border-color: #D33234;}.nav-item .cart-contents .cart-contents-count,.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover{background-color: #D33234;}.woocommerce-error, .woocommerce-info, .woocommerce-message{background-color: #f8f9fb;}
</style>
<link rel='stylesheet' id='immiex-theme-css'  href="{{asset('public/css/themed8d3.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='immiex-menu-css'  href="{{asset('public/css/menud8d3.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='immiex-common-css'  href="{{asset('public/css/commond8d3.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='immiex-style-css'  href="{{asset('public/styled8d3.css')}}" type='text/css' media='all' />

<link rel='stylesheet' id='immiex-responsive-css'  href="{{asset('public/css/responsived8d3.css')}}" type='text/css' media='all' />

<style id='woo-variation-swatches-inline-css' type='text/css'>
.variable-item:not(.radio-variable-item) { width : 30px; height : 30px; } .woo-variation-swatches-style-squared .button-variable-item { min-width : 30px; } .button-variable-item span { font-size : 16px; }
</style>

<link rel='stylesheet' id='redux-google-fonts-immiex_options-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A300&amp;ver=1586075025')}}" type='text/css' media='all' />
<script type='text/javascript' src="{{asset('public/js/jquery/jquery4a5f.js?ver=1.12.4-wp')}}"></script>
<script type='text/javascript' src="{{asset('public/js/jquery/jquery-migrate.min330a.js?ver=1.4.1')}}"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var es_data = {"messages":{"es_empty_email_notice":"Please enter email address","es_rate_limit_notice":"You need to wait for sometime before subscribing again","es_single_optin_success_message":"Successfully Subscribed.","es_email_exists_notice":"Email Address already exists!","es_unexpected_error_notice":"Oops.. Unexpected error occurred.","es_invalid_email_notice":"Invalid email address","es_try_later_notice":"Please try after some time"},"es_ajax_url":"http:\/\/jthemes.org\/wp\/immiex\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>

<script type='text/javascript'>
/* <![CDATA[ */
var pplv = {"ajaxurl":"http:\/\/jthemes.org\/wp\/immiex\/wp-admin\/admin-ajax.php","like":"Like","unlike":"Unlike"};
/* ]]> */
</script>

<link rel='https://api.w.org/' href='wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.4" />
<meta name="generator" content="WooCommerce 4.0.1" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='?p=174' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed?url=http%3A%2F%2Fjthemes.org%2Fwp%2Fimmiex%2Fhomepage-3%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed?url=http%3A%2F%2Fjthemes.org%2Fwp%2Fimmiex%2Fhomepage-3%2F&amp;format=xml" />
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	</head>
<body class="page-template-default page page-id-174 wp-embed-responsive theme-immiex woocommerce-no-js woo-variation-swatches woo-variation-swatches-theme-immiex woo-variation-swatches-theme-child-immiex woo-variation-swatches-style-squared woo-variation-swatches-attribute-behavior-blur woo-variation-swatches-tooltip-enabled woo-variation-swatches-stylesheet-enabled immiex-layout-semirounded width no-sidebar has-topbar">


<!-- PRELOADER SPINNER -->
<div id="loader-wrapper">
		<div id="loader"><div class="cssload-box-loading"></div></div>
	
			
</div>


<div id="page" class="page no-breadcrumbs-page">

	<header id="header-2" class="header white-menu">
	<div class="header-wrapper">
		
<div class="wsmobileheader clearfix">
	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
	
	
				<a href="{{url('/index')}}"  class="smllogo" rel="home"><img src="{{asset('public/images/logo.png')}}" height="50" alt="ImmiEx"/></a>
			
		<a href="tel:61234567890" class="callusbtn"><i class="fas fa-phone"></i></a>
	</div><!-- MOBILE HEADER -->


			 		<div class="headtoppart clearfix bg-white ">
	<div class="headerwp clearfix">

		<!-- Infotmation -->
		<div class="headertopleft">			     			
			<div class="header-info clearfix">
				<span class="txt-400">
				  <i class="fas fa-map-marker-alt"></i >
			<!--	Suite 2087928 128 street 
Surrey, BC V3W 4E8 canada --><a href="#footer-2">INDIA | CANADA</a>
 </span>	    	
 </div>
		</div>

			<!-- Contacts -->
	    <div class="headertopright header-contacts">
	    	<a href="tel:+91-9654188876" class="callusbtn txt-400"><i class="fas fa-phone"></i>+91-9654188876</a>
			<!-- <a href="tel:61278903456" class="callusbtn b-right txt-400 pl-2"><i class="fas fa-phone"></i>+61-2 7890 3456</a> -->
			
			<a href="mailto:support@fly2abroad.com" class="callusbtn txt-400"><i class="far fa-envelope-open"></i>support@fly2abroad.com</a>	  	</div>

	</div>
</div>
		<div class="wsmainfull menu clearfix bg-white white-scroll scrollbg-light navbar-light">
			<div class="container wsmainwp clearfix">
				<div class="desktoplogo">
				<a href="{{url('/')}}" class="site-logo" rel="home"><img src="{{asset('public/images/logo.png')}}" width="180" height="45" alt="ImmiEx"></a>
				</div>
				<nav class="wsmenu clearfix">	

	
	<ul id="menu-primary" class="wsmenu-list"><li id="menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-15">
	<a class=""  href="{{url('/')}}">Home</a>

</li>
<li id="menu-item-816" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-816 nl-simple dropdown-menu-item">
	<a class=""  href="{{url('/about')}}">About Us</a><div class=" clearfix">
</li>
<li id="menu-item-858" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-858 nl-simple dropdown-menu-item">
	<a class=""  href="{{url('/services')}}">Services<span class="wsarrow"></span></a><div class="wsmegamenu clearfix">
<div class="wp-block-columns">
<div class="wp-block-column">
<ul class="link-list wp-link-list">
	<li class="title">What We Offer:</li>
	<li><a href="{{url('/immigration')}}" title="Student Visa Assessment">Immigration</a></li>
	<li><a href="{{url('/visa-assistance')}}" title="Working Visa Assessment">Visa Assistance</a></li>
	<li><a href="{{url('/students-immigration')}}" title="Business Visa Assessment">Student Visa </a></li>
	<li><a href="{{url('/eb-5')}}" title="Visa Eligibility Assessment">EB 5 Services</a></li>
	<li><a href="{{url('/tour-travel')}}" title="PR Visa Assessment">Tours & Travel Services</a></li>
	
	<li><a href="{{url('/foreign-country-compliance')}}" title="Visa Eligibility Assessment">Foreign Country Compliance</a></li>
</ul></div>


</li>
<li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17 nl-simple">
	<a class=""  href="{{url('/career')}}">Careers</a></li>
<li id="menu-item-427" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-427 nl-simple">
	<a class=""  href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
<li class="nl-simple header-btn"><a target="_blank" href="{{url('/contact')}}" title="Get Started" class="btn-primary btn-type-dark">Contact US</a></li></ul>
  	
    
</nav>	<!-- End Navigation Menu -->
			</div><!-- End container -->
		</div><!-- End navbar -->
	</div> <!-- .header-wrapper -->
</header><!-- End header -->
	

@stop
	