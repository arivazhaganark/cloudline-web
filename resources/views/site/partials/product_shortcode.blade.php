<section class="price-plans-cont pro-section3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><h4> Cloudline Cloud Service - Simple,
                        Affordable <br> <span> The first Video conferencing Cloud service with Custom Plans </span></h4>
                </div>
            </div>
            @if($products)
                @foreach($products as $product)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="pro-cate-thumb pro-cate-thumb2">
                            <p><img src="{{ $product->icon_url }}" alt="{{ $product->title }}"></p>
                            <h6> {{ $product->title }} </h6>
                            <p class="product-thumb-txt">
                                {{ $product->description }}
                            </p>
                            <a href="{{ url('cloudplans') }}" class="btn btn1 "> Know More <i
                                        class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>