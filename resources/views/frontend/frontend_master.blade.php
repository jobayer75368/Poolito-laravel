<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.vecurosoft.com/poolito/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Dec 2025 05:28:27 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cleaning and pool service template | Vecuro | Home 1</title>
    <meta name="author" content="Vecuro">
    <meta name="description" content="Cleaning and pool Home 1 template">
    <meta name="keywords" content="Cleaning and pool Home 1 template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/frontend/assets/img/favicon.ico') }}" type="image/x-icon">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@400;700&amp;family=Poppins:wght@400;500;600;700;800&amp;family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/slick.min.css') }}">
    <!-- animate js -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/animate.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/style.css') }}">

</head>

<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->



    <!--==============================
	Preloader
	==============================-->
    <!-- <div class="preloader">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="assets/img/logo.svg" alt="logo">
            <span class="loader"></span>
        </div>
    </div> -->
    <!--==============================
    Mobile Menu
    ============================== -->
    @include('frontend.layouts.mobile_menu')
    <!--==============================
    Popup Search Box
    ============================== -->
    <div class="popup-search-box d-none d-lg-block  ">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
    Header Area
    ==============================-->
    @include('frontend.layouts.header')
    <!--********************************
			Start Main Content
    ********************************-->
    @yield('frontend_content')

    <!--********************************
			End Main Content
	******************************** -->

    <!--==============================
			Footer Area
	==============================-->
    @include('frontend.layouts.footer')
    <!-- Scroll To Top -->
    <button class="back-to-top" id="backToTop" aria-label="Back to Top">
        <span class="progress-circle">
            <svg viewBox="0 0 100 100">
                <circle class="bg" cx="50" cy="50" r="40"></circle>
                <circle class="progress" cx="50" cy="50" r="40"></circle>
            </svg>
            <span class="progress-percentage" id="progressPercentage">0%</span>
        </span>
    </button>

    <!--********************************
			Code End  Here 
	******************************** -->


    <!--==============================
        All Js File
    ============================== -->
    @include('frontend.layouts.script')


</body>


<!-- Mirrored from html.vecurosoft.com/poolito/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Dec 2025 05:28:39 GMT -->

</html>