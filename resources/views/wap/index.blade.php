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
							<img src="{{ $v->cover }}"  alt="">
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
				<span class="icon_building icon zoomIn wow" data-wow-duration="0.7s"></span>
				<div class="number animate-number h2" data-value="{{ $count["project"] }}"></div>
				<h4 class="title bounceInUp wow" data-wow-duration="0.7s">项目量</h4>
			</div>
			<!-- /Statistic Block -->

			<!-- Statistic Block -->
			<div class="col-sm-3 col-xs-6 stat">
				<span class="icon_gift_alt icon zoomIn wow" data-wow-duration="0.7s"></span>
				<div class="number animate-number h2" data-value="{{ $count["goods"] }}"></div>
				<h4 class="title bounceInUp wow" data-wow-duration="0.7s">产品量</h4>
			</div>
			<!-- /Statistic Block -->

			<!-- Statistic Block -->
			<div class="col-sm-3 col-xs-6 stat">
				<span class="icon_pens icon zoomIn wow" data-wow-duration="0.7s"></span>
				<div class="number animate-number h2">7X24小时</div>
				<h4 class="title bounceInUp wow" data-wow-duration="0.7s">服务时间</h4>
			</div>
			<!-- /Statistic Block -->

			<!-- Statistic Block -->
			<div class="col-sm-3 col-xs-6 stat">
				<span class="icon_pencil-edit icon zoomIn wow" data-wow-duration="0.7s"></span>
				<div class="number animate-number h2">全年365天</div>
				<h4 class="title bounceInUp wow" data-wow-duration="0.7s">工作时间</h4>
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

					@foreach($goods as $k=>$v)
						<!-- Testimonial -->
						<div class="testimonial">

							<div class="content">
								<div class="media">
									<div class="media-left">
										<img src="{{ $v->cover }}" style="width: 100px;height: 100px" alt="">
									</div>
									<div class="media-body media-middle">
										<p class="text">
											{{ $v->brief }}
										</p>
									</div>
								</div>
							</div>

							<div class="info">
								<h4 class="author">{{ $v->name }}</h4>
								<span class="company">￥{{ $v->price }} / {{ $v->uint }}</span>
							</div>

						</div>
						<!-- /Testimonial -->
					@endforeach
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
					<h2 class="section-title">提交 <span class="text-theme">预约</span></h2>
					<p class="section-subtitle">请填写下列表单提交</p>
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
							<input type="text" name="name" maxlength="20" class="form-control" placeholder="称呼... *" required>
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="mobile" maxlength="11" class="form-control" placeholder="手机号... *" required>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-12">
							<input name="message" maxlength="100" class="form-control" placeholder="联系地址... *" required/>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-12 text-center">
							<button type="submit" class="btn btn-theme"><i class="fa fa-fw fa-paper-plane-o"></i> 提交</button>
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
