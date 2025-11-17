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
                    @foreach($panaProducts as $index => $product)
                    <li class="tab__btn {{ $index === 0 ? 'active' : '' }}">{{ $product->title['az'] ?? $product->title['en'] ?? '' }}</li>
                    @endforeach
                </ul>
            </div>
        </div>


        <div class="tab__content tab__contact_pad ">
            @foreach($panaProducts as $index => $product)
            <div class="tab {{ $index === 0 ? 'active' : '' }}">
                <div class="custom-tab-pane active" id="features-tab-{{ $product->id }}" role="tabpanel" aria-labelledby="tab-{{ $product->id }}">
                    <div class="custom-row {{ $index === 0 ? '' : 'container' }}">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 tab_pad_0">
                                <h2>{{ $product->title['az'] ?? $product->title['en'] ?? '' }}</h2>
                                <p class="fst-main">
                                    {{ $product->description['az'] ?? $product->description['en'] ?? '' }}
                                </p>
                                <div class="custom-col-left">
                                    @if($product->datasheet)
                                    <div class="mt-3 text-right">
                                        <a href="{{ asset('storage/' . $product->datasheet) }}" class="btn btn-dark" target="_self">Get Datasheet</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="custom-col-right">
                                    @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title['az'] ?? $product->title['en'] ?? '' }}" class="custom-img">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
