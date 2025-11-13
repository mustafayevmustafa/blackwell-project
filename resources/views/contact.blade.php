<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Contact</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/headersection.css">

    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/languagepage.css">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body class="contact-page">
@include('partials.top-menu')
<!-- Overlay -->
<div class="quote-dark-overlay" id="quoteDarkOverlay" onclick="closeQuoteForm()"></div>

<!-- Get a Quote Form Section -->
<section class="quote-form-wrapper-main" id="quoteFormSection" style="display: none;">
    <div class="quote-form-wrapper">
        <h1 class="quote-form-title">Request a Quote</h1>
        <form class="quote-form">
            <div class="quote-form-row">
                <div class="quote-form-column">
                    <label for="quoteName" class="quote-label">Name:</label>
                    <input type="text" id="quoteName" placeholder="Your Name" class="quote-input" required>
                </div>
                <div class="quote-form-column">
                    <label for="quoteEmail" class="quote-label">Email:</label>
                    <input type="email" id="quoteEmail" placeholder="Your Email" class="quote-input" required>
                </div>
            </div>

            <div class="quote-form-row">
                <div class="quote-form-column">
                    <label for="quoteCompany" class="quote-label">Company:</label>
                    <input type="text" id="quoteCompany" placeholder="Company Name" class="quote-input">
                </div>
                <div class="quote-form-column">
                    <label for="quotePosition" class="quote-label">Position:</label>
                    <input type="text" id="quotePosition" placeholder="e.g. Project Manager, Engineer" class="quote-input">
                </div>

            </div>

            <div class="quote-form-row1">
                <div class="quote-form-column1">
                    <label for="quoteDetails" class="quote-label">Details:</label>
                    <textarea id="quoteDetails" rows="4" class="quote-textarea" placeholder="Tell us more..."
                              required></textarea>
                </div>
            </div>

            <button type="submit" class="quote-submit-button">Submit Quote Request</button>
        </form>
        <button type="button" class="quote-close-form" onclick="closeQuoteForm()"><i
                class="fa-solid fa-xmark"></i></button>
    </div>
</section>

<!-- Fixed CTA Button -->
<div class="quote-cta-fixed" onclick="openQuoteForm()">
    <a class="cta-btn cta-btn--secondary" aria-label="Request a Quote">
        <span class="cta-btn__text">Get a Quote</span>
    </a>
</div>

@include('partials.header')

<main class="main">


    <section id="contact" class="contact section ">
        <section class="about-section-up headersectionimage5">
            <div class="about-header">
                <ul class="bh-breadcrumb__list">
                    <!-- Home -->
                    <li class="bh-breadcrumb__item">
                <span class="bh-breadcrumb__item-text">
                    <a href="./index.html"> Home </a>
                </span>
                    </li>

                    <!-- Breadcrumb Arrow -->
                    <li class="bh-breadcrumb__item">
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>

                    <!-- Contact Us -->
                    <li class="bh-breadcrumb__item">
                        <a href="./contact.html" class="bh-breadcrumb__item-text">Contact Us</a>
                    </li>
                </ul>
                <h1>How can we help you?</h1>
                <div class="about_description_up">
                    <p>
                        Let us know how we can help you with your existing or future projects, and one of our sales or support representatives will contact you shortly.


                    </p>
                </div>
            </div>
        </section>
        <div class="container" data-aos="fade-up" data-aos-delay="100">


            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <p>AZURE BUSINESS CENTER
                            <br>
                            Ave Nobel 15,Azerbaijan Baku, AZ1025
                            <br>
                            Floor 19, Office 130</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p> +99412 4886807 <br> +99451 2256160 <br> +99451 2256169 </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>info@blackwell.az <br>  <br> export@blackwell.az</p>
                    </div>
                </div>

            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-6" >
                    <div class="responsive-map">
                        <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=BlackWell LLC&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>


                </div>
                <div class="col-lg-6">
                    <form action="{{ route('contact.send') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>

                            <div class="col-md-12">
                                <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                @if (session('success'))
                                    <div class="sent-message">{{ session('success') }}</div>
                                @endif
                                <div class="loading" style="display:none;">Loading</div>
                                <div class="error-message" style="display:none;"></div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form></div>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="/assets/js/Contactme.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/main.js"></script>

<!-- Toastr Configuration and Contact Form Handler -->
<script>
    // Toastr Options
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // Contact Form Submission
    $(document).ready(function() {
        $('.php-email-form').on('submit', function(e) {
            e.preventDefault();

            var form = $(this);
            var loadingEl = form.find('.loading');
            var errorEl = form.find('.error-message');
            var submitBtn = form.find('button[type="submit"]');

            // Show loading
            loadingEl.show();
            errorEl.hide();
            submitBtn.prop('disabled', true);

            $.ajax({
                url: form.attr('action'),
                method: 'POST',
                data: form.serialize(),
                success: function(response) {
                    loadingEl.hide();
                    submitBtn.prop('disabled', false);

                    // Show success toastr
                    toastr.success('Your message has been sent successfully!', 'Success');

                    // Reset form
                    form[0].reset();
                },
                error: function(xhr) {
                    loadingEl.hide();
                    submitBtn.prop('disabled', false);

                    // Show error toastr
                    var errorMessage = 'An error occurred. Please try again.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    toastr.error(errorMessage, 'Error');
                    errorEl.text(errorMessage).show();
                }
            });
        });
    });
</script>

<!-- Elfsight Website Translator | Untitled Website Translator -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>

</body>

</html>
