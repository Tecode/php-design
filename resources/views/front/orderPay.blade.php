@extends('front.common')
@section('title', '景区售票系统-漆艳红')
@section('content')
    <div id="content">
        <section style="margin-top: 40px" class="padding-top-60 padding-bottom-60">
            <div class="container">
                <div class="row" style="margin: 0 40px">
                    <div class="heading">
                        <h2>南川金佛山.金佛寺.天星小镇1日游 赏雪滑雪.含往返索道换车</h2>
                        <hr>
                    </div>
                    <div class="team">
                        <div class="col-sm-12">
                            <div class="progress-bars">
                                <div class="bar">
                                    <div class="row">
                                        <div class="col-sm-12" >
                                            <ul class="order_info" style="list-style: circle">
                                                <li>
                                                    游玩日期&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span style="color: #00afc7;margin-bottom: 0">游玩日期:{{$data->date_time}}</span>
                                                    请在游玩前1天的23:00前完成预订
                                                </li>
                                                <li>
                                                    已选规格&nbsp;&nbsp;&nbsp;&nbsp;成人 07:00 不含餐 VIP纯玩
                                                </li>
                                                <li>
                                                    购买张数&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #f73232">{{$count}}张</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="heading">
                        <h2>订单须知</h2>
                        <hr>
                    </div>
                    <div class="team">
                        <div class="col-sm-12">
                            <div class="progress-bars">
                                <div class="bar">
                                    <div class="row">
                                        <div class="col-sm-12" >
                                            <ul class="order_info" style="list-style: decimal ">
                                                <li>
                                                    在消费者与供应商达成退款共识后，经去哪儿网核实退款申请无误且材料完整，1个工作日内完成退款操作（根据银行的不同会在3-15个工作日内到账）
                                                </li>
                                                <li>
                                                    商家承诺与消费者在交易过程中利用400电话/TQ工具进行沟通时向消费者描述的内容真实有效
                                                </li>
                                                <li>
                                                    有效期内，未验证消费 随时退款
                                                </li>
                                                <li>
                                                    因卖家原因导致买家无法正常出行，买家提供有效凭证后，卖家承担损失
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="heading">
                        <h2>订单总额：<span style="color: #ff6800">¥{{$data['price']*$count}}({{$count}}张)</span></h2>
                        <hr>
                    </div>
                    <div class="text-center">
                        <form action="{{url('/payOrder/'.$data->id)}}" method="post">
                            <input type="hidden" value="{{$data['price']}}" name="price"/>
                            <input type="hidden" value="{{$count}}" name="count" />
                            <button style="border: none" type="submit" href="#." class="btn-round">支付订单</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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