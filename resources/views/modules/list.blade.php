<div class="rs-services services-main-home pt-145 pb-150 md-pt-75 md-pb-80">
    <div class="container custom">
        <div class="sec-title text-center mb-55 md-mb-35">
            <h2 class="title">{{$Page->title}}</h2>
        </div>
        <div class="row">
            @foreach ($Page->data() as $service)
                <div class="col-lg-4 col-md-6 mb-35">
                    <div class="services-item">
                        <div class="services-wrap">
                            @if (!(empty($service->image)))
                                <div class="services-img">
                                    <img src="{{asset($service->image)}}" alt="{{$service->title}}">
                                </div>
                            @endif
                            <div class="services-content">
                                <h2 class="title"><a href="{{route(isset($Page->route_name) ? Route::has($Page->route_name) ? $Page->route_name : 'page' : 'page',$service->slug)}}">{{$service->title}}</a></h2>
                                @if (!(empty($service->short_text)))
                                <p class="services-txt">{{substr($service->short_text,0,100)}}..</p>
                                @endif
                                <div class="services-button">
                                    <a href="{{route(isset($Page->route_name) ? Route::has($Page->route_name) ? $Page->route_name : 'page' : 'page',$service->slug)}}">
                                        <span class="btn-text">Devamını Gör</span>
                                        <i class="fi fi-rr-arrow-right"></i>
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>