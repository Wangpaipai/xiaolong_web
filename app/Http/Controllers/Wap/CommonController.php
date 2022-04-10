<?php

namespace App\Http\Controllers\Wap;

use App\Http\Controllers\Controller;
use App\Models\Wap\Projects;
use App\Models\Wap\SystemData;

class CommonController extends Controller
{
    public function __construct() {
        $systemData = new SystemData();
        $all = $systemData->getAll();

        view()->share("system", $all);

        $projects = new Projects();
        $projectTop6 = $projects->getProjectTop6();

        view()->share("project", $projectTop6);
    }
}
