<?php

namespace App\Models\Wap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Projects extends Model
{
    use HasFactory;

    protected $table = 'projects';

    public function getProjectTop6() {
        Paginator::useBootstrap();
        return $this->orderBy("date", "desc")->limit(6)->get();
    }
}
