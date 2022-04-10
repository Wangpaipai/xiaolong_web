@include('wap.common.header')
@include('wap.common.menu')

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
                <h1 class="title">关于我们</h1>
                <div class="subtitle">这里是关于我们的一个简介 </div>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="{{ route('wap.index') }}">首页</a></li>
                    <li>{{ $siteName }}</li>
                </ul>
            </div>
            <!-- /Breadcrumbs -->

        </div>
    </div>
</section>
<!-- /Section: Page Header -->

<!-- Main -->
<main class="main-container">
    <div class="container">

        <div class="row">

            <!-- Our History -->
            <div class="col-md-12">

                <h3 class="title">关于我们</h3>
                {!! htmlspecialchars_decode($about->value) !!}

            </div>
            <!-- Our History -->

        </div>

        <!-- Our Team -->
{{--        <div class="row">--}}
{{--            <div class="our-team">--}}

{{--                <div class="col-md-12">--}}
{{--                    <h3 class="title">Our Team</h3>--}}
{{--                </div>--}}

{{--                <!-- Team Member -->--}}
{{--                <div class="col-md-3 team-member">--}}
{{--                    <div class="image">--}}
{{--                        <img src="images/team-member-01.jpg">--}}
{{--                    </div>--}}
{{--                    <h4 class="name">Vincent Harper</h4>--}}
{{--                    <span class="post">Company Founder</span>--}}
{{--                    <p class="text">--}}
{{--                        It is a long established fact that a reader will be distracted by the readable content of a--}}
{{--                        page when looking.--}}
{{--                    </p>--}}
{{--                    <ul class="social-share">--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-google-plus"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-dribbble"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-pinterest"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <!-- /Team Member -->--}}

{{--                <!-- Team Member -->--}}
{{--                <div class="col-md-3 team-member">--}}
{{--                    <div class="image">--}}
{{--                        <img src="images/team-member-02.jpg">--}}
{{--                    </div>--}}
{{--                    <h4 class="name">Marilyn Green</h4>--}}
{{--                    <span class="post">Company Founder</span>--}}
{{--                    <p class="text">--}}
{{--                        It is a long established fact that a reader will be distracted by the readable content of a--}}
{{--                        page when looking.--}}
{{--                    </p>--}}
{{--                    <ul class="social-share">--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-google-plus"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-dribbble"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-pinterest"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <!-- /Team Member -->--}}

{{--                <!-- Team Member -->--}}
{{--                <div class="col-md-3 team-member">--}}
{{--                    <div class="image">--}}
{{--                        <img src="images/team-member-03.jpg">--}}
{{--                    </div>--}}
{{--                    <h4 class="name">Tammy Carpenter</h4>--}}
{{--                    <span class="post">Company Founder</span>--}}
{{--                    <p class="text">--}}
{{--                        It is a long established fact that a reader will be distracted by the readable content of a--}}
{{--                        page when looking.--}}
{{--                    </p>--}}
{{--                    <ul class="social-share">--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-google-plus"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-dribbble"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-pinterest"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <!-- /Team Member -->--}}

{{--                <!-- Team Member -->--}}
{{--                <div class="col-md-3 team-member">--}}
{{--                    <div class="image">--}}
{{--                        <img src="images/team-member-04.jpg">--}}
{{--                    </div>--}}
{{--                    <h4 class="name">Harry Gutierrez</h4>--}}
{{--                    <span class="post">Company Founder</span>--}}
{{--                    <p class="text">--}}
{{--                        It is a long established fact that a reader will be distracted by the readable content of a--}}
{{--                        page when looking.--}}
{{--                    </p>--}}
{{--                    <ul class="social-share">--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-google-plus"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-dribbble"></i></a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-fw fa-pinterest"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <!-- /Team Member -->--}}

{{--            </div>--}}
{{--        </div>--}}
        <!-- /Our Team -->

    </div>
</main>
<!-- /Main -->


@include('wap.common.bottom')
@include('wap.common.footer')
