<div class="rs-contact contact-style1">
    <div class="container custom">
        <div class="row">
            <div class="col-lg-6 model-img"></div>
            <div class="col-lg-6">
                <div class="contact-wrap">
                    <div class="sec-title mb-70 md-mb-50">
                        <span class="sub-text">{{$module->top}}</span>
                        <h2 class="title pb-20">{{$module->title}}</h2>
                        <p class="desc desc2">{!! $module->text !!}</p>
                    </div>
                    <div id="form-messages"></div>
                    @include('modules.form')
                    <div class="address-widget">
                        <div class="address-wrap">
                            <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="content-txt">
                                <span class="des">{{ $module->data()->phone1 }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-animate">
        <div class="animation one">
            <img class="rotated-style" src="/assets/images/contact/animate-img/slide-img1.png" alt="Images">
        </div>
        <div class="animation two">
            <img class="rotated-style" src="/assets/images/contact/animate-img/asset-1.png" alt="Images">
        </div>
        <div class="animation three">
            <img class="rotated-style" src="/assets/images/contact/animate-img/asset-2.png" alt="Images">
        </div>
        <div class="animation four">
            <img class="rotated-style" src="/assets/images/contact/animate-img/slide-img2.png" alt="Images">
        </div>
    </div>
</div>