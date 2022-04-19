<?php

namespace App\Models\Wap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use function PHPUnit\Framework\isEmpty;

class Images extends Model
{
    use HasFactory;

    protected $table = 'images';

    public function getList() {
        return $this->orderBy("created_at", "desc")->paginate(12);
    }
}
