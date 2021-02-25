<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('../front/assets/image/favicon.ico')}}">
    <title>@yield('title')</title>
    <!--=== ALL CSS Here ===-->
        <!--=== Bootstrap ===-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet"> 
    <!--=== Fontawesome icon ===-->
	<link rel="stylesheet" href="{{ asset('../front/assets/css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('../front/assets/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('../front/assets/css/plugin/meanmenu.css') }}">
	<!--=== slick slider ===-->
	<link rel="stylesheet" href="{{ asset('../front/assets/css/plugin/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('../front/assets/css/plugin/slick-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('../front/assets/css/plugin/meanmenu.css') }}">
	<!--=== OWL CAROUSEL ===-->
	<link rel="stylesheet" href="{{ asset('../front/assets/css/plugin/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('../front/assets/css/plugin/owl.theme.default.min.css') }}">
    <!--=== wow animation ===-->
	<link rel="stylesheet" href="{{ asset('../front/assets//css/plugin/animate.css') }}">
    <!--=== Custom CSS ===-->
	<link rel="stylesheet" href="{{ asset('../front/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('../front/assets/css/responsive.css') }}">
</head>
<body>
	<!-- LOADER AREA START -->
	<!-- <div class="loader_box">
		<div class='box1'></div>
		<div class='container'>
			<div class='box2'></div>
			<div class='box3'></div>
			<div class='box4'></div>
			<div class='box5'></div>
		</div>
	</div> -->
	<!-- LOADER AREA END -->

	<!-- HEADER AREA START-->
	<header class="sm_header_area" style="background-color:#340E74;">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
					<div class="logo">
						<a href="index.html"><img src="{{ asset('../front/assets/image/logo-1.png')}}" alt="logo"></a>
					</div>
				</div>
				<div class="col_xl_6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="top_mid_menu">
						<ul>
							<li><a href="{{ route('/') }}">Home</a></li>
							<li>
								<a href="#">Category <i class="fas fa-angle-down"></i></a>
								<ul class="sub_menu">
									<li class="item_1"><a href="smart_house.html">Smart house</a></li>
									<li class="item_2"><a href="hotel.html">Hotel</a></li>
									<li class="item_3"><a href="education.html">Education</a></li>
									<li class="item_4"><a href="int_shopping.html">Shopping</a></li>
									<li class="item_5"><a href="hospital.html">Hospital</a></li>
									<li class="item_6"><a href="restaurant.html">Restaurant</a></li>
									<li class="item_7"><a href="travel.html">Tourist place</a></li>
								</ul>
							</li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col_xl_3 col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="top_bar_right">
						<ul>
							@guest
							<li><a href="{{ route('login') }}" class="log_btn"><i class="far fa-user"></i></a></li>
							<li><a href="{{ route('register') }}" class="log_btn"><i class="fas fa-user-plus"></i></a></li>
							{{-- <li><a href="add_listing.html" class="top_btn"><i class="fas fa-plus"></i> Add list</a></li> --}}
							<li><a href="{{ route('shop.request') }}" class="top_btn"><i class="fas fa-plus"></i> Shop</a></li>

							@else
							<li><a href="{{ route('logout') }}" class="log_btn"><i class="fas fa-sign-out-alt"></i></a></li>
							@if(Auth::user()->user_type == 2)
								<li><a href="{{ route('shopadmin.dashboard') }}" class="top_btn"><i class="fas fa-plus"></i> Dashboard</a></li>
							@elseif(Auth::user()->user_type == 1)
								<li><a href="{{ route('dashboard') }}" class="top_btn"><i class="fas fa-plus"></i> Dashboard</a></li>
							@else
							@if(!Auth::user()->user_type == 1)
								<li><a href="{{ route('shop.request') }}" class="top_btn"><i class="fas fa-plus"></i> Shop</a></li>
							@endif
							@endif
							
							@endguest
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
<!-- HEADER AREA END-->

	<!-- Find AREA START -->
	<section class="sm_find_area sm_section_padding">
		
    @yield('content')
	</section>
	<!-- Find AREA END -->
	<!-- FOOTER AREA START -->
	<section class="sm_footer_area sm_section_padding" style="padding:40px 0px;">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 px-3 px-lg-3 px-md-0">
					<div class="fotter_ctn wow fadeInLeft">
						<div class="footer_logo">
							<h4><a href="#"><img src="assets/image/logo-1.png" alt="logo"></a></h4>
						</div>
						<div class="footer_links contact_link">
							<ul>
								<li><a href="#"><i class="fas fa-headset"></i> (+0214)0 315 215</a></li>
								<li><a href=""><i class="fas fa-envelope-open-text"></i> help_sylcart@gmail.com</a></li>
							</ul>
						</div>
						<div class="footer_links social_media">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="far fa-envelope"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="apps_download">
							<ul>
								<li><a href="#" class="payment_1"><img src="assets/image/footer/app-store.png" alt="apps"></a></li>
								<li><a href="#" class="payment_2"><img src="assets/image/footer/play-store-logo.png" alt="apps"></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12">
					<div class="fotter_ctn wow fadeInUp">
						<div class="footer_titel">
							<h4>Our services</h4>
						</div>
						<div class="footer_links">
							<ul>
								<li><a href="#">Smart home</a></li>
								<li><a href="#">Education</a></li>
								<li><a href="#">Hospital</a></li>
								<li><a href="#">Hotel</a></li>
								<li><a href="#">shopping</a></li>
								<li><a href="#">Restaurant</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12">
					<div class="fotter_ctn wow fadeInUp">
						<div class="footer_titel">
							<h4>useful links</h4>
						</div>
						<div class="footer_links">
							<ul>
								<li><a href="index.html">home</a></li>
								<li><a href="">blog</a></li>
								<li><a href="">F.A.Q.</a></li>
								<li><a href="#">about us</a></li>
								<li><a href="">contact us</a></li>
								<li><a href="">castomer care</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="fotter_ctn wow fadeInRight">
						<div class="footer_titel">
							<h4>News Feeds</h4>
						</div>
						<div class="footer_news">
							<div class="single-news">
								<div class="news-img">
									<a href="#"><img src="assets/image/main_home/br1.jpg" alt=""></a>
								</div>
								<div class="news-text">
									<span class="date"><i class="far fa-calendar-alt"></i>24th November 2020</span>
									<a href="#">Lorem ipsum dolor sit amet ipsum</a>
								</div>
							</div>
							<div class="single-news">
								<div class="news-img">
									<a href="#"><img src="assets/image/main_home/br1.jpg" alt=""></a>
								</div>
								<div class="news-text">
									<span class="date"><i class="far fa-calendar-alt"></i>24th November 2020</span>
									<a href="#">Lorem ipsum dolor sit amet ipsum</a>
								</div>
							</div>
							<div class="single-news mb-0">
								<div class="news-img">
									<a href="#"><img src="assets/image/main_home/br1.jpg" alt=""></a>
								</div>
								<div class="news-text">
									<span class="date"><i class="far fa-calendar-alt"></i>24th November 2020</span>
									<a href="#">Lorem ipsum dolor sit amet ipsum</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FOOTER AREA END -->

	<!--===  Copyright Area start ===-->
	<section>
	<div class="sm_copyright_area">
		<div class="container">
			<div class="copyright text-center">
				<p>&copy; Copyright Reserved. <a href="#"> 2021 Smart City.</a></p>
			</div>
		</div>
	</div>
	</section>
	<!--===  Copyright Area End ===-->
