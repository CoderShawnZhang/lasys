@extends('backend.layout.main')
@section('content')
    测试使用php 迭代器遍历与常规遍历，性能对比.<br>
    1000000条数据，常规遍历，直接就挂掉。使用php 迭代器耗时0.111<br>
    500000条数据，常规遍历，0.114。使用php 迭代器耗时0.056<br>
    用户管理列表 {{ $x }}
    ====
    {{ $thistime }}秒

    Zend OPcache字节码缓存：
    opcache.validate_timestamps = 1 //生成环境设为0 设置为0，php文件有变动，会重生生成字节码。
    opcache.revalidate_freq = 0
    opcache.memory_consumption = 64
    opcache.interned_strings_buffer = 16
    opcache.max_accelerated_files = 4000
    opcache.fast_shutdown = 1


    哇靠：php内置一个服务器
    启动php内置服务器：php -S localhost:4000
    {有时，我们需要在同一个局域网中的另一台设备中访问这个php web 服务器（例如在ipad）为此，我们可以把localhost 换成 0.0.0.0让php web 服务器监听到所有接口}
    php -S 0.0.0.0:4000


    /*******配置这个服务器*********/
    应用经常需要使用专属的php初始化配置文件，尤其是对内存用量，文件上传，分析或字节码缓存有特殊要求时，一定要单独配置。我们可以使用－c选项，让php内置的服务器使用指定的初始化文件
    php -S localhost:8000 -c app/config/php.ini
    [建议：］最好把自定义的初始化文件放在应用的根目录中。如果需要和团队中的其他开发者分享，还可以把初始化文件纳入版本控制系统；
@endsection