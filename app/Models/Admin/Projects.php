<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Projects extends Model
{
    use HasFactory;

    protected $table = 'projects';

    public function getProjectList() {
        Paginator::useBootstrap();
        return $this->orderBy("date", "desc")->paginate(10);
    }

    public function createProject($data) {
        foreach ($data as $k=>$v) {
            $this->$k = $v;
        }

        $this->save();
    }

    public function deleteProject($id) {
        $this->where("id", $id)->delete();
    }

    public function getOne($id) {
        return $this->where("id", $id)->first();
    }

    public function updateProject($data) {
        $this->where("id", $data["id"])->update($data);
    }

    public function getCount() {
        return $this->count();
    }
}
