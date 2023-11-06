@if (!(empty($module->data())))
<div class="rs-services services-style3 pt-125 pb-130 md-pt-75 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-5 pr-18 md-pr-15 md-mb-50">
                <div class="sec-title2">
                    <span class="sub-text">{{$module->title}}</span>
                    {!!$module->text!!}
                    <div class="btn-part">
                        <a class="readon red get-bdr" href="{{$module->url}}">{{$module->button}}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    @foreach ($module->data() as $service)
                    <div class="col-lg-6 col-md-6 mb-40">
                        <div class="services-item">
                            <a href="{{route('service',$service->slug)}}">
                            <div class="services-wrap">
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
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif