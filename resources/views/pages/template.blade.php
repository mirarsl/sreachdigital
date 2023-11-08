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
                           <img class="js-tilt" src="{{asset($Page->banner)}}" alt="{{$Page->title}}">
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
@foreach ($Page->modules as $module)
    @if (View::exists('modules.' . $module->slug))
        @include('modules.' . $module->slug, ['module' => $module])
    @else
        @include('modules.default', ['module' => $module])
    @endif
@endforeach
@endsection