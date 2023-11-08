<div id="rs-blog" class="rs-blog blog-main-home gray-bg pt-140 pb-145 md-pt-75 md-pb-80">
    <div class="container">  
           <div class="sec-title mb-55 md-mb-35 text-center">
               <span class="sub-text primary-color">{{$module->top}}</span>
               <h2 class="title">{{$module->title}}</h2>
           </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
            @foreach ($module->data()->sortBy('ordering') as $blog)
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="{{route('blog',$blog->slug)}}"><img src="/assets/images/blog1.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li class="categories"><i class="fi fi-rr-bookmark"></i><a href="{{route('service',$blog->service->slug)}}">{{$blog->service->title}}</a></li>
                        </ul>
                        <h3 class="blog-title"><a href="{{route('blog',$blog->slug)}}">{{$blog->title}}</a></h3>
                        <div class="blog-button">
                            <a href="{{route('blog',$blog->slug)}}">
                                <span class="btn-text">Devamını Gör</span>
                                <i class="fi fi-rr-arrow-right"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>