<?php

namespace App\Models\Wap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners';

    public function getList() {
        Paginator::useBootstrap();
        return $this->orderBy("id", "desc")->get();
    }
}
