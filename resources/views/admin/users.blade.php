@extends('admin.common')
@section('title', '售票系统后台-用户')

{{--内容--}}
@section('content')
    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                用户列表页
            </h1>

        </div>

        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                            用户列表
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>用户名</th>
                                        <th>账号</th>
                                        <th>注册时间</th>
                                        <th>是否可以登录后台</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($pageData as $item)
                                        <tr {{$loop -> index % 2 == 1 ? 'class="odd gradeX"' : 'class="odd grade"'}} >
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{date('Y-m-d H:i:s',$item->time)}}</td>
                                            <td>否</td>
                                            <td class="center"><a href="#">查看</a></td>
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