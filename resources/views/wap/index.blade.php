@include('wap.common.header')
@include('wap.common.menu')

<!-- Slider -->
<div class="slider owl-carousel owl-theme">

@foreach($banner as $v)

	<!-- Slide -->
		<div class="item mask" style="background: url({{ $v->url }}) no-repeat center top / cover;" data-stellar-background-ratio="0.4">

			<div class="container height-100p">
				<div class="row height-100p">

					<div class="col-sm-6 col-md-6 height-100p bounceInLeft wow" data-wow-duration="1.3s" data-wow-delay="0.3s" data-stellar-ratio="0.7">
						<div class="vertical-middle">
							<h1 class="text-white">{{ mb_substr($v->title, 0, 4) }} <span class="text-theme">{{ mb_substr($v->title, 4) }}</span></h1>
							<div class="text-white h4">
								{{ $v->describe }}
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 col-md-offset-2 height-100p bounceInRight wow" data-wow-duration="1.3s" data-stellar-ratio="0.8">
						<div class="vertical-middle">
							<img src="{{ $v->small_url }}" class="img-responsive" alt="">
						</div>
					</div>

				</div>
			</div>

		</div>
		<!-- /Slide -->
@endforeach

</div>
<!-- /Slider -->

<!-- Main -->
<main class="main-container">

<!-- Section: About -->
<section id="about" class="section">
	<div class="container">

		<!-- Section Header -->
		<div class="row" style="display: none">
			<div class="col-md-6 col-md-offset-3">
				<header class="text-center">
					<h2 class="section-title">About <span class="text-theme">Us</span></h2>
					<p class="section-subtitle">It is a long established fact that a reader</p>
				</header>
			</div>
		</div>
		<!-- /Section Header -->

		<div class="row">

			@foreach($service as $k => $v)
				<!-- Feature Block -->
					<div class="col-sm-4 feature fadeIn wow" data-wow-duration="1.3s" data-wow-delay="{{ $k * 0.4 }}s">
						<span class="{{ $v["icon"] }} icon"></span>
						<div class="h3 title">{{ $v["value"] }}</div>
						<p class="description">
							{{ $v["describe"] }}
						</p>
						{{--								<a href="#" class="btn btn-theme">Read more</a>--}}
					</div>
					<!-- /Feature Block -->
			@endforeach

		</div>
	</div>
</section>
<!-- /Section: About -->

<!-- Section: Projects -->
<section id="projects" class="section-small bg-light-gray">
	<div class="container">

		<!-- Section Header -->
		<div class="row">

			<div class="col-md-6">
				<header>
					<h2 class="section-title"><span class="text-theme">最新</span> 项目</h2>
{{--					<p class="section-subtitle">It is a long established fact that a reader</p>--}}
				</header>
			</div>

			<div class="col-md-6">

			</div>

		</div>
		<!-- /Section Header -->

		<!-- Section Content -->
		<div class="row mt">
			@foreach($project as $k => $v)

				<div class="col-md-4 col-sm-6 fadeIn wow" data-wow-duration="1.3s" data-wow-delay="{{ $k * 0.2 }}s">
					<a href="{{ $v->cover }}" class="project-item image-popup">
						<div class="gallery-image">
							<img src="{{ $v->cover }}" alt="">
						</div>
						<div class="info">
							<div class="h4 title">{{ $v->title }}</div>
							<p class="description"># {{ $v->address }}</p>
							<div class="social">
								{{ $v->client }}
							</div>
						</div>
					</a>
				</div>

			@endforeach


		</div>
		<!-- /Section content -->

	</div>
</section>
<!-- /Section: Projects -->

<!-- Section: More Features -->
<section id="more-features" class="section">
	<div class="container">

		<!-- Section Header -->
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<header class="text-center">
					<h2 class="section-title">产品 <span class="text-theme">特色</span></h2>
{{--					<p class="section-subtitle">It is a long established fact that a reader</p>--}}
				</header>
			</div>
		</div>
		<!-- /Section Header -->

		<!-- Section Content -->
		<div class="row section-content zoomIn wow">

			@foreach($features as $k => $v)
				<!-- Feature Block -->
				<div class="col-md-6 col-sm-6 more-feature">
					<div class="media">
						<div class="media-left">
							<span class="{{ $v["icon"] }} icon"></span>
						</div>
						<div class="media-body">
							<h3 class="title">{{ $v["value"] }}</h3>
							<p class="description">
								{{ $v["describe"] }}
							</p>
						</div>
					</div>
				</div>
				<!-- /Feature Block -->
			@endforeach

		</div>
		<!-- /Section Content -->

	</div>
