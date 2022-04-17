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


    public function getProjectList($search) {
        return $this
            ->when($search, function ($query) use ($search) {
                if (!empty($search)) {
                    return $query->where("name", "like", "%" . $search . "%");
                }
            })
            ->orderBy("id", "desc")->paginate(10)->appends("search", $search);
    }

    public function getOne($id) {
        return $this->where('id', $id)->first();
    }
}
