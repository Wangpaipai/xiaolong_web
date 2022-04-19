<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\Paginator;

class Goods extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'goods';

    public function getGoodsList() {
        Paginator::useBootstrap();
        return $this->orderBy("id", "desc")->paginate(10);
    }

    public function createGoods($data) {
        foreach ($data as $k=>$v) {
            $this->$k = $v;
        }

        $this->save();
    }

    public function deleteGoods($id) {
        $this->where("id", $id)->delete();
    }

    public function getOne($id) {
        return $this->where("id", $id)->first();
    }

    public function updateGoods($data) {
        $this->where("id", $data["id"])->update($data);
    }

    public function getCount() {
        return $this->count();
    }
}
