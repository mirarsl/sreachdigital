<!DOCTYPE html>
<html lang="tr"> 
<head>
		<base href="{{url('/')}}">
		<meta charset="utf-8">
		{!! SEO::generate() !!}
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.html">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset(setting('site.favicon'))}}">
		<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/uicons-regular-rounded.css">
		<link rel="stylesheet" type="text/css" href="/assets/fonts/flaticon.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/off-canvas.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/rsmenu-main.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/rs-spacing.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/style.css"> 
		<link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
		@stack('links')
		{!! setting('site.header_libs') !!}
	</head>
	<body class="defult-home">
		
		<div class="offwrap"></div>
	   	<div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="{{asset(setting('site.favicon'))}}" alt="{{setting('site.title')}}"></div>
                </div>
            </div>              
        </div>
			
		<div class="main-content">
			<div class="full-width-header">
				<header id="rs-header" class="rs-header header-transparent">
					<div class="menu-area menu-sticky">
						<div class="container">
							<div class="row-table">
								<div class="col-cell header-logo">                                  
								    <div class="logo-area">
								        <a href="{{route('home')}}">
								            <img class="normal-logo" src="{{asset(setting('site.logo'))}}" alt="{{setting('site.title')}}">  
								            <img class="sticky-logo" src="{{asset(setting('site.logo'))}}" alt="{{setting('site.title')}}">
								        </a>
								    </div>
								</div>
								<div class="col-cell">
									<div class="rs-menu-area">
										<div class="main-menu">
											<nav class="rs-menu hidden-md">
												<ul class="nav-menu">
													<li class="menu-item {{Route::currentRouteName() == 'home' ? 'current-menu-item':''}}"><a href="{{route('home')}}">Anasayfa</a></li>
													<li class="menu-item {{Route::currentRouteName() == 'page' ? 'current-menu-item':''}}"><a href="{{route('page','biz-kimiz')}}">Biz Kimiz</a></li>
													<li class="menu-item-has-children">
                                                        <a href="{{route('page','neler-yapiyoruz')}}">Neler Yapıyoruz?</a>
                                                        <ul class="sub-menu">
															@foreach ($sharedContent['Services'] as $service)
                                                            <li><a href="{{route('service',$service->slug)}}">{{$service->title}}</a></li>
															@endforeach
													    </ul>
                                                    </li>
													<li class="last-item menu-item"><a href="{{route('page','referanslarimiz')}}">Referanslarımız</a></li>
													<li class="last-item menu-item"><a href="{{route('page','blog')}}">Blog</a></li>
													<li><a href="{{route('page','iletisim')}}">İletişim</a></li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
								<div class="col-cell">
									<div class="expand-btn-inner">
										<ul>
                                            <li class="nav-link"> 
                                                <a id="nav-expander" class="nav-expander bar" href="#">
                                                   	<div class="bar">
                                                   		<span class="dot1"></span>
                                                   		<span class="dot2"></span>
                                                   		<span class="dot3"></span>
                                                   	</div>                                          
                                                </a> 
                                            </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<nav class="right_menu_togle menu-wrap-off  hidden-md">
					    <div class="close-btn">
					        <a id="nav-close" class="nav-close">
					            <div class="line">
					                <span class="line1"></span>
					                <span class="line2"></span>
					            </div>
					        </a>
					    </div>
					    <div class="rs-offcanvas-inner">
					        <div class="canvas-logo">
					            <a href="{{route('home')}}"><img src="{{asset(setting('site.logo'))}}" alt="logo"></a>
					        </div>
					        <div class="canvas-contact">
					            <div class="address-area">
					            	<h2 class="widget-title">İletişime Geç</h2>
					            	<div class="address-list">
					            	    <div class="info-icon">
					            	        <i class="fi fi-rr-envelope-plus"></i>
					            	    </div>
					            	    <div class="info-content">
					            	        <h4 class="title">E-Posta</h4>
					            	        @if (!(empty($sharedContent['Contact']->email1)))
					                      	<em><a href="mailto:{{$sharedContent['Contact']->email1}}">{{$sharedContent['Contact']->email1}}</a></em>
										  @endif
										  @if (!(empty($sharedContent['Contact']->email2)))
					                      	<em><a href="mailto:{{$sharedContent['Contact']->email2}}">{{$sharedContent['Contact']->email2}}</a></em>
										  @endif
					            	    </div>
					            	 </div>
					            	<div class="address-list">
					            	    <div class="info-icon">
					            	      <i class="fi fi-rr-phone-call"></i>
					            	    </div>
					            	    <div class="info-content">
					            	      <h4 class="title">Telefon</h4>
					            	      @if (!(empty($sharedContent['Contact']->phone1)))
					                      <em>{{$sharedContent['Contact']->phone1}}</em>
										  @endif
										  @if (!(empty($sharedContent['Contact']->phone2)))
					                      <em>{{$sharedContent['Contact']->phone2}}</em>
										  @endif
					            	    </div>
					            	</div>
					            </div>
					            <ul class="social">
					                @if (!(empty($sharedContent['Social']->facebook)))
										<li><a target="_blank" href="{{$sharedContent['Social']->facebook}}"><i class="fa fa-facebook"></i></a></li>                     
									@endif
									@if (!(empty($sharedContent['Social']->twitter)))
										<li><a target="_blank" href="{{$sharedContent['Social']->twitter}}"><i class="fa fa-twitter"></i></a></li>                     
									@endif
									@if (!(empty($sharedContent['Social']->instagram)))
										<li><a target="_blank" href="{{$sharedContent['Social']->instagram}}"><i class="fa fa-instagram"></i></a></li>                     
									@endif
									@if (!(empty($sharedContent['Social']->youtube)))
										<li><a target="_blank" href="{{$sharedContent['Social']->youtube}}"><i class="fa fa-youtube"></i></a></li>                     
									@endif
									@if (!(empty($sharedContent['Social']->linkedin)))
										<li><a target="_blank" href="{{$sharedContent['Social']->linkedin}}"><i class="fa fa-linkedin"></i></a></li>                     
									@endif
									@if (!(empty($sharedContent['Social']->pinterest)))
										<li><a target="_blank" href="{{$sharedContent['Social']->pinterest}}"><i class="fa fa-pinterest"></i></a></li>                     
									@endif
									@if (!(empty($sharedContent['Social']->behance)))
										<li><a target="_blank" href="{{$sharedContent['Social']->behance}}"><i class="fa fa-behance"></i></a></li>                     
									@endif
									@if (!(empty($sharedContent['Social']->medium)))
										<li><a target="_blank" href="{{$sharedContent['Social']->medium}}"><i class="fa fa-medium"></i></a></li>                     
									@endif
					            </ul>
					        </div>
					    </div>
					</nav>

					<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
					    <div class="close-btn">
					        <a id="nav-close2" class="nav-close">
					            <div class="line">
					                <span class="line1"></span>
					                <span class="line2"></span>
					            </div>
					        </a>
					    </div>
					    <ul class="nav-menu">
					    	<li class="menu-item current-menu-item"><a href="{{route('home')}}">Anasayfa</a></li>
							<li class="menu-item"><a href="{{route('page','biz-kimiz')}}">Biz Kimiz</a></li>
							<li class="menu-item-has-children">
								<a href="{{route('page','neler-yapiyoruz')}}">Neler Yapıyoruz?</a>
								<ul class="sub-menu">
									@foreach ($sharedContent['Services'] as $service)
										<li><a href="{{route('service',$service->slug)}}">{{$service->title}}</a></li>
									@endforeach
								</ul>
							</li>
							<li class="last-item menu-item"><a href="{{route('page','referanslarimiz')}}">Referanslarımız</a></li>
							<li class="last-item menu-item"><a href="{{route('page','blog')}}">Blog</a></li>
							<li><a href="{{route('page','iletisim')}}">İletişim</a></li>
					    </ul>
					    <div class="canvas-contact">
					          <div class="address-area">
					              <div class="address-list">
					                  <div class="info-icon">
					                      <i class="fi fi-rr-envelope-plus"></i>
					                  </div>
					                  <div class="info-content">
					                      <h4 class="title">E-Posta</h4>
										  @if (!(empty($sharedContent['Contact']->email1)))
					                      	<em><a href="mailto:{{$sharedContent['Contact']->email1}}">{{$sharedContent['Contact']->email1}}</a></em>
										  @endif
										  @if (!(empty($sharedContent['Contact']->email2)))
					                      	<em><a href="mailto:{{$sharedContent['Contact']->email2}}">{{$sharedContent['Contact']->email2}}</a></em>
										  @endif
					                  </div>
					              </div>
					              <div class="address-list">
					                  <div class="info-icon">
					                      <i class="fi fi-rr-phone-call"></i>
					                  </div>
					                  <div class="info-content">
					                      <h4 class="title">Telefon</h4>
										  @if (!(empty($sharedContent['Contact']->phone1)))
					                      <em>{{$sharedContent['Contact']->phone1}}</em>
										  @endif
										  @if (!(empty($sharedContent['Contact']->phone2)))
					                      <em>{{$sharedContent['Contact']->phone2}}</em>
										  @endif
					                  </div>
					              </div>
					          </div>
					    </div>
					</nav>
				</header>
			</div>

            @yield('content')

		</div> 
	 
		<footer id="rs-footer" class="rs-footer footer-main-home">
			<div class="container">
				<div class="footer-top">
					<div class="row">
						<div class="col-lg-6 pr-20 md-pr-15 md-mb-20">
							<div class="footer-logo mb-85 md-mb-65">
								<a href="{{route('home')}}"><img src="{{asset(setting('site.logo'))}}" alt="{{setting('site.title')}}"></a>
							</div>
							<ul class="address-widget">
                                <li>
                                    <div class="desc">
										@if (!(empty($sharedContent['Contact']->phone1)))
                                       		<a href="tel:{{$sharedContent['Contact']->phone1}}">{{$sharedContent['Contact']->phone1}}</a><br>
									   @endif
										@if (!(empty($sharedContent['Contact']->phone2)))
									   		<a href="tel:{{$sharedContent['Contact']	->phone2}}">{{$sharedContent['Contact']->phone2}}</a><br>
									  	@endif 
                                    </div>
                                </li>
                                <li>
                                    <div class="desc">
										@if (!(empty($sharedContent['Contact']->email1)))
                                        	<a href="mailto:{{$sharedContent['Contact']->email1}}">{{$sharedContent['Contact']->email1}}</a>
										@endif
										@if (!(empty($sharedContent['Contact']->email2)))
											<a href="mailto:{{$sharedContent['Contact']->email2}}">{{$sharedContent['Contact']->email2}}</a>
										@endif
                                    </div>
                                </li> 
                            </ul>
							<ul class="footer-social md-mb-30">  
								@if (!(empty($sharedContent['Social']->facebook)))
                                	<li><a target="_blank" href="{{$sharedContent['Social']->facebook}}"><i class="fa fa-facebook"></i></a></li>                     
								@endif
								@if (!(empty($sharedContent['Social']->twitter)))
                                	<li><a target="_blank" href="{{$sharedContent['Social']->twitter}}"><i class="fa fa-twitter"></i></a></li>                     
								@endif
								@if (!(empty($sharedContent['Social']->instagram)))
                                	<li><a target="_blank" href="{{$sharedContent['Social']->instagram}}"><i class="fa fa-instagram"></i></a></li>                     
								@endif
								@if (!(empty($sharedContent['Social']->youtube)))
                                	<li><a target="_blank" href="{{$sharedContent['Social']->youtube}}"><i class="fa fa-youtube"></i></a></li>                     
								@endif
								@if (!(empty($sharedContent['Social']->linkedin)))
                                	<li><a target="_blank" href="{{$sharedContent['Social']->linkedin}}"><i class="fa fa-linkedin"></i></a></li>                     
								@endif
								@if (!(empty($sharedContent['Social']->pinterest)))
                                	<li><a target="_blank" href="{{$sharedContent['Social']->pinterest}}"><i class="fa fa-pinterest"></i></a></li>                     
								@endif
								@if (!(empty($sharedContent['Social']->behance)))
                                	<li><a target="_blank" href="{{$sharedContent['Social']->behance}}"><i class="fa fa-behance"></i></a></li>                     
								@endif
								@if (!(empty($sharedContent['Social']->medium)))
                                	<li><a target="_blank" href="{{$sharedContent['Social']->medium}}"><i class="fa fa-medium"></i></a></li>                     
								@endif
                          	</ul>
						</div>
						<div class="col-lg-3 md-mb-10 pl-90 md-pl-15">
							<h3 class="footer-title">Neler Yapıyoruz?</h3>
							<ul class="site-map">
								@foreach ($sharedContent['Services'] as $service)
                                	<li><a href="{{route('service',$service->slug)}}">{{$service->title}}</a></li>
								@endforeach
                            </ul>
						</div>
						<div class="col-lg-3 md-mb-10 pl-80 md-pl-15">
							<h3 class="footer-title">Hızlı Erişim</h3>
							<ul class="site-map">
                                <li><a href="{{route('home')}}">Anasayfa</a></li>
                                <li><a href="{{route('page','biz-kimiz')}}">Biz Kimiz?</a></li>
                                <li><a href="{{route('page','neler-yapiyoruz')}}">Neler Yapıyoruz?</a></li>
                                <li><a href="{{route('page','referanslarimiz')}}">Referanslarımız</a></li>
                                <li><a href="{{route('page','blog')}}">Blog</a></li>
                                <li><a href="{{route('page','iletisim')}}">İletişim</a></li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
                <div class="container">                    
                    <div class="bottom-border">
                    	<div class="row y-middle">
                    	    <div class="col-lg-6">
                    	        <div class="copyright text-lg-start text-center">
                    	            <p>© 2023 {{setting('site.title')}} Agency</p>
                    	        </div>
                    	    </div>
                    	</div>
                    </div>
                </div>
            </div>
		</footer>
		<div id="scrollUp">
			<i class="fa fa-angle-up"></i>
		</div>
		<script src="/assets/js/modernizr-2.8.3.min.js"></script>
		<script src="/assets/js/jquery.min.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="/assets/js/jquery.nav.js"></script>
		<script src="/assets/js/owl.carousel.min.js"></script>
		<script src="/assets/js/isotope.pkgd.min.js"></script>
		<script src="/assets/js/wow.min.js"></script>
		<script src="/assets/js/skill.bars.jquery.js"></script>
		<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
		<script src="/assets/js/tilt.jquery.min.js"></script>
		<script src="/assets/js/slick.min.js"></script>
		<script src="/assets/js/waypoints.min.js"></script>
		<script src="/assets/js/jquery.magnific-popup.min.js"></script>
		<script src="/assets/js/jquery.counterup.min.js"></script> 
		<script src="/assets/js/contact.form.js"></script>
		<script src="/assets/js/main.js"></script>
        @stack('scripts')
	</body>
</html>