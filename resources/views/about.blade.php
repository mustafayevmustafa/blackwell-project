<!DOCTYPE html>
<html lang="en">

@include('partials.head')


<body class="about-page">
<div id="top-black-menu" style="width: 100%; height: 30px; background-color: black;" class="fixed-top">
    <div class="container-fluid container-xl h-100 d-flex justify-content-end gap-4 align-items-center">
        <a class="text-light" style="font-size: 12px;" href="./index.html">Home</a>
        <a class="text-light" style="font-size: 12px;" href="#">Career</a>
        <a class="text-light" style="font-size: 12px;" href="technical.html">Technical Consultation</a>
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
<section class="about-section-up headersectionimage1">
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
                <a href="./about.html" class="bh-breadcrumb__item-text">About Us</a>
            </li>
        </ul>
        <h1>About Us</h1>
        <div class="about_description_up">
            <p>
                We are the leading energy technology company. We design, manufacture and service transformative technologies to help take energy forward.

            </p>
        </div>


    </div>
</section>
<!-- <section>

  <div class="uni_header">
    <div class="bg">
      <img src="https://www.gl.world/site/assets/files/1352/thum.jpg?v=1739869147" alt="About Us">
    </div>
    <section>
      <h1>About Us</h1>
    </section>
  </div>

