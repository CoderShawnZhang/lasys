<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use TestClass;
use MenuLasys; //使用自定义门面
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu = MenuLasys::paginate(config('lasysmodel.menu.page-limit'));
//        echo  MenuLasysFacade::test();die;
        $test = TestClass::doSomeThing();
        return view('backend.menu.index',compact('test','menu','menuTree'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menuTree = create_level_tree(MenuLasys::getAllDisplayMenus());
        return view('backend.menu.create',compact('menuTree'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            if(MenuLasys::create($request->all())){
                return $this->successRoutTo('backend.menu.index', "新增菜单成功");
            }
        }
        catch (\Exception $e) {
            return $this->errorBackTo(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $menuTree = create_level_tree(MenuLasys::getAllDisplayMenus());
        return view('backend.menu.add',compact('menuTree'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 清除缓存（跳转到当前页面？？？）
     */
    public function clear(){
        MenuLasys::clearCache();
        return redirect()->Route('backend.menu.index');
    }
}
