
@extends('frontend.layouts.master')
 
@section('content')

    <!-- banner area start -->
    @include('frontend.components.home.hero',compact('banner'))
    <!-- banner area end -->
 
    <!-- Service Area Start -->
    @include('frontend.components.common.service-section',compact('services'))
    <!-- Service Area End -->

    <!-- Counter Area Start -->
    @include('frontend.components.common.counter-section',compact('counters'))
    <!-- Counter Area End -->

    <!-- skill area start -->
    @include('frontend.components.common.skill-section',compact('skills'))
    <!-- skill area end -->

    <!-- Latest Service Area Start -->
    @include('frontend.components.home.latest-service-section' )
    <!-- Latest Service Area End -->

    <!-- Education Experience Area Start -->
    @include('frontend.components.home.education-exp-section',compact('educations','experiences'))
    <!-- Education Experience Area End -->

    <!-- Our Clients Start -->
    @include('frontend.components.home.our-clients',compact('clients'))
    <!-- Our Clients End -->
    
    <!-- Skill Horizontal Start -->
    @include('frontend.components.home.skill-horizontal' )
    <!-- Skill Horizontal End -->

    <!-- Testimonial Area Start -->
    @include('frontend.components.common.testimonials',compact('reviews'))
    <!-- Testimonial Area End -->

    <!-- Appointment Form start -->
    <div class="tmp-section-gap pt-0">
        @include('frontend.components.common.appointment-form')
    </div>
    <!-- Appointment Form End -->
    
    <!-- Blog and news Area Start -->
    {{-- @include('frontend.components.home.blogs') --}}
    <!-- Blog and news Area End -->

@endsection