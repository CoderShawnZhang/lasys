<?php
/**
 * 用户权限模型
 */

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Traits\Model\UserHasOneUserProfileTrait as ProfileTrait;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, EntrustUserTrait, ProfileTrait {
        Authorizable::can insteadof  EntrustUserTrait;
        EntrustUserTrait::can as hasPermission;
    }
    protected $table = 'users';

    protected $primaryKey = 'id';

    public $timestamps = false;

    //$guard,$fillable,为 自动填充 Mass Assignment 的黑名单和白名单。第三者为 转换成数组或 JSON 时隐藏属性
    protected $fillable = ['anme','email','password','is_super_admin'];

    protected $hidden = ['password','remember_token'];
}