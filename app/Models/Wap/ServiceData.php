<?php

namespace App\Models\Wap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceData extends Model
{
    use HasFactory;

    protected $table = 'service_data';

    public function getTitleAll($title) {
        $data = $this->whereIn("key", $title)->get();
        $res = [];
        foreach ($data as $v) {
            if (str_starts_with($v->key, "title")) {
                $service = [
                    "value" => $v->value,
                    "icon" => $v->icon
                ];

                foreach ($data as $value) {
                    if (str_starts_with($value->key, "describe") && str_ends_with($value->key, mb_substr($v->key, mb_strlen($v->key) - 1))) {
                        $service["describe"] = $value->value;
                    }
                }

                array_push($res, $service);
            }
        }
        return $res;
    }

    public function getOne($title) {
        $data = $this->where("key", $title)->first();
        return $data;
    }
}
