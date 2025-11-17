<section class="LogosSection container">
    <style>
        .logos12 {
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: center !important;
            align-items: center !important;
            gap: 20px !important;
        }
        .logo12 {
            cursor: pointer;
        }
    </style>
    <h3 class="bh-cke-eyebrow-heading">
        Our Partner
    </h3>

    <div class="Logosmain ">

        <div class="">
            <div class="row">


                <div class="col-lg-6">
                    <div class="logos-container12">
                        <div class="logos12" id="logos12">
                            @foreach($partners as $index => $partner)
                            <div class="logo12 {{ $index === 0 ? 'active' : '' }}" onclick="showPartnerDetails(this)"
                                 data-name="{{ $partner->title['az'] ?? $partner->title['en'] ?? '' }}"
                                 data-description="{{ $partner->content['az'] ?? $partner->content['en'] ?? '' }}"
                                 data-image="{{ $partner->image ? asset('storage/' . $partner->image) : '' }}"
                                 data-url="{{ $partner->url ?? '#' }}">
                                @if($partner->image)
                                <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->title['az'] ?? '' }}">
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="details12 " id="details12">
                        <div class="col-lg-12 order-2 order-lg-1">
                            <h3 id="logo-name12">{{ $partners->first()->title['az'] ?? $partners->first()->title['en'] ?? '' }}</h3>
                            <div class="details-content12">
                                <div class="details-header12">
                                    <p id="logo-description12" class="text-dark description-trimmed"
                                       style="font-family: 'Inter', 'Segoe UI', sans-serif; font-size: 1rem; font-weight: 400; line-height: 1.5; overflow: hidden;">
                                        {{ $partners->first()->content['az'] ?? $partners->first()->content['en'] ?? '' }}
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

                                        function showPartnerDetails(element) {
                                            document.querySelectorAll('.logo12').forEach(logo => logo.classList.remove('active'));
                                            element.classList.add('active');
                                            document.getElementById('logo-name12').textContent = element.dataset.name;
                                            document.getElementById('logo-description12').textContent = element.dataset.description;
                                            document.getElementById('logo-image12').src = element.dataset.image;
                                            document.querySelector('.data-url12').href = element.dataset.url;
                                        }
                                    </script>


                                </div>

                            </div>


                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <a href="{{ $partners->first()->url ?? '#' }}" class="data-url12" target="_blank">
                                <img id="logo-image12" src="{{ $partners->first()->image ? asset('storage/' . $partners->first()->image) : '' }}" alt="" />
                            </a>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</section>
