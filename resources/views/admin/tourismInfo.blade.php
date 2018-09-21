@extends('admin.common')
@section('title', '售票系统后台-用户')

{{--内容--}}
@section('content')
    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                旅游说明页
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin/scenicspot') }}">增加旅游说明</a></li>
            </ol>
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
                                        <th>标题</th>
                                        <th>概述</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($infoData as $infoDatum)
                                        <tr {{$loop -> index % 2 == 1 ? 'class="odd gradeX"' : 'class="odd grade"'}} >
                                            <td>{{ $infoDatum->title }}</td>
                                            <td>{{ $infoDatum->describe }}</td>
                                            <td class="center">
                                                <a href="{{ url('/admin/scenicspot/'.$infoDatum['id'].'/edit') }}">编辑</a>
                                                <a href="#" onclick="deleteList({{$infoDatum['id']}})">删除</a>
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