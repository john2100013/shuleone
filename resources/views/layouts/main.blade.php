<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Primary Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Leading Kenyan Tech Company offering ERP & POS Solutions, Custom Software Development, Web Solutions & Cloud Hosting. Top-rated IT services in Nairobi, Kenya with proven expertise in business automation. Free consultation available.">
    <meta name="keywords" content="ERP Kenya, POS Systems Nairobi, Kenyan Web Development, Custom Software Kenya, Business Automation Kenya, IT Services Nairobi, Cloud Hosting Kenya, Mobile Apps Kenya, Digital Solutions Africa, Kenya ERP Solutions, Nairobi Tech Company, Business Software Kenya">
    <meta name="author" content="Belfor Tech Consultants">
    <meta name="geo.region" content="KE">
    <meta name="geo.placename" content="Nairobi, Kenya">
    <meta name="geo.position" content="-1.2921;36.8219">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- Language and Region -->
    <link rel="alternate" hreflang="en-ke" href="https://belfortech.dev">
    <link rel="canonical" href="https://belfortech.dev">

    <!-- Open Graph Meta Tags -->
    <meta property="og:locale" content="en_KE">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Best ERP & POS Systems in Kenya | Custom Software Solutions | Belfor Tech">
    <meta property="og:description" content="🏆 Leading Kenyan Tech Solutions Provider. Expert ERP, POS & Custom Software Development in Nairobi. Transform your business with our local IT expertise. Free consultation available.">
    <meta property="og:url" content="https://belfortech.dev">
    <meta property="og:site_name" content="Belfor Tech Consultants">
    <meta property="og:image" content="https://belfortech.dev/assets/images/inspired-african.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Top ERP & Software Solutions in Kenya | Belfor Tech">
    <meta name="twitter:description" content="Leading Kenyan Tech Company specializing in ERP, POS & Custom Software Development. Local expertise, global standards. Get a free consultation today!">
    <meta name="twitter:image" content="https://belfortech.dev/path-to-your-logo.jpg">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Page Title -->
    <title>@yield('title') | ShuleOne</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <!-- Add FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetss/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetss/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assetss/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assetss/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetss/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assetss/css/main.css') }}" rel="stylesheet">

    @yield('additional_css')
</head>
<body class="@yield('body-class')">

    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assetss/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetss/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assetss/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assetss/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assetss/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assetss/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetss/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetss/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Additional JS -->
    @yield('additional_js')
</body>
</html>
