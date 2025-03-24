
@extends('frontend.layouts.master')
 
@section('content')

@php $generalInfo = get_general_info();$socialMediaInfos = get_social_media_info(); @endphp

<!-- Breadcrumb Area Start -->
@include('frontend.components.common.breadcrumb-area')
<!-- Breadcrumb Area End -->


<div class="contact-area-wrapper tmp-section-gapTop">
        <div class="container">
            <div class="contact-info-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info tmp-scroll-trigger tmponhover tmp-fade-in animation-order-1">
                            <div class="contact-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <h3 class="title">Address</h3>
                            <p class="para">{{$generalInfo->location}}</p>
                             
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info tmp-scroll-trigger tmponhover tmp-fade-in animation-order-2">
                            <div class="contact-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <h3 class="title">E-mail</h3>
                            <a href="mailto:{{$generalInfo->email}}">
                                <p class="para">{{$generalInfo->email}}</p>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info tmp-scroll-trigger tmponhover tmp-fade-in animation-order-3">
                            <div class="contact-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <h3 class="title">Call Me</h3>
                            <a href="tel:+{{$generalInfo->phone}}">
                                <p class="para">+{{$generalInfo->phone}}</p>
                            </a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- Appointment Form start -->    
        @include('frontend.components.common.appointment-form')
        <!-- Appointment Form End -->
        
    </div>

@endsection