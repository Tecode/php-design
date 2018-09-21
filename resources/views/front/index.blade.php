@extends('front.common')
@section('title', '景区售票系统-漆艳红')
@section('content')
<section class="slid-sec">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 no-padding">
                    <div class="tp-banner-container">
                        <div class="tp-banner">
                            <ul>
                                @foreach($bannerData as $bannerItem)
                                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"
                                        data-saveperformance="off">
                                        <img src="{{asset($bannerItem->imgData->img_url)}}" alt="slider" data-bgposition="center bottom"
                                             data-bgfit="cover" data-bgrepeat="no-repeat">
                                        <div class="tp-caption sfr tp-resizeme"
                                             data-x="left" data-hoffset="60"
                                             data-y="center" data-voffset="-60"
                                             data-speed="800"
                                             data-start="1000"
                                             data-easing="Power3.easeInOut"
                                             data-splitin="chars"
                                             data-splitout="none"
                                             data-elementdelay="0.03"
                                             data-endelementdelay="0.1"
                                             data-endspeed="300"
                                             style="z-index: 6; font-size:50px; color:#1ba9ba; font-weight:800; white-space: nowrap;">
                                            {{$bannerItem->title}}
                                        </div>

                                        <div class="tp-caption sfl tp-resizeme"
                                             data-x="left" data-hoffset="60"
                                             data-y="center" data-voffset="10"
                                             data-speed="800"
                                             data-start="1200"
                                             data-easing="Power3.easeInOut"
                                             data-splitin="none"
                                             data-splitout="none"
                                             data-elementdelay="0.1"
                                             data-endelementdelay="0.1"
                                             data-endspeed="300"
                                             style="z-index: 7;  font-size:24px; color:#fafafa; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;">
                                            {{$bannerItem->discount}}
                                        </div>

                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption sfr tp-resizeme"
                                             data-x="left" data-hoffset="210"
                                             data-y="center" data-voffset="5"
                                             data-speed="800"
                                             data-start="1300"
                                             data-easing="Power3.easeInOut"
                                             data-splitin="chars"
                                             data-splitout="none"
                                             data-elementdelay="0.03"
                                             data-endelementdelay="0.4"
                                             data-endspeed="300"
                                             style="z-index: 5; font-size:36px; font-weight:800; color:#f60;  max-width: auto; max-height: auto; white-space: nowrap;">
                                            ¥{{$bannerItem->price}}
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption lfb tp-resizeme scroll"
                                             data-x="left" data-hoffset="60"
                                             data-y="center" data-voffset="80"
                                             data-speed="800"
                                             data-start="1300"
                                             data-easing="Power3.easeInOut"
                                             data-elementdelay="0.1"
                                             data-endelementdelay="0.1"
                                             data-endspeed="300"
                                             data-scrolloffset="0"
                                             style="z-index: 8;"><a href="{{ url('/detail/'.$bannerItem->id) }}" target="_blank" class="btn-round big">立刻预订</a></div>
                                    </li>
                                 @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="content">
    <section class="featur-tabs padding-top-60 padding-bottom-60">
        <div class="container">
            <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
                <li role="presentation" class="active"><a href="#featur" aria-controls="featur" role="tab"
                                                          data-toggle="tab">热门景点</a></li>
                <li role="presentation"><a href="#special" aria-controls="special" role="tab" data-toggle="tab">本地游</a>
                </li>
                <li role="presentation"><a href="#on-sal" aria-controls="on-sal" role="tab"
                                           data-toggle="tab">一日游</a></li>
            </ul>
            {{-- 热门景点--}}
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active fade in" id="featur">
                    <div class="item-slide-5 with-nav">
                        @foreach($hotData as $hotItem)
                            <div class="product">
                                <article>
                                    <div style="width: 184px;height: 184px;overflow: hidden">
                                        <img class="img-responsive" src="{{ asset($hotItem->imgData->img_url) }}" alt="">
                                    </div>
                                    <span class="sale-tag">优惠50%</span>
                                    <span class="tag">{{ $hotItem->discount }}</span> <a href="{{ url('/detail/'.$hotItem->id) }}" target="_blank" class="tittle">{{$hotItem->title}}</a>
                                    <p class="rev">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5分好评</span>
                                    </p>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Special -->
                <div role="tabpanel" class="tab-pane fade" id="special">
                    <!-- Items Slider -->
                    <div class="item-col-5">
                        @foreach($localData as $localItem)
                            <div class="product">
                                <article>
                                    <div style="width: 184px;height: 184px;overflow: hidden">
                                        <img class="img-responsive" src="{{ asset($localItem->imgData->img_url) }}" alt="">
                                    </div>
                                    <span class="sale-tag">优惠50%</span>
                                    <span class="tag">{{ $localItem->discount }}</span> <a href="{{ url('/detail/'.$localItem->id) }}" target="_blank" class="tittle">{{$localItem->title}}</a>
                                    <p class="rev">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5分好评</span>
                                    </p>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="on-sal">
                    <div class="item-col-5">
                        @foreach($dayData as $dayItem)
                            <div class="product">
                                <article>
                                    <div style="width: 184px;height: 184px;overflow: hidden">
                                        <img class="img-responsive" src="{{ asset($dayItem->imgData->img_url) }}" alt="">
                                    </div>
                                    <span class="sale-tag">优惠50%</span>
                                    <span class="tag">{{ $dayItem->discount }}</span> <a href="{{ url('/detail/'.$dayItem->id) }}" target="_blank" class="tittle">{{$dayItem->title}}</a>
                                    <p class="rev">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span class="margin-left-10">5分好评</span>
                                    </p>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding-top-60 padding-bottom-60">
        <div class="container">
            <div class="heading">
                <h2>旅游说明</h2>
                <hr>
            </div>
            {{--旅游说明--}}
            <div id="blog-slide" class="with-nav">
                @foreach($otherData as $otherItem)
                    <div class="blog-post">
                        <article><img class="img-responsive" src="{{ asset($otherItem->imgData->img_url) }}" alt="">
                            <a href="#." class="tittle">{{$otherItem->title}} </a>
                            <p>{{$otherItem->describe}}</p>
                            <a href="{{ url('/detail/'.$otherItem->id) }}" target="_blank">查看更多</a>
                        </article>
                    </div>
                @endforeach
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