<?php
namespace App\Http\Controllers\Wap;

use App\Models\Wap\Images;

class ImagesController extends CommonController
{
    public function index() {
        view()->share("siteName", "工程图集");

        $images = new Images();
        $data = $images->getList()->toArray();

        return view("wap.images.index", ["data" => $data]);
    }

}
