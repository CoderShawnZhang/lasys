<?php
/**
 * 菜单模型
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected static $order = 'sort';

    protected static $index = [
        'id',
        'name',
        'route',
        'icon',
        'parent_id'
    ];

    protected static $sort = 'desc';

    protected $guarded = [];

    protected $table = 'menus';
}