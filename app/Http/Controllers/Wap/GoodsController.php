<?php
namespace App\Http\Controllers\Wap;

use App\Models\Wap\Goods;
use Illuminate\Http\Request;

class GoodsController extends CommonController
{
    public function index(Request $request) {
        $search = $request->get("search");

        view()->share("siteName", "商品列表");

        $goods = new Goods();
        $data = $goods->getProjectList($search)->toArray();

        return view("wap.goods.list", ["search" => $search, "data" => $data]);
    }

    public function detail($id){

        view()->share("siteName", "商品详情");

        $goods = new Goods();
        $data = $goods->getOne($id);
        $data->banner = json_decode($data->banner, true);

        return view("wap.goods.detail", ["data" => $data]);
    }

}
