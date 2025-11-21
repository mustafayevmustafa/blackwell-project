<section id="testimonials" class="testimonials section">

    <div class="container section-title">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="testimonial-container">
        <div class="testimonial-wrapper">

            @foreach($testimonials as $item)
                <div class="testimonial">

                    {{-- ⭐ Real image varsa göstər, yoxdursa default --}}
                    <img
                        src="{{ $item->image
                                ? asset('storage/' . $item->image)
                                : asset('assets/img/testimonials/default.jpg')
                        }}"
                        alt="{{ $item->name }} {{ $item->surname }}"
                    >

                    <div class="testimonial-content">
                        <h3>{{ $item->name }} {{ $item->surname }}</h3>
                        <h4>{{ $item->position }}</h4>

                        <div class="stars">
                            {{ str_repeat('★', $item->stars) }}
                        </div>

                        <p>❝ {{ $item->text }} ❞</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div class="testimonialbuttons">
        <button onclick="prevSlide()">❮</button>
        <button onclick="nextSlide()">❯</button>
    </div>

</section>
