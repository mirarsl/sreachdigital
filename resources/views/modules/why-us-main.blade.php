<div class="rs-about about-style1 pt-145 pb-150 md-pt-75 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="sec-title2">
                    <h2 class="title title4 pb-38">
                        {{$module->title}}
                    </h2>
                    <div class="desc">
                        {!! $module->text !!}
                    </div>
                    <div class="btn-part mt-20">
                        <a class="readon red get-started2" href="{{$module->url}}">{{$module->button}}</a>
                    </div>
                </div>	
            </div>
            <div class="col-lg-6">
                <div class="about-home10">
                    <img class="js-tilt" src="{{asset($module->image)}}" alt="{{$module->title}}">
                </div>
            </div>
        </div>
    </div>
</div>