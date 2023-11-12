<div class="rs-services services-style5 black-bg2 pt-125 pb-130 md-pt-75 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-50 md-mb-35">
            <span class="sub-text">{{$module->top}}</span>
            <h2 class="title white-color">{{$module->title}}</h2>
        </div>
        <div class="row y-middle align-items-stretch">
            @foreach ($module->data() as $service)
                <div class="col-xl-3 col-md-6 xl-mb-30">
                    <div class="services-item h-100">
                        <div class="services-wrap h-100">
                            @if (!(empty($service->image)))
                                <div class="services-img">
                                    <img src="{{asset($service->image)}}" alt="{{$service->title}}">
                                </div>
                            @endif
                            <div class="services-content">
                                <h2 class="title">{{$service->title}}</h2>
                                <p class="services-txt">{{substr($service->short_text,0,100)}}..</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>