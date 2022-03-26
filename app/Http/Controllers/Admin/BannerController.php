<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function bannerList() {
        $banner = new Banner();
        $list = $banner->getList();
        return view('admin.banner.index', ['data' => $list]);
    }

    public function bannerAddView() {
        return view('admin.banner.create');
    }

    public function bannerCreate(Request $request) {
        $all = $request->all();

        $banner = new Banner();
        $banner->createData($all);
        return responsSuccess([], "新增成功");
    }

    public function bannerRemove(Request $request) {
        $id = $request->get("id", 0);

        $banner = new Banner();
        $banner->deleteData($id);
        return responsSuccess([], "删除成功");
    }

    public function bannerEditView(Request $request) {
        $id = $request->get("id", 0);

        $banner = new Banner();
        return view("admin.banner.edit", ["data" => $banner->getOne($id)]);
    }

    public function bannerUpdate(Request $request) {
        $data = $request->all();
        $banner = new Banner();
        $banner->updateData($data);
        return responsSuccess([], "更新成功");
    }
}
