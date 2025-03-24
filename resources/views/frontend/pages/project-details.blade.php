
@extends('frontend.layouts.master')
 
@section('content')

<!-- Breadcrumb Area Start -->
@include('frontend.components.common.breadcrumb-area')
<!-- Breadcrumb Area End -->

    <div class="project-details-area-wrapper tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> 
                    <div class="project-details-thumnail-wrap">
                        <img src="{{ asset('storage/' . $project->main_image) }}" alt="{{$project->name}}">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="project-details-content-wrap">
                        <h2 class="title">{{$project->name}}</h2>
                        <p class="docs">{{$project->description}}</p>
                       {!!$project->long_description!!}

                        {{-- <div class="check-box-wrap">
                            <ul>
                                <li>
                                    <h4 class="check-box-item"><span><i
                                                class="fa-solid fa-circle-check"></i></span>Ui/visual Design</h4>
                                </li>
                                <li>
                                    <h4 class="check-box-item"><span><i
                                                class="fa-solid fa-circle-check"></i></span>App Development</h4>
                                </li>
                                <li>
                                    <h4 class="check-box-item"><span><i
                                                class="fa-solid fa-circle-check"></i></span>Software Developer</h4>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="project-details-swiper-wrapper">
                            <div class="swiper project-details-swiper">
                                <div class="swiper-wrapper">


                                    @foreach($project->images as $image)
                                            <div class="swiper-slide">
                                                <div class="project-details-img">
                                                    <img src="{{ asset('storage/' . $image->path) }}" alt="swiper-img">
                                                </div>
                                            </div>
                                        @endforeach

{{--                                         
                                    <div class="swiper-slide">
                                        <div class="project-details-img">
                                            <img src="assets/images/projects-details/project-detials-swiper-img-2.png" alt="swiper-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-details-img">
                                            <img src="assets/images/projects-details/project-detials-swiper-img-1.jpg" alt="swiper-img">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="project-details-swiper-btn">
                                <div class="project-swiper-button-prev"><span><i
                                            class="fa-solid fa-arrow-left"></i></span>Previous</div>
                                <div class="project-swiper-button-next">Next <span><i
                                            class="fa-solid fa-arrow-right"></i></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Get In touch start -->
                    @include('frontend.components.project.contact-section')
                    <!-- Get In touch End -->
                
                </div>
                <div class="col-lg-4">
                    <!-- Detail Card Start -->
                    @include('frontend.components.project.project-detail-card')
                    <!-- Detail Card End -->
                </div>
            </div>
        </div>
    </div>
    
    @endsection