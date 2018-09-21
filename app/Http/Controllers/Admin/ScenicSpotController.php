<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Images;
use App\Http\Model\Scenic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScenicSpotController extends Controller
{
    public function index()
    {
        return view('admin.addscenicspot');
    }
    //图片上传方法
    public function upload(Request $request){
        if ($request->hasFile('Filedata') && $request->file('Filedata')->isValid()) {
            $photo = $request->file('Filedata');
            $extension = $photo->extension();
            //$store_result = $photo->store('photo');
            $image_name = str_random(random_int(20,30)).'.'.$extension;
            $store_result = $photo->storeAs('public', $image_name);
            return response()->json([
                'url' => '/storage/'.$image_name,
                'code' => '200100',
            ], 200, ['Content-type' => 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }
    //保存景点信息
    public function store(Request $request) {
        $requestData = $request->all();
        $create = Scenic::create([
            'title' => $requestData['title'],
            'price' => $requestData['price'],
            'number' => $requestData['number'],
            'city' => $requestData['city'],
            'package' => $requestData['package'],
            'describe' => $requestData['describe'],
            'discount' => $requestData['discount'],
            'recommend' => $requestData['recommend'],
            'hot' => $requestData['hot'],
            'local' => $requestData['local'],
            'day' => $requestData['day'],
            'date_time' => $requestData['date_time'],
            'serialNo' => mt_rand(1000000000,9999999999),
            'timestamp' => time(),
        ]);
        if ($create['id']) {
            $imageData = explode(',', $request['images']);
            // 保存图片到另一张表
            if ($imageData[0]) {
                foreach($imageData as $image) {
                    Images::insert([
                        'scenic_id' => $create['id'],
                        'img_url' => $image,
                        'timestamps' => time()
                    ]);
                }
            }
            return response()->json(['code' => 200, 'msg' => '新增景点成功']);
        } else {
            return response()->json(['msg' => '新增景点失败', 'code' => '404400', 'text' => '请稍后重试'], 404, ['Content-type' => 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }
    // 展示编辑的景点
    public function edit($id) {
        return view('admin.updatescenicspot', [
            'scenicData' => Scenic::find($id),
            'imgData' => Images::where('scenic_id', $id)->get()
        ]);
    }
    // 编辑景点信息保存
    public function update(Request $request, $id) {
        $requestData = $request->all();
        $update = Scenic::find($id)->update([
            'title' => $requestData['title'],
            'price' => $requestData['price'],
            'number' => $requestData['number'],
            'city' => $requestData['city'],
            'package' => $requestData['package'],
            'describe' => $requestData['describe'],
            'discount' => $requestData['discount'],
            'recommend' => $requestData['recommend'],
            'hot' => $requestData['hot'],
            'local' => $requestData['local'],
            'day' => $requestData['day'],
            'other' => $requestData['other'],
            'date_time' => $requestData['date_time'],
            'serialNo' => abs(mt_rand(1000000000,9999999999)),
            'timestamp' => time(),
        ]);
        if ($update) {
            $imageData = explode(',', $request['images']);
            // 保存图片到另一张表
            if ($imageData[0]) {
                foreach($imageData as $image) {
                    Images::insert([
                        'scenic_id' => $id,
                        'img_url' => $image,
                        'timestamps' => time()
                    ]);
                }
            }
            return response()->json(['code' => 200, 'msg' => '保存景点成功']);
        } else {
            return response()->json(['msg' => '保存景点失败', 'code' => '404400', 'text' => '请稍后重试'], 404, ['Content-type' => 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }
    // 删除景点信息
    public function destroy($id) {
        $delete = Scenic::find($id)->delete();
        if ($delete) {
            return response()->json(['code' => 200, 'msg' => '删除成功']);
        } else {
            return response()->json('删除失败', 404, ['Content-type' => 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }
    // delete images
    public function deleteImage($id) {
        $delete = Images::find($id)->delete();
        if ($delete) {
            return response()->json(['code' => 200, 'msg' => '删除成功']);
        } else {
            return response()->json('删除失败', 404, ['Content-type' => 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }
}
