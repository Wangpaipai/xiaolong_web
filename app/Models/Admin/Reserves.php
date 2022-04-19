<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Reserves extends Model
{
    use HasFactory;

    protected $table = 'reserves';

    public function getList() {
        Paginator::useBootstrap();
        return $this->leftJoin("goods", "reserves.goods_id", "=", "goods.id")->select(
            "reserves.name", "reserves.mobile", "reserves.address", "reserves.created_at", "goods.name as goods_name"
        )->orderBy("reserves.id", "desc")->paginate(15);
    }

    public function getCount() {
        return $this->count();
    }
}
