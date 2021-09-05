@include('admin.common.header')

<section id="main-content" class="iframe-body">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        网站设置
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">网站名称</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="name" minlength="5" type="text" value="{{ $data["name"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">手机号</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="tel" minlength="5" type="text" value="{{ $data["tel"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">邮箱 <span class="required"></span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " type="email" name="email" autocomplete="off" value="{{ $data["email"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">备案号 <span class="required"></span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " type="text" name="information" autocomplete="off" value="{{ $data["information"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="button">保存</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@include('admin.common.footer')
<script>
$(function(){
    $('.btn-primary').click(function() {
      param = $("#feedback_form").serialize()
      $.ajax({
        url: "{{ route('admin.system.update') }}",
        data: param,
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
            layer.msg("操作失败", {icon: 2});
          }
          layer.close(index);

        },
        error: function(err) {
          layer.close(index);
          layer.msg(err.responseJSON.message, {icon: 2});
        }
      })
    })
})
</script>
