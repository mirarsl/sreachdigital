<div class="rs-about about-style1 pt-150 pb-150 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="sec-title">
                    <span class="sub-text primary-color">{{$module->top}}</span>
                    <h2 class="title pb-35">{{$module->title}}</h2>
                    <div class="desc pb-60 md-pb-40">
                        {!! $module->text !!}
                    </div>
                    <div class="rs-counter counter-style1 counter-modify4">
                        <div class="row">
                            @foreach ($module->data() as $counter)
                            <div class="col-lg-4 md-mb-30">
                                <div class="rs-counter-list"> 
                                    <div class="count-text">
                                        <div class="count-number">
                                            <span class="rs-count">{{$counter->count}}</span>
                                            <span class="prefix">{{$counter->addtional}}</span>
                                        </div>
                                        <span class="title">{{$counter->title}}</span>	
                                    </div>
                                    <div class="separator-dot"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img2">
                    <img src="{{asset($module->image)}}" alt="{{$module->title}}">
                </div>
            </div>
        </div>
    </div>
</div>
