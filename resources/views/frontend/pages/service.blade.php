

@extends('frontend.layouts.master')
 
@section('content')

    <!-- Breadcrumb Area Start -->
    @include('frontend.components.common.breadcrumb-area')
    <!-- Breadcrumb Area End -->

    <!-- Latest Service Area Start -->
    @include('frontend.components.services.services')
    <!-- Latest Service Area End -->

    <!--  My Price plan Start -->
    @include('frontend.components.common.pricing-plan')
    <!--  My Price plan End -->

@endsection