@include('admin.common.header')

    <!--main content start-->
    <section id="main-content" class="iframe-body">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <p>预约列表</p>
                            <div style="text-align: right">
{{--                                <a class="btn btn-success" href="{{ route('admin.banner.add') }}"><i class="icon_plus_alt2"></i> 添加图片</a>--}}
                            </div>
                        </header>

                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                            <tr>
                                <th>商品</th>
                                <th>称呼</th>
                                <th>手机号</th>
                                <th>地址</th>
                                <th>预约时间</th>
                            </tr>
                            @foreach($data as $u)
                                <tr>
                                    <td>
                                        {{ $u->goods_name ?? "/" }}
                                    </td>
                                    <td>
                                        {{ $u->name }}
                                    </td>
                                    <td>{{ $u->mobile }}</td>
                                    <td>
                                        {{ $u->address }}
                                    </td>
                                    <td>
                                        {{ $u->created_at }}
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </section>
                    {{ $data->links() }}
                </div>
            </div>
        </section>
    </section>
    <!--main content end-->
@include('admin.common.footer')
