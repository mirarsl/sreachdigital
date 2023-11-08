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
@endsection