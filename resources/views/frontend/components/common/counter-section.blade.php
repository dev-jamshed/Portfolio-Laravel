<section class="counter-area">
    <div class="container">
        <div class="row g-5">
            <div class="col-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="year-of-expariance-wrapper bg-blur-style-one tmp-scroll-trigger tmp-fade-in animation-order-1">
                    <div class="year-expariance-wrap">
                        <!-- <h2 class="year-number"><span class="counter">25 </span> </h2> -->
                        <h2 class="counter year-number"><span class="odometer" data-count="{{$counterExperience->total_years}}">00</span>
                        </h2>
                        <h3 class="year-title">{{$counterExperience->title}}</h3>
                    </div>
                    <p class="year-para">{{$counterExperience->description}} </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="counter-area-right-content">
                    <div class="row g-5"> 
                        @foreach ($counters as $index => $counter)
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="counter-card tmponhover tmp-scroll-trigger tmp-fade-in animation-order-counters">
                                    <h3 class="counter counter-title"><span class="odometer" data-count="{{$counter->value}}">00</span>+
                                    </h3>
                                    <p class="counter-para">{{$counter->title}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>