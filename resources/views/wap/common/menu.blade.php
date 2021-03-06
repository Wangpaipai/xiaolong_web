
<!-- Preloader -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- /Preloader -->

<!-- Header -->
<header id="home" class="header">

    <!-- Navigation -->
    <nav id="navigation" class="navbar affix">

        <!-- Company Information -->
        <div class="information hidden-sm hidden-xs">
            <div class="container">
                <div class="row">

                    <!-- Feedback -->
                    <div class="col-md-7">
                        <a href="javascript:;" data-route="{{ route("wap.map") }}" class="iframe-popup"><span class="icon icon_pin_alt"></span> {{ $system["address"] }}</a>
                        <a href="mailto:{{ $system["email"] }}"><span class="icon icon_mail_alt"></span> {{ $system["email"] }}</a>
                        <a href="tel:{{ $system["tel"] }}"><span class="icon icon_phone"></span> {{ $system["tel"] }}</a>
                    </div>
                    <!-- /Feedback -->

                </div>
            </div>
        </div>
        <!-- /Company Information -->

        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <!-- Navigation Header -->
                    <div class="navbar-header">

                        <!-- Toggle Button -->
                        <button type="button"
                                class="navbar-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#main-menu"
                                aria-expanded="false"
                                aria-controls="main-menu">

                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>
                        <!-- /Toggle Button -->

                        <!-- Brand -->
                        <a href="{{ route('wap.index') }}" class="brand">

                            <!-- Logo Big -->
                            <img src="{{ $system["logo"] }}" class="logo-big" style="width: 143px;" alt="">
                            <!-- /Logo Big -->

                            <!-- Logo Small -->
                            <img src="{{ $system["logo"] }}" style="height: 34px;" class="logo-small" alt="">
                            <!-- /Logo Small -->

                        </a>
                        <!-- /Brand -->

                    </div>
                    <!-- /Navigation Header -->

                    <!-- Navigation -->
                    <div id="main-menu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="{{ route('wap.index') }}">??????</a></li>
                            <li><a href="{{ route('wap.about') }}">????????????</a></li>
                            <li><a href="{{ route('wap.service') }}">??????</a></li>
                            <li><a href="{{ route('wap.project.list') }}">??????</a></li>
                            <li><a href="{{ route('wap.goods.list') }}">??????</a></li>
                            <li><a href="{{ route('wap.images.list') }}">????????????</a></li>
                            <li><a href="{{ route('wap.contact') }}">????????????</a></li>
{{--                            <li class="dropdown">--}}
{{--                                <a href="#" class="dropdown-toggle">Pages</a>--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li><a href="404.html">404</a></li>--}}
{{--                                    <li><a href="services.html">Services</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="dropdown">--}}
{{--                                <a href="#" class="dropdown-toggle">Blog</a>--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li><a href="blog-left-sidebar.html">Post List - Left Sidebar</a></li>--}}
{{--                                    <li><a href="blog.html">Post List - Right Sidebar</a></li>--}}
{{--                                    <li><a href="single-post.html">Single Post</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="dropdown">--}}
{{--                                <a href="#" class="dropdown-toggle">Portfolio</a>--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li><a href="portfolio-2-col.html">2 Columns</a></li>--}}
{{--                                    <li><a href="portfolio-3-col.html">3 Columns</a></li>--}}
{{--                                    <li><a href="portfolio.html">4 Columns</a></li>--}}
{{--                                    <li><a href="single-project.html">Project Page</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="contact.html">Contact</a></li>--}}
                        </ul>
                    </div>
                    <!-- /Navigation -->

                </div>
            </div>

        </div>
    </nav>
    <!-- /Navigation -->

</header>
<!-- /Header -->
