@extends('admin.common')
@section('title', '售票系统后台-用户')

{{--内容--}}
@section('content')
    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                订单列表页
            </h1>

        </div>

        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                            订单列表
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>用户名</th>
                                        <th>账号</th>
                                        <th>订单号</th>
                                        <th>下单时间</th>
                                        <th>订单状态</th>
                                        <th>数量和价格</th>
                                        <th>总金额</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pageData as $pageDatum)
                                        <tr {{$loop->index % 2 == 1 ? 'class="odd gradeX"' : 'class="odd grade"'}} >
                                            <td>{{$pageDatum->name}}</td>
                                            <td>{{$pageDatum->email}}</td>
                                            <td>{{$pageDatum->order_No}}</td>
                                            <td>{{date('Y-m-d H:i:s',$pageDatum->timestamp)}}</td>
                                            <td>{{$pageDatum->pay_status}}</td>
                                            <td>{{$pageDatum->count}}-￥{{$pageDatum->price}}</td>
                                            <td style="color: #f44336">￥{{$pageDatum->count * $pageDatum->price}}</td>
                                            <td>
                                                <a href="#" onclick="deleteOrder({{$pageDatum->order_id}})">删除订单</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="page_list" style="text-align: center">
                                    {{ $pageData->links() }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection