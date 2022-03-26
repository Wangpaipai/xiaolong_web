<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\AdminMenu;
use App\Models\Admin\SystemData;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function serviceView() {
        $systemData = new SystemData();
        $data = $systemData->getAll();
        return view("admin.service.index", ["data"=>$data]);
    }

    public function serviceSystem(Request $request) {
        $systemData = new SystemData();
        $data = $request->all();
        foreach ($data as $k=>$v) {
            $systemData->updateData($k, $v);
        }
        return responsSuccess([], "更新成功");
    }

}
