@extends('front.common')
@section('title', '景区售票系统详情-漆艳红')

{{--内容--}}
@section('content')
<div id="content">

    <!-- Products -->
    <section class="padding-top-40 padding-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-detail">
                        <div class="product">
                            <div class="row">
                                <!-- Slider Thumb -->
                                <div class="col-xs-5">
                                    <article class="slider-item on-nav">
                                        <div class="thumb-slider">
                                            <ul class="slides">
                                                @foreach($imgData as $imgDatum)
                                                    <li data-thumb="{{ asset($imgDatum->img_url) }}"> <img src="{{ asset($imgDatum->img_url) }}" alt="" > </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Item Content -->
                                <div class="col-xs-7">
                                    <h5>{{$scenicData->title}}</h5>
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="row">
                                        <div class="col-sm-6"><span class="price">¥{{$scenicData->price}} </span></div>
                                        <div class="col-sm-6">
                                            <p>优惠信息: <span class="in-stock">{{$scenicData->discount}}</span></p>
                                        </div>
                                    </div>
                                    <!-- List Details -->
                                    <ul class="bullet-round-list">
                                        <li>产品编号：{{$scenicData->serialNo}}</li>
                                        <li>行程套餐：{{$scenicData->package}}</li>
                                        <li>浏览城市：{{$scenicData->city}}</li>
                                    </ul>
                                    <ul class="cmp-list">
                                        <li><a href="#."><i class="fa fa-heart"></i> 喜欢</a></li>
                                        <li><a href="#."><i class="fa fa-navicon"></i> 添加比较</a></li>
                                        <li><a href="#."><i class="fa fa-envelope"></i> 分享给朋友</a></li>
                                    </ul>
                                    <form action="{{url('/payOrder/'.$scenicData->id)}}">
                                    <div class="quinty">
                                        <input type="number" name="scenit_count" value="1">
                                    </div>
                                    <button style="border: none" type="submit" class="btn-round"><i class="icon-basket-loaded margin-right-5"></i> 立即订购</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Details Tab Section-->
                        <div class="item-tabs-sec">

                            <!-- Nav tabs -->
                            <ul class="nav" role="tablist">
                                <li role="presentation" class="active"><a href="#pro-detil"  role="tab" data-toggle="tab">费用说明</a></li>
                                <li role="presentation"><a href="#cus-rev"  role="tab" data-toggle="tab">景区说明</a></li>
                                <li role="presentation"><a href="#ship" role="tab" data-toggle="tab">预订须知</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="pro-detil">
                                    <!-- List Details -->
                                    <ul class="bullet-round-list">
                                        <li>1、往返程经济舱机票, 含机场建设费和燃油附加税</li>
                                        <li>2、空调旅游车，保证一人一个正座</li>
                                        <li>3、跟团游期间用车费用（自由活动中费用不包含）</li>
                                        <li>4、行程内所列餐食（飞机餐及行程中注明的自理餐除外）</li>
                                        <li>5、跟团游期间用车费用（根据实际人数安排车型）</li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="cus-rev">
                                    <ul class="bullet-round-list">
                                        <li>1、景区内禁止抽烟、乱丢垃圾！</li>
                                        <li>2、游客在旅途中如有意见，请真实认真填写旅游意见表，如返程后提出异议视为放弃投诉权力。</li>
                                        <li>3、异地旅游用餐较易引至水土不服,请游客自备常用药品。</li>
                                        <li>4、自由活动期间司机、导游可能无法提供服务敬请客人谅解。</li>
                                        <li>5、请各位贵宾在旅游途中仔细听取导游对景点的介绍，并牢记导游的提醒及警示。</li>
                                        <li>6、请各位贵宾在旅游途中随身携带贵重物品及现金。</li>
                                        <li>7、请于指定时间到达指定地点，见相关出团标志集中登车，如因游客自身原因导致误车，损失由游客自负，敬请谅解！
                                            </br>【产品说明】★本线路由重庆散客旅游集散中心直供，承诺不转团、铁定发团、百分百服务保障。重庆散客旅游集散中心是去哪儿网、携程旅行网等大型网站的核心供应商，向游客提供完善的旅游服务。
                                            </br>【人群说明】由于服务能力有限，为您的安全考虑，年龄超过78岁客人请谨慎购买；孕妇客人我处不接收，由此给您带来的不便敬请谅解！
                                            </br>【使用方法】节假日黄金周期间由于游客量大，在耳麦不够的情况下，我们将让导游用小蜜蜂扩音器为大家在景区讲解；
                                            </br>自拍杆充电宝不够的情况下可能不能为您提供，为此带来的不便，敬请谅解与支持，谢谢！</li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="ship">
                                    </br>•交通信息：
                                    </br>（1）合同一经签订且付全款，团队机票、列车票、船票即为出票，不得更改、签转、退票。
                                    </br>（2）飞行时间、车程时间、船程时间以当日实际所用时间为准。
                                    </br>（3）本产品如因淡季或收客人数较少，有可能与相近方向的发班线路拼车出游，届时请游客见谅。
                                    </br> •游　　览：
                                    </br>（1）景点游览、自由活动、购物店停留的时间以当天实际游览为准。
                                    </br>（2）行程中需自理门票和当地导游推荐项目，请自愿选择参加。
                                    </br>（3）请您仔细阅读本行程，根据自身条件选择适合自己的旅游线路，出游过程中，如因身体健康等自身原因需放弃部分行程的，或游客要求放弃部分住宿、交通的，均视为自愿放弃，已发生费用不予退还，放弃行程期间的人身安全由旅游者自行负责。
                                    </br>（4）团队游览中不允许擅自离团（自由活动除外），中途离团视同游客违约，按照合同总金额的20%赔付旅行社，由此造成未参加行程内景点、用餐、房、车等费用不退，旅行社亦不承担游客离团时发生意外的责任。
                                    </br>（5）如遇台风、暴雪等不可抗因素导致无法按约定行程游览，行程变更后增加或减少的费用按旅行社团队操作实际发生的费用结算。
                                    </br>（6）出游过程中，如产生退费情况，以退费项目旅行社折扣价为依据，均不以挂牌价为准。
                                    </br>•购　　物： 当地购物时请慎重考虑，把握好质量与价格，务必索要发票。
                                    </br>•差价说明：
                                    </br>（1）如遇国家政策性调整门票、交通价格等，按调整后的实际价格结算。
                                    </br>（2）赠送项目因航班、天气等不可抗因素导致不能赠送的，费用不退。
                                    </br>（3）如遇区域性促销活动，产生不同预订城市价格差异，差价不予退还。
                                    </br>•出团通知： 出团通知最晚于出团前1天发送，若能提前确定，我们将会第一时间通知您。
                                    </br>•意见反馈： 请配合导游如实填写当地的意见单，不填或虚填者归来后投诉将无法受理。
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Related Products -->
                    <section class="padding-top-30 padding-bottom-0">
                        <!-- heading -->
                        <div class="heading">
                            <h2>热门推荐</h2>
                            <hr>
                        </div>
                        <!-- Items Slider -->
                        <div class="item-slide-4 with-nav">
                            @foreach($hotData as $hotDatum)
                                <div class="product">
                                    <article>
                                        <div style="width: 242px;height: 200px;overflow: hidden">
                                            <img class="img-responsive" src="{{url($hotDatum->imgData['img_url'])}}" alt="" >
                                        </div>
                                        <!-- Content -->
                                        <span class="tag" style="color: #f73232">hot</span> <a href="{{url('/detail/'.$hotDatum->id)}}" class="tittle">{{$hotDatum->title}}</a>
                                        <!-- Reviews -->
                                        <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                        <div class="price">￥{{$hotDatum->price}} </div>
                                        <a href="{{url('/detail/'.$hotDatum->id)}}" class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                                </div>
                            @endforeach
                        </div>
                    </section>
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