<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lasys</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="/public/{{ elixir('assets/backend/css/app.min.css') }}">
</head>
<body id="login" class="hold-transition login-page" style="background-image: url('{{ array_random(config('lasys.loginBackImg')) }}')">
<div class="login-box">
    <div class="login-logo">
        <b>Lasys</b> CMS
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">
            TO BE OR NOT TO BE To Coder
        </p>
        <form action="{{URL::to('/auth/login')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="username" name="email" value="{{old('email')}}">
                        <span class="fa fa-user form-control-feedback"></span>
                        {{--@include('backend.layout.tip',['field'=>'email'])--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="password" name="password" value="{{old('password')}}">
                        <span class="fa fa-lock form-control-feedback"></span>
{{--                        @include('backend.layout.tip',['field'=>'password'])--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 pull-right">
                    <button type="submit" class="btn btn-success btn-block btn-flat">登 录</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="{{ elixir('assets/backend/js/app.min.js') }}"></script>
</body>

</html>
