<?php
namespace App\Http\Controllers\Wap;

use App\Models\Wap\ServiceData;

class ServiceController extends CommonController
{
    public function index() {

        view()->share("siteName", "服务");

        // 服务
        $serviceData = new ServiceData();
        $service = $serviceData->getTitleAll(["title1", "title2", "title3", "describe1", "describe2", "describe3"]);
        // 品质
        $quality = $serviceData->getTitleAll(["title4", "title5", "title6", "title7", "describe4", "describe5", "describe6", "describe7"]);
        // 特色
        $features = $serviceData->getTitleAll(["title8", "title9", "title10", "title11", "describe8", "describe9", "describe10", "describe11"]);

        return view("wap.service.index", ["service" => $service, "quality" => $quality, "features" => $features]);
    }

}
