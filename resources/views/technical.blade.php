<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Technical Consultation</title>
    <meta name="description" content="">
    <meta name="keywords" content="">


    <link href="/assets/img/logo.png" rel="icon">
    <link href="/assets/img/logo.png" rel="apple-touch-icon">


    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="contact-page">
<div id="top-black-menu" style="width: 100%; height: 30px; background-color: black;" class="fixed-top">
    <div class="container-fluid contant_page_technical container-xl h-100 d-flex justify-content-end gap-4 align-items-center">
        <a class="text-light " style="font-size: 12px;" href="./index.html">Home</a>
        <a class="text-light" style="font-size: 12px;" href="#">Career</a>
        <a class="text-light activeye" style="font-size: 12px;" href="./technical.html">Technical Consultation</a>
    </div>
</div>

@include('partials.header')
<main class="main">

    <section id="consultation" class="consultation section" style="margin-top: 100px;">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">

                <div class="col-lg-12 text-center">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-person-circle"></i>
                        <h3>Technical Consultation</h3>
                        <p>Get expert advice on your technical issues.</p>
                    </div>
                </div>

                <div class="col-lg-12 mt-4">
                    <form action="{{ route('consultation.store') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="companyname" placeholder="Company Name" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="position" placeholder="Position" required>
                            </div>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="consultationdate" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="problemdescription" rows="6" placeholder="Problem Description" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit">Request Consultation</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

</main>


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
                    <li><a href="/blog.html" class="text-decoration-none text-secondary">Blog</a></li>
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
                    <a href="#" class="border border-secondary rounded-circle text-secondary text-center" style="width: 32px; height: 32px; line-height: 32px;"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" class="border border-secondary rounded-circle text-secondary text-center" style="width: 32px; height: 32px; line-height: 32px;"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="border border-secondary rounded-circle text-secondary text-center" style="width: 32px; height: 32px; line-height: 32px;"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="border border-secondary rounded-circle text-secondary text-center" style="width: 32px; height: 32px; line-height: 32px;"><i class="fa-brands fa-pinterest"></i></a>
                    <a href="#" class="border border-secondary rounded-circle text-secondary text-center" style="width: 32px; height: 32px; line-height: 32px;"><i class="fa-brands fa-instagram"></i></a>
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
                    <li class="list-inline-item"><a href="/conflict-minerals" class="text-secondary text-decoration-none">Conflict Minerals</a></li>
                    <li class="list-inline-item"><a href="/e-waste" class="text-secondary text-decoration-none">E-Waste</a></li>
                    <li class="list-inline-item"><a href="/privacy" class="text-secondary text-decoration-none">Privacy Notice</a></li>
                    <li class="list-inline-item"><a href="/preferences" class="text-secondary text-decoration-none" target="_blank">Preferences ↗</a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>



<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<!-- <div id="preloader"></div> -->

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="/assets/js/Contactme.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="assets/js/main.js"></script>
<script src="/assets/js/Loading/loading.js"></script>
<script>
    @if(session('success'))
    toastr.success("{{ session('success') }}");
    @endif

    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error("{{ $error }}");
    @endforeach
    @endif
</script>

</body>

</html>
