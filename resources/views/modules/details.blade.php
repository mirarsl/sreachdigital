<div class="rs-services services-details bg3 pt-160 pb-160 md-pt-80 md-pb-80">
    <div class="container">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-12">
                    <div class="sec-title">
                        <span class="sub-text primary-color">{{setting('site.title')}}</span>
                        <h2 class="title pb-35">{{$module->title}}</h2>
                        <div class="desc pb-45">
                            {!! $module->text !!}
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</div>

@if (!(empty($module->gallery)))
<div class="rs-project-details pb-150 md-pb-80">
    <div class="container">
        <div class="project-widget-img pt-40">
            <div class="row justify-content-center">
                @php($gallery = json_decode($module->gallery))
                @foreach ($gallery as $image)
                    <div class="col-lg-6 mb-40">
                        <div class="project-img">
                            <a data-fancybox="g1" href="{{asset($image)}}"><img src="{{asset($image)}}" alt="{{$module->title}}"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
@push('links')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush