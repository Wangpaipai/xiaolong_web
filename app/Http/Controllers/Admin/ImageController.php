<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Images;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function imageList() {
        $images = new Images();
        $list = $images->getList();
        return view('admin.image.index', ['data' => $list]);
    }

    public function imageAddView() {
        return view('admin.image.create');
    }

    public function imageCreate(Request $request) {
        $all = $request->all();

        $images = new Images();
        $images->createData($all);
        return responsSuccess([], "新增成功");
    }

    public function imageRemove(Request $request) {
        $id = $request->get("id", 0);

        $images = new Images();
        $images->deleteData($id);
        return responsSuccess([], "删除成功");
    }



    public function imagEditView(Request $request) {
        $id = $request->get("id", 0);

        $images = new Images();
        return view("admin.image.edit", ["data" => $images->getOne($id)]);
    }

    public function imageUpdate(Request $request) {
        $data = $request->all();
        $images = new Images();
        $images->updateData($data);
        return responsSuccess([], "更新成功");
    }
}
