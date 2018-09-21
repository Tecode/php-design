<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Comment;
use App\Http\Model\Order;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home', ['pageData' => Order::paginate(20)]);
    }
    public function deleteOrder($orderId) {
        $delete = Order::find($orderId)->delete();
        if ($delete) {
            return response()->json(['code' => 200, 'msg' => '删除成功']);
        } else {
            return response()->json('删除失败', 404, ['Content-type' => 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }
    public function comment(){
        return view('admin.comment', ['commentData' => Comment::where('show', 1)->paginate(20)]);
    }
    public function deletCommon($id) {
        $db = Comment::where('id', $id);
        $ok = $db->update(['show' => '0']);
        dd($ok);
        if($ok) {
            return ok;
        }
    }
}