</section>
<!-- /Section: More Features -->

<!-- Section: Statistics -->
<section id="statistics" class="section bg-tuna">
	<div class="container">

		<div class="row">

			<!-- Statistic Block -->
			<div class="col-sm-3 col-xs-6 stat">
				<span class="icon_pens icon zoomIn wow" data-wow-duration="0.7s"></span>
				<div class="number animate-number h2" data-value="180"></div>
				<h4 class="title bounceInUp wow" data-wow-duration="0.7s">Finished Projects</h4>
			</div>
			<!-- /Statistic Block -->

			<!-- Statistic Block -->
			<div class="col-sm-3 col-xs-6 stat">
				<span class="icon_group icon zoomIn wow" data-wow-duration="0.7s"></span>
				<div class="number animate-number h2" data-value="1806"></div>
				<h4 class="title bounceInUp wow" data-wow-duration="0.7s">Happy Customers</h4>
			</div>
			<!-- /Statistic Block -->

			<!-- Statistic Block -->
			<div class="col-sm-3 col-xs-6 stat">
				<span class="icon_mug icon zoomIn wow" data-wow-duration="0.7s"></span>
				<div class="number animate-number h2" data-value="238"></div>
				<h4 class="title bounceInUp wow" data-wow-duration="0.7s">Coffee</h4>
			</div>
			<!-- /Statistic Block -->

			<!-- Statistic Block -->
			<div class="col-sm-3 col-xs-6 stat">
				<span class="icon_building icon zoomIn wow" data-wow-duration="0.7s"></span>
				<div class="number animate-number h2" data-value="3485"></div>
				<h4 class="title bounceInUp wow" data-wow-duration="0.7s">Days at Work</h4>
			</div>
			<!-- /Statistic Block -->

		</div>

	</div>
</section>
<!-- /Section: Statistics -->

<!-- Section: Best Features -->
<section id="beast-features" class="section">
	<div class="container">

		<!-- Section Header -->
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<header class="text-center">
					<h2 class="section-title">产品 <span class="text-theme">品质</span></h2>
{{--					<p class="section-subtitle">It is a long established fact that a reader</p>--}}
				</header>
			</div>
		</div>
		<!-- /Section Header -->

		<!-- Section Content -->
		<div class="row section-content">


			<div class="col-md-6">

				<h3>品质优异</h3>

				<ul class="list">
					@foreach($quality as $k => $v)
						<li>
							<h4 class="title bounceInUp wow" data-wow-duration="1.3s" data-wow-delay="{{ ($k + 1) * 0.2 }}s">{{ $v["value"] }}</h4>
							<p class="description fadeIn wow" data-wow-duration="1.3s" data-wow-delay="{{ ($k + 1) * 0.2 }}s">
								{{ $v["describe"] }}
							</p>
						</li>
					@endforeach
				</ul>

			</div>

			<!-- Section Image -->
			<div class="col-md-6 hidden-sm hidden-xs bounceInRight wow" data-wow-duration="1.3s">
				<img src="{{ asset('static/wap/images/devices.png') }}" class="img-responsive" alt="">
			</div>
			<!-- /Section Image -->

		</div>
		<!-- /Section Content -->

	</div>
</section>
<!-- /Section: Best Features -->

