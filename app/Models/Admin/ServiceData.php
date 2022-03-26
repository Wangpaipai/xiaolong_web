<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceData extends Model
{
    use HasFactory;

    protected $table = 'service_data';

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
        $model = is_null($model) ? new ServiceData() : $model;
        $model->key = $key;
        $model->value = $v;
        $model->save();
    }
}
