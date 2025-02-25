<section class="testimonial tmp-section-gapTop">
    <div class="testimonial-wrapper">
        <div class="container">
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">

                    @foreach ($reviews as $index => $review)
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="card-content-wrap">
                                    <h2 class="text-doc">{{ $review->review }}</h2>
                                    <h3 class="card-title">{{ $review->name }}</h3>
                                    <p class="card-para">{{ $review->name }}</p>
                                    <div class="testimonital-icon">
                                        <img src="{{ asset('assets/frontend') }}/assets/images/testimonial/testimonial-icon.svg"
                                            alt="testimonial-icon">
                                    </div>
                                </div>
                                <div class="testimonial-card-img">
                                    <img class="tmp-scroll-trigger tmp-zoom-in animation-order-{{ $index + 1 }}"
                                        src="{{ asset('storage/' . $review->image) }}" alt="{{ $review->name }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- </div> -->
            <div class="testimonial-btn-next-prev">
                <div class="swiper-button-next"><i class="fa-solid fa-arrow-right"></i></div>
                <div class="swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
            </div>
        </div>
    </div>
</section>
