<?php
namespace App\Http\Controllers\Wap;


use App\Models\Wap\Banner;
use App\Models\Wap\Goods;
use App\Models\Wap\Projects;
use App\Models\Wap\ServiceData;

class IndexController extends CommonController
{
    public function index() {
        // banner
        $banner = new Banner();
        $bannerList = $banner->getList();

        // 服务
        $serviceData = new ServiceData();
        $service = $serviceData->getTitleAll(["title1", "title2", "title3", "describe1", "describe2", "describe3"]);
        // 品质
        $quality = $serviceData->getTitleAll(["title4", "title5", "title6", "title7", "describe4", "describe5", "describe6", "describe7"]);
        // 特色
        $features = $serviceData->getTitleAll(["title8", "title9", "title10", "title11", "describe8", "describe9", "describe10", "describe11"]);

        $count = [];
        $projects = new Projects();
        $count["project"] = $projects->getCount();

//        $projectTop6 = $projects->getProjectTop6();
        $goods = new Goods();
        $goodsList = $goods->getGoodsList();
        $count["goods"] = $goods->getCount();
        $data = [
            "banner" => $bannerList,
            "service" => $service,
            "quality" => $quality,
            "features" => $features,
            "goods" => $goodsList,
            "count" => $count
        ];

        view()->share("siteName", "首页");

        return view("wap.index", $data);
    }

    public function map() {
        return view("wap.map");
    }

}
