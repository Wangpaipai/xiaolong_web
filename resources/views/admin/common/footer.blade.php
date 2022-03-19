<script src="{{ asset('static/admin/js/html5shiv.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery-ui-1.10.4.min.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ asset('static/admin/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('static/admin/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('static/admin/assets/jquery-knob/js/jquery.knob.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery.sparkline.js') }}" type="text/javascript"></script>
<script src="{{ asset('static/admin/js/owl.carousel.js') }}" ></script>
<script src="{{ asset('static/admin/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery.rateit.min.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery.customSelect.min.js') }}" ></script>
<script src="{{ asset('static/admin/js/scripts.js') }}"></script>

<script src="{{ asset('static/admin/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('static/admin/js/gdp-data.js') }}"></script>

{{--<script src="{{ asset('static/admin/js/jquery-ui-1.9.2.custom.min.js') }}"></script>--}}
{{--<script src="{{ asset('static/admin/js/fullcalendar.min.js') }}"></script>--}}
{{--<script src="{{ asset('static/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>--}}
{{--<script src="{{ asset('static/admin/js/calendar-custom.js') }}"></script>--}}
{{--<script src="{{ asset('static/admin/js/morris.min.js') }}"></script>--}}
{{--<script src="{{ asset('static/admin/js/sparklines.js') }}"></script>--}}

<script src="{{ asset('static/admin/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('static/admin/js/layui/layui.js') }}"></script>
<script>
$(function() {
  $(".knob").knob({
    'draw' : function () {
      $(this.i).val(this.cv + '%')
    }
  })

  //调用示例
  layer.photos({
    photos: '#main-content'
    ,anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
  });
});

//carousel
$(document).ready(function() {
  $("#owl-slider").owlCarousel({
    navigation : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true

  });
});


$(function(){
  $('select.styled').customSelect();
});

$(function(){
  $('#map').vectorMap({
    map: 'world_mill_en',
    series: {
      regions: [{
        values: gdpData,
        scale: ['#000', '#000'],
        normalizeFunction: 'polynomial'
      }]
    },
    backgroundColor: '#eef3f7',
    onLabelShow: function(e, el, code){
      el.html(el.html()+' (GDP - '+gdpData[code]+')');
    }
  });
});


</script>

</body>
</html>
