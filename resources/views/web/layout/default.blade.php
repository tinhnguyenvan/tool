<!DOCTYPE html>
<html lang="en">
<head>
    @include('site.element.head')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset("site/css/materialize.min.css") }}" rel="stylesheet" media="screen,projection"/>
    <style>
        .navbar-fixed {
            height: 34px;
        }

        nav ul a,
        nav .brand-logo {
            color: #444;
        }

        .nav-wrapper li a.active {
            background: #0a76b7;
            color: #fff;
        }

        p {
            line-height: 2rem;
        }

        .sidenav-trigger {
            color: #26a69a;
        }

        footer.page-footer {
            margin: 0;
        }

        .sidenav-overlay {
            display: none !important;
        }

        nav, nav .nav-wrapper i, nav a.sidenav-trigger, nav a.sidenav-trigger i {
            height: 34px;
            line-height: 34px
        }

        /* label color */
        .input-field label {
            color: #000;
        }

        /* label focus color */
        .input-field input[type=text]:focus + label {
            color: #000;
        }

        /* label underline focus color */
        .input-field input[type=text]:focus {
            border-bottom: 1px solid #000;
            box-shadow: 0 1px 0 0 #000;
        }

        /* valid color */
        .input-field input[type=text].valid {
            border-bottom: 1px solid #000;
            box-shadow: 0 1px 0 0 #000;
        }

        /* invalid color */
        .input-field input[type=text].invalid {
            border-bottom: 1px solid #000;
            box-shadow: 0 1px 0 0 #000;
        }

        /* icon prefix focus color */
        .input-field .prefix.active {
            color: #000;
        }
    </style>
    <script src="{{ asset("site/js/jquery-3.2.1.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("site/js/materialize.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("site/js/clipboard.min.js") }}" type="text/javascript"></script>
</head>

<body>
<div class="navbar-fixed">
    <nav class="teal" role="navigation">
        <div class="nav-wrapper" style="">
            <a href="{{ base_url('tool') }}"
               style="font-size: 15px; font-style: italic"
               class="show-on-small brand-logo hide-on-med-only hide-on-med-and-down hide-on-med-and-up hide-on-large-only">
                Simple Tool
            </a>
            <ul class="hide-on-med-and-down">
                @foreach($menuMain as $item)
                    <li>
                        <a class="white-text @if($active_menu == $item['active']) active @endif" href="{{ $item['link'] }}">
                            {!! $item['title'] !!}
                        </a>
                    </li>
                @endforeach
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
                                        <a style="text-indent: 20px" class="@if(!empty($sub_active_menu) && $sub_active_menu == $child['active']) blue-text text-darken-2 @endif"
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
            <div class="col l6 s12">
                <p class="grey-text text-lighten-4">Công cụ đổi font chữ Facebook online miễn phí với hơn 80 phông ĐẸP,
                    ĐỘC, LẠ. Hãy tạo điểm nhấn trong từng nét chữ với Facebook Text Generator</p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Category</h5>
                <ul>
                    <li><a class="white-text" href="{{ base_url('tool/facebook-icon') }}"><i
                                class="tiny material-icons">share</i> Facebook Icon</a></li>
                    <li><a class="white-text" href="{{ base_url('tool/facebook-text') }}"><i
                                class="tiny material-icons">share</i> Facebook Font</a></li>
                    <li><a class="white-text" href="{{ base_url('tool/generate-qrcode') }}"><i
                                class="tiny material-icons">share</i> Qr Code</a></li>
                    {{--                   <li><a class="white-text" href="{{ base_url('tool/generate-qrcode') }}"><i class="tiny material-icons">share</i> Rút gọn link</a></li>--}}
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Link</h5>
                <ul>
                    <li><a class="white-text" target="_blank" href="https://tweb.com.vn/collections"><i
                                class="tiny material-icons">share</i> Thiết kế website</a></li>
                    <li><a class="white-text" target="_blank" href="https://chomienphi.com.vn"><i
                                class="tiny material-icons">share</i> Rao vặt</a></li>
                    <li><a class="white-text" target="_blank" href="https://chomienphi.vn"><i
                                class="tiny material-icons">share</i> Mã giảm giá</a></li>
                    <li><a class="white-text" target="_blank" href="https://sanphamtienich.com"><i
                                class="tiny material-icons">share</i> Săn coupon</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a style="color: #ffd655" href="https://tweb.com.vn?utm_content=tool">Tình Nguyễn</a>
            | VPS sử dụng <a style="color: #ffd655" href="http://bit.ly/2kAezij" target="_blank">INET</a>
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
