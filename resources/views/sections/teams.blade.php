<section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Our professional team members</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-5">

            @foreach($teams as $index => $member)
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                <div class="member-img">
                    @if($member->image)
                    <img src="{{ asset('storage/' . $member->image) }}" class="img-fluid" alt="{{ $member->full_name }}">
                    @else
                    <img src="{{ asset('assets/img/team/default.jpg') }}" class="img-fluid" alt="{{ $member->full_name }}">
                    @endif
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4>{{ $member->full_name }}</h4>
                    <span>{{ $member->position }}</span>
                    <p>{{ $member->content }}</p>
                </div>
            </div><!-- End Team Member -->
            @endforeach

        </div>

    </div>

</section><!-- /Team Section -->
