<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Scenic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourismListController extends Controller
{
    public function index()
    {
        return view('admin.tourismList', ['pageData' => Scenic::paginate(20)]);
    }
}
