<?php
namespace App\Http\Controllers\Wap;


use App\Models\Wap\About;

class AboutController extends CommonController
{
    public function index() {

        view()->share("siteName", "关于我们");

        $about = new About();
        $aboutData = $about->getOne();
        return view("wap.about.index", ["about" => $aboutData]);
    }

}
