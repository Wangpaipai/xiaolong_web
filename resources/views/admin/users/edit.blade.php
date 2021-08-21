@include('admin.common.header')

<section id="main-content" class="iframe-body">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        编辑用户信息
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">用户名 <span class="required"></span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="cname" name="name" minlength="5" disabled type="text" value="{{ $data->name }}" required />
                                        <input class="form-control" name="id" minlength="5" type="hidden" value="{{ $data->id }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cemail" class="control-label col-lg-2">邮箱 <span class="required"></span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="cemail" type="email" name="email" autocomplete="off" value="{{ $data->email }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">密码 <span class="required"></span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="subject1" name="password" minlength="5" autocomplete="off" placeholder="修改密码时填写，否则不填" type="password" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">确认密码 <span class="required"></span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="subject2" name="repassword" minlength="5" placeholder="修改密码时填写，否则不填" type="password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="button">提交</button>
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
      p1 = $('#subject1').val();
      p2 = $('#subject2').val();
      if (p1.length > 0 || p2.length > 0) {
        if (p1 != p2) {
          layer.msg("密码不一致", {icon: 2});
          return
        } else if (p1.length < 6 || p1.length > 16) {
          layer.msg("密码长度为6-16", {icon: 2});
          return
        }
      }
      param = $("#feedback_form").serialize()
      console.log(param)
      $.ajax({
        url: "{{ route('admin.user.edit') }}",
        data: param,
        type: "post",
        headers: {
          "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        success: function(data) {
          if (data.status === 200) {
            layer.msg(data.message, {icon: 1});
            location.href = document.referrer
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
