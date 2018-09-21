<?php

namespace App\Http\Controllers\Front;

use App\Http\Model\Images;
use App\Http\Model\Scenic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // 中间件（如果没有登录会跳转页面到登录页）
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        function createData($data) {
            foreach ($data as $bannerItem) {
                $bannerItem['imgData'] = Images::where('scenic_id', $bannerItem['id'])->first();
            }
            return $data;
        }
        return view('front.index', [
            'bannerData' => createData(Scenic::where('recommend', 1)->get()),
            'hotData' => createData(Scenic::where('hot', 1)->get()),
            'localData' => createData(Scenic::where('local', 1)->get()),
            'dayData' => createData(Scenic::where('day', 1)->get()),
            'otherData' => createData(Scenic::where('other', 1)->get()),
        ]);
    }
}
