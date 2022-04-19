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
        $data = $request->all();

        $reserves = new Reserves();
        $reserves->createdData($data);

        $param = [];
        $param[] = $data["name"];
        $param[] = $data["address"];
        $param[] = $data["mobile"];
        if (isset($data["goods_id"])) {
            $goods = new Goods();
            $goodsData = $goods->getOne($data["goods_id"]);
            $param[] = $goodsData->name;
        }

        $this->sendSms($this->receive_mobile, $param);

        return responsSuccess([], "预约成功");
    }

}
