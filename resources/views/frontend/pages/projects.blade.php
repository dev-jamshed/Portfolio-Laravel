
@extends('frontend.layouts.master')
 
@section('content')

<!-- Breadcrumb Area Start -->
@include('frontend.components.common.breadcrumb-area', ['title' => 'Projects'])
<!-- Breadcrumb Area End -->

<!-- Latest Portfolio  Area Start -->
<section class="tmp-latest-portfolio tmp-section-gap">
        <div class="container">
            <div class="row">
               
                @foreach ($projects as $project)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="latest-portfolio-card v5 tmp-hover-link">
                            <div class="portfoli-card-img">
                                <div class="img-box v2">
                                    <a href="{{route('frontend.project.detail',$project->id)}}">

                                        <img class="img-primary hidden-on-mobile"  src="{{ asset('storage/' . $project->main_image) }}" alt="{{$project->name}}">

                                        <img class="img-secondary" src="{{ asset('storage/' . $project->main_image) }}" alt="{{$project->name}}">
                                    </a>
                                </div>
                                <a href="{{route('frontend.project.detail',$project->id)}}" class="img-link-icon"><i class="fa-solid fa-arrow-up-long"></i></a>

                            </div>
                            <div class="portfolio-card-content-wrap">
                                <div class="content-left">
                                    <h3 class="portfolio-card-title"><a class="link" href="{{route('frontend.project.detail',$project->id)}}">{{$project->name}}</a>
                                    </h3>
                                    <p class="portfoli-card-para"> {{$project->service->name}}</p>
                                </div>
                            </div>
                        </div>


                    </div>
                @endforeach

                
                {{-- <div class="col-lg-6 col-md-6 col-12">
                    <div class="latest-portfolio-card v5 tmp-hover-link">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a href="#">
                                    <img class="img-primary hidden-on-mobile" src="assets/images/latest-portfolio/tab-image-5.png" alt="Blog Thumbnail">
                                    <img class="img-secondary" src="assets/images/latest-portfolio/tab-image-5.png" alt="BLog Thumbnail">
                                </a>
                            </div>
                            <a href="#" class="img-link-icon"><i class="fa-solid fa-arrow-up-long"></i></a>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="#">Digital Transformation Advisors</a>
                                </h3>
                                <p class="portfoli-card-para"> Development Coaches</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="latest-portfolio-card v5 tmp-hover-link">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a href="#">
                                    <img class="img-primary hidden-on-mobile" src="assets/images/latest-portfolio/tab-image-6.png" alt="Blog Thumbnail">
                                    <img class="img-secondary" src="assets/images/latest-portfolio/tab-image-6.png" alt="BLog Thumbnail">
                                </a>
                            </div>
                            <a href="#" class="img-link-icon"><i class="fa-solid fa-arrow-up-long"></i></a>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="#">Digital Transformation Advisors</a>
                                </h3>
                                <p class="portfoli-card-para"> Development Coaches</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="latest-portfolio-card v5 tmp-hover-link">
                        <div class="portfoli-card-img">
                            <div class="img-box v2">
                                <a href="#">
                                    <img class="img-primary hidden-on-mobile" src="assets/images/latest-portfolio/tab-image-7.png" alt="Blog Thumbnail">
                                    <img class="img-secondary" src="assets/images/latest-portfolio/tab-image-7.png" alt="BLog Thumbnail">
                                </a>
                            </div>
                            <a href="#" class="img-link-icon"><i class="fa-solid fa-arrow-up-long"></i></a>
                        </div>
                        <div class="portfolio-card-content-wrap">
                            <div class="content-left">
                                <h3 class="portfolio-card-title"><a class="link" href="#">Digital Transformation Advisors</a>
                                </h3>
                                <p class="portfoli-card-para"> Development Coaches</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            
            </div>
        </div>

</section>
<!-- Latest Portfolio  Area End -->
@endsection