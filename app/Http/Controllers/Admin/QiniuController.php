<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Service\Qiniu;
use App\Http\Controllers\Controller;

class QiniuController extends Controller
{
    public function getToken() {
        $qiniu = new Qiniu();
        return $qiniu->token();
    }

}
