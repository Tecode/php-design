<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>订单支付</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/pay.css') }}">
</head>


<body>
<!-- shortcut -->
<div class="shortcut">
    <div class="w">
        <a class="s-logo" href="/" target="_blank" psa="PCashier_jd">
            <img width="320" alt="支付" src=" {{ asset('front/images/logo.jpg') }}">
        </a>
        <span class="clr"></span>
    </div>
</div>

<div class="main">
    <div class="w">
        <!-- order 订单信息 -->
        <div class="order clearfix order-init order-init-oldUser-noQrcode">
            <!-- 订单信息 -->
            <div class="o-left"><h3 class="o-title">订单提交成功，请尽快付款！订单号：{{ $order_No  }}</h3>

                <p class="o-tips">
                    <span class="o-tips-time" id="deleteOrderTip"></span>

                </p>
            </div>
            <!-- 订单信息 end --><!-- 订单金额 -->
            <div class="o-right">
                <div class="o-price"><em>应付金额</em><strong>{{ $prices }}</strong><em>元</em></div>
            </div>
            <!-- 订单金额 end -->
            <div class="o-list j_orderList" id="listPayOrderInfo"><!-- 单笔订单 -->

                <!-- 多笔订单 end -->
            </div>
        </div>
        <!-- order 订单信息 end -->

        <!-- payment 支付方式选择 -->
        <div class="payment">
            <!-- 微信支付 -->
            <div class="pay-weixin">
                <div class="p-w-hd">微信支付</div>
                <div class="p-w-bd" style="position:relative">
                    <div class="j_weixinInfo" style="position:absolute; top: -36px; left: 130px;">距离二维码过期还剩<span
                                class="j_qrCodeCountdown font-bold font-red">120</span>秒，过期后请刷新页面重新获取二维码。
                    </div>
                    <div class="p-w-box">
                        <div class="pw-box-hd">
                            {!! QrCode::size(298)->encoding('UTF-8')->generate(asset('/scan_code/?no='.$order_No))!!}
                        </div>
                        <div class="pay_success" style="background-color: #baf5b6;display: none; padding: 20px 0;text-align: center;font-size: 20px;">支付成功</div>
                        <div class="pw-box-ft">
                            <p>请使用微信扫一扫</p>
                            <p>扫描二维码支付</p>
                        </div>
                    </div>
                    <div class="p-w-sidebar"></div>
                </div>
            </div>
        </div>
        <!-- payment 支付方式选择 end -->
    </div>
</div>

<!-- 收银台 footer -->
<div class="p-footer">
    <div class="pf-wrap w">
        <div class="pf-line">
            <span class="pf-l-copyright">Copyright © 2004-2018 微信支付 版权所有</span>
            <img width="185" height="20" src="{{ asset('front/images/footer-auth.png') }} ">
            <span class="ml40">由网银在线（北京）科技有限公司提供技术支持</span>
        </div>
    </div>
    <script src="{{ asset('front/js/vendors/jquery/jquery.min.js') }}"></script>
    <script>
        $(function () {
            var startTime = 0;
            var timer = setInterval(function () {
                ++startTime;
                $('.j_qrCodeCountdown').text(120 - startTime);
                if (startTime % 2 === 0){
                    $.ajax({
                        type: "get",
                        url: '/pay',
                        data: {no: '{{$order_No}}'},
                        dataType: "json",
                        success: function () {
                            $('.pw-box-ft').hide();
                            $('.pay_success').show();
                            clearInterval(timer);
                            setTimeout(function () {
                                window.location.href = '/oderlist';
                            }, 3000)
                        }
                    });
                }
                if(startTime == 120) {
                    clearInterval(timer);
                }
            }, 1000)
        })
    </script>
</div>
</body>
</html>