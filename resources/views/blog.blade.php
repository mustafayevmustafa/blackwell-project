<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>BlackWell blog</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="/assets/img/logo.png" rel="icon">
    <link href="/assets/img/logo.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/headersection.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/languagepage.css">
    <link rel="stylesheet" href="/assets/css/form.css">

</head>

<body class="blog-page">
<div id="top-black-menu" style="width: 100%; height: 30px; background-color: black;" class="fixed-top">
    <div class="container-fluid container-xl h-100 d-flex justify-content-end gap-4 align-items-center">
        <a class="text-light" style="font-size: 12px;" href="./index.html">Home</a>
        <a class="text-light" style="font-size: 12px;" href="#">Career</a>
        <a class="text-light" style="font-size: 12px;" href="./technical.html">Technical Consultation</a>
        <a class="text-light"  style="font-size: 12px;">

            <div class="elfsight-app-d3a63166-be5f-414d-be8e-111b893d9461" data-elfsight-app-lazy></div>
            <a href="https://elfsight.com/website-translator-widget/?utm_source=websites&amp;utm_medium=clients&amp;utm_content=website-translator&amp;utm_term=127.0.0.1&amp;utm_campaign=free-widget"
               target="_blank"
               rel="noreferrer"
               style="display: none !important;">
            </a>

        </a>
    </div>
</div>
@include('partials.header')
<div class="dark-overlay" id="darkOverlay" onclick="closeContact()"></div>

<section class="formwrapppermain" id="formSection" style="display: none;">
    <div class="form-wrapper">
        <h1 class="form-wrapper-title">Get in touch with an expert. </h1>
        <form class="contact-form">
            <div class="form-row">
                <div class="form-column">
                    <label for="First Name" class="form-label">First Name:</label>
                    <input type="text" id="First Name" placeholder="First Name" class="form-input" required>
                </div>
                <div class="form-column">
                    <label for="Last Name" class="form-label">Last Name:</label>
                    <input type="text" id="Last Name" placeholder="Last Name" class="form-input" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-column">
                    <label for="Company Email" class="form-label">Company Email:</label>
                    <input type="email" id="Company Email" placeholder="Company Email" class="form-input" required>
                </div>
                <div class="form-column">
                    <label for="Company Name" class="form-label">Company Name:</label>
                    <input type="text" id="Company Name" placeholder="Company Name" class="form-input" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-column">
                    <label for="Phone Number" class="form-label">Phone Number:</label>
                    <input type="email" id="Phone Number" placeholder="Phone Number" class="form-input" required>
                </div>
                <div class="form-column">
                    <label for="Country/Territory" class="form-label">Country/Territory:</label>

                    <select id="Country_ge_og__c" required name="Country_ge_og__c"
                            aria-labelledby="LblCountry_ge_og__c InstructCountry_ge_og__c"
                            class="mktoField mktoHasWidth mktoRequired mktoInvalid" aria-required="true">
                        <option value="">Select...</option>
                        <option value="UNITED STATES">UNITED STATES</option>
                        <option value="AFGHANISTAN">AFGHANISTAN</option>
                        <option value="ALAND ISLANDS">ALAND ISLANDS</option>
                        <option value="ALBANIA">ALBANIA</option>
                        <option value="ALGERIA">ALGERIA</option>
                        <option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
                        <option value="ANDORRA">ANDORRA</option>
                        <option value="ANGOLA">ANGOLA</option>
                        <option value="ANGUILLA">ANGUILLA</option>
                        <option value="ANTARCTICA">ANTARCTICA</option>
                        <option value="ANTIGUA AND BARBUDA">ANTIGUA AND BARBUDA</option>
                        <option value="ARGENTINA">ARGENTINA</option>
                        <option value="ARMENIA">ARMENIA</option>
                        <option value="ARUBA">ARUBA</option>
                        <option value="AUSTRALIA">AUSTRALIA</option>
                        <option value="AUSTRIA">AUSTRIA</option>
                        <option value="AZERBAIJAN">AZERBAIJAN</option>
                        <option value="BAHAMAS">BAHAMAS</option>
                        <option value="BAHRAIN">BAHRAIN</option>
                        <option value="BANGLADESH">BANGLADESH</option>
                        <option value="BARBADOS">BARBADOS</option>
                        <option value="BELARUS">BELARUS</option>
                        <option value="BELGIUM">BELGIUM</option>
                        <option value="BELIZE">BELIZE</option>
                        <option value="BENIN">BENIN</option>
                        <option value="BERMUDA">BERMUDA</option>
                        <option value="BHUTAN">BHUTAN</option>
                        <option value="BOLIVIA, PLURINATIONAL STATE OF">BOLIVIA, PLURINATIONAL STATE OF</option>
                        <!-- Diğer ülkeleri buraya ekleyebilirsiniz -->
                    </select>
                </div>

            </div>

            <div class="form-row1">
                <div class="form-column1">
                    <label for="issue" class="form-label">Details About Your Request:</label>
                    <textarea id="issue" rows="1" class="form-textarea" required></textarea>
                </div>

            </div>
            <div class="mktoRadioList" aria-invalid="false">
                <!-- Yes Option -->
                <label for="opt_in_yes" id="label_opt_in_yes">
                    <input type="radio" name="Opt_In_ge_og__c" id="opt_in_yes" value="yes" aria-required="true"
                           aria-labelledby="label_opt_in_yes" checked>

                    Yes, please keep me informed of topics and innovations transforming my industry,
                    including special event invitations, surveys, newsletters, product and service
                    incentives, and new product announcements from Baker Hughes Company and its affiliated
                    companies (together “Baker Hughes”).
                </label>
                <!-- No Option -->
                <label for="opt_in_no" id="label_opt_in_no">

                    <input type="radio" name="Opt_In_ge_og__c" id="opt_in_no" value="no" aria-required="true"
                           aria-labelledby="label_opt_in_no">
                    No, please exclude me from marketing communications from Baker Hughes.
                </label>
            </div>

            <div class="field-wrap">
                <div class="info-text">
                    Detailed information about how the personal data you have supplied is collected,
                    stored, and processed can be found in the
                    <a href="https://www.bakerhughes.com/privacy" target="_blank">Baker Hughes Privacy Notice</a>.
                    If you have opted in to receive marketing communications, you can withdraw your consent
                    at any time by visiting the
                    <a href="https://site.bakerhughes.com/Preference-Center-Login-LP.html" target="_blank">
                        Baker Hughes Communications Preference Center
                    </a>, or by using the unsubscribe link found at the bottom of all emails from Baker Hughes.
                </div>




                <button type="submit" class="submit-button">Submit Request</button>
        </form>
        <button type="button" class="close-form" id="closeFormBtn" onclick="closeContact()"><i
                class="fa-solid fa-xmark"></i></button>


    </div>
