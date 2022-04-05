<?php

namespace App\Http\Controllers\Wap;

use App\Http\Controllers\Controller;
use App\Models\Wap\SystemData;

class CommonController extends Controller
{
    public function __construct() {
        $systemData = new SystemData();
        $all = $systemData->getAll();

        view()->share("system", $all);
    }
}
