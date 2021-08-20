<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminMenu extends Model
{
    use HasFactory;

    protected $table = 'admin_menu';

    public function queryLevelMenuList(int $level) : Collection
    {
        return self::select('id', 'name', 'route_name', 'icon')
            ->where('level', '=', $level)
            ->orderBy('sort')
            ->get();
    }

    public function queryParentIdMenuList(int $parent_id) : Collection
    {
        return self::select('name', 'route_name', 'icon')
            ->where('parent_id', '=', $parent_id)
            ->orderBy('sort')
            ->get();
    }
}
