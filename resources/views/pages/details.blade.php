@extends('layout.master')
@section('content')
<div class="rs-breadcrumbs img1">
    <div class="container">
        <div class="breadcrumbs-inner">
               <div class="row y-middle">
                   <div class="col-lg-6">
                       <div class="breadcrumbs-wrap">
                           <h1 class="page-title">{{$Page->title}}</h1>
                           <p class="description">{{$Page->meta_desc}}</p>
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <div class="about-img">
                        <a data-fancybox="g1" href="{{asset($Page->image)}}"><img class="js-tilt" src="{{asset($Page->image)}}" alt="{{$Page->title}}"></a>
                       </div>
                   </div>
               </div>
               <div class="shape-animation">
                   <div class="ball-animate">
                       <img class="scale" src="/assets/images/breadcrumbs/shape/img1.png" alt="Shape">
                   </div>
               </div>
        </div>
    </div>
</div>
@if (View::exists('modules.details'))
    @include('modules.details', ['module' => $Page])
@endif
<div class="rs-contact contact-style1 purple-bg">
    <div class="container custom">
        <div class="row">
            <div class="col-lg-6 model-img"></div>
            <div class="col-lg-6">
                <div class="contact-wrap">
                    <div class="sec-title mb-70 md-mb-50">
                        <span class="sub-text">{{setting('site.title')}}</span>
                        <h2 class="title white-color pb-20">İletişime Geç</h2>
                    </div>
                    <div id="form-messages"></div>
                    @include('modules.form')
                </div>
            </div>
        </div>
    </div>
    <div class="contact-animate">
        <div class="animation one">
            <img class="rotated-style" src="/assets/images/contact/animate-img/slide-img1.png" alt="Shape">
        </div>
        <div class="animation two">
            <img class="rotated-style" src="/assets/images/contact/animate-img/asset-1.png" alt="Shape">
        </div>
        <div class="animation three">
            <img class="rotated-style" src="/assets/images/contact/animate-img/asset-2.png" alt="Shape">
        </div>
        <div class="animation four">
            <img class="rotated-style" src="/assets/images/contact/animate-img/slide-img2.png" alt="Shape">
        </div>
    </div>
</div>
@if (!(empty($Other)))
    <div class="rs-project project-style1 project-modify10 pt-145 pb-150 md-pt-75 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-50">
                <span class="sub-text primary-color">{{setting('site.title')}}</span>
                <h2 class="title">Bunlara da Göz At</h2>
            </div>
            <div class="row justify-content-center">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                    @foreach ($Other as $others)
                        <div class="blog-item md-mb-30">
                            <div class="project-item">
                                <div class="project-img">
                                    <a href="{{route($Route,$others->slug)}}">
                                        <img src="{{asset($others->image)}}" alt="{{$others->title}}">
                                    </a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title"><a href="{{route($Route,$others->slug)}}">{{$others->title}}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
@endsection