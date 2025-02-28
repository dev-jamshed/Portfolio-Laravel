<div class="tmp-skill-area tmp-section-gapTop">
    <div class="container">
        <div class="row g-5">

            @foreach ($skillCategory as $index => $Category)
            <div class="col-lg-6">
                <div class="progress-wrapper">
                    <div class="content">
                        <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                            {{$Category->name}} <span><img src="{{asset('assets/frontend')}}/assets/images/custom-line/custom-line.png" alt="custom-line"></span>
                        </h2>

                        @foreach ($Category->skills as $skill)
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">
                                    {{$skill->name}}</h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: {{$skill->range}}%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="{{$skill->range}}" aria-valuemin="0" aria-valuemax="100">
                                        <span class="percent-label">{{$skill->range}}%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                                
                        @endforeach



                        <!-- Start Single Progress Charts -->
                        <div class="progress-charts">
                            <h6 class="heading heading-h6">
                                FIGMA</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 95%; visibility: visible; animation-duration: 0.6s; animation-delay: 0.4s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span class="percent-label">95%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Progress Charts -->

                        <!-- Start Single Progress Charts -->
                        <div class="progress-charts">
                            <h6 class="heading heading-h6">
                                ADOBE XD</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 60%; visibility: visible; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span class="percent-label">60%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Progress Charts -->

                        <!-- Start Single Progress Charts -->
                        <div class="progress-charts">
                            <h6 class="heading heading-h6">
                                ADOBE ILLUSTRATOR</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 70%; visibility: visible; animation-duration: 0.8s; animation-delay: 0.6s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span class="percent-label">70%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Progress Charts -->

                    </div>
                </div>
            </div>
            @endforeach
            
{{--             
            <div class="col-lg-6">
                <div class="progress-wrapper">
                    <div class="content">
                        <h2 class="custom-title mb--30 tmp-scroll-trigger tmp-fade-in animation-order-1">
                            Development Skill <span><img src="{{asset('assets/frontend')}}/assets/images/custom-line/custom-line.png" alt="custom-line"></span>
                        </h2>
                        <!-- Start Single Progress Charts -->
                        <div class="progress-charts">
                            <h6 class="heading heading-h6">
                                HTML</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span class="percent-label">100%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Progress Charts -->

                        <!-- Start Single Progress Charts -->
                        <div class="progress-charts">
                            <h6 class="heading heading-h6">
                                CSS</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 95%; visibility: visible; animation-duration: 0.6s; animation-delay: 0.4s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span class="percent-label">95%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Progress Charts -->

                        <!-- Start Single Progress Charts -->
                        <div class="progress-charts">
                            <h6 class="heading heading-h6">
                                Javascript</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 60%; visibility: visible; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span class="percent-label">60%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Progress Charts -->

                        <!-- Start Single Progress Charts -->
                        <div class="progress-charts">
                            <h6 class="heading heading-h6">
                                Wordpress</h6>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 70%; visibility: visible; animation-duration: 0.8s; animation-delay: 0.6s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span class="percent-label">70%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Progress Charts -->

                    </div>
                </div>
            </div>       --}}
        </div>
    </div>
</div>