<!-- Scroll to Top button selector -->
<a class="to-top"><i class="fas fa-chevron-up"></i></a>




    <!--=== ALL JS Here ===-->
    <!--=== jQuery 3.4.1 ===-->
	<script src="{{ asset('../front/assets/js/jquery-3.4.1.min.js') }}"></script>
	<!--=== Bootstrap js ===-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--=== WOW Animation Js===-->
	<script src="{{ asset('../front/assets/js/plugin/wow.min.js') }}"></script>
	<script src="{{ asset('../front/assets/js/plugin/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('../front/assets/js/plugin/slick.js') }}"></script>
	<script src="{{ asset('../front/assets/js/plugin/jquery.carousel.js') }}"></script>
	      <!--=== Responsive Menu js===-->
	<script src="{{ asset('../front/assets/js/plugin/jquery.meanmenu.min.js') }}"></script>
    <!--=== to top  js===-->
    <script src="{{ asset('../front/assets/js/plugin/jquery.toTop.min.js') }}"></script>
	<!--=== smooth scroll js===-->
	<script src="{{ asset('../front/assets/js/plugin/smoothscroll.js') }}"></script>
		<!--=== Isotop Filtering JS===-->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="assets/js/plugin/ziehharmonika.js"></script>
    <!--=== Custom JS ===-->
    <script src="{{ asset('../front/assets/js/main.js') }}"></script>      
	<script>
		$(function () {
			$('.input_apand').on('click',function(){
				var $qty=$(this).closest('.product_quentyti').find('.qty');
				var currentVal = parseInt($qty.val());
				if (!isNaN(currentVal)) {
					$qty.val(currentVal + 1);
				}
			});
			$('.input_prepand').on('click',function(){
				var $qty=$(this).closest('.product_quentyti').find('.qty');
				var currentVal = parseInt($qty.val());
				if (!isNaN(currentVal) && currentVal > 1) {
					$qty.val(currentVal - 1);
				}
			});
		});
		</script>



</body>
</html>