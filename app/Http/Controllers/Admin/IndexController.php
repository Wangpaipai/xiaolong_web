<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\AdminMenu;
use App\Models\Admin\Goods;
use App\Models\Admin\Images;
use App\Models\Admin\Projects;
use App\Models\Admin\Reserves;
use App\Models\Admin\SystemData;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * 首页
     * Created by:Lxj
     * Created at:2021/8/21 1:09
     * @return Application|Factory|View
     */
    public function index() {
        $adminMenu = new AdminMenu();
        $menu = $adminMenu->queryLevelMenuList(1)->toArray();
        foreach ($menu as &$value) {
            $value['child'] = $adminMenu->queryParentIdMenuList($value['id'])->toArray();
        }

        return view('admin.index', [
            'menu' => $menu
        ]);
    }

    public function dashboard() {
        $projects = new Projects();
        $data["project"] = $projects->getCount();

        $goods = new Goods();
        $data["goods"] = $goods->getCount();

        $images = new Images();
        $data["images"] = $images->getCount();

        $reserve = new Reserves();
        $data["reserve"] = $reserve->getCount();

        return view('admin.dashboard', ["data" => $data]);
    }

    public function systemView() {
        $systemData = new SystemData();
        $data = $systemData->getAll();
        return view("admin.system.index", ["data"=>$data]);
    }

    public function updateSystem(Request $request) {
        $systemData = new SystemData();
        $data = $request->all();
        foreach ($data as $k=>$v) {
            $systemData->updateData($k, $v);
        }
        return responsSuccess([], "更新成功");
    }

    function about() {
        $about = new About();
        $data = $about->getOne();
        $data->value = htmlspecialchars_decode($data->value);
        return view("admin.about.index", ["data"=>$data->toArray()]);
    }

    function updateAbout(Request $request) {
        $about = new About();
        $about->updateData($request->get("about"));
        return responsSuccess([], "更新成功");
    }

}
