@extends('front.common')
@section('title', '景区售票系统-漆艳红')
@section('content')
    <style>
        .complete{
            padding: 250px 0;
        }
        .complete h2{
            font-size: 20px;
            font-weight: normal;
            color: #ff3300;
        }
        .complete p a{
            color: #0088cc;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 complete">
                <h2 class="text-center">订单生成成功，你可以在订单列表查看你的订单。</h2>
                <p class="text-center">
                    <a href="{{url('/')}}">返回首页</a>
                    或者
                    <a href="{{url('/oderlist')}}">查看订单</a>
                </p>
            </div>
        </div>
    </div>
    <section class="newslatter">
        <div class="container">
            <div class="row">
                <div class="col-ls-12">
                    <h3>2018毕业设计项目<span>- <strong>旅游景点售票系统<span
                                        style="font-size: 14px; font-weight: normal">漆艳红</span></strong></span></h3>
                </div>
            </div>
        </div>
    </section>
@endsection