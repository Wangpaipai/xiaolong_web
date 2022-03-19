<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function goodsList() {
        $goods = new Goods();
        $list = $goods->getGoodsList();
        return view('admin.goods.index', ['data' => $list]);
    }

    public function goodsRemove(Request $request) {
        $id = $request->get("id", 0);
        $goods = new Goods();
        $goods->deleteGoods($id);

        return responsSuccess([], "删除成功");
    }

    public function addGoodsView() {
        return view("admin.goods.add");
    }

    public function editGoods(Request $request) {
        $id = $request->get("id", 0);
        $goods = new Goods();
        return view("admin.goods.edit", ["data" => $goods->getOne($id)]);
    }

    public function updateGoods(Request $request) {
        $data = $request->all();
        $goods = new Goods();
        $goods->updateGoods($data);
        return responsSuccess([], "更新成功");
    }

    public function createGoods(Request $request) {
        $data = $request->all();

        $foods = new Goods();
        $foods->createGoods($data);
        return responsSuccess([], "新增成功");
    }
}
