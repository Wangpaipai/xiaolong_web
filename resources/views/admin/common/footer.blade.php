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
<script src="{{ asset('static/admin/assets/chart-master/Chart.js') }}"></script>
<script src="{{ asset('static/admin/js/scripts.js') }}"></script>

<script src="{{ asset('static/admin/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('static/admin/js/gdp-data.js') }}"></script>
<script src="{{ asset('static/admin/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('static/admin/js/layui/layui.js') }}"></script>
<script>

$(function() {
  $(".knob").knob({
    'draw' : function () {
      $(this.i).val(this.cv + '%')
    }
  })
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