<!-- Section: Testimonials -->
<section id="testimonials" class="section-small bg-light-gray">
	<div class="container">

		<!-- Section Header -->
		<div class="row">

			<div class="col-md-6">
				<header>
					<h2 class="section-title">优质 <span class="text-theme">商品</span></h2>
					<p class="section-subtitle">我们将为您提供最好的商品</p>
				</header>
			</div>

		</div>
		<!-- /Section Header -->

		<!-- Section Content -->
		<div class="row mt">
			<div class="col-md-12 zoomIn wow">

				<!-- Testimonials Carousel -->
				<div id="testimonials-carousel" class="testimonials-carousel owl-carousel owl-theme">

					<!-- Testimonial -->
					<div class="testimonial">

						<div class="content">
							<div class="media">
								<div class="media-left">
									<img src="{{ asset('static/wap/images/author-image-01.jpg') }}" alt="">
								</div>
								<div class="media-body media-middle">
									<p class="text">
										It is a long established fact that a reader will be distracted by the readable content
										of a page when looking at its layout.
									</p>
								</div>
							</div>
						</div>

						<div class="info">
							<h4 class="author">Jeremy Scott</h4>
							<span class="company">Company Name</span>
						</div>

					</div>
					<!-- /Testimonial -->

					<!-- Testimonial -->
					<div class="testimonial">

						<div class="content">
							<div class="media">
								<div class="media-left">
									<img src="{{ asset('static/wap/images/author-image-02.jpg') }}" alt="">
								</div>
								<div class="media-body media-middle">
									<p class="text">
										It is a long established fact that a reader will be distracted by the readable content
										of a page when looking at its layout.
									</p>
								</div>
							</div>
						</div>

						<div class="info">
							<h4 class="author">Ann Harper</h4>
							<span class="company">Company Name</span>
						</div>

					</div>
					<!-- /Testimonial -->

					<!-- Testimonial -->
					<div class="testimonial">

						<div class="content">
							<div class="media">
								<div class="media-left">
									<img src="{{ asset('static/wap/images/author-image-03.jpg') }}" alt="">
								</div>
								<div class="media-body media-middle">
									<p class="text">
										It is a long established fact that a reader will be distracted by the readable content
										of a page when looking at its layout.
									</p>
								</div>
							</div>
						</div>

						<div class="info">
							<h4 class="author">William Bell</h4>
							<span class="company">Company Name</span>
						</div>

					</div>
					<!-- /Testimonial -->

					<!-- Testimonial -->
					<div class="testimonial">

						<div class="content">
							<div class="media">
								<div class="media-left">
									<img src="{{ asset('static/wap/images/author-image-04.jpg') }}" alt="">
								</div>
								<div class="media-body media-middle">
									<p class="text">
										It is a long established fact that a reader will be distracted by the readable content
										of a page when looking at its layout.
									</p>
								</div>
							</div>
						</div>

						<div class="info">
							<h4 class="author">Gerald Payne</h4>
							<span class="company">Company Name</span>
						</div>

					</div>
					<!-- /Testimonial -->

				</div>
				<!-- /Testimonials Carousel -->

			</div>
		</div>
		<!-- /Section Content -->

	</div>
</section>
<!-- /Section: Testimonials -->

<!-- Section: Contact -->
<section id="contact" class="section">
	<div class="container">

		<!-- Section Header -->
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<header class="text-center">
					<h2 class="section-title">Want to say <span class="text-theme">Hello?</span></h2>
					<p class="section-subtitle">It is a long established fact that a reader</p>
				</header>
			</div>
		</div>
		<!-- /Section Header -->

		<!-- Section Content -->
		<div class="row section-content">

			<!-- Contact Form -->
			<div class="col-md-8 col-md-offset-2 contact-form fadeIn wow">
				<form class="form-ajax" method="post">

					<input type="hidden" name="form" value="Contact">

					<div class="row">
						<div class="form-group col-md-6">
							<input type="text" name="name" class="form-control" placeholder="Your Name... *" required>
						</div>
						<div class="form-group col-md-6">
							<input type="email" name="email" class="form-control" placeholder="E-mail address... *" required>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-12">
							<textarea name="message" class="form-control" placeholder="Message... "></textarea>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-12 text-center">
							<button type="submit" class="btn btn-theme"><i class="fa fa-fw fa-paper-plane-o"></i> Send Message</button>
						</div>
					</div>

				</form>
			</div>
			<!-- /Contact Form -->


		</div>
		<!-- /Section Content -->

	</div>
</section>
<!-- /Section: Contact -->

</main>
<!-- /Main -->


@include('wap.common.bottom')
@include('wap.common.footer')
