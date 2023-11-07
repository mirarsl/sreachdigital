<div class="rs-partner partner-main-home pt-20">
    <div class="container custom">               
       <div class="slider partner-slide-1">
            @php($gallery = json_decode($module->data()->gallery))
            @foreach ($gallery as $image)
                <div class="partner-item">
                    <div class="logo-img">
                        <img class="hovers-logos rs-grid-img" src="{{asset($image)}}" alt="Logo">
                    </div>
                </div>
            @endforeach
            </div>
       </div>
    </div>
</div>