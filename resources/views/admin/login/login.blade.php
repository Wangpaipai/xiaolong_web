<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="{{ asset('static/admin/img/favicon.ico') }}">

    <title>Login | 后台管理系统</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('static/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ asset('static/admin/css/bootstrap-theme.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('static/admin/css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('static/admin/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{ asset('static/admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('static/admin/css/style-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('static/admin/js/layui/css/layui.css') }}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
<!--[if lt IE 9]>
    <script src="{{ asset('static/admin/js/html5shiv.js') }}"></script>
    <script src="{{ asset('static/admin/js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body class="login-img3-body">

<div class="container">

    <form class="login-form" action="#">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" class="form-control" name="name" placeholder="帐号" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="密码">
            </div>
            <button class="btn btn-primary btn-lg btn-block" id="login-btn" type="button">登录</button>
        </div>
    </form>
</div>
</body>
<script src="{{ asset('static/admin/js/jquery.js') }}"></script>
<script src="{{ asset('static/admin/js/layui/layui.js') }}"></script>
<script>
$(function(){
    $("#login-btn").click(function() {
        requestData = $(".login-form").serialize()
        $.ajax({
          url: "{{ route('admin.login.store') }}",
          data: requestData,
          type: "post",
          headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
          },
          success: function(data) {
            if (data.status === 200) {
              layer.msg(data.message, {icon: 1});

              setTimeout(function() {
                location.href = "{{ route('admin.home') }}"
              }, 1000)
            } else {
              layer.msg("登录失败", {icon: 2});
            }

          },
          error: function(err) {
            layer.msg(err.responseJSON.message, {icon: 2});
          }
        })
    })
})
</script>
</html>
