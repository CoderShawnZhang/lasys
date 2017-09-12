<header class="main-header">
    <a href="index2.html" class="logo"><b>学习框架底层</b></a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/backend/language/en" class="dropdown-toggle">
                        <i class="fa fa-language"></i>
                    </a>
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">username</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-black btn-flat">个人信息</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('auth/logout') }}" class="btn btn-black btn-flat">退出登录</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>