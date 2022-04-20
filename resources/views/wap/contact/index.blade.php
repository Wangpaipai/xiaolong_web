@include('wap.common.header')
@include('wap.common.menu')

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
                <h1 class="title">联系我们</h1>
                <div class="subtitle">我们为您提供优质的服务 </div>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="{{ route('wap.index') }}">首页</a></li>
                    <li>联系我们</li>
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

            <!-- Contact Form -->
            <div class="col-md-8 contact-form fadeIn wow" data-wow-duration="1.3s">

                <h3 class="title">发起预约</h3>

                <form class="form-ajax" method="post">
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
                            <input type="text" name="address" maxlength="100" class="form-control" placeholder="联系地址... *" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <button type="button" class="btn btn-theme contact"><i class="fa fa-fw fa-paper-plane-o"></i> 提交</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /Contact Form -->

            <!-- Address -->
            <div class="col-md-4 fadeIn wow" data-wow-duration="1.3s" data-wow-delay="0.7s">

                <h3 class="title">联系方式</h3>
                <p>
                    我们收到您的预约后，将在第一时间联系您。
                </p>

                <ul class="contact-information">
                    <li><i class="icon fa fa-fw fa-globe"></i><span>地址：</span> {{ $system["address"] }}</li>
                    <li><i class="icon fa fa-fw fa-envelope"></i><span>邮箱：</span> <a href="mailto:{{ $system["email"] }}">{{ $system["email"] }}</a></li>
                    <li><i class="icon fa fa-fw fa-phone"></i><span>联系电话：</span> <a href="tel:{{ $system["tel"] }}">{{ $system["tel"] }}</a></li>
                </ul>

            </div>
            <!-- /Address -->

        </div>

        <div id="map-canvas"></div>

    </div>

</main>
<!-- /Main -->


@include('wap.common.bottom')
@include('wap.common.footer')

<script type="text/javascript" src="https://api.map.baidu.com/getscript?type=webgl&v=1.0&ak=sGI30xtuKmsIayzlyZnG3jNOpLQh1cKt&services=&t=20220328142320"></script>
<script type="text/javascript">
var map = new BMapGL.Map('map-canvas');
var point = new BMapGL.Point(103.853258,30.582772);

var marker = new BMapGL.Marker(point);
map.addOverlay(marker);
map.centerAndZoom(point, 18);
var opts = {
  width: 200,
  height: 100,
  title: '68伞业'
};
var infoWindow = new BMapGL.InfoWindow('地址：成都市双流区彭镇永和村3组16号', opts);
map.openInfoWindow(infoWindow, point);
function getInfoContent() {
  alert(infoWindow.getContent());
}
</script>
