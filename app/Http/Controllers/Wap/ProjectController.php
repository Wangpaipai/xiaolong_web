<?php
namespace App\Http\Controllers\Wap;

use App\Models\Wap\Projects;
use Illuminate\Http\Request;

class ProjectController extends CommonController
{
    public function index(Request $request) {
        $search = $request->get("search");

        view()->share("siteName", "项目列表");

        $projects = new Projects();
        $data = $projects->getProjectList($search)->toArray();

        return view("wap.project.list", ["search" => $search, "data" => $data]);
    }

    public function detail($id){

        view()->share("siteName", "项目详情");

        $projects = new Projects();
        $data = $projects->getOne($id);

        return view("wap.project.detail", ["data" => $data]);
    }

}
