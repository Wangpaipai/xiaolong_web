@include('wap.common.header')
@include('wap.common.menu')

<!-- Section: Page Header -->
<section class="section-page-header">
    <div class="container">
        <div class="row">

            <!-- Page Title -->
            <div class="col-md-8">
                <h1 class="title">项目详情</h1>
                <div class="subtitle">一下是此项目的详细介绍 </div>
            </div>
            <!-- /Page Title -->

            <!-- Breadcrumbs -->
            <div class="col-md-4">
                <ul class="breadcrumb">
                    <li><i class="fa fa-fw fa-home"></i> <a href="{{ route('wap.index') }}">首页</a></li>
                    <li><a href="{{ route('wap.project.list') }}">项目列表</a></li>
                    <li>项目详情</li>
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

            <!-- Blog Content -->
            <div class="col-md-12">

                <!-- Post -->
                <article class="blog-post">

                    <!-- Post Title -->
                    <h2 class="title">{{ $data->title }}</h2>
                    <!-- /Post Title -->

                    <!-- Post Metadata -->
                    <ul class="list-inline meta">
                        <li>{{ $data->date }} &nbsp;&nbsp;&nbsp;</li>
                        <li>地址： <a href="javascript:;">{{ $data->address }}</a></li>
                        <li><a href="javascript:;">{{ $data->client }}</a></li>
                    </ul>
                    <!-- /Post Metadata -->

                    <!-- Post Image -->
                    <div class="image">
                        <div>
                            <img src="{{ $data->cover }}">
                        </div>
                    </div>
                    <!-- /Post Image -->

                    <!-- Post Content -->
                    <div class="content">
                        {!! htmlspecialchars_decode($data->content) !!}
                    </div>
                    <!-- /Post Content -->



                </article>
                <!-- /Post -->

            </div>
            <!-- /Blog Content -->

        </div>
    </div>
</main>
<!-- /Main -->

@include('wap.common.bottom')
@include('wap.common.footer')
