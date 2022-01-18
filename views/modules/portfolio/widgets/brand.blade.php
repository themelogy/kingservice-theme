<div class="gap-border"></div>
<div class="portfolio-brands">
    <div class="container">
        <div class="row">
            <div class="owl-carousel" data-items="8" data-items-tablet="2" data-items-mobile="1" data-autoplay="3000">
                @foreach($brands as $brand)
                    <div class="thumbnail brand">
                        @if($brand->website)
                            <a href="{{ $brand->website }}" target="_blank">
                                <img src="{{ $brand->present()->firstImage(null,50,'resize',70) }}" alt="{{ $brand->title }}" style="padding: 20px"/>
                            </a>
                        @else
                            <img src="{{ $brand->present()->firstImage(null,50,'resize',70) }}" alt="{{ $brand->title }}" style="padding: 20px"/>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

