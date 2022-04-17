<?php

namespace App\Models\Wap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use function PHPUnit\Framework\isEmpty;

class Projects extends Model
{
    use HasFactory;

    protected $table = 'projects';

    public function getProjectTop6() {
        Paginator::useBootstrap();
        return $this->orderBy("date", "desc")->limit(6)->get();
    }

    public function getCount() {
        return $this->count();
    }

    public function getProjectList($search) {
        return $this
            ->when($search, function ($query) use ($search) {
                if (!empty($search)) {
                    return $query->where("title", "like", "%" . $search . "%");
                }
            })
            ->orderBy("date", "desc")->paginate(10)->appends("search", $search);
    }

    public function getOne($id) {
        return $this->where('id', $id)->first();
    }
}
