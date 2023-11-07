@extends('layout.master')
@section('content')
<div class="rs-banner banner-main-home">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="content-wrap">
                    {!! $Page->text !!}
                    <ul class="banner-bottom">
                        <li><a class="readon started" href="route('page','iletisim')">İletişime Geç</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 align-items-center">
                <div class="main-img text-right md-text-center">
                    <img src="{{asset($Page->banner)}}" alt="{{setting('site.title')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="banner-animate">
        <img class="animation-style one scale" src="{{asset('pages/main-home/hero-shpae-min.png')}}" alt="Hero Shpae Min">
        <img class="animation-style two rotated-style" src="{{asset('pages/main-home/shape1.png')}}" alt="Shape1">
        <img class="animation-style three veritcal" src="{{asset('pages/main-home/shape2.png')}}" alt="Shape2">
        <img class="animation-style four spine" src="{{asset('pages/main-home/shape3.png')}}" alt="Shape3">
        <img class="animation-style five veritcal" src="{{asset('pages/main-home/shape4.png')}}" alt="Shape4">
        <img class="animation-style six veritcal" src="{{asset('pages/main-home/shape5.png')}}" alt="Shape5">
        <img class="animation-style seven rotated-style" src="{{asset('pages/main-home/shape6.png')}}" alt="Shape6">
        <img class="animation-style eight scale" src="{{asset('pages/main-home/dot1.png')}}" alt="dot1">
        <img class="animation-style nine scale" src="{{asset('pages/main-home/dot2.png')}}" alt="dot2">
        <img class="animation-style ten scale" src="{{asset('pages/main-home/dot2.png')}}" alt="dot3">
    </div>
</div>
@foreach ($Page->modules as $module)
    @if (View::exists('modules.' . $module->slug))
        @include('modules.' . $module->slug, ['module' => $module])
    @else
        @include('modules.default', ['module' => $module])
    @endif
@endforeach


<div id="rs-blog" class="rs-blog blog-main-home gray-bg pt-140 pb-145 md-pt-75 md-pb-80">
    <div class="container">  
           <div class="sec-title mb-55 md-mb-35 text-center">
               <span class="sub-text primary-color">Sreach</span>
               <h2 class="title">Blog Yazılarımız</h2>
           </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
            <div class="blog-item">
                <div class="image-wrap">
                    <a href="#"><img src="/assets/images/blog1.jpg" alt=""></a>
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li class="categories"><i class="fi fi-rr-bookmark"></i><a href="#">Web Sitesi Tasarımları</a></li>
                    </ul>
                    <h3 class="blog-title"><a href="#">Web sitenizin seo'su için önemli 15 madde</a></h3>
                    <div class="blog-button">
                        <a href="#">
                              <span class="btn-text">Devamını Gör</span>
                              <i class="fi fi-rr-arrow-right"></i>
                          </a> 
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <div class="image-wrap">
                    <a href="#"><img src="/assets/images/blog1.jpg" alt=""></a>
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li class="categories"><i class="fi fi-rr-bookmark"></i><a href="#">Web Sitesi Tasarımları</a></li>
                    </ul>
                    <h3 class="blog-title"><a href="#">Web sitenizin seo'su için önemli 15 madde</a></h3>
                    <div class="blog-button">
                        <a href="#">
                              <span class="btn-text">Devamını Gör</span>
                              <i class="fi fi-rr-arrow-right"></i>
                          </a> 
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <div class="image-wrap">
                    <a href="#"><img src="/assets/images/blog1.jpg" alt=""></a>
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li class="categories"><i class="fi fi-rr-bookmark"></i><a href="#">Web Sitesi Tasarımları</a></li>
                    </ul>
                    <h3 class="blog-title"><a href="#">Web sitenizin seo'su için önemli 15 madde</a></h3>
                    <div class="blog-button">
                        <a href="#">
                              <span class="btn-text">Devamını Gör</span>
                              <i class="fi fi-rr-arrow-right"></i>
                          </a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rs-contact contact-style1">
    <div class="container custom">
        <div class="row">
            <div class="col-lg-6 model-img"></div>
            <div class="col-lg-6">
                <div class="contact-wrap">
                    <div class="sec-title mb-70 md-mb-50">
                        <span class="sub-text">Sreach Digital</span>
                        <h2 class="title pb-20">Hadi İletişime Geç</h2>
                        <p class="desc desc2">
                            Feugiat scelerisque varius morbi enim nunc faucibus a. Semper risus in hendrerit gravida rutrum quisque.
                        </p>
                    </div>
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="">
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="İsim & Soyisim" required="">
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Posta" required="">
                                </div>   
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Telefon" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                    <input class="from-control" type="text" id="company" name="company" placeholder="Firmanız" required="">
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <textarea class="from-control" id="message" name="message" placeholder="Mesajınız" required=""></textarea>
                                </div>
                            </div>
                            <div class="btn-part">                                            
                                <div class="form-group submit-btn mb-0">
                                    <button class="submit">Gönder</button>
                                </div>
                            </div> 
                        </fieldset>
                    </form> 
                       <div class="address-widget">
                           <div class="address-wrap">
                               <div class="address-icon">
                                   <i class="fa fa-phone"></i>
                               </div>
                               <div class="content-txt">
                                   <span class="des">(+088)589-8745</span>
                               </div>
                           </div>
                       </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-animate">
        <div class="animation one">
            <img class="rotated-style" src="assets/images/contact/animate-img/slide-img1.png" alt="Images">
        </div>
        <div class="animation two">
            <img class="rotated-style" src="assets/images/contact/animate-img/asset-1.png" alt="Images">
        </div>
        <div class="animation three">
            <img class="rotated-style" src="assets/images/contact/animate-img/asset-2.png" alt="Images">
        </div>
        <div class="animation four">
            <img class="rotated-style" src="assets/images/contact/animate-img/slide-img2.png" alt="Images">
        </div>
    </div>
</div>
@endsection