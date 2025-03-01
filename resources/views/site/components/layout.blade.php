<!DOCTYPE html>
<html lang="ka">

<head>
    <meta name="google-site-verification" content="uyovPUwj20Hp_diktI3quCOfrk_-BvR4sLxFO4Ygj1o"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="frontendAssets/images/fav.png">
    <title>კომფორტ 365</title>

    <meta name="description" content="სახლში კომფორტი იწყება გამართული კომუნიკაციებიდან">
    <meta name="keywords"
          content="ცენტრალური გათბობის მონტაჟი, საქვაბე, საკანალიზაციო არხი, არხის გაჭრა, გაზის შეყვანა">

    <!-- Open Graph (OG) Meta Tags for Social Media -->
    <meta property="og:title" content="Comfort 365">
    <meta property="og:description" content="ლიცენზირებული გაზის კომპანია">
    <meta property="og:image" content="frontendAssets/images/logo/logo_nobg.jpeg">
    <meta property="og:url" content="https://comfort365.ge">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Comfort 365">
    <meta property="og:locale" content="ka">

    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://comfort365.ge">

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
    <link rel="stylesheet" href="frontendAssets/css/glightbox.css">

    @stack('css')
    <style>

        @media only screen and (min-width: 768px) {
            .header--sticky {
                display: none !important;
            }
        }

        /* Basic dialog styles */
        dialog {
            max-width: 500px;
            padding: 20px;
            border: none;
            border-radius: 10px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            font-family: Arial, sans-serif;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        /* Open animation */
        dialog[open] {
            opacity: 1;
            transform: translateY(0);
        }

        /* Close animation */
        dialog::backdrop {
            background: rgba(0, 0, 0, 0.5);
        }

        /* Close button */
        dialog .close-btn {
            background: none;
            border: none;
            font-size: 18px;
            position: absolute;
            top: 10px;
            right: 15px;
            cursor: pointer;
            color: #333;
        }

        dialog .close-btn:hover {
            color: red;
        }

        /* Header */
        dialog h2 {
            margin: 0;
            font-size: 1.2em;
        }

        /* Body */
        dialog p {
            font-size: 0.9em;
            color: #555;
        }

        /* Footer buttons */
        .dialog-footer {
            display: flex;
            justify-content: flex-end;
            margin-top: 15px;
        }

        .dialog-footer button {
            padding: 8px 15px;
            margin-left: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .dialog-footer .confirm-btn {
            background-color: #007bff;
            color: white;
        }

        .dialog-footer .confirm-btn:hover {
            background-color: #0056b3;
        }

        .dialog-footer .cancel-btn {
            background-color: #ccc;
        }

        .dialog-footer .cancel-btn:hover {
            background-color: #bbb;
        }

    </style>
    <!-- Glide.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">

</head>

<body class="index-cleaning-home">
@if(!request()->routeIs('login'))
    @include('site.components.header')
@endif

@yield('index')
@yield('gallery')
@yield('login')


<!-- Footer style two -->
<!-- rts footer area one start -->
@if(!request()->routeIs('login'))
    @include('site.components.footer')
@endif
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
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        new Glide('.glide', {
            type: 'carousel', // or 'slider'
            perView: 3, // Number of visible slides
            gap: 20, // Space between slides
            autoplay: 2000, // Autoplay every 3 seconds
            hoverpause: true, // Pause autoplay on hover
            animationDuration: 800, // Adjust animation speed
            breakpoints: {
                1024: { perView: 2 },
                768: { perView: 1 }
            }
        }).mount();
    });
</script>

</body>

</html>