<?php
namespace App\Http\Controllers\Wap;


use App\Http\Controllers\Wap\Service\SmsService;
use App\Models\Wap\Goods;
use App\Models\Wap\Reserves;
use Illuminate\Http\Request;

class ContactController extends CommonController
{
    use SmsService;

    public function index() {
        view()->share("siteName", "联系我们");

        return view("wap.contact.index");
    }

    public function submit(Request $request) {
        $data["mobile"] = $request->get("mobile");
        $data["address"] = $request->get("address");
        $data["name"] = $request->get("name");

        $param = [];
        $param[] = $data["name"];
        $param[] = $data["address"];
        $param[] = $data["mobile"];

        if (!empty($request->get("goods_id"))) {
            $data["goods_id"] = $request->get("goods_id");

            $goods = new Goods();
            $goodsData = $goods->getOne($data["goods_id"]);
            $param[] = $goodsData->name;
        }

        $reserves = new Reserves();
        $reserves->createdData($data);

        $this->sendSms($this->receive_mobile, $param);

        return responsSuccess([], "预约成功");
    }

}
