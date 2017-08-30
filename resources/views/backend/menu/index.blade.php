@extends('backend.layout.main')
@inject('menuPresenter','App\Presenters\MenuPresenter')
@section('content')
  @include('backend.components.handle',['handle' => $menuPresenter->getHandleParams()])  {{--新增菜单按钮--}}
  @include('backend.components.search',['search' => $menuPresenter->getSearchParams()])  {{--查询日期组合按钮--}}
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
              <th>菜单编号</th>
              <th>菜单名称</th>
              <th>菜单地址</th>
              <th>菜单排序</th>
              <th>是否显示</th>
              <th>操作</th>
            </tr>
            @foreach($menu as $key => $val)
              <tr>
                <th>{{ $val['id'] }}</th>
                <th>{{ trans($val['name']) }}</th>
                <th>{{ $val['route'] }}</th>
                <th>{{ $val['sort'] }}</th>
                <th>{{ $val['hide'] }}</th>
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
        {{ $test }}
      </div>
    </div>
  </div>
@endsection