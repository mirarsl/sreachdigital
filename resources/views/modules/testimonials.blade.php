<div id="rs-testimonial" class="rs-testimonial testimonial-style1 pt-153 pb-100 md-pt-80 md-pb-50">
    <div class="container custom2">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-title mb-55 md-mb-0">
                    <span class="sub-text">{{$module->top}}</span>
                    <h2 class="title">{{$module->title}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container custom">
        <div class="slider testi-slide-1">
            @foreach ($module->data() as $testimonial)
                <div class="testi-item">
                    <div class="item-content">
                            <span>
                                <img class="normal-img" src="/assets/images/testimonial/style1/quote.png" alt="Testimonial">
                                <img class="hover-logo" src="/assets/images/testimonial/style1/quote2.png" alt="Testimonial">
                            </span>
                            <p>{{$testimonial->text}}</p>
                    </div>
                    <div class="testi-content">
                            <div class="testi-information">
                                <div class="testi-name">{{$testimonial->title}}</div>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
