  
@extends('frontend.layouts.master')
 
@section('content')

    <!-- Breadcrumb Area Start -->
    @include('frontend.components.common.breadcrumb-area')
    <!-- Breadcrumb Area End -->

    <!--  Service Area Start -->
    <section class=" tmp-section-gapTop">
    @include('frontend.components.common.service-section')
    </section>
    <!--  Service Area End -->

    <!--   skill area start -->
    @include('frontend.components.common.skill-section')
    <!--   skill area end -->

    <!--  Counter Area Start -->
    <section class="tmp-section-gapTop">
        @include('frontend.components.common.counter-section')
        </section>
    <!--  Counter Area End -->
    
    <!--  Education Experience Area Start -->
    @include('frontend.components.home.education-exp-section')
    <!--  Education Experience Area End -->

    <!--  Pricing Plan Start -->
    @include('frontend.components.common.pricing-plan')
    <!--  Pricing Plan End -->

    <!--  Get In touch start -->
    @include('frontend.components.common.appointment-form')
    <!--  Get In touch End -->
 
    @endsection