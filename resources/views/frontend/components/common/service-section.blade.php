<section class="service-area">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($services as $index => $service)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="service-card-v1 tmp-scroll-trigger tmp-fade-in animation-order-{{$index+1}} tmp-link-animation">
                        <div class="service-card-icon">
                            <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->name }}" width="80" class="my-2">
                        </div>
                        <h4 class="service-title"><a href="service-details.html">{{$service->name}}</a></h4>
                        <p class="service-para">{{$service->projects_done}} Projects</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>