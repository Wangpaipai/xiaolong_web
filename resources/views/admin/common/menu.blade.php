<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            @foreach($menu as $m)
                @if (count($m['child']) > 0)
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="{{ $m['icon'] }}"></i>
                            <span>{{ $m['name'] }}</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            @foreach($m['child'] as $childMenu)
                                <li>
                                    <a class="menuClick" href="javascript:;" data-href="{{ empty($childMenu['route_name']) ? '' : route($childMenu['route_name']) }}">
                                        <i class="{{ $childMenu['icon'] }}"></i>
                                        <span>{{ $childMenu['name'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="sub-menu">
                        <a class="menuClick" href="javascript:;" data-href="{{ empty($m['route_name']) ? '' : route($m['route_name']) }}">
                            <i class="{{ $m['icon'] }}"></i>
                            <span>{{ $m['name'] }}</span>
                        </a>
                    </li>
                @endif
            @endforeach

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
