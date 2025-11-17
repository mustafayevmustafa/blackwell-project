<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BlackWell | YOUR SUPPLY CHAIN PARTNER</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/logo.png')}}">

    <!-- Fonts (Sadece Kullanılanlar) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@400;600&display=swap"
          rel="stylesheet">

    <!-- Bootstrap (Sadece Tek Sürüm - En Güncel) -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- FontAwesome (Sadece Güncel Tek Sürüm) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Custom CSS (Her biri yalnızca 1 kez!) -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/video.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/tabcontrol.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/logos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/languagepage.css')}}">

    <!-- Preconnect for Font Optimization -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{asset('assets/css/whatwedo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/PanametricsProducts.css')}}">
</head>


<body class="index-page">

@include('partials.top-menu')

@include('partials.header')


<!-- Dark overlay (Initially hidden) -->


<!-- Fixed button to open the form -->



<main class="main main-2">


    <section id="hero" class="hero section dark-background">


        <!-- Popup Modal-->

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


        <div id="hero-carousel" class="carousel slide" data-bs-ride="false"> <!-- interval kaldırıldı -->

            <!-- First carousel item - video (active) -->
            <div class="carousel-item active">
                <video autoplay muted loop playsinline class="d-block w-100"
                       style="object-fit: cover; height: 100%; object-position: top;">
                    <source src="/assets/videos/firstslide2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center" data-aos-delay="0" style="position: relative; z-index: 2;">
                        <div class="col-lg text-center d-flex flex-column align-items-center">
                            <h2 class="slide_h2_first">
                                <p class="slide_h2_bw">BlackWell</p>
                                <!-- <p class="slide_h2_yr">Your Supply Chain Partner </p> -->
                            </h2>
                            <p class="slide_h2_pana">We are the official distributor of Panametrics, a Baker Hughes business.</p>
                            <a class="contact-index mt-3" onclick="openQuoteForm()">Get a Quota</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Second carousel item - video -->
            <div class="carousel-item">
                <video autoplay muted loop playsinline class="d-block w-100" poster="/assets/img/slide2-fallback.jpg"
                       style="object-fit: cover; height: 100%; width: 100%; object-position: top;">
                    <source src="/assets/videos/secondslide.mp4" type="video/mp4" media="(max-width: 767px)">
                    <source src="/assets/videos/secondslide.mp4" type="video/mp4" media="(min-width: 768px)">
                    Your browser does not support the video tag.
                </video>

                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center" data-aos-delay="0" style="position: relative; z-index: 2;">
                        <div class="col-lg text-center d-flex flex-column align-items-center">
                            <a class="contact-index mt-3" onclick="openQuoteForm()">Get a Quote</a>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Third carousel item - image -->
            <div class="carousel-item">
                <img src="{{asset('blackwell_img/slide3.jpg')}}" class="d-block w-100" alt="">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center" data-aos-delay="0">
                        <div class="col-lg text-center d-flex flex-column align-items-center"
                             style="position: relative; z-index: 2;">

                            <h2 class="slide_h2">Welcome to BlackWell</h2>
                            <a class="contact-index mt-3" onclick="openQuoteForm()"> Get a Quota</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
            <!-- Progress bar -->
            <div class="multi-carousel-progress">
                <div class="progress-bar-indicator">
                    <div class="progress">
                        <div class="progress-bar progress-inner"></div>
                    </div>
                </div>
                <div class="progress-bar-indicator">
                    <div class="progress">
                        <div class="progress-bar progress-inner"></div>
                    </div>
                </div>
                <div class="progress-bar-indicator">
                    <div class="progress">
                        <div class="progress-bar progress-inner"></div>
                    </div>
                </div>
            </div>

        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {



                const carouselEl = document.getElementById('hero-carousel');
                const progressBars = Array.from(document.querySelectorAll('.progress-bar-indicator .progress-inner'));
                const items = Array.from(carouselEl.querySelectorAll('.carousel-item'));
                const video = document.getElementById('first-slide-video');
                let carousel;

                // Başlangıçta başlat
                function initCarousel(interval) {
                    if (carousel) {
                        carousel.dispose();
                    }
                    carousel = new bootstrap.Carousel(carouselEl, {
                        interval: interval,
                        ride: 'carousel',
                        pause: false,
                        wrap: true,
                        touch: true // BU ŞART!
                    });

                }

                // Progress bar'ları sıfırla
                function resetAllBars() {
                    progressBars.forEach(bar => {
                        bar.style.transition = 'none';
                        bar.style.width = '0%';
                        void bar.offsetWidth;
                    });
                }

                // Progress bar başlat
                function startBar(index, duration) {
                    const bar = progressBars[index];
                    if (!bar) return;

                    bar.style.transition = 'none';
                    bar.style.width = '0%';
                    void bar.offsetWidth;

                    requestAnimationFrame(() => {
                        bar.style.transition = `width ${duration}ms linear`;
                        bar.style.width = '100%';
                    });
                }

                // Slide değişince bar sıfırla
                carouselEl.addEventListener('slide.bs.carousel', () => {
                    resetAllBars();
                });

                // Slide geldikten sonra ilgili bar'ı başlat ve interval ayarla
                carouselEl.addEventListener('slid.bs.carousel', (e) => {
                    const nextIndex = items.indexOf(e.relatedTarget);

                    let duration = 10000; // default
                    if (nextIndex === 0 && video) {
                        duration = video.duration * 1000; // video süresi
                    }

                    startBar(nextIndex, duration);

                    // Interval güncelle
                    initCarousel(duration);
                });

                // İlk video yüklenince başlat
                if (video) {
                    video.addEventListener('loadedmetadata', () => {
                        const duration = video.duration * 1000;
                        startBar(0, duration);
                        initCarousel(duration);
                    });
                } else {
                    startBar(0, 10000);
                    initCarousel(10000);
                }
            });

            video.addEventListener('ended', () => {
                carousel.next(); // Sonraki slayta geç.
            });

            let checkVideoPlayed = setInterval(() => {
                if (video.paused) {
                    clearInterval(checkVideoPlayed); // Tekrar kontrol edilen süreyi durdur.
                    carousel.next(); // Geçiş yap
                }
            }, 1000); // Her 1 saniyede bir kontrol et
        </script>




    </section>

    <section id="recent-blog-posts" class="recent-blog-posts section pt-3 p-1">
        <div class="container">
            <div class="row gy-5 text-center">

                <!-- First Blog Post -->
                <div class="col-lg-4 col-md-6 custom-card-1 ">
                    <div class="post-item position-relative h-100 hover-slide" data-aos="fade-up" data-aos-delay="100">
                        <div class="post-content d-flex flex-column text-start pb-30 ">
                            <!-- Updated the link to use absolute path with the blog ID -->
                            <a href="/blog-details.html?id=1"> <!-- Pass blog ID here -->
                                <span class="slide-header">News</span>

                                <span class="post-date">March 28, 2025</span>
                                <h3 class="slide-title">Sinochem Selects Baker Hughes' Cordant™ for Enterprise-Wide Asset Management</h3>
                                <hr>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Second Blog Post -->
                <div class="col-lg-4 col-md-6 custom-card-2">
                    <div class="post-item position-relative h-100 hover-slide" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-content d-flex flex-column text-start">
                            <a href="/blog-details.html">

                                <span class="slide-header">Energy Forward</span>

                                <span class="post-date">March 26, 2025</span>
                                <h3 class="slide-title">How GenAI is driving the art of the possible</h3>

                                <hr>
                            </a>

                        </div>
                    </div>
                </div>

                <!-- Third Blog Post -->
                <div class="col-lg-4 col-md-6 custom-card-3">
                    <div class="post-item position-relative h-100 hover-slide" data-aos="fade-up" data-aos-delay="300">
                        <div class="post-content d-flex flex-column text-start">
                            <a href="/blog-details.html">

                                <span class="slide-header">Press Release</span>

                                <span class="post-date">March 26, 2025</span>
                                <h3 class="slide-title">Baker Hughes Awarded Integrated Coiled-Tubing Drilling Contract</h3>

                                <hr>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--    <section id="panametrics" class="panamertics section">-->
    <!--    <div class="container">-->
    <!--      <div class="panametrics-wrapper">-->
    <!--        <ul class="nav nav-tabs row g-2 d-flex" role="tablist">-->
    <!--          &lt;!&ndash; Tab Items &ndash;&gt;-->
    <!--          <li class="nav-item col-3" role="presentation">-->
    <!--            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1" aria-selected="true" role="tab">-->
    <!--              <h4>Feature 1</h4>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--          <li class="nav-item col-3" role="presentation">-->
    <!--            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" aria-selected="false" role="tab">-->
    <!--              <h4>Feature 2</h4>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--          <li class="nav-item col-3" role="presentation">-->
    <!--            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" aria-selected="false" role="tab">-->
    <!--              <h4>Feature 3</h4>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--          <li class="nav-item col-3" role="presentation">-->
    <!--            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4" aria-selected="false" role="tab">-->
    <!--              <h4>Feature 4</h4>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--          <li class="nav-item col-3" role="presentation">-->
    <!--            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5" aria-selected="false" role="tab">-->
    <!--              <h4>Feature 5</h4>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--          <li class="nav-item col-3" role="presentation">-->
    <!--            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6" aria-selected="false" role="tab">-->
    <!--              <h4>Feature 6</h4>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--          <li class="nav-item col-3" role="presentation">-->
    <!--            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-7" aria-selected="false" role="tab">-->
    <!--              <h4>Feature 7</h4>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--          <li class="nav-item col-3" role="presentation">-->
    <!--            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-8" aria-selected="false" role="tab">-->
    <!--              <h4>Feature 8</h4>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--          <li class="nav-item col-3" role="presentation">-->
    <!--            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-9" aria-selected="false" role="tab">-->
    <!--              <h4>Feature 9</h4>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--          <li class="nav-item col-3" role="presentation">-->
    <!--            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-10" aria-selected="false" role="tab">-->
    <!--              <h4>Feature 10</h4>-->
    <!--            </a>-->
    <!--          </li>-->
    <!--        </ul>-->
    <!--      </div>-->

    <!--      <div class="tab-content">-->
    <!--        &lt;!&ndash; Example Tab Content &ndash;&gt;-->
    <!--        <div class="tab-pane fade active show" id="panametrics-tab-1" role="tabpanel">-->
    <!--          <h3>Content for Feature 1</h3>-->
    <!--          <p>Details about Feature 1..      Assisting the Drilling Business Our company is especially suited to strengthen the-->
    <!--            bottom line of drilling companies for oil and gas, particularly in the field of drilling-->
    <!--            surface equipment. We partner with global top brands to bring you superior equipment at-->
    <!--            attractive prices. We provide a full selection of tools for drilling..</p>-->
    <!--          <div class="col-lg-6 order-1 order-lg-2 text-center">-->
    <!--            <img src="assets/img/features-2.jpg" alt="" class="img-fluid">-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="tab-pane fade" id="panametrics-tab-2" role="tabpanel">-->
    <!--          <h3>Content for Feature 2</h3>-->
    <!--          <p>Details about Feature 2...</p>-->
    <!--        </div>-->
    <!--        &lt;!&ndash; Add other tab contents similarly &ndash;&gt;-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </section>-->
    <section class="container">
        <div>
            <div class="bh-cke-eyebrow-heading ">
                <p class="fs-1 lh-lg bh-cke-eyebrow-heading">Welcome to BlackWell</p> <!-- fs-1 for the largest font size -->
            </div>
            <p class="header_up">Specializing in industrial solutions for the Oil & Gas, Petrochemical, Energy, and Marine
                sectors — offering equipment, spare parts, service support, and calibration solutions.
            </p>
        </div>



    </section>
    <section id="features" class="features section">

        <div class="container ">
            <!-- HTML with Bootstrap classes for larger font size -->



            <div class="">

                <div class="bh-cke-eyebrow-heading">
                    <p class="fs-1 lh-lg">Our Section</p> <!-- fs-1 for the largest font size -->

                </div>
                <p class="header_up">BlackWell provides equipment, spare parts, chemicals, and technical services to the Oil &
                    Gas, Petrochemical, Renewable Energy, and Marine industries.

                </p>
            </div>

            <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs row g-2 d-flex" data-aos="fade-up" data-aos-delay="100" role="tablist">

                    <li class="nav-item col-3" role="presentation">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1" aria-selected="true"
                           role="tab">
                            <h4>OIL AND GAS</h4>
                        </a>
                    </li>

                    <li class="nav-item col-3" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" aria-selected="false"
                           role="tab">
                            <h4>PETROCHEMICAL</h4>
                        </a>
                    </li>

                    <li class="nav-item col-3" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" aria-selected="false"
                           role="tab">
                            <h4>Renewable Energy
                            </h4>
                        </a>
                    </li>

                    <li class="nav-item col-3" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4" aria-selected="false"
                           role="tab">
                            <h4>MARINE</h4>
                        </a>
                    </li>

                </ul>
            </div>


            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column ">
                            <h3>OIL AND GAS</h3>
                            <p class="fst-main">
                                From upstream oil and gas production to downstream refining and petrochemical facilities, Blackwell
                                offers a unique blend of extensive procurement capabilities and customized engineering services across
                                all stages of the industry. We approach each project individually, delivering “fit-for-purpose”
                                solutions that strike the optimal balance between safety, cost-effectiveness, and timely execution. We
                                fully understand that every segment of the energy sector relies on high-quality materials to maintain
                                continuous and efficient operations. That’s why our core mission is to be your trusted
                                partner—delivering top-quality products on time and at the most competitive prices.


                            </p>

                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{asset('assets/img/OilandGas/pexels-life-of-pix-2391.jpg')}}" alt="" class="img-fluid custom-img-width">
                        </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column">
                            <h3>PETROCHEMICAL</h3>
                            <p class="fst-main">
                                BlackWell specializes in the supply and distribution of various chemical products and reagents for
                                companies operating in the petrochemical industry. Our company is committed to providing high-quality,
                                safety-compliant products that support the continuity and efficiency of our clients’ production
                                processes. The products we offer are carefully selected to meet industry-specific requirements and are
                                delivered with all necessary certifications and technical documentation. At BlackWell, our mission is
                                to be a reliable supply partner in the petrochemical sector, ensuring timely delivery and competitive
                                pricing to meet the evolving needs of our customers.
                            </p>


                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{asset('assets/img/OilandGas/pexels-edward-jenner-4033148.jpg')}}" alt=""
                                 class="img-fluid custom-img-width">
                        </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column ">
                            <h3>Renewable Energy
                            </h3>
                            <p class="fst-main">
                                BlackWell specializes in the supply of equipment, spare parts, and technical solutions for the energy
                                sector. We provide reliable and efficient products to companies operating in electric power, renewable
                                energy, and industrial energy segments. Our offerings are selected in compliance with international
                                standards, ensuring high performance, safety, and durability to meet the specific needs of our
                                clients. With a long-term partnership approach, BlackWell contributes to the successful execution of
                                your energy projects.




                            </p>


                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{asset('assets/img/OilandGas/pexels-pixabay-33493.jpg')}}" alt="" class="img-fluid custom-img-width">
                        </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column ">
                            <h3>MARINE</h3>
                            <p class="fst-main">
                                BlackWell specializes in the supply of equipment, spare parts, chemicals, and technical services for
                                the marine industry. We provide high-quality, certified solutions tailored to the needs of shipping
                                companies, marine terminals, offshore platforms, and other maritime infrastructure. Our offerings are
                                selected to ensure operational reliability, compliance with safety standards, and maximum efficiency.
                                In addition to product supply, we support our clients with field services, technical support, and
                                prompt delivery solutions. Our mission is to be a trusted and long-term supply partner in the marine
                                sector.


                            </p>

                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{asset('assets/img/OilandGas/1000_F_1193875286_tqwDC7r16yK66EYcBTLscjc8cIKkGNYI (2).jpg')}}" alt=""
                                 class="img-fluid custom-img-width">
                        </div>

                    </div>
                </div><!-- End tab content item -->

            </div>

        </div>

    </section><!-- /Features Section -->
    <div class="container myIframemain ">
        <h1 style="text-align: left ;">Flow & Process Technologies</h1>
        <!-- <div class=" myIframemainmaindiv ">
          <h3>Innovative Solutions for Tomorrow</h3>
          <p>We drive progress by leveraging cutting-edge technologies and innovative services to unlock new opportunities for our clients.</p>
        </div> -->

        <a href="https://apps.kaonadn.net/6214587577794560/index.html" target="_blank">
            <iframe id="myIframe" src="https://apps.kaonadn.net/6214587577794560/index.html" allowfullscreen
                    allow="fullscreen; xr-spatial-tracking; autoplay; clipboard-write"></iframe>
            <button class="fullscreen-btn">
                <i class="fas fa-expand"></i>
            </button>
        </a>
    </div>

    <div class="flexsa container">
        <!-- HTML with Bootstrap classes for larger font size -->
        <div>

            <div class="bh-cke-eyebrow-heading">
                <p class="fs-1 lh-lg">Panametrics a Baker Hughes Products
                </p> <!-- fs-1 for the largest font size -->
            </div>


            <p>
                BlackWell is the official distributor of Panametrics a Baker Hughes products and service solutions.

            </p>
        </div>

        <div class=" tab_control_padding">
            <div class="tab__bar row " style="gap:0;">
                <div class="tab__navigation">
            <span class="left__btn ">
              <svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg" id="fi_2735069">
                <g id="Layer_19" data-name="Layer 19">
                  <path
                      d="m23.21 28.29a1 1 0 0 1 0 1.42 1 1 0 0 1 -1.42 0l-13-13a1 1 0 0 1 0-1.42l13-13a1 1 0 1 1 1.42 1.42l-12.3 12.29z">
                  </path>
                </g>
              </svg>
            </span>
                    <span class="right__btn">
              <svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg" id="fi_2735071">
                <g id="Layer_20" data-name="Layer 20">
                  <path
                      d="m23.21 16.71-13 13a1 1 0 0 1 -1.42 0 1 1 0 0 1 0-1.42l12.3-12.29-12.3-12.29a1 1 0 0 1 1.42-1.42l13 13a1 1 0 0 1 0 1.42z">
                  </path>
                </g>
              </svg>
            </span>
                    <ul class="tab__menu ">
                        <li class="tab__btn active">Flare IQ</li>
                        <li class="tab__btn">DigitalFlow</li>
                        <li class="tab__btn">Gas Flowmeter</li>
                        <li class="tab__btn">Process Analyzers</li>
                        <li class="tab__btn">Oxygen & Gas Measurement</li>
                        <li class="tab__btn">DigitalFlow XGF868i</li>
                        <li class="tab__btn">SOLUTIONS FOR DRILLING</li>
                        <li class="tab__btn">SOLUTIONS FOR DRILLING</li>
                        <li class="tab__btn">SOLUTIONS FOR DRILLING</li>
                        <li class="tab__btn">SOLUTIONS FOR DRILLING</li>
                        <li class="tab__btn">SOLUTIONS FOR DRILLING</li>
                    </ul>
                </div>
            </div>


            <div class="tab__content tab__contact_pad ">
                <div class="tab active ">
                    <div class="custom-tab-pane active" id="features-tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="custom-row ">
                            <div class="row">


                                <div class="col-lg-6 order-2 order-lg-1  tab_pad_0">
                                    <h2>Why flare.IQ for flare management control?</h2>
                                    <p class="fst-main">
                                        Reducing greenhouse gas emissions, including methane, is essential in mitigating global
                                        warming. While the oil and gas industry is not the sole source of CO₂ and methane, it
                                        plays a significant role in emission reduction efforts.
                                        Panametrics’ flare.IQ technology enables effective monitoring, reduction, and control of
                                        flaring emissions. It helps minimize methane slip, lower flaring costs, optimize steam
                                        usage, and enhance transparency in flare operations.
                                    </p>
                                    <div class="custom-col-left">
                                        <div class="mt-3 text-right">
                                            <a href="assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf" class="btn btn-dark"
                                               target="_self">Get Datasheet</a>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="custom-col-right">
                                        <img src="{{asset('assets/img/flare.iq_space_dark.webp')}}" alt="" class="custom-img">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="custom-tab-pane active" id="features-tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="custom-row container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 tab_pad_0">
                                    <h2>DigitalFlow</h2>
                                    <p class="fst-main">
                                        The DigitalFlow GF868 ultrasonic flowmeter uses the patented Correlation Transit-Time™ technique,
                                        digital signal processing, and an accurate method of calculating molecular weight. Add to these
                                        features the inherent advantages of ultrasonic flow measurement reliability with no routine
                                        maintenance, high accuracy, fast response, wide rangeability, and the GF868 flowmeter is the clear
                                        choice for flare gas applications.
                                        The GF868 is a highly versatile, high-performance flowmeter capable of many configurations with a
                                        large display and ample space for complicated wiring. Several options exist for I/O, including the
                                        ability to handle two flare lines with one box.
                                    </p>
                                    <div class="custom-col-left">
                                        <div class="mt-3 text-right">
                                            <a href="assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf" class="btn btn-dark"
                                               target="_self">Get Datasheet</a>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="custom-col-right">
                                        <img src="{{asset('assets/img/gf868_square.webp')}}" alt="" class="custom-img">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="custom-tab-pane active" id="features-tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="custom-row container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 tab_pad_0">
                                    <h2>TransPort® PT878GC</h2>
                                    <p class="fst-main">
                                        The TransPort PT878GC portable gas flowmeter is a complete ultrasonic flow metering system for
                                        measuring most gases including: Natural gas, compressed air, fuel gases, erosive and corrosive
                                        gases, toxic gases, high-purity gases and air separation gases.

                                        This flowmeter can be installed in just minutes without needing to shut down, thus avoiding costly
                                        downtime. This ultrasonic technology works with gases at high or low pressure in pipes made of
                                        metal and most other materials.
                                    </p>
                                    <div class="custom-col-left">
                                        <div class="mt-3 text-right">
                                            <a href="assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf" class="btn btn-dark"
                                               target="_self">Get Datasheet</a>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="custom-col-right">
                                        <img src="{{asset('assets/img/PT878GC-31508.webp')}}" alt="" class="custom-img">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="custom-tab-pane active" id="features-tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="custom-row container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 tab_pad_0">
                                    <h2>Moisture Measurement</h2>
                                    <p class="fst-main">
                                        Panametrics, a Baker Hughes business, provides reliable moisture analyzers to support your process
                                        decisions. Our moisture analyzers detect leaks in the gas process and in your pressurized pipeline
                                        system, and help identify trace moisture in gas for custody transfer. Our analyzers can assist in
                                        keeping your processes safe by alerting operators of high moisture conditions, which can corrode
                                        the metal infrastructure of your pipeline or process.

                                        Our moisture analyzers and transmitters ensure that your process is within the parameters of your
                                        specifications.
                                    </p>

                                    <div class="custom-col-left">
                                        <div class="mt-3 text-right">
                                            <a href="assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf" class="btn btn-dark"
                                               target="_self">Get Datasheet</a>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="custom-col-right">
                                        <img src="{{asset('assets/img/moisture_iq_1_1.webp')}}" alt="" class="custom-img">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="custom-tab-pane active" id="features-tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="custom-row container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 tab_pad_0">
                                    <h2>XMO2pro</h2>
                                    <p class="fst-main">
                                        Thanks to the perfectly matched interaction between the paramagnetic oxygen property and
                                        temperature, the Safety Integrity Level (SIL) certified XMO2pro is contamination resistant,
                                        requires minimal maintenance and needs no consumables. This makes it the ultimate choice for
                                        highly accurate oxygen measurements for widespread use in harsh environment industrial and oil &
                                        gas applications.
                                    </p>
                                    <div class="custom-col-left">
                                        <div class="mt-3 text-right">
                                            <a href="assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf" class="btn btn-dark"
                                               target="_self">Get Datasheet</a>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="custom-col-right">
                                        <img src="assets/img/xmo2pro_website4.webp" alt="" class="custom-img">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="custom-tab-pane active" id="features-tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="custom-row container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 tab_pad_0">
                                    <h2>DigitalFlow XGF868i</h2>
                                    <p class="fst-main">
                                        The DigitalFlow XGF868i is a compact and explosion-proof/flame-proof transmitter version of the
                                        Panametrics DigitalFlow GF868 flare gas mass flowmeter.

                                        The DigitalFlow XGF868 is ideally suited for offshore installations with harsh environments and
                                        limited space but can be applied downstream in refineries and petrochemical plants where Zone 1 is
                                        required
                                    </p>
                                    <div class="custom-col-left">
                                        <div class="mt-3 text-right">
                                            <a href="assets/img/DigitalFlow GF868-EN-Datasheet-bhcs38521.pdf" class="btn btn-dark"
                                               target="_self">Get Datasheet</a>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="custom-col-right">
                                        <img src="assets/img/xgf868i_square.webp" alt="" class="custom-img">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="custom-tab-pane active" id="features-tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="custom-row container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 tab_pad_0">
                                    <h2>Empowering Drilling Companies with High-Quality Equipment</h2>
                                    <p class="fst-main">
                                        Assisting the Drilling Business Our company is especially suited to strengthen the
                                        bottom
                                        line of drilling companies for oil and gas, particularly in the field of drilling
                                        surface
                                        equipment. We partner with global top brands to bring you superior equipment at
                                        attractive
                                        prices. We provide a full selection of tools for drilling. When it comes to the specific
                                        needs of the drilling industry, our many years of experience will yield favorable
                                        results
                                        for your company. Our strong relationships with suppliers across the globe give you a
                                        large
                                        selection of products to choose from.
                                    </p>
                                    <div class="custom-col-left">


                                        <ul>
                                            <li><i class="check-icon"></i> <span>Extensive Product Portfolio</span></li>
                                            <li><i class="check-icon"></i> <span>Competitive Pricing</span></li>
                                            <li><i class="check-icon"></i> <span>Technical Support and Consultation</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="custom-col-right">
                                        <img src="https://drilllines.com/wp-content/uploads/2019/12/dreamstime_l_43107847.jpg" alt=""
                                             class="custom-img">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="custom-tab-pane active" id="features-tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="custom-row container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 tab_pad_0">
                                    <h2>Empowering Drilling Companies with High-Quality Equipment</h2>
                                    <p class="fst-main">
                                        Assisting the Drilling Business Our company is especially suited to strengthen the
                                        bottom
                                        line of drilling companies for oil and gas, particularly in the field of drilling
                                        surface
                                        equipment. We partner with global top brands to bring you superior equipment at
                                        attractive
                                        prices. We provide a full selection of tools for drilling. When it comes to the specific
                                        needs of the drilling industry, our many years of experience will yield favorable
                                        results
                                        for your company. Our strong relationships with suppliers across the globe give you a
                                        large
                                        selection of products to choose from.
                                    </p>
                                    <div class="custom-col-left">


                                        <ul>
                                            <li><i class="check-icon"></i> <span>Extensive Product Portfolio</span></li>
                                            <li><i class="check-icon"></i> <span>Competitive Pricing</span></li>
                                            <li><i class="check-icon"></i> <span>Technical Support and Consultation</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="custom-col-right">
                                        <img src="https://drilllines.com/wp-content/uploads/2019/12/dreamstime_l_43107847.jpg" alt=""
                                             class="custom-img">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="custom-tab-pane active" id="features-tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="custom-row container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 tab_pad_0">
                                    <h2>Empowering Drilling Companies with High-Quality Equipment</h2>
                                    <p class="fst-main">
                                        Assisting the Drilling Business Our company is especially suited to strengthen the
                                        bottom
                                        line of drilling companies for oil and gas, particularly in the field of drilling
                                        surface
                                        equipment. We partner with global top brands to bring you superior equipment at
                                        attractive
                                        prices. We provide a full selection of tools for drilling. When it comes to the specific
                                        needs of the drilling industry, our many years of experience will yield favorable
                                        results
                                        for your company. Our strong relationships with suppliers across the globe give you a
                                        large
                                        selection of products to choose from.
                                    </p>
                                    <div class="custom-col-left">


                                        <ul>
                                            <li><i class="check-icon"></i> <span>Extensive Product Portfolio</span></li>
                                            <li><i class="check-icon"></i> <span>Competitive Pricing</span></li>
                                            <li><i class="check-icon"></i> <span>Technical Support and Consultation</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="custom-col-right">
                                        <img src="https://drilllines.com/wp-content/uploads/2019/12/dreamstime_l_43107847.jpg" alt=""
                                             class="custom-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="custom-tab-pane active" id="features-tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="custom-row container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 tab_pad_0">
                                    <h2>Empowering Drilling Companies with High-Quality Equipment</h2>
                                    <p class="fst-main">
                                        Assisting the Drilling Business Our company is especially suited to strengthen the
                                        bottom
                                        line of drilling companies for oil and gas, particularly in the field of drilling
                                        surface
                                        equipment. We partner with global top brands to bring you superior equipment at
                                        attractive
                                        prices. We provide a full selection of tools for drilling. When it comes to the specific
                                        needs of the drilling industry, our many years of experience will yield favorable
                                        results
                                        for your company. Our strong relationships with suppliers across the globe give you a
                                        large
                                        selection of products to choose from.
                                    </p>
                                    <div class="custom-col-left">
                                        <ul>
                                            <li><i class="check-icon"></i> <span>Extensive Product Portfolio</span></li>
                                            <li><i class="check-icon"></i> <span>Competitive Pricing</span></li>
                                            <li><i class="check-icon"></i> <span>Technical Support and Consultation</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="custom-col-right">
                                        <img src="https://drilllines.com/wp-content/uploads/2019/12/dreamstime_l_43107847.jpg" alt=""
                                             class="custom-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="custom-tab-pane active" id="features-tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="custom-row container">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 tab_pad_0">
                                    <h2>Empowering Drilling Companies with High-Quality Equipment</h2>
                                    <p class="fst-main">
                                        Assisting the Drilling Business Our company is especially suited to strengthen the
                                        bottom
                                        line of drilling companies for oil and gas, particularly in the field of drilling
                                        surface
                                        equipment. We partner with global top brands to bring you superior equipment at
                                        attractive
                                        prices. We provide a full selection of tools for drilling. When it comes to the specific
                                        needs of the drilling industry, our many years of experience will yield favorable
                                        results
                                        for your company. Our strong relationships with suppliers across the globe give you a
                                        large
                                        selection of products to choose from.
                                    </p>
                                    <div class="custom-col-left">
                                        <ul>
                                            <li><i class="check-icon"></i> <span>Extensive Product Portfolio</span></li>
                                            <li><i class="check-icon"></i> <span>Competitive Pricing</span></li>
                                            <li><i class="check-icon"></i> <span>Technical Support and Consultation</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="custom-col-right">
                                        <img src="https://drilllines.com/wp-content/uploads/2019/12/dreamstime_l_43107847.jpg" alt=""
                                             class="custom-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container mt-4">


        <div class="row custom-scroll-container">
            <!-- Your content here -->
            <div class="col-md-3 ">
                <div class="tab-menu">
                    <div class="menu-item active  " data-tab="flare-management">
                        <span>Flare Management </span>
                    </div>
                    <div class="menu-item" data-tab="flowmeters">
                        <span>Flowmeters</span>
                    </div>
                    <div class="menu-item" data-tab="process-analyzers">
                        <span>Process Analyzers</span>
                    </div>
                    <div class="menu-item " data-tab="services">
                        <span> Our Service</span>
                    </div>
                    <div class="menu-item " data-tab="service-contact">
                        <span>Service contact </span>
                    </div>
                </div>
            </div>

            <div class="col-md-9 custom-bg">
                <!-- Flare Management Tab Content -->
                <div id="flare-management" class="whatwedo_tab_content content-section active">
                    <div class="border-top">
                        <p class="show">Our <strong>extensive knowledge of flare applications</strong> provides more than just
                            flow information. With tools like the <strong>flare.IQ</strong> platform which utilizes an advanced
                            process control algorithm, we are able to work with our customers to efficiently control flares, while
                            also providing world-class ultrasonic flowmeters, services, and training you need to keep your operation
                            running smoothly.</p>
                    </div>
                    <div class="mt-5">
                        <h3 class="featured-heading">Featured</h3>

                        <div class="row mt-4">
                            <div class="row mt-4">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="row mt-4">
                                        <div class="col-12 d-flex align-items-center">
                                            <div class="card-item d-flex w-100">
                                                <img
                                                    src="https://www.bakerhughes.com/sites/bakerhughes/files/styles/scale_and_crop_360_240/public/2023-05/flaregasinstall_0_0_002_1.webp?itok=Rz1y4wXV"
                                                    alt="Flare Flow Measurement show" class="card-img img-fluid w-50">
                                                <div class="content-header mt-3 ms-3 w-50">
                                                    <h4>Flare Flow Measurement</h4>
                                                    <p class="not-show">Our flare gas mass flowmeters provide critical flow data and diagnostics
                                                        reliably over a wide flow range (turn-down ratio) with excellent low-end resolution to
                                                        help improve the efficiency.</p>
                                                    <a href="https://www.bakerhughes.com/panametrics/flare-management/flare-flow-meters"
                                                       class="read-more">READ MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div class="row mt-4">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="card-item d-flex w-100">
                                        <img
                                            src="https://www.bakerhughes.com/sites/bakerhughes/files/styles/scale_and_crop_360_240/public/2023-05/shutterstock_507418333.webp?itok=XrEFD6iW"
                                            alt="Flare Flow Measurement" class="card-img img-fluid w-50">
                                        <div class="content-header mt-3 ms-3 w-50">
                                            <h4>flare.IQ for flare emission management</h4>
                                            <p class="not-show">flare.IQ is a full-stream flare solution based on a well-proven ultrasonic
                                                flare flow measurement technology.</p>
                                            <a href="https://www.bakerhughes.com/panametrics/flare-management/flareiq"
                                               class="read-more">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

                <!-- Flowmeters Tab Content -->
                <div id="flowmeters" class="whatwedo_tab_content content-section">
                    <div class="border-top">
                        <p>Panametrics offers a wide range of flow measurement instruments from <strong>in-line, wetted,</strong>
                            and <strong>clamp-on</strong>, to <strong>portable and insertion flowmeter solutions</strong> for all of
                            your flow measurement needs. When you're transferring ownership of high-value raw and refined assets
                            like petroleum and crude oil, our <strong>custody transfer meters</strong> are designed to give you
                            accurate, reliable figures you can trust.</p>
                    </div>

                    <div class="mt-5">
                        <h3 class="featured-heading">Featured</h3>

                        <div class="row mt-4">
                            <div class="row mt-4">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="card-item d-flex w-100">
                                        <img
                                            src="https://www.bakerhughes.com/sites/bakerhughes/files/styles/scale_and_crop_360_240/public/2023-05/lotos_dcu_poland_panaflow_ht_sil2_1.webp?itok=QvE9Vang"
                                            alt="Flare Flow Measurement" class="card-img img-fluid w-50">
                                        <div class="content-header mt-3 ms-3 w-50">
                                            <h4>Process Flowmeters</h4>
                                            <p class="not-show">Our process flowmeters, which come in both ultrasonic and vortex varieties,
                                                are excellent solutions for the accurate measurement of various fluids in your pipeline. </p>
                                            <a href="https://www.bakerhughes.com/panametrics/flowmeters/process-flowmeters"
                                               class="read-more">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row mt-4">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="card-item d-flex w-100">
                                        <img
                                            src="https://www.bakerhughes.com/sites/bakerhughes/files/styles/scale_and_crop_360_240/public/2023-05/pt900_clamp_on_pipe_2_1.webp?itok=a3E8iOuS"
                                            alt="Flare Flow Measurement" class="card-img img-fluid w-50">
                                        <div class="content-header mt-3 ms-3 w-50">
                                            <h4>Portable Flowmeters</h4>
                                            <p class="not-show">The portables line from Panametrics, a Baker Hughes business, offers both
                                                ultrasonic liquid and gas clamp-on flowmeters: The TransPort PT878GC for gas; and the
                                                TransPort PT900 for liquid.</p>
                                            <a href="https://www.bakerhughes.com/panametrics/flow-meters/portable-flowmeters"
                                               class="read-more">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Process Analyzers Tab Content -->
                <div id="process-analyzers" class="whatwedo_tab_content content-section">
                    <div class="border-top">
                        <p>We offer <strong>a wide array of </strong><strong>moisture and gas analyzer systems</strong> that
                            enable you to make process decisions with confidence. Reliable and stable, our products and services are
                            <strong>backed by decades of industry experience and by knowledgeable experts</strong> to help you
                            understand your application.
                        </p>
                    </div>

                    <div class="mt-5">
                        <h3 class="featured-heading">Featured</h3>

                        <div class="row mt-4">
                            <div class="row mt-4">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="card-item d-flex w-100">
                                        <img
                                            src="https://www.bakerhughes.com/sites/bakerhughes/files/styles/scale_and_crop_360_240/public/2023-05/moisture_iq_1_1.webp?itok=dK7q5Qql"
                                            alt="Flare Flow Measurement" class="card-img img-fluid w-50">
                                        <div class="content-header mt-3 ms-3 w-50">
                                            <h4>Moisture Measurement</h4>
                                            <p class="not-show">Panametrics, provides reliable moisture analyzers to support your process
                                                decisions. Our moisture analyzers detect leaks in the gas process and in your pressurized
                                                pipeline system, and help identify trace moisture in gas for </p>
                                            <a href="https://www.bakerhughes.com/panametrics/process-analyzers/moisture-analyzers"
                                               class="read-more">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row mt-4">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="card-item d-flex w-100">
                                        <img
                                            src="https://www.bakerhughes.com/sites/bakerhughes/files/styles/scale_and_crop_360_240/public/2023-05/xmo2_1.webp?itok=HUpHQIPm"
                                            alt="Flare Flow Measurement" class="card-img img-fluid w-50">
                                        <div class="content-header mt-3 ms-3 w-50">
                                            <h4>Oxygen & Gas Measurement</h4>
                                            <p class="not-show">Panametrics, offers industrial oxygen and gas analyzers that improve process
                                                efficiency, optimize reactors, and provide greater confidence for petrochemical, power
                                                generation, and combustion efficiency applications</p>
                                            <a href="https://www.bakerhughes.com/panametrics/process-analyzers/industrial-oxygen-gas-analyzers"
                                               class="read-more">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="services" class="whatwedo_tab_content content-section">
                    <div>
                        <p class="fs-1 lh-lg">Panametrics – Products Covered Under Service & Calibration</p>
                        <div class="  ">
                            <p> Panametrics, a Baker Hughes company, provides service and calibration for a wide range of its
                                instrumentation used in industrial and process applications. Below is a breakdown of the main
                                categories and products:

                            </p>
                        </div>
                        <p>
                        </p>
                    </div>

                    <div class="container py-5">
                        <div class="row justify-content-center g-4" id="productCards"></div>
                    </div>

                    <!-- Previous and Next Buttons -->
                    <div class="text-center mt-4">
                        <div id="paginationContainer" class="btn-group flex-wrap gap-1"></div>
                    </div>

                    <!-- Product Modals (Dynamically Generated) -->
                    <div id="productModals"></div>
                </div>



                <div id="service-contact" class="whatwedo_tab_content content-section">
                    <div class="contact-container">
                        <h1 class="contact-heading">Contact Us</h1>
                        <p class="contact-subheading">Got questions or comments? Use the form below to get in touch.</p>

                        <form class="contact-fields" id="serviceContactForm" method="POST" action="/service-contact">
                            @csrf

                            <div class="input-row">
                                <div class="input-block">
                                    <label for="name" class="field-label">Name</label>
                                    <input type="text" id="name" name="name" placeholder="Your name" class="field-input" required>
                                </div>
                                <div class="input-block">
                                    <label for="email" class="field-label">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Your email" class="field-input" required>
                                </div>
                            </div>

                            <div class="input-row">
                                <div class="input-block">
                                    <label for="partner" class="field-label">Company</label>
                                    <input type="text" id="partner" name="partner" placeholder="Company name" class="field-input" required>
                                </div>
                                <div class="input-block">
                                    <label for="position" class="field-label">Position</label>
                                    <input type="text" id="position" name="position" placeholder="e.g. Project Manager, Engineer"
                                           class="field-input" required>
                                </div>
                            </div>

                            <div class="input-row">
                                <div class="input-block">
                                    <label for="content" class="field-label">Describe your issue</label>
                                    <textarea id="content" name="content" placeholder="Describe your issue" rows="4"
                                              class="field-textarea" required></textarea>
                                </div>
                            </div>

                            <button type="submit" class="form-submit-btn">Submit</button>
                        </form>

                        <p id="contactSuccess" style="color:green; display:none; margin-top:15px;">
                            Message sent successfully!
                        </p>
                        <p id="contactError" style="color:red; display:none; margin-top:15px;">
                            Something went wrong. Please try again.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="container smartertech">

        <iframe src="https://apps.kaonadn.net/4771021/Flare/index.html" width="100%" height="600" style="border: none;"
                data-gtm-yt-inspected-7060054_262="true" data-gtm-yt-inspected-7060054_1598="true"
                data-gtm-yt-inspected-7060054_1607="true" data-gtm-yt-inspected-78="true"
                data-gtm-yt-inspected-7060054_468="true" data-gtm-yt-inspected-7060054_1718="true">
        </iframe>
    </div>

    <!--    <section id="get-started" class="get-started section">-->

    <!--      <div class="container">-->

    <!--        <div class="row justify-content-between gy-4">-->

    <!--          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">-->
    <!--            <div class="content">-->
    <!--              <h3>QUOTE.</h3>-->
    <!--              <p>At Blackwell, we understand the importance of efficiency, reliability, and transparency in procurement-->
    <!--                for the oil and gas industry. Whether you're sourcing equipment, looking for midstream solutions, or-->
    <!--                need support with the transportation and storage of oil, gas, or natural gas liquids, we are here to-->
    <!--                assist you every step of the way.-->
    <!--                <br>-->
    <!--                Why Request a Quote?-->
    <!--                When you're managing complex operations, every decision matters. Getting a detailed quote from Blackwell-->
    <!--                allows you to:-->
    <!--                <br>-->
    <!--                Make Informed Decisions-->
    <!--                Our quotes are tailored to your specific requirements, providing you with all the information you need-->
    <!--                to make smart procurement decisions. From pricing details to product specifications, we ensure that-->
    <!--                everything is transparent from the start.-->
    <!--                <br>-->
    <!--                Receive Competitive Pricing-->
    <!--                We leverage our long-standing relationships with global manufacturers and suppliers to offer you the-->
    <!--                most competitive rates. Our focus on cost-efficiency helps you reduce operational expenses without-->
    <!--                compromising on quality.-->
    <!--                <br>-->
    <!--                Tailored Solutions for Your Business-->
    <!--                No two projects are the same. That's why we take the time to understand your specific needs and-->
    <!--                challenges before providing a quote. Whether it's equipment for onshore or offshore drilling, or-->
    <!--                sustainable solutions for midstream operations, we have the expertise to deliver what you need..-->
    <!--              </p>-->
    <!--            </div>-->
    <!--          </div>-->

    <!--          <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">-->
    <!--            <form id="quoteForm" action="http://localhost:8083/blackwell/contact/create" method="post"-->
    <!--              class="php-email-form" enctype="multipart/form-data">-->
    <!--              <h3>Get a quote</h3>-->
    <!--              <p></p>-->
    <!--              <div class="row gy-3">-->

    <!--                <div class="col-12">-->
    <!--                  <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="">-->
    <!--                </div>-->

    <!--                <div class="col-12 ">-->
    <!--                  <input type="email" id="email" class="form-control" name="email" placeholder="Email" required="">-->
    <!--                </div>-->

    <!--                <div class="col-12">-->
    <!--                  <input type="text" id="phone" class="form-control" name="phone" placeholder="Phone" required="">-->
    <!--                </div>-->

    <!--                <div class="col-12">-->
    <!--                  <textarea class="form-control" id="message" name="message" rows="6" placeholder="Message"-->
    <!--                    required=""></textarea>-->
    <!--                </div>-->

    <!--                <div class="col-12 text-center">-->
    <!--                  <div class="loading">Loading</div>-->
    <!--                  <div class="error-message"></div>-->
    <!--                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>-->

    <!--                  <button type="submit">Get a quote</button>-->
    <!--                </div>-->


    <!--              </div>-->
    <!--            </form>-->
    <!--          </div>-->

    <!--        </div>-->

    <!--      </div>-->
    <!--      <script>-->
    <!--        document.getElementById('quoteForm').addEventListener('submit', function (event) {-->
    <!--          event.preventDefault(); // Formun avtomatik göndərilməsini dayandırır-->

    <!--          const formData = new FormData(this);-->
    <!--          const data = {-->
    <!--            name: formData.get('name'),-->
    <!--            email: formData.get('email'),-->
    <!--            phone: formData.get('phone'),-->
    <!--            message: formData.get('message')-->
    <!--          };-->

    <!--          // İlk API-yə JSON formatında sorğu göndəririk-->
    <!--          const xhr1 = new XMLHttpRequest();-->
    <!--          xhr1.open('POST', 'http://localhost:8083/blackwell/contact/create', true);-->
    <!--          xhr1.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');-->
    <!--          xhr1.onload = function () {-->
    <!--            if (xhr1.status === 200) {-->
    <!--              console.log("First request successful");-->
    <!--              alert("Your quote request has been sent successfully."); // Uğurlu mesaj-->
    <!--              document.querySelector('.error-message').style.display = 'none'-->
    <!--            } else {-->
    <!--              console.log("Failed to send first request");-->
    <!--            }-->
    <!--          };-->
    <!--          xhr1.send(JSON.stringify(data));-->
    <!--        });-->
    <!--      </script>-->
    <!--    </section>-->

    <!--    <section id="constructions" class="constructions section">-->


    <!--      <div class="container section-title" data-aos="fade-up">-->
    <!--        <h2>INDUSTRY</h2>-->
    <!--        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>-->
    <!--      </div>-->

    <!--      <div class="container">-->

    <!--        <div class="row gy-4">-->

    <!--          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">-->
    <!--            <div class="card-item">-->
    <!--              <div class="row">-->
    <!--                <div class="col-xl-5">-->
    <!--                  <div class="card-bg"><img src="assets/img/constructions-1.jpg" alt=""></div>-->
    <!--                </div>-->
    <!--                <div class="col-xl-7 d-flex align-items-center">-->
    <!--                  <div class="card-body">-->
    <!--                    <h4 class="card-title">OIL AND GAS.</h4>-->
    <!--                    <p>From upstream oil and gas operations to downstream refining and petrochemical facilities,-->
    <!--                      Blackwell’s unique combination of comprehensive procurement and tailor-made engineering services-->
    <!--                      deliver “fit for purpose” solutions with the right balance of safety measures, economics, and-->
    <!--                      timeliness for our customers. We know that each division of the industry relies on quality-->
    <!--                      materials to keep their operations moving forward. Our goal always is to provide you with on-time-->
    <!--                      delivery of quality products at the best prices.</p>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->

    <!--          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">-->
    <!--            <div class="card-item">-->
    <!--              <div class="row">-->
    <!--                <div class="col-xl-5">-->
    <!--                  <div class="card-bg"><img src="assets/img/constructions-2.jpg" alt=""></div>-->
    <!--                </div>-->
    <!--                <div class="col-xl-7 d-flex align-items-center">-->
    <!--                  <div class="card-body">-->
    <!--                    <h4 class="card-title">CHEMICAL AND PETROCHEMICAL</h4>-->
    <!--                    <p>Petrochemical industry is constantly undergoing a major transformation changing market dynamics-->
    <!--                      and nonlinear supply chains. This results in managers making great efforts to harmonize their-->
    <!--                      supplier, sourcing and supply chain processes. Obtaining the right materials at the right price,-->
    <!--                      right time complying to all safety and regulatory requirements is fundamental to the-->
    <!--                      profitability. Therefore, it requires the buyers to have a deep knowledge of the product and-->
    <!--                      perhaps certify every source of supply..</p>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->

    <!--          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">-->
    <!--            <div class="card-item">-->
    <!--              <div class="row">-->
    <!--                <div class="col-xl-5">-->
    <!--                  <div class="card-bg"><img src="assets/img/constructions-3.jpg" alt=""></div>-->
    <!--                </div>-->
    <!--                <div class="col-xl-7 d-flex align-items-center">-->
    <!--                  <div class="card-body">-->
    <!--                    <h4 class="card-title">ENERGY</h4>-->
    <!--                    <p>As the world enters a technology-driven energy transition, energy enterprises will rely more and-->
    <!--                      more on their procurement and supply-management capabilities to meet cost targets, secure-->
    <!--                      supplies, improve safety and reliability, innovate, and optimize the total cost of ownership.-->
    <!--                      Using our proven tools and approaches, we work hand in hand with clients to equip them for success-->
    <!--                      in a challenging landscape. We help utilities and independent power producers to become-->
    <!--                      world-class purchasing leaders by adopting advanced procurement and supply-management capabilities-->
    <!--                      across all materials, services, operating, and capital-spending categorie.</p>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->

    <!--          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">-->
    <!--            <div class="card-item">-->
    <!--              <div class="row">-->
    <!--                <div class="col-xl-5">-->
    <!--                  <div class="card-bg"><img src="assets/img/constructions-4.jpg" alt=""></div>-->
    <!--                </div>-->
    <!--                <div class="col-xl-7 d-flex align-items-center">-->
    <!--                  <div class="card-body">-->
    <!--                    <h4 class="card-title">MARINE</h4>-->
    <!--                    <p>In the marine offshore and shipbuilding industry internationally the demand and hence trade-->
    <!--                      within the industry is increasing which puts an added pressure on the supply chain and especially-->
    <!--                      the procurement functions to be effective and utilize the vendor relationships to the best-->
    <!--                      advantage. The challenges in this industry are specific knowledge requirement, and high turnover-->
    <!--                      of products requires continuous low cost transactions. To this end, Blackwell has established-->
    <!--                      reliable cooperation with the vendors across the world and our engineers with rich industry-->
    <!--                      experience bring most effective solutions for your company.</p>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->

    <!--        </div>-->

    <!--      </div>-->

    <!--    </section>-->

    <!-- /Constructions Section -->

    <!-- Services Section -->
    <!--    <section id="services" class="services section light-background">-->

    <!--      &lt;!&ndash; Section Title &ndash;&gt;-->
    <!--      <div class="container section-title" data-aos="fade-up">-->
    <!--        <h2>Services</h2>-->
    <!--        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>-->
    <!--      </div>&lt;!&ndash; End Section Title &ndash;&gt;-->

    <!--      <div class="container">-->

    <!--        <div class="row gy-4">-->

    <!--          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">-->
    <!--            <div class="service-item  position-relative">-->
    <!--              <div class="icon">-->
    <!--                <i class="fa-solid fa-mountain-city"></i>-->
    <!--              </div>-->
    <!--              <h3>Nesciunt Mete</h3>-->
    <!--              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis-->
    <!--                tempore et consequatur.</p>-->
    <!--              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>-->
    <!--            </div>-->
    <!--          </div>&lt;!&ndash; End Service Item &ndash;&gt;-->

    <!--          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">-->
    <!--            <div class="service-item position-relative">-->
    <!--              <div class="icon">-->
    <!--                <i class="fa-solid fa-arrow-up-from-ground-water"></i>-->
    <!--              </div>-->
    <!--              <h3>Eosle Commodi</h3>-->
    <!--              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut-->
    <!--                nesciunt dolorem.</p>-->
    <!--              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>-->
    <!--            </div>-->
    <!--          </div>&lt;!&ndash; End Service Item &ndash;&gt;-->

    <!--          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">-->
    <!--            <div class="service-item position-relative">-->
    <!--              <div class="icon">-->
    <!--                <i class="fa-solid fa-compass-drafting"></i>-->
    <!--              </div>-->
    <!--              <h3>Ledo Markt</h3>-->
    <!--              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci-->
    <!--                eos earum corrupti.</p>-->
    <!--              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>-->
    <!--            </div>-->
    <!--          </div>&lt;!&ndash; End Service Item &ndash;&gt;-->

    <!--          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">-->
    <!--            <div class="service-item position-relative">-->
    <!--              <div class="icon">-->
    <!--                <i class="fa-solid fa-trowel-bricks"></i>-->
    <!--              </div>-->
    <!--              <h3>Asperiores Commodit</h3>-->
    <!--              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident-->
    <!--                adipisci neque.</p>-->
    <!--              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>-->
    <!--            </div>-->
    <!--          </div>&lt;!&ndash; End Service Item &ndash;&gt;-->

    <!--          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">-->
    <!--            <div class="service-item position-relative">-->
    <!--              <div class="icon">-->
    <!--                <i class="fa-solid fa-helmet-safety"></i>-->
    <!--              </div>-->
    <!--              <h3>Velit Doloremque</h3>-->
    <!--              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem-->
    <!--                alias eius labore.</p>-->
    <!--              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>-->
    <!--            </div>-->
    <!--          </div>&lt;!&ndash; End Service Item &ndash;&gt;-->

    <!--          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">-->
    <!--            <div class="service-item position-relative">-->
    <!--              <div class="icon">-->
    <!--                <i class="fa-solid fa-arrow-up-from-ground-water"></i>-->
    <!--              </div>-->
    <!--              <h3>Dolori Architecto</h3>-->
    <!--              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti-->
    <!--                recusandae ducimus enim.</p>-->
    <!--              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>-->
    <!--            </div>-->
    <!--          </div>&lt;!&ndash; End Service Item &ndash;&gt;-->

    <!--        </div>-->

    <!--      </div>-->

    <!--    </section>&lt;!&ndash; /Services Section &ndash;&gt;-->

    <!-- Alt Services Section -->
    <!--    <section id="alt-services" class="alt-services section">-->

    <!--      <div class="container">-->

    <!--        <div class="row justify-content-around gy-4">-->
    <!--          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img-->
    <!--              src="assets/img/alt-services.jpg" alt=""></div>-->

    <!--          <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">-->
    <!--            <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>-->
    <!--            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus-->
    <!--              laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>-->

    <!--            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">-->
    <!--              <i class="bi bi-easel flex-shrink-0"></i>-->
    <!--              <div>-->
    <!--                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>-->
    <!--                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate-->
    <!--                  non provident</p>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Icon Box &ndash;&gt;-->

    <!--            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">-->
    <!--              <i class="bi bi-patch-check flex-shrink-0"></i>-->
    <!--              <div>-->
    <!--                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>-->
    <!--                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum-->
    <!--                  deleniti atque</p>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Icon Box &ndash;&gt;-->

    <!--            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">-->
    <!--              <i class="bi bi-brightness-high flex-shrink-0"></i>-->
    <!--              <div>-->
    <!--                <h4><a href="" class="stretched-link">Dine Pad</a></h4>-->
    <!--                <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus-->
    <!--                  aut eligendi omnis</p>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Icon Box &ndash;&gt;-->

    <!--            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">-->
    <!--              <i class="bi bi-brightness-high flex-shrink-0"></i>-->
    <!--              <div>-->
    <!--                <h4><a href="" class="stretched-link">Tride clov</a></h4>-->
    <!--                <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet.-->
    <!--                  Et eligendi</p>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Icon Box &ndash;&gt;-->

    <!--          </div>-->
    <!--        </div>-->

    <!--      </div>-->

    <!--    </section>&lt;!&ndash; /Alt Services Section &ndash;&gt;-->

    <!-- Features Section -->


    <!--    &lt;!&ndash; Projects Section &ndash;&gt;-->
    <!--    <section id="projects" class="projects section">-->

    <!--      &lt;!&ndash; Section Title &ndash;&gt;-->
    <!--      <div class="container section-title" data-aos="fade-up">-->
    <!--        <h2>Projects</h2>-->
    <!--        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>-->
    <!--      </div>&lt;!&ndash; End Section Title &ndash;&gt;-->

    <!--      <div class="container">-->

    <!--        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">-->

    <!--          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">-->
    <!--            <li data-filter="*" class="filter-active">All</li>-->
    <!--            <li data-filter=".filter-remodeling">Remodeling</li>-->
    <!--            <li data-filter=".filter-construction">Construction</li>-->
    <!--            <li data-filter=".filter-repairs">Repairs</li>-->
    <!--            <li data-filter=".filter-design">Design</li>-->
    <!--          </ul>&lt;!&ndash; End Portfolio Filters &ndash;&gt;-->

    <!--          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">-->

    <!--            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">-->
    <!--              <div class="portfolio-content h-100">-->
    <!--                <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">-->
    <!--                <div class="portfolio-info">-->
    <!--                  <h4>App 1</h4>-->
    <!--                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
    <!--                  <a href="assets/img/projects/remodeling-1.jpg" title="App 1" data-gallery="portfolio-gallery-app"-->
    <!--                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>-->
    <!--                  <a href="project-details.html" title="More Details" class="details-link"><i-->
    <!--                      class="bi bi-link-45deg"></i></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Portfolio Item &ndash;&gt;-->

    <!--            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">-->
    <!--              <div class="portfolio-content h-100">-->
    <!--                <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">-->
    <!--                <div class="portfolio-info">-->
    <!--                  <h4>Product 1</h4>-->
    <!--                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
    <!--                  <a href="assets/img/projects/construction-1.jpg" title="Product 1"-->
    <!--                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i-->
    <!--                      class="bi bi-zoom-in"></i></a>-->
    <!--                  <a href="project-details.html" title="More Details" class="details-link"><i-->
    <!--                      class="bi bi-link-45deg"></i></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Portfolio Item &ndash;&gt;-->

    <!--            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">-->
    <!--              <div class="portfolio-content h-100">-->
    <!--                <img src="assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">-->
    <!--                <div class="portfolio-info">-->
    <!--                  <h4>Branding 1</h4>-->
    <!--                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
    <!--                  <a href="assets/img/projects/repairs-1.jpg" title="Branding 1"-->
    <!--                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i-->
    <!--                      class="bi bi-zoom-in"></i></a>-->
    <!--                  <a href="project-details.html" title="More Details" class="details-link"><i-->
    <!--                      class="bi bi-link-45deg"></i></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Portfolio Item &ndash;&gt;-->

    <!--            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">-->
    <!--              <div class="portfolio-content h-100">-->
    <!--                <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">-->
    <!--                <div class="portfolio-info">-->
    <!--                  <h4>Books 1</h4>-->
    <!--                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
    <!--                  <a href="assets/img/projects/design-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book"-->
    <!--                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>-->
    <!--                  <a href="project-details.html" title="More Details" class="details-link"><i-->
    <!--                      class="bi bi-link-45deg"></i></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Portfolio Item &ndash;&gt;-->

    <!--            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">-->
    <!--              <div class="portfolio-content h-100">-->
    <!--                <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">-->
    <!--                <div class="portfolio-info">-->
    <!--                  <h4>App 2</h4>-->
    <!--                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
    <!--                  <a href="assets/img/projects/remodeling-2.jpg" title="App 2" data-gallery="portfolio-gallery-app"-->
    <!--                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>-->
    <!--                  <a href="project-details.html" title="More Details" class="details-link"><i-->
    <!--                      class="bi bi-link-45deg"></i></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Portfolio Item &ndash;&gt;-->

    <!--            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">-->
    <!--              <div class="portfolio-content h-100">-->
    <!--                <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">-->
    <!--                <div class="portfolio-info">-->
    <!--                  <h4>Product 2</h4>-->
    <!--                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
    <!--                  <a href="assets/img/projects/construction-2.jpg" title="Product 2"-->
    <!--                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i-->
    <!--                      class="bi bi-zoom-in"></i></a>-->
    <!--                  <a href="project-details.html" title="More Details" class="details-link"><i-->
    <!--                      class="bi bi-link-45deg"></i></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Portfolio Item &ndash;&gt;-->

    <!--            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">-->
    <!--              <div class="portfolio-content h-100">-->
    <!--                <img src="assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">-->
    <!--                <div class="portfolio-info">-->
    <!--                  <h4>Branding 2</h4>-->
    <!--                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
    <!--                  <a href="assets/img/projects/repairs-2.jpg" title="Branding 2"-->
    <!--                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i-->
    <!--                      class="bi bi-zoom-in"></i></a>-->
    <!--                  <a href="project-details.html" title="More Details" class="details-link"><i-->
    <!--                      class="bi bi-link-45deg"></i></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Portfolio Item &ndash;&gt;-->

    <!--            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">-->
    <!--              <div class="portfolio-content h-100">-->
    <!--                <img src="assets/img/projects/design-2.jpg" class="img-fluid" alt="">-->
    <!--                <div class="portfolio-info">-->
    <!--                  <h4>Books 2</h4>-->
    <!--                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
    <!--                  <a href="assets/img/projects/design-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book"-->
    <!--                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>-->
    <!--                  <a href="project-details.html" title="More Details" class="details-link"><i-->
    <!--                      class="bi bi-link-45deg"></i></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Portfolio Item &ndash;&gt;-->

    <!--            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">-->
    <!--              <div class="portfolio-content h-100">-->
    <!--                <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">-->
    <!--                <div class="portfolio-info">-->
    <!--                  <h4>App 3</h4>-->
    <!--                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
    <!--                  <a href="assets/img/projects/remodeling-3.jpg" title="App 3" data-gallery="portfolio-gallery-app"-->
    <!--                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>-->
    <!--                  <a href="project-details.html" title="More Details" class="details-link"><i-->
    <!--                      class="bi bi-link-45deg"></i></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Portfolio Item &ndash;&gt;-->

    <!--            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">-->
    <!--              <div class="portfolio-content h-100">-->
    <!--                <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">-->
    <!--                <div class="portfolio-info">-->
    <!--                  <h4>Product 3</h4>-->
    <!--                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
    <!--                  <a href="assets/img/projects/construction-3.jpg" title="Product 3"-->
    <!--                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i-->
    <!--                      class="bi bi-zoom-in"></i></a>-->
    <!--                  <a href="project-details.html" title="More Details" class="details-link"><i-->
    <!--                      class="bi bi-link-45deg"></i></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Portfolio Item &ndash;&gt;-->

    <!--            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">-->
    <!--              <div class="portfolio-content h-100">-->
    <!--                <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">-->
    <!--                <div class="portfolio-info">-->
    <!--                  <h4>Branding 3</h4>-->
    <!--                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
    <!--                  <a href="assets/img/projects/repairs-3.jpg" title="Branding 2"-->
    <!--                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i-->
    <!--                      class="bi bi-zoom-in"></i></a>-->
    <!--                  <a href="project-details.html" title="More Details" class="details-link"><i-->
    <!--                      class="bi bi-link-45deg"></i></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Portfolio Item &ndash;&gt;-->

    <!--            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">-->
    <!--              <div class="portfolio-content h-100">-->
    <!--                <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">-->
    <!--                <div class="portfolio-info">-->
    <!--                  <h4>Books 3</h4>-->
    <!--                  <p>Lorem ipsum, dolor sit amet consectetur</p>-->
    <!--                  <a href="assets/img/projects/design-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book"-->
    <!--                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>-->
    <!--                  <a href="project-details.html" title="More Details" class="details-link"><i-->
    <!--                      class="bi bi-link-45deg"></i></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>&lt;!&ndash; End Portfolio Item &ndash;&gt;-->

    <!--          </div>&lt;!&ndash; End Portfolio Container &ndash;&gt;-->

    <!--        </div>-->

    <!--      </div>-->

    <!--    </section>&lt;!&ndash; /Projects Section &ndash;&gt;-->
    </script>
    <div class="container my-5">
        <h3>Resources</h3>
        <!-- FILTER FORM -->



        <!-- CARD GRID -->
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="catalog-card">
                    <div class="catalog-meta">Type: Catalogue</div>
                    <div class="catalog-title">Panametrics Flow Product Guide</div>
                    <div class="catalog-meta">Language: English</div>
                    <a class="download-btn mt-3"
                       href="https://dam.bakerhughes.com/m/51af02fbb5cb9f4a/original/Panametrics-Flow-Product-Guide.pdf"
                       target="_blank">download</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="catalog-card">
                    <div class="catalog-meta">Type: Catalogue</div>
                    <div class="catalog-title">Panametrics Process Analyzers </div>
                    <div class="catalog-meta">Language: English</div>
                    <a class="download-btn mt-3"
                       href="https://dam.bakerhughes.com/m/3a0cb242921717ec/original/Panametrics-Process-Analyzers-Process-Guide.pdf"
                       target="_blank">download</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="catalog-card">
                    <div class="catalog-meta">Type: Catalogue</div>
                    <div class="catalog-title">Panametrics Product Overview</div>
                    <div class="catalog-meta">Language: English</div>
                    <a class="download-btn mt-3"
                       href="https://dam.bakerhughes.com/m/1df36db240646c83/original/Panametrics-Overview-English.pdf"
                       target="_blank">download</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="catalog-card">
                    <div class="catalog-meta">Type: Catalogue</div>
                    <div class="catalog-title">Panametrics Service Catalog</div>
                    <div class="catalog-meta">Language: English</div>
                    <a class="download-btn mt-3"
                       href="https://dam.bakerhughes.com/m/3946c5d2de4a87a4/original/BHCS38610-Panametrics-Service-Catalog_R2.pdf"
                       target="_blank">download</a>
                </div>
            </div>
        </div>

    </div>





    <script>
        function toggleFullScreen() {
            let iframe = document.getElementById("mainVideo");
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.mozRequestFullScreen) {
                iframe.mozRequestFullScreen();
            } else if (iframe.webkitRequestFullscreen) {
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) {
                iframe.msRequestFullscreen();
            }
        }

        function loadVideo(videoId) {
            let mainVideo = document.getElementById("mainVideo");
            mainVideo.src = "https://www.youtube.com/embed/" + videoId;
        }

        document.addEventListener("DOMContentLoaded", function () {
            loadVideo('fJpQ-LyJ2DI');
        });
    </script>
    <div class="container" style="position: relative;">
        <!-- Placeholder sadece mobilde görünür -->
        <div id="iframe-placeholder" onclick="activateIframe()"
             style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 80vh; background-color: #000; align-items: center; justify-content: center; cursor: pointer; z-index: 2;">
            <span style="color: white; font-size: 1.2rem;">Tap to view 3D content</span>
        </div>
        <a href="https://apps.kaonadn.net/6193251020177408/index.html" target="_blank">
            <iframe id="kaon-iframe" src="https://apps.kaonadn.net/6193251020177408/index.html" width="100%"
                    style="height: 80vh; border: none;" allowfullscreen
                    allow="fullscreen; xr-spatial-tracking; autoplay; clipboard-write"></iframe>

            <button class="fullscreen-btn">
                <i class="fas fa-expand"></i>
            </button>
        </a>
    </div>



    <div class="BlackWell_container container">
        <!-- Başlık -->
        <div class="container text-start mb-4 mt-2" data-aos="fade-up">
            <h2 class="fw-bold">Main Distrubutor</h2>
        </div>

        <div class="container121">
            <!-- Ana Video -->
            <div class="main-video mb-4">
                <iframe id="mainVideo" src="https://www.youtube.com/embed/s4dTf1AsIlI" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>

            <!-- Video Listesi -->
            <div class="video-list">
                <!-- 1. Video -->
                <div class="video-item-flex" onclick="loadVideo('fJpQ-LyJ2DI')">
                    <div class="video-item">
                        <img src="https://img.youtube.com/vi/fJpQ-LyJ2DI/0.jpg" alt="Blackwell Introduction Video Thumbnail">
                    </div>
                    <div>
                        <p class="video_list_p fw-bold">Welcome to Panametrics</p>
                        <p class="video_list_p_d">We offer solutions for measuring and analyzing moisture, oxygen, liquid, steam,
                            and gas flow with proven technologies that are well-known and widely deployed across many industries,
                            including oil and gas.</p>
                    </div>
                </div>

                <!-- 2. Video -->
                <div class="video-item-flex" onclick="loadVideo('oAlqRac3v2o')">
                    <div class="video-item">
                        <img src="https://img.youtube.com/vi/oAlqRac3v2o/0.jpg" alt="Video 2">
                    </div>
                    <div>
                        <p class="video_list_p fw-bold">Blackwell Introduction</p>
                        <p class="video_list_p_d">SOCAR, Azerbaijan's state-owned oil and gas company, operates in the Caspian Sea
                            region. It runs the
                            country's oil and gas sector.</p>
                    </div>
                </div>

                <!-- 3. Video -->
                <div class="video-item-flex" onclick="loadVideo('b2qT0PqPUZ0')">
                    <div class="video-item">
                        <img src="https://img.youtube.com/vi/b2qT0PqPUZ0/0.jpg" alt="Video 3">
                    </div>
                    <div>
                        <p class="video_list_p fw-bold">Blackwell Introduction</p>
                        <p class="video_list_p_d">SOCAR, Azerbaijan's state-owned oil and gas company, operates in the Caspian Sea
                            region. It runs the
                            country's oil and gas sector.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Logos  -->
    @php
        $locale = app()->getLocale(); // AZ, EN, RU, TR, DE
    @endphp

    <section class="LogosSection container">
        <h3 class="bh-cke-eyebrow-heading">
            Our Partner
        </h3>

        <div class="Logosmain">
            <div class="">
                <div class="row">

                    {{-- Logo list --}}
                    <div class="col-lg-6">
                        <div class="logos-container12">
                            <div class="logos12" id="logos12">
                                @foreach($partners as $index => $partner)
                                    @php
                                        $title = $partner->title[$locale] ?? $partner->title['en'] ?? '';
                                        $description = $partner->content[$locale] ?? $partner->content['en'] ?? '';
                                        $image = $partner->image ? asset('storage/' . $partner->image) : '';
                                        $url = $partner->url ?? '#';
                                    @endphp
                                    <div class="logo12 {{ $index === 0 ? 'active' : '' }}"
                                         data-id12="{{ $partner->id }}"
                                         data-name12="{{ $title }}"
                                         data-description12="{{ $description }}"
                                         data-image12="{{ $image }}"
                                         data-url12="{{ $url }}"
                                         onclick="showPartnerDetails(this)">
                                        @if($image)
                                            <img src="{{ $image }}" alt="{{ $title }}">
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Details section --}}
                    <div class="col-lg-6">
                        <div class="details12" id="details12">
                            <div class="col-lg-12 order-2 order-lg-1">
                                <h3 id="logo-name12">
                                    {{ $partners->count() > 0 ? ($partners->first()->title[$locale] ?? $partners->first()->title['en'] ?? '') : '' }}
                                </h3>
                                <div class="details-content12">
                                    <div class="details-header12">
                                        <p id="logo-description12" class="text-dark description-trimmed"
                                           style="font-family: 'Inter', 'Segoe UI', sans-serif; font-size: 1rem; font-weight: 400; line-height: 1.5; overflow: hidden;">
                                            {{ $partners->count() > 0 ? ($partners->first()->content[$locale] ?? $partners->first()->content['en'] ?? '') : '' }}
                                        </p>
                                        <button id="toggle-description" class="btn btn-link p-0" style="font-size: 0.9rem;">Read more</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 order-1 order-lg-2">
                                <a href="{{ $partners->count() > 0 ? ($partners->first()->url ?? '#') : '#' }}" class="data-url12" target="_blank">
                                    @if($partners->count() > 0 && $partners->first()->image)
                                        <img id="logo-image12" src="{{ asset('storage/' . $partners->first()->image) }}" alt="" />
                                    @else
                                        <img id="logo-image12" src="" alt="" />
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        const desc = document.getElementById('logo-description12');
        const toggleBtn = document.getElementById('toggle-description');

        toggleBtn.addEventListener('click', function () {
            const isExpanded = desc.classList.contains('description-expanded');
            desc.classList.toggle('description-expanded');
            desc.classList.toggle('description-trimmed');
            toggleBtn.textContent = isExpanded ? 'Read more' : 'Read less';
        });

        function showPartnerDetails(element) {
            // Remove active class from all logos
            document.querySelectorAll('.logo12').forEach(logo => logo.classList.remove('active'));
            // Add active class to clicked logo
            element.classList.add('active');

            // Update details
            document.getElementById('logo-name12').textContent = element.dataset.name12;
            document.getElementById('logo-description12').textContent = element.dataset.description12;
            document.getElementById('logo-image12').src = element.dataset.image12;
            document.querySelector('.data-url12').href = element.dataset.url12;
        }
    </script>

