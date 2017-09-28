@extends('backend.layout.main')
@inject('mailPresenter','App\Presenters\MailPresenter')
@section('content')
   <a href="{{ url('backend/mail/sendMailTest') }}">测试发送邮件</a>
   @include('backend.components.handle',['handle' => $mailPresenter->getHandleParams()])  新增菜单按钮
   <div class="row">
       <div class="col-md-12">
           <div class="box">
               <div class="box-header">
                   <h3 class="box-title">菜单列表</h3>
                   <div class="box-tools"></div>
               </div>

               <div class="box-body table-responsive no-padding">
                   <table class="table table-hover">
                       <tr>
                           <th>队列编号</th>
                           <th>任务名称</th>
                           <th>重试次数</th>
                           <th>创建时间</th>
                           <th>倒计时</th>
                           <th>操作</th>
                       </tr>
                       @foreach($joblist as $key => $val)
                           <tr>
                               <th>{{ $val['id'] }}</th>
                               <th style="width:120px;">{{ $val['payload'] }}</th>
                               <th>{{ $val['attempts'] }}</th>
                               <th>{{ $val['created_at'] }}</th>
                               <th>{{ $val['available_at'] }}</th>
                               <th>
                                   <a href="#" class="btn bg-orange btn-flat">编辑</a>
                                   <a class="btn btn-danger btn-flat"
                                      data-url="#"
                                      data-toggle="modal"
                                      data-target="#delete-modal">
                                       删除
                                   </a>
                               </th>
                           </tr>
                       @endforeach
                   </table>
               </div>
           </div>
       </div>
   </div>
@endsection
