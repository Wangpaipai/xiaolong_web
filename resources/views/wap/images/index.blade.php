@include('wap.common.header')
@include('wap.common.menu')

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
                <h1 class="title">工程图集</h1>
                <div class="subtitle">这里展示了我们的项目工程图册集 </div>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="{{ route('wap.index') }}">首页</a></li>
                    <li>工程图集</li>
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

                <div class="projects-list">
                    @foreach($data["data"] as $v)

                        <div class="col-sm-3 col-xs-12 project-image">
                            <a href="{{ $v["url"] }}" class="image-popup">
                                <div class="gallery-image">
                                    <img src="{{ $v["url"] }}">
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

                <!-- Pagination -->
                <div class="col-md-12">
                    <!-- Pagination -->
                    @if($data["total"] == 0)
                        <div class="subtitle">没有数据............</div>
                        <br>
                        <br>
                    @else
                        <ul class="pagination">
                            @foreach($data["links"] as $v)
                                <li class="{{ $v["active"] ? "active" : "" }}"><a href="{{ empty($v["url"]) || $v["active"] ? "javascript:;" : $v["url"] }}">
                                        {!! str_replace(['Previous', 'Next'], "", $v["label"]) !!}
                                    </a></li>
                            @endforeach
                        </ul>
                    @endif
                <!-- /Pagination -->
                </div>
                <!-- /Pagination -->

            </div>
            <!-- /Project -->

        </div>
    </section>

</main>
<!-- /Main -->

@include('wap.common.bottom')
@include('wap.common.footer')
