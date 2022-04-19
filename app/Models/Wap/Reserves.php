<?php

namespace App\Models\Wap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use function PHPUnit\Framework\isEmpty;

class Reserves extends Model
{
    use HasFactory;

    protected $table = 'reserves';

    public function createdData($data) {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
        $this->save();
    }
}
