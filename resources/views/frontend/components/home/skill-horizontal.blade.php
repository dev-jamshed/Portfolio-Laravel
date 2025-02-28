<section class="my-skill tmp-section-gapTop">
    <div class="container">
        <div class="section-head text-align-left mb--50">
            <div class="section-sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">My Skill</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Elevated Designs
                Personalized <br> the best Experiences</h2>
        </div>
        <div class="services-widget v1">
            

            @foreach ($beskSkils as $index => $skill)
            <div class="service-item current tmp-scroll-trigger tmp-fade-in animation-order-{{$index+1}}">
                <div class="my-skill-card">
                    <div class="card-icon">
                        {{-- <i class="fa-light fa-building-columns"></i> --}}
                        <img src="{{ Storage::url($skill->icon) }}" alt="icon" width="50" height="50" class="mt-2">

                    </div>
                    <div class="card-title">
                        <h3 class="main-title">{{$skill->name}}</h3>
                        {{-- <p class="sub-title">21 Done</p> --}}
                    </div>
                    <p class="card-para">{{$skill->description}}</p>
                    
                    {{-- <a href="#" class="read-more-btn">Read More <span class="read-more-icon"><i
                    class="fa-solid fa-angle-right"></i></span></a> --}}
                </div>
                {{-- <button class="service-link modal-popup"></button> --}}
            </div>
            @endforeach

            <div class="service-item tmp-scroll-trigger tmp-fade-in animation-order-2">
                <div class="my-skill-card">
                    <div class="card-icon">
                        <i class="fa-light fa-calendar"></i>
                    </div>
                    <div class="card-title">
                        <h3 class="main-title">Ui/visual Design</h3>
                        <p class="sub-title">21 Done</p>
                    </div>
                    <p class="card-para">In this portfolio, you’ll find a curated selection of projects that highlight my skills in Main Areas, e.g., responsive web design</p>
                    <a href="#" class="read-more-btn">Read More <span class="read-more-icon"><i
                    class="fa-solid fa-angle-right"></i></span></a>
                </div>
                <button class="service-link modal-popup"></button>
            </div>
            <div class="service-item tmp-scroll-trigger tmp-fade-in animation-order-3">
                <div class="my-skill-card">
                    <div class="card-icon">
                        <i class="fa-light fa-pen-nib"></i>
                    </div>
                    <div class="card-title">
                        <h3 class="main-title">Motion Design</h3>
                        <p class="sub-title">20 Done</p>
                    </div>
                    <p class="card-para">Each project here showcases my commitment to excellence and adaptability, tailored to meet each client’s unique needs</p>
                    <a href="#" class="read-more-btn">Read More <span class="read-more-icon"><i
                    class="fa-solid fa-angle-right"></i></span></a>
                </div>
                <button class="service-link modal-popup"></button>
            </div>
            <div class="active-bg wow fadeInUp mleave"></div>
        </div>
    </div>
</section>