</section>
<!-- Fixed button to open the form -->
<div class="custom-product-expert-cta-fixed notranslate " content="notranslate" onclick="openContact()"
     translate="no">
    <a class="cta-btn cta-btn--primary" aria-label="Get in Touch">
        <span class="cta-btn__text">Contact us</span>
        <span class="cta-btn__icon">
            <svg width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                  d="M10.08 10.205l1.656 2.647c.42.37.764.214.764-.344v-9.58A.925.925 0 0011.576 2H3.224a.925.925 0 00-.924.927v6.35a.925.925 0 00.924.928h6.856z"
                  fill="#02A783"></path>
            </svg>
          </span>
    </a>
</div>


<!-- Get a quota  -->

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
<section class="about-section-up headersectionimage6 ">

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
                <a href="./blog.html" class="bh-breadcrumb__item-text">Blog</a>
            </li>
        </ul>
        <h1>Blog </h1>
    </div>
</section>
<main class="main ">
    <div class="container my-5">
        <section id="blog-posts" class="blog-posts section py-5">
            <div class="row gy-4">
                @forelse($blogs as $blog)
                    <div class="col-lg-4">
                        <article class="position-relative h-100">
                            @if($blog->image)
                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ is_array($blog->title) ? ($blog->title['en'] ?? $blog->title['az']) : $blog->title }}" class="img-fluid">
                                    <span class="post-date">{{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'N/A' }}</span>
                                </div>
                            @endif
                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">{{ is_array($blog->title) ? ($blog->title['en'] ?? $blog->title['az']) : $blog->title }}</h3>
                                <div class="meta d-flex align-items-center">
                                    <i class="bi bi-person"></i> <span class="ps-2">Admin</span>
                                    <span class="px-3 text-black-50">/</span>
                                    <i class="bi bi-folder2"></i> <span class="ps-2">{{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'N/A' }}</span>
                                </div>
                                <p>
                                    @php
                                        $content = is_array($blog->content) ? ($blog->content['en'] ?? $blog->content['az'] ?? '') : ($blog->content ?? '');
                                        echo strlen($content) > 150 ? substr(strip_tags($content), 0, 150) . '...' : strip_tags($content);
                                    @endphp
                                </p>
                                <hr>
                                @if($blog->slug)
                                    <a href="{{ route('blog.show', $blog->slug) }}" class="readmore stretched-link">
                                        <span>Read More</span><i class="bi bi-arrow-right"></i>
                                    </a>
                                @endif
                            </div>
                        </article>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">No blog posts available.</p>
                    </div>
                @endforelse
            </div>
        </section>
    </div>

    @if($blogs->hasPages())
        <section id="blog-pagination" class="blog-pagination section">
            <div class="container">
                <div class="d-flex justify-content-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </section>
    @endif
</main>

<footer class="text-secondary py-5 footermain" role="contentinfo">
    <div class="container">

        <div class="row mb-4">

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


<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<!-- <div id="preloader"></div> -->

<!-- Vendor JS Files -->
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

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<!-- Elfsight Website Translator | Untitled Website Translator -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<script src="/assets/js/Loading/loading.js"></script>
</body>

</html>
