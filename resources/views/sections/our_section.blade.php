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
                @foreach($serviceSections as $index => $section)
                <li class="nav-item col-3" role="presentation">
                    <a class="nav-link {{ $index === 0 ? 'active show' : '' }}" data-bs-toggle="tab" data-bs-target="#features-tab-{{ $section->id }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                       role="tab">
                        <h4>{{ $section->title['az'] ?? $section->title['en'] ?? '' }}</h4>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>


        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
            @foreach($serviceSections as $index => $section)
            <div class="tab-pane fade {{ $index === 0 ? 'active show' : '' }}" id="features-tab-{{ $section->id }}" role="tabpanel">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column ">
                        <h3>{{ $section->title['az'] ?? $section->title['en'] ?? '' }}</h3>
                        <p class="fst-main">
                            {{ $section->content['az'] ?? $section->content['en'] ?? '' }}
                        </p>

                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        @if($section->image)
                        <img src="{{ asset('storage/' . $section->image) }}" alt="{{ $section->title['az'] ?? '' }}" class="img-fluid custom-img-width">
                        @endif
                    </div>
                </div>
            </div><!-- End tab content item -->
            @endforeach
        </div>

    </div>

</section><!-- /Features Section -->
