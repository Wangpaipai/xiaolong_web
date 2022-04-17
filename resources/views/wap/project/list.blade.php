@include('wap.common.header')
@include('wap.common.menu')
<style>
.clickList:hover{
  cursor:pointer;
}
</style>

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
                <h1 class="title">项目列表</h1>
                <div class="subtitle">以下展示了我们的项目记录</div>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="{{ route('wap.index') }}">首页</a></li>
                    <li>项目列表</li>
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

            <!-- Blog Sidebar -->
            <div class="col-md-3">

                <!-- Widget: Search -->
                <div class="widget">

                    <h4 class="title">搜索</h4>
                    <div class="search">
                        <form class="form-inline" method="get">
                            <div class="form-group">
                                <input type="text" name="search" placeholder="搜索标题...*" class="form-control" value="{{ $search }}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-theme" type="submit"><i class="fa fa-fw fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /Widget: Search -->

{{--                <!-- Widget: Latest Posts -->--}}
{{--                <div class="widget">--}}

{{--                    <h4 class="title">最新商品</h4>--}}
{{--                    <ul class="latest-posts">--}}

{{--                        <!-- Post -->--}}
{{--                        <li>--}}
{{--                            <div class="media post">--}}
{{--                                <div class="media-left">--}}
{{--                                    <div class="image">--}}
{{--                                        <img src="{{ asset("static/wap/images/last-post-01.jpg") }}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="media-body">--}}
{{--                                    <p class="text">--}}
{{--                                        It is a long established fact that a reader will be distracted.--}}
{{--                                    </p>--}}
{{--                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <!-- /Post -->--}}

{{--                        <!-- Post -->--}}
{{--                        <li>--}}
{{--                            <div class="media post">--}}
{{--                                <div class="media-left">--}}
{{--                                    <div class="image">--}}
{{--                                        <img src="{{ asset("static/wap/images/last-post-01.jpg") }}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="media-body">--}}
{{--                                    <p class="text">--}}
{{--                                        It is a long established fact that a reader will be distracted.--}}
{{--                                    </p>--}}
{{--                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <!-- /Post -->--}}

{{--                        <!-- Post -->--}}
{{--                        <li>--}}
{{--                            <div class="media post">--}}
{{--                                <div class="media-left">--}}
{{--                                    <div class="image">--}}
{{--                                        <img src="{{ asset("static/wap/images/last-post-01.jpg") }}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="media-body">--}}
{{--                                    <p class="text">--}}
{{--                                        It is a long established fact that a reader will be distracted.--}}
{{--                                    </p>--}}
{{--                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <!-- /Post -->--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--                <!-- /Widget: Latest Posts -->--}}

            </div>
            <!-- /Blog Sidebar -->

            <!-- Blog Content -->
            <div class="col-md-9">

                <!-- Posts List -->
                <div class="posts-list">
                    @foreach($data["data"] as $k => $v)
                        @if(!empty($v["cover"]))
                            <!-- Single Post With Image -->
                            <article class="blog-post">


                                <div class="clickList" data-href="{{ route("wap.project.detail", ["id" => $v["id"]]) }}">
                                    <!-- Post Image -->
                                    <div class="image" >
                                        <div class="">
                                            <img style="width: 100%" src="{{ $v['cover'] }}">
                                        </div>
                                    </div>
                                    <!-- Post Title -->
                                    <h2 class="title">{{ $v['title'] }}</h2>
                                    <!-- /Post Title -->

                                    <!-- Post Metadata -->
                                    <ul class="list-inline meta">
                                        <li>{{ $v["date"] }}</li>
                                        <li>地址:<a href="javascript:;">{{ $v["address"] }}</a></li>
                                        <li><a href="javascript:;">{{ $v["client"] }}</a></li>
                                    </ul>
                                </div>
                                <!-- /Post Metadata -->

{{--                                <!-- Post Content -->--}}
{{--                                <div class="content">--}}
{{--                                    <!-- /Post Image -->--}}
{{--                                    <p>--}}
{{--                                        It is a long established fact that a reader will be distracted by the readable content of a--}}
{{--                                        page when looking at its layout. The point of using Lorem Ipsum is that it has a--}}
{{--                                        more-or-less normal distribution of letters, as opposed to using 'Content here, content--}}
{{--                                        here', making it look like readable English. Many desktop publishing packages and web page--}}
{{--                                        editors now use Lorem Ipsum as their default model text.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <!-- /Post Content -->--}}

                            </article>
                            <!-- /Single Post With Image -->

                        @else

                            <!-- Single Post Without Media -->
                            <article class="blog-post">

                                <div class="clickList" data-href="{{ route("wap.project.detail", ["id" => $v["id"]]) }}">
                                    <!-- Post Title -->
                                    <h2 class="title">{{ $v["title"] }}</h2>
                                    <!-- /Post Title -->

                                    <!-- Post Metadata -->
                                    <ul class="list-inline meta">
                                        <li>{{ $v["date"] }}</li>
                                        <li>地址: <a href="javascript:;">{{ $v["address"] }}</a></li>
                                        <li><a href="javascript:;">{{ $v["client"] }}</a></li>
                                    </ul>

                                </div>
                                <!-- /Post Metadata -->

{{--                                <!-- Post Content -->--}}
{{--                                <div class="content">--}}
{{--                                    <p>--}}
{{--                                        It is a long established fact that a reader will be distracted by the readable content of a--}}
{{--                                        page when looking at its layout. The point of using Lorem Ipsum is that it has a--}}
{{--                                        more-or-less normal distribution of letters, as opposed to using 'Content here, content--}}
{{--                                        here', making it look like readable English. Many desktop publishing packages and web page--}}
{{--                                        editors now use Lorem Ipsum as their default model text.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                                <!-- /Post Content -->--}}

{{--                                <!-- Read More Button -->--}}
{{--                                <div>--}}
{{--                                    <a href="#" class="btn btn-theme">Read More <i class="fa fa-fw fa-angle-double-right"></i></a>--}}
{{--                                </div>--}}
{{--                                <!-- /Read More Button -->--}}

                            </article>
                            <!-- /Single Post Without Media -->
                        @endif
                    @endforeach

                </div>
                <!-- /Posts List -->

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
            <!-- /Blog Content -->

        </div>
    </div>
</main>
<!-- /Main -->


@include('wap.common.bottom')
@include('wap.common.footer')
<script>
$(function(){
  $(".clickList").click(function(){
    var href = $(this).attr("data-href")
    location.href=href
  })
})
</script>
