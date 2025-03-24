

@extends('frontend.layouts.master')
 
@section('content')

    <!-- banner area start -->
    @include('frontend.components.home.hero')
    <!-- banner area end -->
 
    <!-- Service Area Start -->
    <section class="service-area tmp-section-gap">
    @include('frontend.components.common.service-section')
    </section>
    <!-- Service Area End -->

    <!-- Counter Area Start -->
    @include('frontend.components.common.counter-section')
    <!-- Counter Area End -->

    <!-- skill area start -->
    @include('frontend.components.common.skill-section')
    <!-- skill area end -->

    <!-- Latest Service Area Start -->
    @include('frontend.components.home.latest-service-section')
    <!-- Latest Service Area End -->

    <!-- Education Experience Area Start -->
    @include('frontend.components.home.education-exp-section')
    <!-- Education Experience Area End -->

    <!-- Our Clients Start -->
    @include('frontend.components.home.our-clients')
    <!-- Our Clients End -->
    
    <!-- Skill Horizontal Start -->
    @include('frontend.components.home.skill-horizontal')
    <!-- Skill Horizontal End -->

    <!-- Testimonial Area Start -->
    @include('frontend.components.common.testimonials')
    <!-- Testimonial Area End -->

    <!-- Appointment Form start -->    
        @include('frontend.components.common.appointment-form')
    <!-- Appointment Form End -->
    
    <!-- Blog and news Area Start -->
    {{-- @include('frontend.components.home.blogs') --}}
    <!-- Blog and news Area End -->

@endsection