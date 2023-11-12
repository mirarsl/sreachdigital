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
@endsection