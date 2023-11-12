<div class="rs-faq faq-style1 bg3 pt-153 pb-160 md-pt-75 md-pb-80">
    <div class="container">
       <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">	
                <div class="sec-title mb-55">
                    <span class="sub-text primary-color">{{$module->top}}</span>
                    <h2 class="title">{{$module->title}}</h2>
                </div>		   			
            <div class="faq-content">
                <div id="accordion" class="accordion">
                    @foreach ($module->data()->sortBy('ordering') as $process)
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link {{$loop->index != 0 ? 'collapsed':''}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapse-{{$process->id}}" aria-expanded="true">{{$process->title}}</a>
                            </div>
                            <div id="collapse-{{$process->id}}" class="collapse {{$loop->index == 0 ? 'show':''}}" data-bs-parent="#accordion">
                                <div class="card-body">{{$process->text}}</div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-img">
                    <img src="{{asset($module->image)}}" alt="Process">
                </div>
            </div>
       </div>
    </div>
    <div class="faq-animation">
        <div class="animate one">
            <img src="assets/images/process/style1/dot1.png" alt="About">
        </div>
        <div class="animate two">
            <img src="assets/images/process/style1/dot2.png" alt="About">
        </div>
        <div class="animate three">
            <img src="assets/images/process/style1/dot3.png" alt="About">
        </div>
        <div class="animate four">
            <img src="assets/images/process/style1/dot4.png" alt="About">
        </div>
    </div>
</div>