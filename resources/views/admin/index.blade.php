@include('admin.common.header')

<!-- container section start -->
<section id="container" class="">
    @include('admin.common.top')

    @include('admin.common.menu')

    <section id="main-content">
        <section class="wrapper">
            <iframe id="iframe" width="100%" height="100%" src="{{ route('admin.dashboard') }}"></iframe>
        </section>
    </section>
</section>

@include('admin.common.footer')
<style>
    #iframe {
      border: 0;
    }
</style>
<script>
$(function() {
  h_h = $(".header").height()
  w_h = $("#sidebar").height()
  $("#iframe").height(w_h - h_h - 10)
})
</script>
