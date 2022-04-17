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
                <h1 class="title">商品列表</h1>
                <div class="subtitle">以下展示是我们的商品列表</div>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="{{ route('wap.index') }}">首页</a></li>
                    <li>商品列表</li>
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

            </div>
            <!-- /Blog Sidebar -->

            <!-- Blog Content -->
            <div class="col-md-9">

                <!-- Posts List -->
                <div class="posts-list">
                    <ul class="latest-posts">
                        @foreach($data["data"] as $k => $v)
                            <li>
                                <div class="clickList" data-href="{{ route("wap.goods.detail", ["id" => $v["id"]]) }}">
                                    <!-- Single Post With Image -->

                                    <!-- Post Title -->
                                    <h2 class="title">{{ $v["name"] }}</h2>
                                    <!-- /Post Title -->

                                    <!-- Post Metadata -->
                                    <ul class="list-inline meta">
                                        <li>￥ <a href="javascript:;">{{ $v["price"] }} / {{ $v["uint"] }}</a></li>
                                    </ul>
                                    <!-- /Post Metadata -->

                                    <div class="media post">
                                        <div class="media-left">
                                            <div class="image" style="width: 100px; height: 100px">
                                                <img style="width: 100px; height: 100px" src="{{ $v["cover"] }}">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">
                                                {{ $v['texture'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </li>

                        @endforeach
                    </ul>

                </div>
                <!-- /Posts List -->

                <br>
                <br>

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
