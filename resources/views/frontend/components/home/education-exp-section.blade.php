<section class="education-experience tmp-section-gapTop">
    <div class="container">
        <div class="section-head mb--50">
            <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">Education & Experience</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Empowering Creativity
                <br> through
            </h2>
            <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3">Business consulting
                consultants provide expert advice and guida
                businesses to help them improve their performance, efficiency, and organizational</p>
        </div>
        <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Education <span><img
                    src="{{asset('assets/frontend')}}/assets/images/custom-line/custom-line.png" alt="custom-line"></span>
        </h2>
        <div class="row g-5">

            @foreach ($educations as $index => $education )
                <div class="col-lg-6 col-sm-6">
                    <div class="education-experience-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-{{$index+1}}">
                        <h4 class="edu-sub-title">{{$education->title}}</h4>
                        <h2 class="edu-title">{{$education->year}} </h2>
                        <p class="edu-para">{{$education->description}} </p>
                    </div>
                </div>
            @endforeach

           
        </div>
        <div class="experiences-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <div class="experiences-wrap-left-content">
                        <h2 class="custom-title mb-32 tmp-scroll-trigger tmp-fade-in animation-order-1">Experiences <span><img
                        src="{{asset('assets/frontend')}}/assets/images/custom-line/custom-line.png" alt="custom-line"></span></h2>

                        
                        @foreach ($experiences as $index => $experience)
                            <div class="experience-content tmp-scroll-trigger tmp-fade-in animation-order-{{$index+1}}">
                                <p class="ex-subtitle">experience</p>
                                <h2 class="ex-name">{{$experience->company}} ({{$experience->duration}})</h2>
                                <h3 class="ex-title">{{$experience->title}}</h3>
                                <p class="ex-para">{{$experience->description}}</p>
                            </div>
                        @endforeach

                       
                        {{-- <div class="experience-content tmp-scroll-trigger tmp-fade-in animation-order-2">
                            <p class="ex-subtitle">experience</p>
                            <h2 class="ex-name">ModernTech (3 Years)</h2>
                            <h3 class="ex-title">App Developer</h3>
                            <p class="ex-para">In this portfolio, you’ll find a curated selection of projects that highlight my skills in [Main Areas, e.g., responsive web design.</p>
                        </div> --}}


                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="experiences-wrap-right-content">
                        <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1" src="{{asset('assets/frontend')}}/assets/images/experiences/expert-img.jpg" alt="expert-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>