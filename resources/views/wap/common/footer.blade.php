
<!-- SCRIPTS -->
<script src="{{ asset('static/wap/js/jquery-2.2.0.min.js') }}"></script>
<script src="{{ asset('static/wap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('static/wap/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('static/wap/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('static/wap/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('static/wap/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('static/wap/js/wow.min.js') }}"></script>
<script src="{{ asset('static/wap/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('static/wap/js/jquery.appear.js') }}"></script>
<script src="{{ asset('static/wap/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('static/wap/js/general.js') }}"></script>
<!-- /SCRIPTS -->

<link rel="stylesheet" type="text/css" href="{{ asset('static/wap/demo/styleswitcher.css') }}" property="">
<script src="{{ asset('static/wap/demo/styleswitcher.js') }}"></script>
<script src="{{ asset('static/admin/js/layui/layui.js') }}"></script>
<!-- /Styleswitcher -->


<script>
$(function(){
  $(".footerProject").click(function(){
    var href = $(this).attr("data-href")
    location.href=href
  })

  $(".contact").click(function() {
    var goods_id = $("input[name='goods_id']").val()
    var name = $("input[name='name']").val()
    var mobile = $("input[name='mobile']").val()
    var address = $("input[name='address']").val()

    if (name.length === 0) {
      layer.msg('请输入称呼', {icon: 5,"time":1000});
    }else if (!/^[1][3,4,5,7,8,9][0-9]{9}$/.test(mobile)) {
      layer.msg('请输入正确的手机号', {icon: 5,"time":1000});
    } else if (address.length === 0) {
      layer.msg('请输入联系地址', {icon: 5,"time":1000});
    } else {
      layer.load(2,{time:10000});
      param = $(".form-ajax").serialize()
      $.ajax({
        url: "{{ route('wap.contact.submit') }}",
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
            layer.msg("服务器错误，请稍后再试", {icon: 2});
          }
          layer.close(index);

        },
        error: function(err) {
          layer.close(index);
          layer.msg(err.responseJSON.message, {icon: 2});
        }
      })
    }
  })

})
</script>

</body>
</html>
