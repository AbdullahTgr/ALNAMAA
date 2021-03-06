@php
                                $settings=DB::table('settings')->get();
                                
                            @endphp

	<!-- Map Section -->
	<div class="map-section">
		<div id="myMap">
			{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1189.4921157314338!2d30.905724929250294!3d29.948752460899954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458558555082e97%3A0x593b829e1803c6db!2z2YbZhdin2KEg2YTZhdin2YPZitmG2KfYqiDYp9mE2KrYudio2KbYqSDZiNin2YTYqti62YTZitmB!5e1!3m2!1sen!2seg!4v1648066432401!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1189.4921157314338!2d30.905724929250294!3d29.948752460899954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458558555082e97%3A0x593b829e1803c6db!2z2YbZhdin2KEg2YTZhdin2YPZitmG2KfYqiDYp9mE2KrYudio2KbYqSDZiNin2YTYqti62YTZitmB!5e1!3m2!1sen!2seg!4v1648066432401!5m2!1sen!2seg" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
	<!--/ End Map Section -->							
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="/"><img src="@foreach($settings as $data) {{ $data->logo }} @endforeach" alt="logo"></a>
							</div>
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<p class="text">@foreach($settings as $data) {!! $data->short_des !!} @endforeach</p>
							<p class="call">{{ Lang::get('msg.gotquestioncallus') }}<span><a href="tel:+20 155 216 8878">@foreach($settings as $data) {{$data->phone}} @endforeach</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>{{ Lang::get('msg.info') }}</h4>
							<ul>
								<li><a href="{{route('about-us')}}">{{ Lang::get('msg.aboutus') }}</a></li>
								<li><a href="#">{{ Lang::get('msg.faq') }}</a></li>
								<li><a href="#">{{ Lang::get('msg.terms') }}</a></li>
								<li><a href="{{route('contact')}}">{{ Lang::get('msg.contactus') }}</a></li>
								<li><a href="#">{{ Lang::get('msg.help') }}</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>{{ Lang::get('msg.custservice') }}</h4>
							<ul>
								<li><a href="#">{{ Lang::get('msg.paymentmethod') }} </a></li>
								<li><a href="#">{{ Lang::get('msg.moneyback') }} </a></li>
								<li><a href="#">{{ Lang::get('msg.returns') }} </a></li>
								<li><a href="#">{{ Lang::get('msg.shipping') }} </a></li>
								<li><a href="#">{{ Lang::get('msg.privacypolicy') }} </a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>{{ Lang::get('msg.getintouch') }}</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>@foreach($settings as $data) {!! $data->address !!} @endforeach</li>
									<li>@foreach($settings as $data) {!! $data->email !!} @endforeach</li>
									<li>@foreach($settings as $data) {!! $data->phone !!} @endforeach</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<div class="sharethis-inline-follow-buttons"></div>
							<div class="sharethis-inline-share-buttons"></div>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>{{ Lang::get('msg.copyright') }}{{date('Y')}} <a href="https://www.facebook.com/companynama" target="_blank">{{ Lang::get('msg.abdullahmostafa') }}</a>  -  {{ Lang::get('msg.allrightreserved') }}</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="{{asset('backend/img/payments.png')}}" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('frontend/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('frontend/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('frontend/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('frontend/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
	{{-- Isotope --}}
	<script src="{{asset('frontend/js/isotope/isotope.pkgd.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('frontend/js/easing.js')}}"></script>

	<!-- Active JS -->
	<script src="{{asset('frontend/js/active.js')}}"></script>

	
	@stack('scripts')
	<script>
		setTimeout(function(){
		  $('.alert').slideUp();
		},5000);
		$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
				event.preventDefault();
				event.stopPropagation();

				$(this).siblings().toggleClass("show");


				if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				}
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
				});

			});
		});
	  </script>