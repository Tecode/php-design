<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/materialize/css/materialize.min.css') }}" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('admin/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('admin/js/Lightweight-Chart/cssCharts.css') }}">
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand waves-effect waves-dark" href="{{ url('admin/home') }}"><i class="large material-icons">track_changes</i> <strong>后台管理</strong></a>

            <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>管理员</b> <i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </nav>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> 登出</a>
        </li>
    </ul>
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a href="{{ url('admin/home') }}" class="waves-effect waves-dark"><i class="fa fa-dashboard"></i> 订单列表</a>
                </li>
                <li>
                    <a href="{{ url('admin/users') }}" class="waves-effect waves-dark"><i class="fa fa-desktop"></i> 用户列表</a>
                </li>
                <li>
                    <a href="{{ url('admin/tourisminfo') }}" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> 旅游说明</a>
                </li>
                <li>
                    <a href="{{ url('admin/tourismlist') }}" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> 景点信息</a>
                </li>
                <li>
                    <a href="{{ url('admin/comment') }}" class="waves-effect waves-dark"><i class="fa  fa-globe"></i> 旅游评价</a>
                </li>
            </ul>

        </div>

    </nav>
</div>
{{--页面内容--}}
    @yield('content')
{{--页面内容--}}
<script src="{{ asset('admin/js/jquery-1.10.2.js') }}"></script>

<!-- Bootstrap Js -->
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('admin/materialize/js/materialize.min.js') }}"></script>

<!-- Metis Menu Js -->
<script src="{{ asset('admin/js/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('admin/js/easypiechart.js') }}"></script>
<script src="{{ asset('admin/js/easypiechart-data.js') }}"></script>
<script src="{{ asset('admin/js/Lightweight-Chart/jquery.chart.js') }}"></script>
<script src="{{ asset('admin/js/custom-scripts.js') }}"></script>
{{--图片上传脚本--}}
<script src="{{ asset('admin/js/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('admin/js/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('admin/js/jquery.fileupload.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
{{--图片上传--}}
<script>
    window.imageData = [];
    $('#fileupload').fileupload({
        type: 'post',
        dataType: 'json',
        autoUpload: true,
        formData: {
            '_token': '{{csrf_token()}}'
        },
        add: function (e, data) {
            data.context = $('<p/>').text('Uploading...').appendTo(document.body);
            data.submit();
        },
        done: function (e, data) {
            window.imageData.push(data.result.url);
            $('#imageBox').append('<div class="col-md-4 col-sm-4">'
                +'<div class="card">'
                +'<div class="card-image waves-effect waves-block waves-light">'
                +'<img class="activator" src="'+data.result.url+'">'
                +'</div></div></div>');
            data.context.text('Upload finished.');
        }
    });
</script>
</body>

</html>
