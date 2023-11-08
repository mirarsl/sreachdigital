<div class="rs-about about-style1 pt-150 pb-150 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="sec-title">
                    <span class="sub-text primary-color">{{$module->top}}</span>
                    <h2 class="title pb-35">{{$module->title}}</h2>
                    <div class="desc pb-60 md-pb-40">
                        {!! $module->text !!}
                    </div>
                    <div class="rs-counter counter-style1 counter-modify4">
                        <div class="row">
                            @foreach ($module->data() as $counter)
                            <div class="col-lg-4 md-mb-30">
                                <div class="rs-counter-list"> 
                                    <div class="count-text">
                                        <div class="count-number">
                                            <span class="rs-count">{{$counter->count}}</span>
                                            <span class="prefix">{{$counter->addtional}}</span>
                                        </div>
                                        <span class="title">{{$counter->title}}</span>	
                                    </div>
                                    <div class="separator-dot"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img2">
                    <img src="{{asset($module->image)}}" alt="{{$module->title}}">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rs-services services-style5 black-bg2 pt-125 pb-130 md-pt-75 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-50 md-mb-35">
            <span class="sub-text">
                Services
            </span>
            <h2 class="title white-color">
                Services we can Offer
            </h2>
        </div>
        <div class="row y-middle">
            <div class="col-xl-3 col-md-6 xl-mb-30">
                <div class="services-item">
                    <div class="services-wrap">
                        <div class="services-img">
                            <img src="assets/images/services/style3/ser1.png" alt="Images">
                        </div>
                        <div class="services-content">
                            <h2 class="title">Design Process</h2>
                            <p class="services-txt">Mauris commodo quis the imperdiet tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-mb-30">
                <div class="services-item">
                    <div class="services-wrap">
                        <div class="services-img">
                            <img src="assets/images/services/style3/ser2.png" alt="Images">
                        </div>
                        <div class="services-content">
                            <h2 class="title">Portotyping</h2>
                            <p class="services-txt">Mauris commodo quis the imperdiet tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 sm-mb-30">
                <div class="services-item">
                    <div class="services-wrap">
                        <div class="services-img">
                            <img src="assets/images/services/style3/ser3.png" alt="Images">
                        </div>
                        <div class="services-content">
                            <h2 class="title">Quality Control</h2>
                            <p class="services-txt">Mauris commodo quis the imperdiet tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="services-item">
                    <div class="services-wrap">
                        <div class="services-img">
                            <img src="assets/images/services/style3/ser4.png" alt="Images">
                        </div>
                        <div class="services-content">
                            <h2 class="title">Test & launch</h2>
                            <p class="services-txt">Mauris commodo quis the imperdiet tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section End -->


<!-- Faq Section Start -->
<div class="rs-faq faq-style1 faq-modify2 bg3 pt-160 pb-160 md-pt-80 md-pb-70">
      <div class="container">
       <div class="row y-middle">
               <div class="col-lg-6 md-mb-50">
                   <div class="faq-img2">
                       <img src="assets/images/faq/img2.png" alt="">
                   </div>
               </div>
               <div class="col-lg-6 pl-100 md-pl-15 pr-30 md-pr-15">	
                   <div class="sec-title mb-55">
                       <span class="sub-text primary-color">
                           Work Process
                       </span>
                       <h2 class="title">
                           Strategy led design in<br> 
                           every details
                       </h2>
                   </div>		   			
                <div class="faq-content">
                    <div id="accordion" class="accordion">
                       <div class="card">
                           <div class="card-header">
                               <a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">Analysis & Idea</a>
                           </div>
                           <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                               <div class="card-body">
                                   Sit amet mauris commodo quis imperdiet massa tincidunt. Ut
                                   enim blandit volutpat maecenas.
                               </div>
                           </div>
                       </div>
                       <div class="card">
                           <div class="card-header">
                               <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">Wireframs, Mockup & Phototype</a>
                           </div>
                           <div id="collapseTwo" class="collapse" data-bs-parent="#accordion" style="">
                               <div class="card-body">
                                   Sit amet mauris commodo quis imperdiet massa tincidunt. Ut
                                   enim blandit volutpat maecenas.
                               </div>
                           </div>
                       </div>
                       <div class="card">
                           <div class="card-header">
                               <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">Development</a>
                           </div>
                           <div id="collapseThree" class="collapse" data-bs-parent="#accordion" style="">
                               <div class="card-body">
                                   Sit amet mauris commodo quis imperdiet massa tincidunt. Ut
                                       enim blandit volutpat maecenas.
                               </div>
                           </div>
                       </div>
                       <div class="card">
                           <div class="card-header">
                               <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false">Testing & Lunuch</a>
                           </div>
                           <div id="collapseFour" class="collapse" data-bs-parent="#accordion" style="">
                               <div class="card-body">
                                   Sit amet mauris commodo quis imperdiet massa tincidunt. Ut
                                   enim blandit volutpat maecenas.
                               </div>
                           </div>
                       </div> 
                    </div>
                </div>
               </div>
       </div>
      </div>
</div>
<!-- Faq Section End -->

<!-- Cta Start -->
<div class="rs-cta cta-style1  blue-bg pt-145 pb-145">
    <div class="container">
           <div class="sec-title text-center">
               <h2 class="title title3 white-color pb-45">
                   Create stunning Design<br> 
                   services with Swipy
               </h2>
               <div class="btn-part">
                   <a class="readon orange contact" href="contact.html">Contact Us</a>
               </div>
           </div>
    </div>
    <div class="cta-animation">
        <div class="animate-style one">
            <img class="scale" src="assets/images/cta/shape1.png" alt="">
        </div>
        <div class="animate-style two">
            <img class="scale" src="assets/images/cta/shape2.png" alt="">
        </div>
        <div class="animate-style three">
            <img class="horizontal" src="assets/images/cta/shape3.png" alt="">
        </div>
        <div class="animate-style four">
            <img class="spine" src="assets/images/cta/shape4.png" alt="">
        </div>
    </div>
</div>