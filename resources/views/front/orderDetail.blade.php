@extends('front.common')
@section('title', '景区售票系统我的订单-漆艳红')
@section('content')

    <div id="content">
        <div class="container">
            <div class="row" >
                <div class="col-sm-12" style="padding: 60px 0 140px 0">
                    <div style="width: 320px;margin: 0 auto">
                        <h2 class="text-center" style="font-size: 22px">2018毕业设计项目</h2>
                        <h1 class="text-center" style="font-size: 20px">旅游景点售票系统</h1>
                    </div>
                    <div style="width: 200px;margin: 0 auto">
                        {{--{!! QrCode::size(200)->generate(Request::url())!!}--}}
                        {!! QrCode::size(200)->encoding('UTF-8')->generate($data->order_No.'漆艳红的毕业设计')!!}
                    </div>
                    <div class="text-center" style="width: 320px;margin: 0 auto">
                        <p>打开扫码软件【扫一扫】</p>
                        <p>此二维码可以随意扫码，仅作为学习使用</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="newslatter">
            <div class="container">
                <div class="row">
                    <div class="col-ls-12">
                        <h3>2018毕业设计项目<span>- <strong>旅游景点售票系统<span style="font-size: 14px; font-weight: normal">漆艳红</span></strong></span></h3>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection