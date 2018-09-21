<?php

namespace App\Http\Controllers\Front;

use App\Http\Model\Images;
use App\Http\Model\Scenic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    public function index($id)
    {
        function createData($data) {
            foreach ($data as $bannerItem) {
                $bannerItem['imgData'] = Images::where('scenic_id', $bannerItem['id'])->first();
            }
            return $data;
        }
        return view('front.detail', [
            'scenicData' => Scenic::find($id),
            'imgData' => Images::where('scenic_id', $id)->get(),
            'hotData' => createData(Scenic::where('hot', 1)->get()),
        ]);
    }
}
