<?php

namespace App\Http\Controllers\Front;

use App\Http\Model\Images;
use App\Http\Model\Order;
use App\Http\Model\Scenic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class OrderListController extends Controller
{
    public function index(Request $request)
    {
        if ($request->user()) {
            return view('front.orderList', [
                'orderData' => Order::where('user_id', $request->user()['user_id'])->paginate(5),
                'count' => Order::where('user_id', $request->user()['user_id'])->count()
            ]);
        } else {
            echo('<h1 style="
                font-weight: normal;
                text-align: center;
                margin-top: 40px;
                font-size: 18px">对不起，你还没有<a style="color: #00A8FF" href="/login">登录</a>，<a style="color: #00A8FF" href="/login">登录</a>以后可以查看自己的订单。</h1>');
        }
    }

    public function payOrder(Request $request, $scenicId)
    {
        return view('front.orderPay', [
            'data' => Scenic::find($scenicId),
            'count' => $request['scenit_count'] && $request['scenit_count'] > 0 ? $request['scenit_count'] : 0
        ]);
    }

    public function createOrder(Request $request, $scenicId)
    {
        if ($request->user()) {
            $data = $request->user();
            $createOrder = Order::create([
                'order_No' => abs(mt_rand(1000000000000, 9999999999999)),
                'pay_status' => '未支付',
                'timestamp' => time(),
                'user_id' => $data['user_id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'scenic_id' => $scenicId,
                'count' => $request['count'],
                'price' => $request['price'],
                'title' => Scenic::find($scenicId)['title'],
                'img_url' => Images::where('scenic_id', $scenicId)->first()['img_url'],
            ]);
            if ($createOrder) {
                return view('front.payPage', [
                    'order_No' => $createOrder['order_No'],
                    'prices' => $createOrder['price']*$createOrder['count']
                ]);
            } else {
                echo('<h1 style="
                    font-weight: normal;
                    text-align: center;
                    margin-top: 40px;
                    font-size: 18px">数据库读取失败，请稍后再试。</h1>');
            }
        }
        echo('<h1 style="
                font-weight: normal;
                text-align: center;
                margin-top: 40px;
                font-size: 18px">对不起，你还没有<a style="color: #00A8FF" href="/login">登录</a>，生成订单失败！</h1>');
    }
    public function orderDetail($orderId) {
        return(view('front.orderDetail', ['data' => Order::find($orderId)]));
    }
    public function scanCode(Request $request)
    {
        return (view('front.scanCode', ['data' => Order::where('order_No', $request['no'])->first()]));
    }
    public function isPay(Request $request){
        if(Order::where('order_No', $request['no'])->first()['pay_status'] === '已支付') {
            return response()->json(['code' => 1, 'msg' => '支付成功']);
        }
        return response()->json(['msg' => '未支付', 'code' => '404400'], 404, ['Content-type' => 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }
    public function pay(Request $request){
        if (Order::where('order_No', $request['no'])->first()['pay_status'] == '已支付'){
            return ('重复支付');
        }
        $order = Order::where('order_No', $request['no'])
            ->first()
            ->update(['pay_status'=> '已支付', 'wechat_p'=>$request['wechat_p']]);
        if($order) {
            return response()->json(['code' => 1, 'msg' => '支付成功']);
        }
        return response()->json(['msg' => '支付失败', 'code' => '404400'], 404, ['Content-type' => 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }
    public function continuePay($orderId){
        $orderData =  Order::find($orderId);
        return view('front.payPage', [
            'order_No' => $orderData['order_No'],
            'prices' => $orderData['price']*$orderData['count']
        ]);
    }
    }
