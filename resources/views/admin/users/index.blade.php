@include('admin.common.header')

    <!--main content start-->
    <section id="main-content" class="iframe-body">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <p>用户管理</p>
                            <div style="text-align: right">
                                <a class="btn btn-success" href="{{ route('admin.user.create') }}"><i class="icon_plus_alt2"></i> 新增用户</a>
                            </div>
                        </header>

                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                            <tr>
                                <th><i class="icon_profile"></i> 昵称</th>
                                <th><i class="icon_mail_alt"></i> Email</th>
                                <th><i class="icon_calendar"></i> 创建日期</th>
                                <th><i class="icon_cogs"></i> 操作</th>
                            </tr>
                            @foreach($data as $u)
                                <tr>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ empty($u->email) ? '/' : $u->email }}</td>
                                    <td>{{ utc2date($u->created_at) }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary edit-data" data-id="{{ $u->id }}" href="{{ route('admin.user.detail', ['id' => $u->id]) }}"><i class="icon_pencil-edit"></i></a>
                                            <a class="btn btn-danger delete" data-id="{{ $u->id }}" href="javascript:;"><i class="icon_close_alt2"></i></a>
                                        </div>
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
<script>
$(function(){
  $('.delete').click(function() {
    uid = $(this).attr('data-id')
    requestData = {
      id: uid
    }
    layer.open({
      content: '删除后不可恢复，是否继续？',
      icon:3,
      yes: function(index, layero){
        $.ajax({
          url: "{{ route('admin.user.delete') }}",
          data: requestData,
          type: "post",
          headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
          },
          success: function(data) {
            if (data.status === 200) {
              layer.msg(data.message, {icon: 1});

              setTimeout(function() {
                location.reload()
              }, 1000)
            } else {
              layer.msg("登录失败", {icon: 2});
            }
            layer.close(index);

          },
          error: function(err) {
            layer.close(index);
            layer.msg(err.responseJSON.message, {icon: 2});
          }
        })
      }
    });
  })
})
</script>
