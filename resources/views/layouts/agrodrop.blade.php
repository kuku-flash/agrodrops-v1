<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{ asset('images/LOGO1.png') }}">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{ asset('css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{ asset('css/style.css')}}" rel="stylesheet">
		<title>Ago Drops</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img class="img-wrap" src="{{ asset('images/LOGO1.png') }}">
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					    <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}">
                          <a class="nav-link" href="{{ route('index')}}">Home</a>
                        </li>
						<li class="nav-item {{ request()->routeIs('ourProducts') ? 'active' : '' }}">
                          <a class="nav-link" href="{{ route('ourProducts')}}">Our Products</a>
                        </li>
						<li class="nav-item {{ request()->routeIs('accessories') ? 'active' : '' }}">
                          <a class="nav-link" href="{{ route('accessories')}}">Accessories</a>
                        </li>						
						<li class="nav-item {{ request()->routeIs('aboutus') ? 'active' : '' }}">
							<a class="nav-link" href="{{ route('aboutus')}}">About Us</a>
						</li>
						<li class="nav-item {{ request()->routeIs('featured') ? 'active' : '' }}">
							<a class="nav-link" href="{{ route('featured')}}">Featured</a>
						</li>
						<li><a class="nav-link" href="#">Our Team</a></li>
						<li><a class="nav-link" href="#">Our Clients</a></li>
						<li><a class="nav-link" href="#">Contact Us</a></li>
						<li><a class="nav-link" href="#">FAQs</a></li>

					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-3">
						<div class="form-group row">
							
							  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="search">
							
						  </div>
						
					</ul>
				</div>
			</div>
				
		</nav>
        @yield('content')

		<!-- Start Footer Section -->
		<footer class="footer-section" style="background: black; padding-top: 30px; padding-bottom: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6" style="padding-left: 0; padding-right: 0; border-right: 1px solid white; margin-top: 30px;">
                <img class="img-wrp" src="images/LOGO1.png" style="width: 100%;">
            </div>
            <div class="col-md-2 col-sm-6"style="padding-right: 0; border-right: 1px solid white;">
			<ul class="list-unstyled" style="margin-top: 30px; margin-left: 55px; font-size: 10px;">
									<li><a href="#">HOME</a></li>
									<li><a href="#">OUR PRODUCTS</a></li>
									<li><a href="#">ACCESSORIES</a></li>
									<li><a href="#">ABOUT US</a></li>
									<li><a href="#">FEATURED</a></li>
									<li><a href="#">OUR TEAM</a></li>
									<li><a href="#">CONTACT US</a></li>
									<li><a href="#">FAQs</a></li>
			</ul>
            </div>
            <div class="col-md-3 col-sm-6"style="padding-right: 0; border-right: 1px solid white;">
			<ul class="list-unstyled" style="margin-top: 30px; margin-bottom: 30px;">
									<li style="margin-bottom: 30px; padding-left: 40px; background: url('images/footer/icons8-phone-50.png') no-repeat left center; background-size: 25px 25px;"><a href="#">0798619404 <br> 0710543839</a></li>
									<li style="margin-bottom: 30px; padding-left: 40px; background: url('images/footer/icons8-location-50.png') no-repeat left center; background-size: 25px 25px;"><a href="#">JosHannah plaza, Magadi  Road, Ongata Rongai</a></li>
									<li style="margin-bottom: 30px; padding-left: 40px; background: url('images/footer/icons8-mail-96.png') no-repeat left center; background-size: 25px 25px;"><a href="#">agodrops.comp@gmail.com</a></li>
			</ul>								
            </div>
            <div class="col-md-2 col-sm-6">
			<ul class="list-unstyled" style="margin-top: 30px; margin-bottom: 30px;">
									<li style="margin-bottom: 30px; padding-left: 40px; background: url('images/footer/icons8-verified-64.png') no-repeat left center; background-size: 25px 25px;"><a href="#">Premium water filtration</a></li>
									<li style="margin-bottom: 30px; padding-left: 40px; background: url('images/footer/icons8-vegetarian-mark-50.png') no-repeat left center; background-size: 25px 25px;"><a href="#">Eco - friendly initiatives</a></li>
									<li style="margin-bottom: 30px; padding-left: 40px; background: url('images/footer/icons8-packaging-64.png') no-repeat left center; background-size: 25px 25px;"><a href="#">Packaging</a></li>
									<li style="margin-bottom: 30px; padding-left: 40px; background: url('images/footer/icons8-fast-delivery-48.png') no-repeat left center; background-size: 25px 25px;"><a href="#">Product delivery</a></li>
								</ul>
            </div>
			<div class="col-md-2 col-sm-6">
			<ul class="list-unstyled" style="margin-top: 30px; margin-bottom: 30px;">
									<li style="margin-bottom: 30px; padding-left: 40px; background: url('images/footer/icons8-plastic-bottle-50.png') no-repeat left center; background-size: 25px 25px;"><a href="#">Bottle customization</a></li>
									<li style="margin-bottom: 30px; padding-left: 40px; background: url('images/footer/icons8-customer-service-50.png') no-repeat left center; background-size: 25px 25px;"><a href="#">Customer service</a></li>
								</ul>
            </div>
			<div class="col-md-1 col-sm-6"style="padding-left: 15px; border-left: 1px solid white; margin-top: 30px;">
                <p style="color:white;">Follow us:</p>
                <div style="display: inline-block;">
                    <a href="#"><img src="images/footer/fb.png" style="width: 60px; height: 60px;" alt="Facebook"></a>
                    <a href="#"><img src="images/footer/ig.png" style="width: 60px; height: 60px;" alt="Instagram"></a>
                </div>
            </div>
        </div>
    </div>
</footer>




		<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{ asset('js/tiny-slider.js')}}"></script>
		<script src="{{ asset('js/custom.js')}}"></script>
	</body>

</html>
