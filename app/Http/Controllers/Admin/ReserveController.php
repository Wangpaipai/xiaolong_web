<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Reserves;

class ReserveController extends Controller
{
    public function list() {
        $reserve = new Reserves();
        $list = $reserve->getList();
        return view('admin.reserve.index', ['data' => $list]);
    }
}
