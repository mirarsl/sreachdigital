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