</main>
<footer class="text-secondary py-5 footermain" role="contentinfo">
    <div class="container">
        <!-- Üst Satır: Logo + 3 Kolon -->
        <div class="row mb-4">

            <!-- Logo ve Adres -->
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
                    <li><a href="{{route('home')}}" class="text-decoration-none text-secondary">Home</a></li>
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
                <div class="d-flex gap-2 flex-wrap">
                    <a href="#" class="social-icon"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-pinterest"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
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




<!-- Footer END -->







<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<!-- Preloader'ı Etkinleştirme -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}" defer></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}" defer></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}" defer></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}" defer></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" defer></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}" defer></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}" defer></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/Contactme.js') }}" defer></script>
<script src="{{ asset('assets/js/tabcontrol.js') }}" defer></script>
<script src="{{ asset('assets/js/map.js') }}" defer></script>
<script src="{{ asset('assets/js/video.js') }}" defer></script>
<script src="{{ asset('assets/js/main.js') }}" defer></script>

<!-- Elfsight Website Translator -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>

<!-- Diğer Özelleştirilmiş JavaScript Dosyaları -->
<script src="{{ asset('assets/js/Loading/loading.js') }}" defer></script>
<script src="{{ asset('assets/js/whatwedo.js') }}" defer></script>
<script src="{{ asset('assets/js/PanametricProducts.js') }}" defer></script>
<script src="{{ asset('assets/js/logos.js') }}" defer></script>
<script src="{{ asset('assets/js/products.js') }}" defer></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        fetchLogosData();
        fetchProducts();
    });
</script>

@if(session('success'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "5000"
    };
    toastr.success('{{ session('success') }}');
</script>
@endif

@if(session('error'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "5000"
    };
    toastr.error('{{ session('error') }}');
</script>
@endif

</body>

</html>
