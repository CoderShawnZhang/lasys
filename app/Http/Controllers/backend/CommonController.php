<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use MenuLasys;

class CommonController extends Controller
{
    public function __construct()
    {
        
    }

    /**
     * 清除缓存
     */
    public function clear(){
        MenuLasys::clearCache();
        return redirect()->Route('backend.menu.index');
    }
}
