
@extends('frontend.layouts.master')
 
@section('content')
    
    
    <!-- Breadcrumb Area Start -->
    @include('frontend.components.common.breadcrumb-area')
    <!-- Breadcrumb Area End -->

  
  
    <div class="service-details-area-wrapper tmp-section-gap">
        <div class="container">
            <div class="row row--40">
                
                <div class="col-lg-8">
                    <div class="service-thumnail-wrap">
                        <img src="assets/images/services/service-detials-thumnail-wrap.png" alt="thumnail-img">
                    </div>
                    <h2 class="title split-collab">{{$service->name}}</h2>
                    <p class="doc-para">{{$service->description}}</p>
                    {!!$service->long_description!!}

                </div>

                <div class="col-lg-4">
                    <!-- Service Category Start -->
                    @include('frontend.components.services.service-category')
                    <!-- Service Category End -->
                </div>

            </div>
        </div>
    </div>
  
 
    @endsection