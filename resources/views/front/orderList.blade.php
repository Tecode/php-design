@extends('front.common')
@section('title', '景区售票系统我的订单-漆艳红')
@section('content')

    <div id="content">

        <!-- Products -->
        <section class="padding-top-40 padding-bottom-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Short List -->
                        <div class="short-lst">
                            <h2>我的订单列表</h2>
                            <ul>
                                <li>
                                    <p>共有<span style="color: #f44336;padding: 0 5px">{{$count}}</span>条订单信息</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-list">
                            @if (count($orderData) == 0)
                                <p style="color: #f44336;padding-bottom: 60%">你还没有订单信息，赶快去订购吧！</p>
                            @endif
                            @foreach($orderData as $orderDatum)
                                <div class="product">
                                    <article>
                                        <div class="media-left">
                                            <div class="item-img" style="width: 270px;height: 185px">
                                                <img class="img-responsive" src="{{url($orderDatum->img_url ? $orderDatum->img_url : '')}}" alt="" >
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-sm-7"><a href="#." class="tittle">{{$orderDatum->title}}</a>
                                                    <!-- Reviews -->
                                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                                    <ul class="bullet-round-list">
                                                        <li>含旅游期间车费往返旅游</li>
                                                        <li>酒店安排为双人间，如遇旺季我社有权安排同级别酒店</li>
                                                        <li>导游服务费</li>
                                                        <li>全程的景点门票</li>
                                                    </ul>
                                                </div>
                                                <!-- Content Right -->
                                                <div class="col-sm-5 text-center"> <a href="#." class="heart"><i class="fa fa-heart"></i></a> <a href="#." class="heart navi"><i class="fa fa-navicon"></i></a>
                                                    <div class="position-center-center">
                                                        <div class="price">￥{{$orderDatum->price}}</div>
                                                        <p>数量: <span class="in-stock">{{$orderDatum->count}}</span></p>
                                                        @if($orderDatum->pay_status == '未支付')
                                                            <form action="{{url('/continue_pay/'.$orderDatum->order_id)}}" method="post">
                                                                <input type="hidden" value="{{$orderDatum->price}}" name="price"/>
                                                                <input type="hidden" value="{{$orderDatum->count}}" name="count" />
                                                                <button type="submit" style="border: none;background-color: #f73232" class="btn-round">立即支付</button>
                                                            </form>
                                                        @else
                                                            <a href="{{url('/orderDetail/'.$orderDatum->order_id)}}" class="btn-round">查看详情</a> </div>
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                        <div class="page_list" style="text-align: center">
                            {{ $orderData->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
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