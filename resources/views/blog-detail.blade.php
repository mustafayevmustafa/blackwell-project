<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Blog Details - UpConstruction Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="{{asset('assets/css/languagepage.css')}}">

    <!-- Favicons -->
    <link href="{{asset('assets/img/logo.png')}} rel="icon">
    <link href="{{asset('assets/img/logo.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: UpConstruction
    * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="blog-details-page">
<div id="top-black-menu" style="width: 100%; height: 30px; background-color: black;" class="fixed-top">
    <div class="container-fluid container-xl h-100 d-flex justify-content-end gap-4 align-items-center">
        <a class="text-light" style="font-size: 12px;" href="./index.html">Home</a>
        <a class="text-light" style="font-size: 12px;" href="#">Career</a>
        <a class="text-light" style="font-size: 12px;" href="technical.html">Technical Consultation</a>
        <div class="text-light" style="font-size: 12px;">
            <div class="elfsight-app-65df015d-932c-4865-ba04-49e0814e2ae0 notranslate" data-elfsight-app-lazy
                 translate="no"></div>
            <a href="https://elfsight.com/website-translator-widget/?utm_source=websites&amp;utm_medium=clients&amp;utm_content=website-translator&amp;utm_term=127.0.0.1&amp;utm_campaign=free-widget"
               target="_blank" rel="noreferrer">
            </a>

        </div>




        </script>
    </div>
</div>
@include('partials.header')
<br><br>
<div class="container" style="padding-top:100px; padding-bottom:60px;">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            @if($blog->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $blog->image) }}"
                         alt="{{ is_array($blog->title) ? ($blog->title['en'] ?? $blog->title['az']) : $blog->title }}"
                         class="img-fluid rounded w-100"
                         style="max-height: 500px; object-fit: cover;">
                </div>
            @endif

            <h1 class="mb-4">{{ is_array($blog->title) ? ($blog->title['en'] ?? $blog->title['az']) : $blog->title }}</h1>

            <div class="content" style="font-size: 16px; line-height: 1.8; color: #333;">
                @php
                    $content = is_array($blog->content) ? ($blog->content['en'] ?? $blog->content['az'] ?? '') : ($blog->content ?? '');
                @endphp
                {!! nl2br(e($content)) !!}
            </div>
        </div>
    </div>
</div>




<footer class="text-secondary py-5 footermain" role="contentinfo">
    <div class="container">

        <!-- Üst Satır: Logo + 3 Kolon -->
        <div class="row mb-4">

            <!-- Logo -->
            <div class="col-md-3 mb-4">
                <a href="/" class="text-white fw-bold fs-5 text-decoration-none d-inline-block mb-3"
                   aria-label="BlackWell Home">
                    BlackWell
                </a>
                <address class="text-secondary small mb-0">
                    AZURE BUSINESS CENTER<br>
                    Ave Nobel 15, Azerbaijan Baku, AZ1025<br>
                    Floor 19, Office 130
                </address>
            </div>

            <!-- More BlackWell -->
            <div class="col-md-3 mb-4">
                <h6 class="text-white mb-3">More BlackWell</h6>
                <ul class="list-unstyled">
                    <li><a href="/index.html" class="text-decoration-none text-secondary">Home</a></li>
                    <li><a href="/about.html" class="text-decoration-none text-secondary">About</a></li>
                    <li><a href="/services.html" class="text-decoration-none text-secondary">Our Stock</a></li>
                    <li><a href="/partners.html" class="text-decoration-none text-secondary">Product</a></li>
                    <li><a href="/{{route('blog.index')}}" class="text-decoration-none text-secondary">Blog</a></li>
                </ul>
            </div>

            <!-- Helpful Links -->
            <div class="col-md-3 mb-4">
                <h6 class="text-white mb-3">Helpful Links</h6>
                <ul class="list-unstyled">
                    <li><a href="/contact.html" class="text-decoration-none text-secondary">Contact</a></li>
                    <li><a href="/privacy" class="text-decoration-none text-secondary">Privacy Notice</a></li>
                    <li><a href="/e-waste" class="text-decoration-none text-secondary">E-Waste Info</a></li>
                    <li><a href="/terms" class="text-decoration-none text-secondary">Terms of Service</a></li>
                </ul>
            </div>

            <!-- Social -->
            <div class="col-md-3 mb-4">
                <h6 class="text-white mb-3">Social</h6>
                <div class="d-flex gap-2">
                    <a href="#" class="border border-secondary rounded-circle text-secondary text-center"
                       style="width: 32px; height: 32px; line-height: 32px;"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" class="border border-secondary rounded-circle text-secondary text-center"
                       style="width: 32px; height: 32px; line-height: 32px;"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="border border-secondary rounded-circle text-secondary text-center"
                       style="width: 32px; height: 32px; line-height: 32px;"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="border border-secondary rounded-circle text-secondary text-center"
                       style="width: 32px; height: 32px; line-height: 32px;"><i class="fa-brands fa-pinterest"></i></a>
                    <a href="#" class="border border-secondary rounded-circle text-secondary text-center"
                       style="width: 32px; height: 32px; line-height: 32px;"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

        </div>

        <!-- Alt Satır -->
        <hr class="border-secondary">

        <div class="row text-center">
            <div class="col-12 mb-2">
                <small>© 2025 BlackWell Company</small>
            </div>
            <div class="col-12">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="/cookies" class="text-secondary text-decoration-none">Cookies</a></li>
                    <li class="list-inline-item"><a href="/terms" class="text-secondary text-decoration-none">Terms</a></li>
                    <li class="list-inline-item"><a href="/conflict-minerals"
                                                    class="text-secondary text-decoration-none">Conflict Minerals</a></li>
                    <li class="list-inline-item"><a href="/e-waste" class="text-secondary text-decoration-none">E-Waste</a></li>
                    <li class="list-inline-item"><a href="/privacy" class="text-secondary text-decoration-none">Privacy
                            Notice</a></li>
                    <li class="list-inline-item"><a href="/preferences" class="text-secondary text-decoration-none"
                                                    target="_blank">Preferences ↗</a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>


<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<!-- <div id="preloader"></div> -->

<!-- Vendor JS Files -->


<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<script src="/assets/js/Loading/loading.js"></script>
<script src="{{asset('assets/js/blogdetailes.js')}}"></script>
</body>

</html>
