<div class="rs-contact contact-style2 contact-modfiy5 pt-130 md-pt-80">
    <div class="container pb-130">
        <div class="row y-middle">
            <div class="col-lg-6 pr-135 md-pr-15 md-mb-50">
                <div class="sec-title">
                    <h2 class="title title2 pb-35">{{$module->title}}</h2>
                    <div class="desc pb-60">
                        {!! $module->text !!}
                    </div>
                </div>
                @if (!(empty($module->data()->email1)) || !(empty($module->data()->email2)))
                    <div class="address-boxs mb-30">
                        <div class="address-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="address-text">
                            <div class="text">
                                <span class="label">E-Posta:</span>
                                <span class="des">{{$module->data()->email1}}</span>
                                <span class="des">{{$module->data()->email2}}</span>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!(empty($module->data()->phone1)) || !(empty($module->data()->phone2)))
                    <div class="address-boxs mb-30">
                        <div class="address-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="address-text">
                            <div class="text">
                                <span class="label">Telefon:</span>
                                <span class="des">{{$module->data()->phone1}}</span>
                                <span class="des">{{$module->data()->phone2}}</span>
                            </div>
                        </div>
                    </div>
                @endif
                @if (!(empty($module->data()->address1)) || !(empty($module->data()->address2)))
                    <div class="address-boxs mb-30">
                        <div class="address-icon">
                            <i class="fa fa-map"></i>
                        </div>
                        <div class="address-text">
                            <div class="text">
                                <span class="label">Adres:</span>
                                <span class="des">{{$module->data()->address1}}</span>
                                <span class="des">{{$module->data()->address2}}</span>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-lg-6">
                <div class="content-wrap">
                    @include('modules.form')
                </div>
            </div>
        </div>
    </div>
    @if (!(empty($module->data()->iframe_url)))
        <div class="map-canvas pt-130 md-pt-80">
            <iframe src="{!! $module->data()->iframe_url !!}"></iframe>
        </div> 
    @endif
</div>