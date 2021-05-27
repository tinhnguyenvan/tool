<!DOCTYPE html>
<html lang="en">
<head>
    @include('site.element.head')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset("site/css/materialize.min.css") }}" rel="stylesheet" media="screen,projection"/>
    <style>
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

    </style>
    <script src="{{ asset("site/js/jquery-3.2.1.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("site/js/materialize.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("site/js/clipboard.min.js") }}" type="text/javascript"></script>
</head>

<body>
<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <ul class="hide-on-med-and-down">
                @foreach(\TinhPHP\Tool\Models\Nav::menuMain() as $item)
                    <li>
                        <a class="@if($active_menu == $item['active']) active @endif" href="{{ $item['link'] }}">
                            {!! $item['title'] !!}
                        </a>
                    </li>
                @endforeach
            </ul>

            <ul id="nav-mobile" class="sidenav">
                @foreach(\TinhPHP\Tool\Models\Nav::menuMain() as $item)
                    <li>
                        <a class="@if($active_menu == $item['active']) active @endif" href="{{ $item['link'] }}">
                            {!! $item['title'] !!}
                        </a>
                    </li>
                @endforeach
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
        </div>
    </nav>
</div>

<div class="container">
    <div class="section">

        @yield('content')

    </div>
</div>


<footer class="page-footer teal">
    <!--
   <div class="container">
       <div class="row">
           <div class="col l6 s12">
               <h5 class="white-text">Company Bio</h5>
               <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's
                   our full time job. Any amount would help support and continue development on this project and is
                   greatly appreciated.</p>
           </div>
           <div class="col l3 s12">
               <h5 class="white-text">Settings</h5>
               <ul>
                   <li><a class="white-text" href="#!">Link 1</a></li>
                   <li><a class="white-text" href="#!">Link 2</a></li>
                   <li><a class="white-text" href="#!">Link 3</a></li>
                   <li><a class="white-text" href="#!">Link 4</a></li>
               </ul>
           </div>
           <div class="col l3 s12">
               <h5 class="white-text">Connect</h5>
               <ul>
                   <li><a class="white-text" href="#!">Link 1</a></li>
                   <li><a class="white-text" href="#!">Link 2</a></li>
                   <li><a class="white-text" href="#!">Link 3</a></li>
                   <li><a class="white-text" href="#!">Link 4</a></li>
               </ul>
           </div>
       </div>
   </div>-->
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
