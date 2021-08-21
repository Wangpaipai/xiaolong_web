<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminMenu;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

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
        return view('admin.dashboard');
    }

}
