@include('wap.common.header')
@include('wap.common.menu')

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
                <h1 class="title">商品详情</h1>
                <div class="subtitle">这里对商品作了详细的介绍 </div>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="{{ route('wap.index') }}">首页</a></li>
                    <li><a href="{{ route('wap.goods.list') }}">商品列表</a></li>
                    <li>商品详情</li>
                </ul>
            </div>
            <!-- /Breadcrumbs -->

        </div>
    </div>
</section>
<!-- /Section: Page Header -->

<!-- Main -->
<main class="main-container">

    <section>
        <div class="container">

            <!-- Project -->
            <div class="row">

                <!-- Project Images -->
                <div class="col-md-8">


                    <div class="project-carousel owl-carousel owl-theme">
                        @foreach($data->banner as $v)
                            <div class="item">
                                <a href="{{ $v }}" class="image-popup">
                                    <div class="gallery-image">
                                        <img src="{{ $v }}">
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>


                </div>
                <!-- /Project Images -->

                <!-- Project Information -->
                <div class="col-md-4 project-information">

                    <h3 class="title">商品描述</h3>
                    <p>
                        {{ $data->texture }}
                    </p>

                    <h3 class="title">商品详情</h3>
                    <ul class="details">
                        <li><span>商品名: </span> {{ $data->name }}</li>
                        <li><span>价格: </span> ￥ <a href="javascript:;">{{ $data->price }}</a> / {{ $data->uint }}</li>
                    </ul>

                </div>
                <!-- /Project Information -->

            </div>
            <!-- /Project -->

        </div>
    </section>


    <section class="section-small mt bg-light-gray">
        <div class="container">

            <!-- Section Header -->
            <div class="row">
                <div class="col-md-6">
                    <header>
                        <h2 class="section-title"><span class="text-theme">预约</span> 商品</h2>
                        <p class="section-subtitle">填写以下信息，我们将第一时间联系您</p>
                    </header>
                </div>
            </div>
            <!-- /Section Header -->

            <!-- Section Content -->
            <div class="row mt">
                <div class="col-md-12">


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
            </div>
            <!-- /Section content -->

        </div>
    </section>


</main>
<!-- /Main -->


@include('wap.common.bottom')
@include('wap.common.footer')

