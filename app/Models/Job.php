<?php
/**
 * 队列任务
 */

namespace App\Models;
use \Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table='jobs';
    protected $primaryKey = 'id';
}