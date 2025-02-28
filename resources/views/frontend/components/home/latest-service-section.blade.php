<section class="latest-service-area tmp-section-gapTop">
    <div class="container">
        <div class="section-head mb--50">
            <div class="section-sub-title center-title tmp-scroll-trigger tmp-fade-in animation-order-1">
                <span class="subtitle">Latest Service</span>
            </div>
            <h2 class="title split-collab tmp-scroll-trigger tmp-fade-in animation-order-2">Inspiring The World One
                <br> Project
            </h2>
            <p class="description section-sm tmp-scroll-trigger tmp-fade-in animation-order-3"> Business consulting
                consultants provide expert advice and guida
                businesses to help them improve their performance, efficiency, and organizational </p>
        </div>
        <div class="row">

            <div class="col-lg-6">
            @foreach ($latestServices as $index => $latestService)
                    <div class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-{{$index+1}}">
                        <h2 class="service-card-num"><span>{{$index+1}}.</span>{{$latestService->name}}</h2>
                        <p class="service-para">{{$latestService->description}}</p>
                    </div>
                    {{-- <div class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-2">
                        <h2 class="service-card-num"><span>02.</span>My Portfolio of Innovation</h2>
                        <p class="service-para">My work is driven by the belief that thoughtful design and strategic planning can empower brands, transform businesses</p>
                    </div>
                    <div class="service-card-v2 tmponhover tmp-scroll-trigger tmp-fade-in animation-order-3">
                        <h2 class="service-card-num"><span>03.</span>A Showcase of My Projects</h2>
                        <p class="service-para">In this portfolio, you’ll find a curated selection of projects that highlight my skills in [Main Areas, e.g., responsive web design</p>
                    </div> --}}
                    @endforeach
                </div>
            <div class="col-lg-6">
                <div class="service-card-user-image">
                    
                    <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1" src="{{ asset('storage/' . $serviceSectionImage->image_path) }}" alt="latest-user-image">
                </div>
            </div>
        </div>
    </div>
</section>