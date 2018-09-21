@extends('admin.common')
@section('title', '售票系统后台-用户')

{{--内容--}}
@section('content')
    <div id="page-wrapper" >
        <div class="header">
            <h1 class="page-header">
                景点信息页
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin/scenicspot') }}">增加景点信息</a></li>
            </ol>
        </div>

        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                            景点信息
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>产品编号</th>
                                        <th>标题</th>
                                        <th>价格</th>
                                        <th>优惠信息</th>
                                        <th>首页景点推荐</th>
                                        <th>热门景点</th>
                                        <th>本地游推荐</th>
                                        <th>一日游推荐</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($pageData as $item)
                                        <tr {{$loop -> index % 2 == 1 ? 'class="odd gradeX"' : 'class="odd grade"'}} >
                                            <td>{{ $item->serialNo ? $item->serialNo : '--' }}</td>
                                            <td>{{ $item->title ? $item->title : '--' }}</td>
                                            <td>{{ $item->price ? $item->price : '--' }}</td>
                                            <td>{{ $item->discount ? $item->discount : '--' }}</td>
                                            <td>
                                                @if ($item->recommend == 1)
                                                    <span style="float: none" class="new badge blue" data-badge-caption="">是</span>
                                                @else
                                                    <span style="float: none" class="new badge red" data-badge-caption="">否</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->hot == 1)
                                                    <span style="float: none" class="new badge blue" data-badge-caption="">是</span>
                                                @else
                                                    <span style="float: none" class="new badge red" data-badge-caption="">否</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->local == 1)
                                                    <span style="float: none" class="new badge blue" data-badge-caption="">是</span>
                                                @else
                                                    <span style="float: none" class="new badge red" data-badge-caption="">否</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->day == 1)
                                                    <span style="float: none" class="new badge blue" data-badge-caption="">是</span>
                                                @else
                                                    <span style="float: none" class="new badge red" data-badge-caption="">否</span>
                                                @endif
                                            </td>
                                            <td class="center">
                                                <a href="{{ url('/admin/scenicspot/'.$item['id'].'/edit') }}">查看编辑</a>
                                                <a href="#" onclick="deleteList({{$item['id']}})">删除</a>
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