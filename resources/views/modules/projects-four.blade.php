<div class="rs-project project-style1 bg2 pt-153 pb-160 md-pt-75 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 mb-60">
                <div class="sec-title">
                    <span class="sub-text">{{$module->top}}</span>
                    <h2 class="title white-color">{{$module->title}}</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="project-button text-right md-left mt--40 md-mb-70">
                    <a class="portfolio-single-column" href="{{$module->url}}">
                        {{$module->button}}
                        <i class="fa fi fi-rr-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($module->data()->sortBy('ordering') as $project)
                <div class="col-lg-6 mb-30">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="{{route('project',$project->slug)}}">
                                <img src="{{asset($project->image)}}" alt="{{$project->title}}">
                            </a>
                        </div>
                        <div class="project-content">
                            <span class="category"><a href="{{route('service',$project->service->slug)}}">{{$project->service->title}}</a></span>
                            <h3 class="title"><a href="{{route('project',$project->slug)}}">{{$project->title}}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="project-animate">
        <div class="pro-animation left-arrow">
            <img class="veritcal" src="/assets/images/project/line.png" alt="Line">
        </div>
        <div class="pro-animation right-arrow">
            <img class="veritcal" src="/assets/images/project/line.png" alt="Line">
        </div>
    </div>
</div>