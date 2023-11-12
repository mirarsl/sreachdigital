<div class="rs-faq faq-style1 faq-modify2 bg3 pt-160 pb-160 md-pt-80 md-pb-70">
    <div class="container">
     <div class="row y-middle">
             <div class="col-lg-6 md-mb-50">
                 <div class="faq-img2">
                     <img src="{{asset($module->image)}}" alt="Process">
                 </div>
             </div>
             <div class="col-lg-6 pl-100 md-pl-15 pr-30 md-pr-15">	
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
                                <div class="card-body">{{$process->text}}
                                </div>
                            </div>
                        </div>
                     @endforeach
                  </div>
              </div>
             </div>
     </div>
    </div>
</div>