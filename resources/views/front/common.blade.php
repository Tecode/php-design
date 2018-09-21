<!doctype html>
<html class="no-js" lang="zh-cn">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="M_Adnan"/>
    <title>@yield('title')</title>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/rs-plugin/css/settings.css') }}" media="screen"/>

    <!-- StyleSheets -->
    <link rel="stylesheet" href="{{ asset('front/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">

    <!-- 在线字体 -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
          rel="stylesheet">


    <!-- JavaScripts脚本 -->
    <script src="{{ asset('front/js/vendors/modernizr.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Page Wrapper -->
<div id="wrap" class="layout-1">

    <!-- Top bar -->
    <div class="top-bar">
        <div class="container">
            @if (Auth::guest())
                <p>游客，欢迎你！</p>
            @else
                <p>亲爱的{{ Auth::user()->name  }}，欢迎回来！</p>
            @endif
            <div class="right-sec">
                <ul>
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">登录</a></li>
                        <li><a href="{{ route('register') }}">注册</a></li>
                    @else
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" >退出登录 </a></li>
                    @endif
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <!-- Nav -->
        <nav class="navbar ownmenu">
            <div class="container">
                <!-- Navbar Header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#nav-open-btn" aria-expanded="false"><span><i class="fa fa-navicon"></i></span>
                    </button>
                </div>
                <!-- NAV -->
                <div class="collapse navbar-collapse" id="nav-open-btn">
                    <ul class="nav">
                        <li><a href="/">首页 </a></li>
                    <!-- <li><a href="{{ url('/ticket') }}"> 门票 </a></li>-->
                        <li><a href="{{ url('/oderlist') }}"> 我的订单 </a></li>
                        <li><a href="#"> 联系我们 </a></li>
                    </ul>
                </div>

                <!-- NAV RIGHT -->
                <div class="nav-right">
                    <span class="call-mun">
                        <i class="fa fa-phone"></i>
                        <strong>热线电话:</strong>
                        (+023) 123 456 7890
                    </span>
                </div>
            </div>
        </nav>
    </header>
    {{--页面内容--}}
    @yield('content')
    {{--页面内容--}}
    <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
</div>
<script src="{{ asset('front/js/vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/vendors/wow.min.js') }}"></script>
<script src="{{ asset('front/js/vendors/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/vendors/own-menu.js') }}"></script>
<script src="{{ asset('front/js/vendors/jquery.sticky.js') }}"></script>
<script src="{{ asset('front/js/vendors/owl.carousel.min.js') }}"></script>

<!-- 轮播图  -->
<script type="text/javascript" src="{{ asset('front/rs-plugin/js/jquery.tp.t.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/rs-plugin/js/jquery.tp.min.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>
</body>
</html>
