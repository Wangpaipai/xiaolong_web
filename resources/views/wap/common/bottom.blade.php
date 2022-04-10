

<!-- Footer -->
<footer class="footer section-small">
    <div class="container">
        <div class="row">

            <!-- Footer Column -->
            <div class="col-md-4 col-xs-6 footer-col">

                <h3 class="title"><span class="text-theme">联系我们</span></h3>

                <!-- Footer Signup Form -->
                <div class="signup-form">
                    <div class="form-group">
                        <a href="#" data-route="{{ route("wap.map") }}" class="iframe-popup"><span class="icon icon_pin_alt"></span> {{ $system["address"] }}</a>
                    </div>
                </div>

                <hr>
                <div class="signup-form">
                    <div class="form-group">
                        <a href="#"><span class="icon icon_mail_alt"></span> {{ $system["email"] }}</a>
                    </div>
                </div>

                <hr>
                <div class="signup-form">
                    <div class="form-group">
                        <a href="tel:{{ $system["tel"] }}"><span class="icon icon_phone"></span> {{ $system["tel"] }}</a>
                    </div>
                </div>
                <!-- /Footer Signup Form -->

            </div>
            <!-- /Footer Column -->

            <!-- Footer Column -->
            <div class="col-md-3 col-xs-6 footer-col">

                <h3 class="title">最新 <span class="text-theme">项目</span></h3>

                @for($i = 0; $i < 2; $i++)

                    <!-- Footer Post -->
                    <div class="media post">
                        <div class="media-left">
                            <div class="image">
                                <img src="{{ $project[$i]->cover }}" alt="">
                            </div>
                        </div>
                        <div class="media-body">
                            <p class="text">
                                {{ $project[$i]->address }} - {{ $project[$i]->client }}
                            </p>
                            <a href="#">{{ $project[$i]->title }}</a>
                        </div>
                    </div>
                    <!-- /Footer Post -->

                @endfor

            </div>
            <!-- /Footer Column -->

            <!-- Footer Column -->
            <div class="col-md-2 col-xs-6 footer-col">

                <h3 class="title">站点菜单</h3>

                <!-- Footer Menu -->
                <ul class="menu">
                    <li><a href="{{ route('wap.index') }}">首页</a></li>
                    <li><a href="{{ route('wap.about') }}">关于我们</a></li>
                    <li><a href="{{ route('wap.service') }}">服务</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <!-- /Footer Menu -->

            </div>
            <!-- /Footer Column -->


            <!-- Footer Column -->
            <div class="col-md-3 col-xs-6 footer-col">

                <!-- Footer Logo -->
                <div class="logo">
                    <img src="{{ $system["logo"] }}" class="logo-big" style="width: 143px;" alt="">
                </div>
                <!-- /Footer Logo -->

                <!-- Footer Text -->
                <p class="text">
                    <a href="http://beian.miit.gov.cn" target="_blank">{{ $system["information"] }}</a>
                </p>
                <!-- /Footer Text -->

                <hr>

                <!-- Copyright -->
                <p class="copyright">
                    版权所有 &copy; 2022 <strong>68伞业</strong>
                </p>
                <!-- /Copyright -->

            </div>
            <!-- /Footer Column -->


        </div>
    </div>
</footer>
<!-- /Footer -->


<!-- 回到顶部 -->
<div id="scroll-to-top" class="scroll-to-top">
    <i class="icon fa fa-angle-up"></i>
</div>
<!-- /Scroll To Top -->

<!-- Modal: Result Message -->
<div class="modal fade" id="result" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="fa fa-times"></i>
                </button>
                <h4 class="modal-title">Sending message</h4>
            </div>

            <div class="modal-body">

                <div class="result-icon">
                    <div class="icon-border">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" preserveAspectRatio="none">
                            <circle cx="8" cy="8" r="6.215" transform="rotate(90 8 8)"></circle>
                        </svg>
                        <i class="icon fa fa-check"></i>
                    </div>
                </div>

                <p class="modal-result h4 text-center"></p>
            </div>

        </div>
    </div>
</div>
<!-- /Modal: Result Message -->



{{--<!-- 设置风格颜色 -->--}}
{{--<div id="styleswitcher" class="styleswitcher">--}}
{{--    <div class="styleswitcher-content">--}}

{{--        <h4 class="styleswitcher-title">Color Presets</h4>--}}
{{--        <div class="styleswitcher-block">--}}
{{--            <ul class="styleswitcher-list-colors">--}}
{{--                <li><a href="javascript: switchStyle('theme-persimmon')" style="background: #ff5555;" title="Persimmon"></a></li>--}}
{{--                <li><a href="javascript: switchStyle('theme-atomic-tangerine')" style="background: #ff9e55;" title="Atomic Tangerine"></a></li>--}}
{{--                <li><a href="javascript: switchStyle('theme-yellow-sea')" style="background: #fab000;" title="Yellow Sea"></a></li>--}}
{{--                <li><a href="javascript: switchStyle('theme-rio-grande')" style="background: #aed605;" title="Rio Grande"></a></li>--}}
{{--                <li><a href="javascript: switchStyle('theme-vida-loca')" style="background: #38b71f;" title="Vida Loca"></a></li>--}}
{{--                <li><a href="javascript: switchStyle('theme-mountain-meadow')" style="background: #1fb768;" title="Mountain Meadow"></a></li>--}}
{{--                <li><a href="javascript: switchStyle('theme-java')" style="background: #1fb7a4;" title="Java"></a></li>--}}
{{--                <li><a href="javascript: switchStyle('theme-mariner')" style="background: #3274cd;" title="Mariner"></a></li>--}}
{{--                <li><a href="javascript: switchStyle('theme-medium-purple')" style="background: #996de9;" title="Medium Purple"></a></li>--}}
{{--                <li><a href="javascript: switchStyle('theme-lavender-magenta')" style="background: #e94de4;" title="Lavender Magenta"></a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <h4 class="styleswitcher-title">Navigation Style</h4>--}}
{{--        <div class="styleswitcher-block">--}}
{{--            <select id="styleswitcher-navbar-style">--}}
{{--                <option value="style-1">Default</option>--}}
{{--                <option value="style-2">Fill</option>--}}
{{--                <option value="style-3">Underline</option>--}}
{{--            </select>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--    <div class="styleswitcher-button vertical-middle"><i class="fa fa-gear"></i></div>--}}
{{--</div>--}}
