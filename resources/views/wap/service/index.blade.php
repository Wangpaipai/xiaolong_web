@include('wap.common.header')
@include('wap.common.menu')

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
                <h1 class="title">我们的服务</h1>
                <div class="subtitle">{{ $describe->value }} </div>
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

        <!-- Services -->
        <div class="row">

            @foreach($service as $k=>$v)

                <!-- Feature Block -->
                <div class="col-sm-4 feature">
                    <span class="{{ $v["icon"] }} icon"></span>
                    <h3 class="title">{{ $v["value"] }}</h3>
                    <p class="description">
                        {{ $v["describe"] }}
                    </p>
                </div>
                <!-- /Feature Block -->
            @endforeach

        </div>
        <!-- /Services -->


        <div class="row mt">

            <!-- Panels -->
            <div class="col-md-4">

                <h3 class="title">品质</h3>

                <div class="panel-group" id="accordion">
                    @foreach($quality as $k=>$v)
                        <div class="panel panel-theme">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="{{ $k == 0 ? "" : "collapsed" }}" data-toggle="collapse" data-parent="#accordion" href="#faq-0{{ $k + 1 }}">
                                        <i class="fa fa-fw {{ $v["icon"] }}"></i>
                                        {{ $v["value"] }}
                                        <i class="fa fa-fw fa-angle-down collapse-icon"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="faq-0{{ $k + 1 }}" class="panel-collapse collapse {{ $k == 0 ? "in" : "" }}">
                                <div class="panel-body">
                                    {{ $v["describe"] }}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- /Panels -->

            <!-- Features -->
            <div class="col-md-8">
                <div class="row">

                    <h3 class="title">特色</h3>

                    @foreach($features as $k=>$v)

                        <!-- Feature Block -->
                            <div class="col-sm-6 more-feature">
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
            </div>
            <!-- /Features -->

        </div>


    </div>
</main>
<!-- /Main -->


@include('wap.common.bottom')
@include('wap.common.footer')
