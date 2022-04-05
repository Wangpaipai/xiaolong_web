<?php

namespace App\Models\Wap;

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
}
