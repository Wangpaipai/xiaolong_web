<?php

namespace App\Models\Wap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\Paginator;

class Goods extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'goods';

    public function getGoodsList() {
        return $this->orderBy("id", "desc")->limit(6)->get();
    }

    public function getCount() {
        return $this->count();
    }
}
