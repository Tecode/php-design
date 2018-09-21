<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Scenic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourismInfoController extends Controller
{
    public function index()
    {
        {
            return view('admin.tourismInfo', ['infoData' => Scenic::where('other', 1)->get()]);
        }
    }
}
