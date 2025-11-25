<section class="LogosSection container">
    <h3 class="bh-cke-eyebrow-heading">
        Our Partner
    </h3>

    <div class="Logosmain ">

        <div class="">
            <div class="row">


                <div class="col-lg-6">
                    <div class="logos-container12">
                        <div class="logos12" id="logos12"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="details12 " id="details12">
                        <div class="col-lg-12 order-2 order-lg-1">
                            <h3 id="logo-name12"></h3>
                            <div class="details-content12">
                                <div class="details-header12">
                                    <p id="logo-description12" class="text-dark description-trimmed"
                                       style="font-family: 'Inter', 'Segoe UI', sans-serif; font-size: 1rem; font-weight: 400; line-height: 1.5; overflow: hidden;">
                                        <!-- Açıklama metni buraya dinamik olarak JS ile gelecek -->
                                    </p>
                                    <button id="toggle-description" class="btn btn-link p-0" style="font-size: 0.9rem;">Read
                                        more</button>
                                    <script>
                                        const desc = document.getElementById('logo-description12');
                                        const toggleBtn = document.getElementById('toggle-description');

                                        toggleBtn.addEventListener('click', function () {
                                            const isExpanded = desc.classList.contains('description-expanded');
                                            desc.classList.toggle('description-expanded');
                                            desc.classList.toggle('description-trimmed');
                                            toggleBtn.textContent = isExpanded ? 'Read more' : 'Read less';
                                        });
                                    </script>


                                </div>

                            </div>


                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <a href="" class="data-url12" target="_blank">

                                <img id="logo-image12" src="" alt="" />
                            </a>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</section>
