<!DOCTYPE html>
<html lang="en">
<head>
    @include('site.element.head')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset("site/css/materialize.min.css") }}" rel="stylesheet" media="screen,projection"/>
    @include('view_tool::web.facebook.assets.style')
    <script src="{{ asset("site/js/jquery-3.2.1.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("site/js/materialize.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("site/js/clipboard.min.js") }}" type="text/javascript"></script>
</head>

<body>
<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper">
            <a href="{{ base_url('tool') }}" class="show-on-small text-primary brand-logo hide-on-med-only hide-on-med-and-down hide-on-med-and-up hide-on-large-only">
                TWEB
            </a>
            <ul class="hide-on-med-and-down">
                <li>
                    <a class=" text-primary" href="{{ base_url() }}">TWEB</a>
                </li>
                @foreach($menuMain as $item)
                    <li>
                        @if(!empty($item['child']))
                            <a class="dropdown-trigger @if($active_menu == $item['active']) active @endif"
                               target="_blank" href="#!"
                               data-target="dropdown_{{ $item['active'] }}">
                                {!! $item['title'] !!} <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        @else
                            <a class=" @if($active_menu == $item['active']) active @endif" href="{{ $item['link'] }}">
                                {!! $item['title'] !!}
                            </a>
                        @endif

                        @if(!empty($item['child']))
                            <ul id="dropdown_{{ $item['active'] }}" class="dropdown-content" style="min-width: 250px">
                                @foreach($item['child'] as $child)
                                    <li>
                                        <a class="@if(!empty($sub_active_menu) && $sub_active_menu == $child['active']) blue-text text-darken-2 @else black-text @endif"
                                           href="{{ $child['link'] }}">
                                            ✅ {!! $child['title'] !!}
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach

                <li>
                    <a href="https://tweb.com.vn/sl/0aab46b" target="_blank" class="btn-trial">
                        🚀 Dùng thử website 15 ngày miễn phí
                    </a>
                </li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                @foreach($menuMain as $item)
                    <li>
                        <a class="@if($active_menu == $item['active']) active @endif" href="{{ $item['link'] }}">
                            {!! $item['title'] !!}
                        </a>

                        @if(!empty($item['child']))
                            <ul>
                                @foreach($item['child'] as $child)
                                    <li>
                                        <a style="text-indent: 20px"
                                           class="@if(!empty($sub_active_menu) && $sub_active_menu == $child['active']) blue-text text-darken-2 @endif"
                                           href="{{ $child['link'] }}">
                                            - {!! $child['title'] !!}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
        </div>
    </nav>
</div>

<div style="min-height: 400px">
    <div class="section">

        @yield('content')

    </div>
</div>


<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l12 s12">
                <p class="grey-text text-lighten-4">Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP,
                    ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook Text Generator</p>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a style="color: #ffd655" href="https://tweb.com.vn?utm_content=tool">Tình Nguyễn</a>
            | Hosting sử dụng <a style="color: #ffd655" href="http://bit.ly/2kAezij" target="_blank">INET</a>
            | Made with 💞 in Long An
        </div>
    </div>
</footer>


<!--  Scripts-->
<script type="text/javascript">

    $(document).ready(function () {
        $('.collapsible').collapsible();

        $('.sidenav').sidenav();

        $('.scrollspy').scrollSpy();

        $('.characterCounter').characterCounter();
    });

    if ($('.dropdown-trigger').length > 0) {
        $(".dropdown-trigger").dropdown();
    }

    /**
     * check all for all list data
     */
    if ($('.clipboard').length > 0) {
        let clipboard = new ClipboardJS('.clipboard');
        clipboard.on('success', function (e) {
            console.info('Action:', e.action);
            console.info('Text:', e.text);
            console.info('Trigger:', e.trigger);

            e.clearSelection();
        });

        clipboard.on('error', function (e) {
            console.error('Action:', e.action);
            console.error('Trigger:', e.trigger);
        });
    }
</script>
</body>
</html>
