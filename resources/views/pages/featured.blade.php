@extends('layouts.agrodrop')
@section('content')
<body>

<!-- Start Hero Section -->
<div class="hero" style="background-image: url('{{ asset('images/FEATURED/featured.png')}}');">
    <div class="container" style="color:white;">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt" style="font-size: 46px;">
                    <h1>FEATURED</h1>
                </div>
            </div>
        </div>
    </div>
</div>

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section ">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mx-auto text-left">
						<h2 class="section-title">Events</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
                                <a class="product-item" href="#" style="padding: 10px;">
                                    <img src="images/FEATURED/event1.png" class="img-fluid product-thumbnail">
                                </a>

                                <a class="product-item" href="#" style="padding: 10px;">
                                    <img src="images/FEATURED/event2.png" class="img-fluid product-thumbnail">
                                </a>

                                <a class="product-item" href="#" style="padding: 10px;">
                                    <img src="images/FEATURED/event3.png" class="img-fluid product-thumbnail">
                                </a>
                                <a class="product-item" href="#" style="padding: 10px;">
                                    <img src="images/FEATURED/event1.png" class="img-fluid product-thumbnail">
                                </a>
                                <a class="product-item" href="#" style="padding: 10px;">
                                    <img src="images/FEATURED/event2.png" class="img-fluid product-thumbnail">
                                </a>
						
						
								<!-- END item -->

								<!-- END item -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

        <div class="testimonial-section ">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mx-auto text-left">
						<h2 class="section-title">Seminar</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
                                <a class="product-item" href="#" style="padding: 10px;">
                                    <img src="images/FEATURED/seminar1.png" class="img-fluid product-thumbnail">
                                </a>

                             

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		

        <div class="testimonial-section ">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mx-auto text-left">
						<h2 class="section-title">Sports</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
                                <a class="product-item" href="#" style="padding: 10px;">
                                    <img src="images/FEATURED/sport1.png" class="img-fluid product-thumbnail">
                                </a>

                                <a class="product-item" href="#" style="padding: 10px;">
                                    <img src="images/FEATURED/sport2.png" class="img-fluid product-thumbnail">
                                </a>

                             
						
								<!-- END item -->

								<!-- END item -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>


        
@endsection