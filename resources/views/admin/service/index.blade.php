@include('admin.common.header')

<section id="main-content" class="iframe-body">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        服务设置
                    </header>
                    <div class="panel-body">
                        <!--notification start-->
                        <section class="panel">
                            <div class="panel-body">
                                <div class="alert alert-info fade in">
                                    <button data-dismiss="alert" class="close close-sm" type="button">
                                        <i class="icon-remove"></i>
                                    </button>
                                    <strong>1-3</strong> 为首页突出显示内容!
                                    <strong>4-7</strong> 为品质部分内容！
                                    <strong>8-11</strong> 为产品特色部分内容！
                                </div>

                            </div>
                        </section>

                        <div class="form">
                            <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">服务描述</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="describe" minlength="5" type="text" value="{{ $data["describe"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">标题1</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title1" minlength="5" type="text" value="{{ $data["title1"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">内容1</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="describe1" required>{{ $data["describe1"] ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">标题2</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title2" minlength="5" type="text" value="{{ $data["title2"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">内容2</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="describe2" required>{{ $data["describe2"] ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">标题3</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title3" minlength="5" type="text" value="{{ $data["title3"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">内容3</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="describe3" required>{{ $data["describe3"] ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">标题4</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title4" minlength="5" type="text" value="{{ $data["title4"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">内容4</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="describe4" required>{{ $data["describe4"] ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">标题5</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title5" minlength="5" type="text" value="{{ $data["title5"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">内容5</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="describe5" required>{{ $data["describe5"] ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">标题6</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title6" minlength="6" type="text" value="{{ $data["title6"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">内容6</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="describe6" required>{{ $data["describe6"] ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">标题7</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title7" minlength="5" type="text" value="{{ $data["title7"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">内容7</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="describe7" required>{{ $data["describe7"] ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">标题8</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title8" minlength="5" type="text" value="{{ $data["title8"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">内容8</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="describe8" required>{{ $data["describe8"] ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">标题9</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title9" minlength="5" type="text" value="{{ $data["title9"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">内容9</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="describe9" required>{{ $data["describe9"] ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">标题10</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title10" minlength="5" type="text" value="{{ $data["title10"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">内容10</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="describe10" required>{{ $data["describe10"] ?? "" }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">标题11</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title11" minlength="5" type="text" value="{{ $data["title11"] ?? "" }}" required />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">内容11</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="describe11" required>{{ $data["describe11"] ?? "" }}</textarea>
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
        url: "{{ route('admin.service.update') }}",
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
