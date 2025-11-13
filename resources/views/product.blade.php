<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>BlackWell</title>
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
    <link
        href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="./assets/css/headersection.css">
    <link rel="stylesheet" href="/assets/css/languagepage.css">
    <link rel="stylesheet" href="/assets/css/form.css">


    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="projects-page">
@include('partials.top-menu')
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
<section class="about-section-up headersectionimage3">
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
                <a href="./partners.html" class="bh-breadcrumb__item-text">Product</a>
            </li>
        </ul>
        <h1>Product </h1>
        <div class="about_description_up">
            <p>
                BlackWell delivers innovative and premium products, designed to meet the highest standards of quality and
                performance.


            </p>
        </div>
    </div>
</section>
<section id="projects" class="section py-5">
    <div class="container">
        <ul class="portfolio-filters list-inline text-center mb-4"  id="filterList">
            <li class="list-inline-item filter-active" style="cursor: pointer;" data-category="all">All</li>
            @foreach($categories as $category)
                <li class="list-inline-item" style="cursor: pointer;" data-category="{{ $category->id }}">
                    {{ is_array($category->title) ? ($category->title['en'] ?? $category->title['az']) : $category->title }}
                </li>
            @endforeach
        </ul>

        <div class="row" id="project-grid">
            @forelse($products as $product)
                <div class="col-lg-4 col-md-6 portfolio-item product-item fade-in" data-category="{{ $product->category_id ?? '' }}">
                    <div class="project-box shadow-sm h-100 border-0 p-3 rounded">
                        <div class="project-image mb-3 text-center" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#projectModal"
                             data-image="{{ $product->image ? asset('storage/' . $product->image) : asset('assets/img/placeholder.png') }}"
                             data-description="{{ is_array($product->content) ? ($product->content['en'] ?? $product->content['az'] ?? 'No description') : ($product->content ?? 'No description') }}">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ is_array($product->title) ? ($product->title['en'] ?? $product->title['az']) : $product->title }}" class="img-fluid rounded">
                            @else
                                <img src="{{ asset('assets/img/placeholder.png') }}" alt="No Image" class="img-fluid rounded">
                            @endif
                        </div>
                        <div class="project-content mb-3">
                            <h5 class="project-title">{{ is_array($product->title) ? ($product->title['en'] ?? $product->title['az']) : $product->title }}</h5>
                            <p class="project-description">
                                @php
                                    $description = is_array($product->content) ? ($product->content['en'] ?? $product->content['az'] ?? '') : ($product->content ?? '');
                                    echo strlen($description) > 60 ? substr($description, 0, 60) . '...' : $description;
                                @endphp
                            </p>
                            @if($product->category)
                                <span class="badge bg-secondary mb-2">{{ is_array($product->category->title) ? ($product->category->title['en'] ?? $product->category->title['az']) : $product->category->title }}</span>
                            @endif
                            @if($product->price)
                                <p class="text-primary fw-bold mb-1">${{ number_format($product->price, 2) }}</p>
                            @endif
                            @if($product->count !== null && $product->count > 0)
                                <span class="badge bg-success">{{ $product->count }} in stock</span>
                            @elseif($product->count === 0)
                                <span class="badge bg-danger">Out of stock</span>
                            @endif
                        </div>
                        <div class="project-links d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#projectModal"
                               data-image="{{ $product->image ? asset('storage/' . $product->image) : asset('assets/img/placeholder.png') }}"
                               data-description="{{ is_array($product->content) ? ($product->content['en'] ?? $product->content['az'] ?? 'No description') : ($product->content ?? 'No description') }}">
                                <i class="bi bi-zoom-in"></i>
                            </a>
                            <a href="{{ $product->image ? asset('storage/' . $product->image) : asset('assets/img/placeholder.png') }}" class="btn btn-sm btn-outline-secondary" target="_blank">
                                <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">No products available.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Modal projects-data.js  PanametricProducts.json -->
<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectModalLabel">Project Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" src="" class="img-fluid mb-3" alt="Project Image">
                <p id="modalDescription" class="text-muted"></p>
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
<script src="assets/js/main.js"></script>

<!-- Elfsight Website Translator | Untitled Website Translator -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<script src="/assets/js/Loading/loading.js"></script>

<script>
    // Category Filter Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('#filterList li');
        const productItems = document.querySelectorAll('.product-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('filter-active'));

                // Add active class to clicked button
                this.classList.add('filter-active');

                // Get selected category
                const selectedCategory = this.getAttribute('data-category');

                // Filter products
                productItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');

                    if (selectedCategory === 'all') {
                        // Show all products
                        item.classList.remove('d-none');
                    } else if (itemCategory === selectedCategory) {
                        // Show matching products
                        item.classList.remove('d-none');
                    } else {
                        // Hide non-matching products
                        item.classList.add('d-none');
                    }
                });
            });
        });

        // Modal functionality
        const modalImage = document.getElementById('modalImage');
        const modalDescription = document.getElementById('modalDescription');
        const modalTriggers = document.querySelectorAll('[data-bs-toggle="modal"]');

        modalTriggers.forEach(trigger => {
            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                const image = this.getAttribute('data-image');
                const description = this.getAttribute('data-description');

                if (modalImage && image) {
                    modalImage.src = image;
                }
                if (modalDescription && description) {
                    modalDescription.textContent = description;
                }
            });
        });
    });
</script>

</body>

</html>
