<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- title -->
<title>Khadayata Samaj</title> 
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="">
<!-- favicon -->
<link rel="shortcut icon" type="image/favicon" href="{{asset('frontend/images/logo.webp')}}">
<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
<!-- simple-line icon -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/simple-line-icons.css')}}">
<!-- font-awesome icon -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/font-awesome.min.css')}}">
<!-- themify icon -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/themify-icons.css')}}">
<!-- ion icon -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/ionicons.min.css')}}">
<!-- owl slider -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
<!-- swiper -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/swiper.min.css')}}">
<!-- animation -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.css')}}">
<!-- style -->
@if(Auth::guard('member')->user())
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style2.css')}}">
@else
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
@endif

<!-- <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}"> -->

@if(Request::segment(2)=='register' || Request::segment(2)=='login')
    @livewireStyles
@endif
</head>

<body class="home-1">
    @if(Auth::guard('member')->user())
        @include('frontend/includes/header1')
    @else
        @include('frontend/includes/header')
    @endif 
    <!-- header end -->
    @yield('content')

    @include('frontend/includes/footer')
    <!-- footer end -->

    <!-- preloader -->
    <div class="preloader">
        <div id="loader"></div>
    </div>

    <!-- whatsapp icon floating  -->
    <a href="https://wa.me/+919821020582" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>


    <!-- back to top start -->
    <a href="javascript:void(0)" class="scroll" id="top">
        <span><i class="fa fa-angle-double-up"></i></span>
    </a>
    <!-- back to top end -->
    <div class="mm-fullscreen-bg"></div>
    <!-- jquery -->
    <script src="{{asset('frontend/js/modernizr-2.8.3.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
    
    <!-- bootstrap -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- popper -->
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <!-- fontawesome -->
    <script src="{{asset('frontend/js/fontawesome.min.js')}}"></script>
    <!-- owl carousal -->
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <!-- swiper -->
    <script src="{{asset('frontend/js/swiper.min.js')}}"></script>
    <!-- custom -->
    <script src="{{asset('frontend/js/custom.js')}}"></script>

    @if(Request::segment(2)=='register' || Request::segment(2)=='login')
     @livewireScripts
    @endif
    
    @yield('scripts')
</body>
</html>