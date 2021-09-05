<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SystemData extends Model
{
    use HasFactory;

    protected $table = 'system_data';

    public function getAll() {
        $data = $this->get();
        $res = [];
        foreach ($data as $v) {
            $res[$v->key] = $v->value;
        }
        return $res;
    }

    public function updateData($key, $v) {
        $model = $this->where('key', '=', $key)->first();
        $model = is_null($model) ? new SystemData() : $model;
        $model->key = $key;
        $model->value = $v;
        $model->save();
    }
}
