@include('admin.common.header')

<section id="main-content" class="iframe-body">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        关于我们
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">详情介绍</label>
                                    <div class="col-lg-10" style="">
                                        <script id="container" name="about" type="text/plain">{!! $data["value"] !!}</script>
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
<script src="{{ asset('static/admin/js/ueditor/ueditor.config.js') }}"></script>
<script src="{{ asset('static/admin/js/ueditor/ueditor.all.min.js') }}"></script>
<script>
$(function(){
    var ue = UE.getEditor('container');

    $('.btn-primary').click(function() {
      param = $("#feedback_form").serialize()
      $.ajax({
        url: "{{ route('admin.about.update') }}",
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
