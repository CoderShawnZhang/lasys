<aside class="main-sidebar">
    <section class="sidebar">
        {{--<div class="user-panel">--}}
        {{--<div class="pull-left image">--}}
        {{--<img src="/assets/images/user2-160x160.jpg" class="img-circle" alt="User Image"/>--}}
        {{--</div>--}}
        {{--<div class="pull-left info">--}}
        {{--<p>{{$userInfo['name']}}</p>--}}
        {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat">
                        <i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu"><li class="active"><a href="{{ url('backend/index') }}"><i class="fa fa-tachometer"></i>
                    <span> 首页管理</span>
                </a>
            </li><li class="treeview"><a href="javascript:void(0);">
                    <i class="fa fa-desktop"></i>
                    <span>系统配置</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu"><li class="treeview"><a href="javascript:void(0);">
                            <i class="fa fa-list-alt"></i>
                            <span>菜单管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu"><li><a href="{{ url('backend/menu') }}"><i class="fa fa-list"></i>
                                    <span> 菜单列表</span>
                                </a>
                            </li><li><a href="http://cowcat.cc/backend/menu/create"><i class="fa fa-plus"></i>
                                    <span> 新增菜单</span>
                                </a>
                            </li><li><a href="http://cowcat.cc/backend/menu/search"><i class="fa fa-search"></i>
                                    <span> 菜单查询</span>
                                </a>
                            </li>
                        </ul>
                    </li><li class="treeview"><a href="javascript:void(0);">
                            <i class="fa fa-info"></i>
                            <span>日志列表</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu"><li><a href="http://cowcat.cc/log-viewer/logs"><i class="fa fa-list"></i>
                                    <span> 日志管理</span>
                                </a>
                            </li><li><a href="http://cowcat.cc/log-viewer"><i class="fa fa-pie-chart"></i>
                                    <span> 日志统计</span>
                                </a>
                            </li>
                        </ul>
                    </li><li class="treeview"><a href="javascript:void(0);">
                            <i class="fa fa-user"></i>
                            <span>用户管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu"><li><a href="http://cowcat.cc/backend/user"><i class="fa fa-list"></i>
                                    <span> 用户列表</span>
                                </a>
                            </li>
                        </ul>
                    </li><li class="treeview"><a href="javascript:void(0);">
                            <i class="fa fa-users"></i>
                            <span>角色管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu"><li><a href="http://cowcat.cc/backend/role"><i class="fa fa-list"></i>
                                    <span> 角色列表</span>
                                </a>
                            </li><li><a href="http://cowcat.cc/backend/role/create"><i class="fa fa-plus"></i>
                                    <span> 新增角色</span>
                                </a>
                            </li>
                        </ul>
                    </li><li class="treeview"><a href="javascript:void(0);">
                            <i class="fa fa-check"></i>
                            <span>权限管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu"><li><a href="http://cowcat.cc/backend/permission"><i class="fa fa-list"></i>
                                    <span> 权限列表</span>
                                </a>
                            </li><li><a href="http://cowcat.cc/backend/permission/create"><i class="fa fa-plus"></i>
                                    <span> 新增权限</span>
                                </a>
                            </li>
                        </ul>
                    </li><li class="treeview"><a href="javascript:void(0);">
                            <i class="fa fa-keyboard-o"></i>
                            <span>操作管理</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu"><li><a href="http://cowcat.cc/backend/action"><i class="fa fa-list"></i>
                                    <span> 操作列表</span>
                                </a>
                            </li><li><a href="http://cowcat.cc/backend/action/create"><i class="fa fa-plus"></i>
                                    <span> 新增操作</span>
                                </a>
                            </li>
                        </ul>
                    </li><li><a href="javascript:void(0);"><i class="fa fa-file"></i>
                            <span> 文件管理</span>
                        </a>
                    </li>
                </ul>
            </li></ul>
    </section>
</aside>
