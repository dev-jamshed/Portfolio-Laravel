<div class="tmp-banner-one-area">
    <div class="container">

        

        <div class="banner-one-main-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="banner-right-content">
                        <img class="tmp-scroll-trigger tmp-zoom-in animation-order-1" src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}">
                        <h2 class="banner-big-text-1 up-down">{{$banner->top_skill}}</h2>
                        <h2 class="banner-big-text-2 up-down-2">{{$banner->bottom_skill}}</h2>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="inner">
                        <span class="sub-title tmp-scroll-trigger tmp-fade-in animation-order-1">Hello</span>
                        <h1 class="title tmp-scroll-trigger tmp-fade-in animation-order-2 mt--5">{{$banner->title}} <br>
                            <span class="header-caption">
                                <span class="cd-headline clip is-full-width">
                                    <span class="cd-words-wrapper">
                                        @foreach (json_decode($banner->skills) as $index => $skill)
                                            <b class="{{ $index == 0  ? 'is-visible' : 'is-hidden'}} theme-gradient">{{ $skill }}</b>
                                        @endforeach
 
                                             
                                    </span>
                            </span>
                            </span>
                        </h1>
                        <p class="disc tmp-scroll-trigger tmp-fade-in animation-order-3">{{$banner->description}}</p>
                        <div class="button-area-banner-one tmp-scroll-trigger tmp-fade-in animation-order-4">
                            <a class="tmp-btn hover-icon-reverse radius-round" href="project.html">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">View Portfolio</span>
                                <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>