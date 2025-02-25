<div class="our-supported-company-area tmp-section-gapTop">
    <div class="container">
        <div class="row justify-content-center">
           
           @foreach ($clients as $index => $client)
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                <div class="support-company-logo tmp-scroll-trigger tmp-fade-in animation-order-{{$index+1}}">
                    <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}">
                </div>
            </div>
           @endforeach
 
        </div>
    </div>
</div>