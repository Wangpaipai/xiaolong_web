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
                                    <a class="" href="javascript:;" data-href="{{ empty($childMenu['route.name']) ? '' : route($childMenu['route.name']) }}">
                                        <i class="{{ $childMenu['icon'] }}"></i>
                                        <span>{{ $childMenu['name'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="active">
                        <a class="" href="javascript:;" data-href="{{ empty($m['route.name']) ? '' : route($m['route.name']) }}">
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