</section> -->
<main class="main">

    <!-- Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <div class="row">
                <div class="about-head-text col-lg-6">
                    <h1>What we do</H1>
                    <p class="about-p-text">
                        BlackWell” is a procurement and sourcing services provider company which specializes in oil and gas,
                        petrochemical and energy industries. Our activities are guided with the mission – to serve customers with
                        the most optimal and comprehensive solutions. To this end we have established partnerships with
                        manufacturers across the globe which are providing us access to thousands of products locally and
                        internationally at the best prices. In doing so we have signed dozens of dealership agreements and hired
                        professional engineers to assist our business.
                        At “BlackWell” company , we are committed to reliability, flexibility and dedication to servicing your
                        unique needs.
                        In the era of intelligent operations and proactive responses, we align simplified solutions to real,
                        challenging business needs. We implement the highest professional standards, put our expertise and
                        analytics to work and trigger real, tangible impact, by aligning tightly measurable business outcomes.
                    </p>

                </div>
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <!-- 1 -->
                        <div class="swiper-slide">
                            <img src="https://www.gl.world/site/assets/files/1352/kng-6646.jpg" />
                        </div>
                        <!-- 2 -->

                        <div class="swiper-slide">
                            <img src="https://www.gl.world/site/assets/files/1352/kng-6623.jpg" />

                        </div>
                        <!-- 3 -->

                        <div class="swiper-slide">
                            <img src="https://www.gl.world/site/assets/files/1352/kng-7629.jpg" />
                        </div>
                        <!-- 4 -->

                        <div class="swiper-slide">
                            <img src="https://www.gl.world/site/assets/files/1352/kng-6686.jpg" />
                        </div>
                        <!-- 5 -->

                        <div class="swiper-slide">
                            <img src="https://www.gl.world/site/assets/files/1352/kng-8051.jpg" />
                        </div>
                        <!-- 6 -->

                        <div class="swiper-slide">
                            <img src="https://www.gl.world/site/assets/files/1352/kng-6970.jpg" />
                        </div>
                        <!-- 7 -->

                        <div class="swiper-slide">
                            <img src="https://www.gl.world/site/assets/files/1352/kng-7501.jpg" />
                        </div>
                        <!-- 8 -->

                        <div class="swiper-slide">
                            <img src="https://www.gl.world/site/assets/files/1352/kng-8016.jpg" />
                        </div>
                        <!-- 9 -->

                        <div class="swiper-slide">
                            <img src="https://www.gl.world/site/assets/files/1352/kng-8051.jpg" />
                        </div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- 1 -->

                            <div class="swiper-slide">
                                <img src="https://www.gl.world/site/assets/files/1352/kng-6646.jpg" />
                            </div>
                            <!-- 2 -->

                            <div class="swiper-slide">
                                <img src="https://www.gl.world/site/assets/files/1352/kng-6623.jpg" />
                            </div>
                            <!-- 3 -->

                            <div class="swiper-slide">
                                <img src="https://www.gl.world/site/assets/files/1352/kng-7629.jpg" />
                            </div>
                            <!-- 4 -->

                            <div class="swiper-slide">
                                <img src="https://www.gl.world/site/assets/files/1352/kng-6686.jpg" />
                            </div>
                            <!-- 5 -->

                            <div class="swiper-slide">
                                <img src="https://www.gl.world/site/assets/files/1352/kng-8051.jpg" />
                            </div>
                            <!-- 6 -->

                            <div class="swiper-slide">
                                <img src="https://www.gl.world/site/assets/files/1352/kng-6970.jpg" />
                            </div>
                            <!-- 7 -->

                            <div class="swiper-slide">
                                <img src="https://www.gl.world/site/assets/files/1352/kng-7501.jpg" />
                            </div>
                            <!-- 8 -->

                            <div class="swiper-slide">
                                <img src="https://www.gl.world/site/assets/files/1352/kng-8016.jpg" />
                            </div>
                            <!-- 9 -->
                            <div class="swiper-slide">
                                <img src="https://www.gl.world/site/assets/files/1352/kng-8051.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
    <!-- Font Awesome Kütüphanesini Ekleyelim -->
    <section class="page_intro">
        <div class="page_intro_container">
            <div class="page_intro_container-flex">
                <!-- Text Section -->
                <div class="page_intro_text">
                    <h1>Welcome to BlackWell | <span class="mobile-break">About Us</span></h1>
                </div>

                <!-- Video Section -->
                <div class="page_intro_container_iframe">
                    <video id="introVideo" class="intro_video" src="./assets/videos/Blackwellvideos/BlackWell.MP4" muted loop autoplay></video>

                    <!-- Video Ortasında Görünecek İkon -->
                    <div id="videoOverlayIcon" class="video-overlay-icon">
                        <i class="fa-solid fa-play"></i> <!-- Başlangıçta Play ikonu -->
                    </div>

                    <!-- Sağ Alt Köşedeki Butonlar -->
                    <div class="video-controls">
                        <button id="playPauseBtn">
                            <i class="fa-solid fa-play"></i>
                        </button>
                        <button id="muteUnmuteBtn">
                            <i class="fa-solid fa-volume-mute"></i>
                        </button>
                        <button id="fullscreenBtn">
                            <i class="fa-solid fa-expand"></i> <!-- Fullscreen icon -->
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>









    <!-- Team Section -->
    @include('sections.teams')

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
        <!-- Section Title -->
        <div class="container section-title">
            <h2>Testimonials</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>

        <div class="testimonial-container">
            <div class="testimonial-wrapper">
                <div class="testimonial">
                    <img src="assets/img/testimonials/testimonials-1.jpg" alt="">
                    <div class="testimonial-content">
                        <h3>Saul Goodman</h3>
                        <h4>CEO & Founder</h4>
                        <div class="stars">★★★★★</div>
                        <p> ❝ GL, founded on April 15, 2019, has grown significantly and transformed into a group of companies by
                            May 1, 2024. GL Group is the . ❞</p>
                    </div>
                </div>

                <div class="testimonial">
                    <img src="assets/img/testimonials/testimonials-2.jpg" alt="">
                    <div class="testimonial-content">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <div class="stars">★★★★★</div>
                        <p>GL, founded on April 15, 2019, has grown significantly and transformed into a group of companies by May
                            1, 2024. GL Group is the </p>
                    </div>
                </div>

                <div class="testimonial">
                    <img src="assets/img/testimonials/testimonials-3.jpg" alt="">
                    <div class="testimonial-content">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <div class="stars">★★★★★</div>
                        <p>GL, founded on April 15, 2019, has grown significantly and transformed into a group of companies by May
                            1, 2024. GL Group is the .</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonialbuttons">
            <button onclick="prevSlide()">❮</button>
            <button onclick="nextSlide()">❯</button>
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
                    <li><a href="{{route('blog.index')}}" class="text-decoration-none text-secondary">Blog</a></li>
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

@include('partials.script')

</body>

</html>
