<!DOCTYPE html>
<html>
<head>
    <title>扫码支付-模拟支付</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=no"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/zhifu.css') }}">

    <script type="text/javascript" src="{{ asset('front/js/vendors/jquery/jquery.min.js') }}"></script>

</head>
<body>

<div class="header">
    <div class="all_w ">
        <div class="gofh">
            <a href="#">
                <img src="{{ asset('front/images/jt_03.jpg') }}"></a>
        </div>
    </div>
</div>
<div class="wenx_xx">
    <div class="mz">微信支付</div>
    <div class="zhifu_price">￥{{ ($data->count) * ($data->price) }}</div>
</div>
</div>
<a href="javascript:void(0);" class="ljzf_but all_w">立即支付</a>
<!--浮动层-->
<div class="ftc_wzsf">
    <div class="srzfmm_box">
        <div class="qsrzfmm_bt clear_wl">
            <img src="{{ asset('front/images/xx_03.jpg') }}" class="tx close fl">
            <img src="{{ asset('front/images/jftc_03.png') }}" class="tx fl">
            <span class="fl">请输入支付密码</span></div>
        <div class="zfmmxx_shop">
            <div class="mz">{{ $data->title }}</div>
            <div class="zhifu_price">￥{{ ($data->count) * ($data->price) }}</div>
        </div>
        <ul class="mm_box">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="numb_box">
        <div class="xiaq_tb">
            <img src="{{ asset('front/images/jftc_14.jpg') }}" height="10"></div>
        <ul class="nub_ggg">
            <li><a href="javascript:void(0);" class="zf_num">1</a></li>
            <li><a href="javascript:void(0);" class="zj_x zf_num">2</a></li>
            <li><a href="javascript:void(0);" class="zf_num">3</a></li>
            <li><a href="javascript:void(0);" class="zf_num">4</a></li>
            <li><a href="javascript:void(0);" class="zj_x zf_num">5</a></li>
            <li><a href="javascript:void(0);" class="zf_num">6</a></li>
            <li><a href="javascript:void(0);" class="zf_num">7</a></li>
            <li><a href="javascript:void(0);" class="zj_x zf_num">8</a></li>
            <li><a href="javascript:void(0);" class="zf_num">9</a></li>
            <li><a href="javascript:void(0);" class="zf_empty">清空</a></li>
            <li><a href="javascript:void(0);" class="zj_x zf_num">0</a></li>
            <li><a href="javascript:void(0);" class="zf_del">删除</a></li>
        </ul>
    </div>
    <div class="hbbj"></div>
</div>

<script type="text/javascript">
    $(function () {
        //出现浮动层
        $(".ljzf_but").click(function () {
            $(".ftc_wzsf").show();
        });
        //关闭浮动
        $(".close").click(function () {
            $(".ftc_wzsf").hide();
            $(".mm_box li").removeClass("mmdd");
            $(".mm_box li").attr("data", "");
            i = 0;
        });
        //数字显示隐藏
        $(".xiaq_tb").click(function () {
            $(".numb_box").slideUp(500);
        });
        $(".mm_box").click(function () {
            $(".numb_box").slideDown(500);
        });
        //----
        var i = 0;
        $(".nub_ggg li .zf_num").click(function () {

            if (i < 6) {
                $(".mm_box li").eq(i).addClass("mmdd");
                $(".mm_box li").eq(i).attr("data", $(this).text());
                i++
                if (i == 6) {
                    var data = "";
                    $(".mm_box li").each(function () {
                        data += $(this).attr("data");
                    });
                    $.ajax({
                        type: "post",
                        url: '/pay',
                        dataType: "json",
                        data: {wechat_p: data, no: '{{$data->order_No}}'},
                        success: function (res) {
                            alert("支付成功");
                            $('.ljzf_but').text('支付成功');
                            //支付成功
                            $('.close').click()
                        },
                        error: function (err) {
                            alert(err.responeseText);
                        }
                    });
                }
                ;
            }
        });

        $(".nub_ggg li .zf_del").click(function () {
            if (i > 0) {
                i--
                $(".mm_box li").eq(i).removeClass("mmdd");
                $(".mm_box li").eq(i).attr("data", "");
            }
        });

        $(".nub_ggg li .zf_empty").click(function () {
            $(".mm_box li").removeClass("mmdd");
            $(".mm_box li").attr("data", "");
            i = 0;
        });

    });
</script>

</body>
</html>
