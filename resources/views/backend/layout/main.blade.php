<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>{{ config('lasys.title') }}</title>
    @yield('before.css')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/backend/plugins/pace/pace.min.css') }}">
    <link rel="stylesheet" type="text/css" href="/public{{ elixir('assets/backend/css/app.min.css') }}">
    @yield('after.css')
</head>
<body class="skin-black fixed">

<div class="wrapper">
    @inject('mainPresenter','App\Presenters\MainPresenter')
    @include('backend.layout.header')
    @include('backend.layout.menu')
    <div class="content-wrapper">
        <section class="content-header">
            @include('backend.layout.breadcrumbs')
        </section>
        <section class="content">
            @yield('content')
        </section>
    </div>
    @include('backend.layout.footer')
</div>
<script type="text/javascript" src="/public{{ elixir('assets/backend/js/app.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/backend/plugins/pace/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/backend/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script type="text/javascript">
    //初始化加载 select2插件
    $(function () {
        //判断，页面如果有select2控件则加载
        if ($('.select2').length > 0) {
            $('.select2').select2();
        }

        //判断，页面如果有日期控件则加载
        if ($('#created_at').length == 1) {
            $('#created_at').daterangepicker({timePickerIncrement: 30, format: 'YYYY/MM/DD HH:mm:ss'});
        }

        @if(Session::has('success'))
            $('#success-message').delay(3000).fadeOut();
        @endif

        @if(Session::has('errors'))
            $('#errors-message').delay(5000).fadeOut();
        @endif
    });
</script>
@yield('scripts')
</body>
</html>
