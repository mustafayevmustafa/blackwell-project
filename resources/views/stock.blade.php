<!DOCTYPE html>
<html lang="en">

@include('partials.head')
<body class="services-page">
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
<section class="about-section-up headersectionimage4">

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
                <a href="./services.html" class="bh-breadcrumb__item-text">Our Stock</a>
            </li>
        </ul>

        <div class="about-header-text">

            <h1>Our Stock   </h1>
            <div class="about_description_up">
                <p>
                    BlackWell offers a diverse and high-quality inventory, ensuring reliability and excellence in every product.


                </p>
            </div>

        </div>
</section>
<main class="main">

    <section id="stock" class="stock section" style="margin-top: 100px;">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-12 text-center">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-box-seam"></i>
                        <h3>Stock Information</h3>
                        <p>Check the availability of our products.</p>
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <form id="stock-check-form" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <select name="productname" id="productname" class="form-control" required>
                                            <option value="">Select a Product</option>
                                            @foreach($products as $product)
                                                <option value="{{ is_array($product->title) ? ($product->title['en'] ?? $product->title['az']) : $product->title }}">
                                                    {{ is_array($product->title) ? ($product->title['en'] ?? $product->title['az']) : $product->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity" required min="1">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="loading" style="display: none;">Loading...</div>
                                        <button type="submit" id="check-stock-btn">Check Stock</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="product-list">
                                <ul class="list-group">
                                    @foreach($products as $product)
                                        <li class="list-group-item">
                                            {{ is_array($product->title) ? ($product->title['en'] ?? $product->title['az']) : $product->title }}
                                            @if($product->count)
                                                <span class="badge bg-success float-end">{{ $product->count }} ədəd</span>
                                            @else
                                                <span class="badge bg-danger float-end">Stokda yoxdur</span>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
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


<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>


<!-- Elfsight Website Translator | Untitled Website Translator -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<script src="/assets/js/Loading/loading.js"></script>
<script src="/assets/js/Contactme.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    // Toastr konfiqurasiyası
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // Stock yoxlama formu
    $(document).ready(function() {
        console.log('Stock check form initialized');

        $('#stock-check-form').on('submit', function(e) {
            e.preventDefault();
            console.log('Form submitted');

            const productName = $('#productname').val();
            const quantity = $('#quantity').val();

            console.log('Product:', productName, 'Quantity:', quantity);

            if (!productName || !quantity) {
                toastr.error('Zəhmət olmasa məhsul və say seçin!');
                return;
            }

            // Loading göstərmək
            $('.loading').show();
            $('#check-stock-btn').prop('disabled', true);

            console.log('Sending AJAX request to:', '{{ route("stock.check") }}');

            $.ajax({
                url: '{{ route("stock.check") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    productname: productName,
                    quantity: quantity
                },
                success: function(response) {
                    console.log('Success response:', response);
                    $('.loading').hide();
                    $('#check-stock-btn').prop('disabled', false);

                    if (response.success) {
                        toastr.success(response.message, 'Məhsul Mövcuddur!');
                    } else {
                        toastr.warning(response.message, 'Diqqət!');
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Error response:', xhr);
                    console.log('Status:', status);
                    console.log('Error:', error);
                    console.log('Response Text:', xhr.responseText);

                    $('.loading').hide();
                    $('#check-stock-btn').prop('disabled', false);

                    if (xhr.status === 422) {
                        const errors = xhr.responseJSON.errors;
                        let errorMessage = '';
                        for (let key in errors) {
                            errorMessage += errors[key][0] + '<br>';
                        }
                        toastr.error(errorMessage, 'Xəta!');
                    } else {
                        toastr.error('Xəta baş verdi: ' + (xhr.responseJSON?.message || xhr.statusText || 'Bilinməyən xəta'), 'Xəta!');
                    }
                }
            });
        });
    });
</script>

</body>

</html>
