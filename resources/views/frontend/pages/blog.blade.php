
@extends('frontend.layouts.master')
 
@section('content')

<!-- Breadcrumb Area Start -->
@include('frontend.components.common.breadcrumb-area')
<!-- Breadcrumb Area End -->

<div class="blog-classic-area-wrapper tmp-section-gap">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <!-- Card List Area Start -->
                @include('frontend.components.blogs.blog-card.list')
                <!-- Card List End -->

            </div>
            
            <div class="col-lg-4">
                <!-- Blog sidebar Area Start -->
                @include('frontend.components.blogs.blog-sidebar')
                <!-- Blog sidebar End -->
            </div>

        </div>
    </div>
</div>

@endsection