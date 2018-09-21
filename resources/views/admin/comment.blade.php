@extends('admin.common')
@section('title', '售票系统后台-旅游评价')

{{--内容--}}
@section('content')
    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                旅游评价页
            </h1>
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="{{ url('/admin/scenicspot') }}">增加旅游说明</a></li>--}}
            {{--</ol>--}}
        </div>

        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                            旅游说明
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>用户</th>
                                        <th>评论时间</th>
                                        <th>售后评价</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($commentData as $data)
                                        <tr {{$loop -> index % 2 == 1 ? 'class="odd gradeX"' : 'class="odd grade"'}} >
                                            <td>{{ $data->name }}</td>
                                            <td>{{date('Y-m-s h:i:s',$data->time)}}</td>
                                            <td>{{$data->content}}</td>
                                            <td class="center">
                                                <a href="#" onclick="deletedComment({{$data['id']}})">删除</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection