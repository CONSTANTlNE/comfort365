<!DOCTYPE html>
<html lang="ka">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="frontendAssets/images/fav.png">
    <title>კომფორტ 365</title>


    <!-- fontawesome css -->
    <link rel="stylesheet" href="frontendAssets/css/plugins/fontawesome-6.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="frontendAssets/css/plugins/swiper.css">
    <!-- <link rel="stylesheet" href="frontendAssets/css/plugins/aos.css"> -->
    <link rel="stylesheet" href="frontendAssets/css/plugins/unicons.css">
    <link rel="stylesheet" href="frontendAssets/css/plugins/metismenu.css">
    <!-- <link rel="stylesheet" href="frontendAssets/css/plugins/hover-revel.css"> -->
    <!-- <link rel="stylesheet" href="frontendAssets/css/plugins/timepickers.min.css"> -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="frontendAssets/css/vendor/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="frontendAssets/css/style.css">

    @stack('css')
    <style>

        @media only screen and (min-width: 768px) {
            .header--sticky {
                display: none !important;
            }
        }
    </style>
</head>

<body class="index-cleaning-home">

@include('site.components.header')


@yield('index')
@yield('gallery')


<!-- Footer style two -->
<!-- rts footer area one start -->
@include('site.components.footer')
<!-- rts footer area one end -->
<!-- Footer style two End -->


<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>

<div id="anywhere-home" class="">
</div>

<!-- progress area start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
              style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>
<!-- progress area end -->


<!-- pre loader start -->
<div id="elevate-load">
    <div class="loader-wrapper">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- pre loader end -->


<!-- jquery js -->
<script src="frontendAssets/js/plugins/jquery.min.js"></script>
<script src="frontendAssets/js/vendor/jqueryui.js"></script>
<script src="frontendAssets/js/plugins/counter-up.js"></script>
<script src="frontendAssets/js/plugins/swiper.js"></script>


<!-- <script src="frontendAssets/js/vendor/twinmax.js"></script> -->
<!-- <script src="frontendAssets/js/vendor/split-text.js"></script> -->
<!-- <script src="frontendAssets/js/plugins/text-plugins.js"></script> -->
<script src="frontendAssets/js/plugins/metismenu.js"></script>


<script src="frontendAssets/js/vendor/waypoint.js"></script>
<script src="frontendAssets/js/vendor/waw.js"></script>


<script src="frontendAssets/js/plugins/gsap.min.js"></script>
<script src="frontendAssets/js/plugins/scrolltigger.js"></script>
<!-- <script src="frontendAssets/js/plugins/aos.js"></script> -->
<!-- <script src="frontendAssets/js/plugins/jquery-ui.js"></script> -->
<script src="frontendAssets/js/plugins/jquery-timepicker.js"></script>
<!-- <script src="frontendAssets/js/vendor/sal.min.js"></script> -->

<script src="frontendAssets/js/plugins/bootstrap.min.js"></script>
<!-- <script src="frontendAssets/js/plugins/jquery-slideNav.js"></script> -->
<!-- <script src="frontendAssets/js/plugins/hover-revel.js"></script> -->
<!-- <script src="frontendAssets/js/plugins/contact-form.js"></script> -->

<script src="frontendAssets/js/main.js"></script>

<!-- <script src="frontendAssets/js/plugins/swip-img.js"></script> -->
<!-- header style two End -->
</body>

</html>