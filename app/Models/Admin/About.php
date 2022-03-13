<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    public function getOne() {
        return $this->first();
    }

    public function updateData($v) {
        $model = $this->first();
        $model = is_null($model) ? new About() : $model;
        $model->value = htmlspecialchars($v);
        $model->save();
    }
}
