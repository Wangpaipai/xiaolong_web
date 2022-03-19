<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Images extends Model
{
    use HasFactory;

    protected $table = 'images';

    public function getList() {
        Paginator::useBootstrap();
        return $this->orderBy("id", "desc")->paginate(10);
    }

    public function createData($data) {
        foreach ($data as $k=>$v) {
            $this->$k = $v;
        }

        $this->save();
    }

    public function deleteData($id) {
        $this->where("id", $id)->delete();
    }

    public function getOne($id) {
        return $this->where("id", $id)->first();
    }

    public function updateData($data) {
        $this->where("id", $data["id"])->update($data);
    }
}
