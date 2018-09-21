@extends('admin.common')
@section('title', '售票系统后台-编辑景点信息')

{{--内容--}}
@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                编辑景点信息
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin/tourismlist') }}">景点列表</a></li>
                <li class="active">编辑景点信息</li>
            </ol>

        </div>

        <div id="page-inner">
            <form id="formData" action="#">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-action">
                                景点基本信息
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="text" value="{{ $scenicData->title  }}" type="text" class="validate" name="title">
                                        <label for="text" data-error="wrong" data-success="right">标题</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="describe" name="describe" class="materialize-textarea">{{$scenicData->describe}}</textarea>
                                        <label for="describe">基本描述</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="discount" type="text" value="{{$scenicData->discount}}" class="validate" name="discount">
                                        <label for="discount" data-success="right">优惠信息</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="number" type="number" value="{{$scenicData->number}}" class="validate" name="number">
                                        <label for="number" data-success="right">产品数量</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="city" type="text" value="{{$scenicData->city}}" class="validate" name="city">
                                        <label for="city" data-success="right">浏览城市</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="package" type="text" value="{{$scenicData->package}}" class="validate" name="package">
                                        <label for="package" data-success="right">行程套餐</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="price" type="number" value="{{$scenicData->price}}" name="price" class="validate">
                                        <label for="price" data-success="right">价格</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="date_time" type="text" placeholder="xxxx年xx月xx日" value="{{$scenicData->date_time}}" name="date_time" class="validate">
                                        <label for="date_time" data-success="right">出发日期</label>
                                    </div>
                                </div>
                                <div class="clearBoth"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-action">
                                景点推荐选项
                            </div>
                            <div class="card-content">
                                <p>首页景点推荐</p>
                                <span>
                                    <input name="recommend" {{$scenicData->recommend == 1 ? 'checked' : ''}} value="1" type="radio" id="recommend_yes"/>
                                    <label for="recommend_yes">是</label>
                                </span>
                                <span>
                                    <input class="with-gap" {{$scenicData->recommend == 0 ? 'checked' : ''}} name="recommend" value="0" type="radio" id="recommend_no"/>
                                    <label for="recommend_no">否</label>
                                </span>
                                <p>热门景点</p>
                                <span>
                                    <input name="hot" {{$scenicData->hot == 1 ? 'checked' : ''}} type="radio" value="1" id="hot_yes"/>
                                    <label for="hot_yes">是</label>
                                </span>
                                <span>
                                    <input class="with-gap" {{$scenicData->hot == 0 ? 'checked' : ''}} name="hot" value="0" type="radio" id="hot_no"/>
                                    <label for="hot_no">否</label>
                                </span>
                                <p>本地游推荐</p>
                                <span>
                                    <input name="local" {{$scenicData->local == 1 ? 'checked' : ''}} value="1" type="radio" id="local_yes"/>
                                    <label for="local_yes">是</label>
                                </span>
                                <span>
                                    <input class="with-gap" value="0" {{$scenicData->local == 0 ? 'checked' : ''}} name="local" type="radio" id="local_no"/>
                                    <label for="local_no">否</label>
                                </span>
                                <p>一日游推荐</p>
                                <span>
                                    <input name="day" {{$scenicData->day == 1 ? 'checked' : ''}} value="1" type="radio" id="day_yes"/>
                                    <label for="day_yes">是</label>
                                </span>
                                <span>
                                    <input class="with-gap" {{$scenicData->day == 0 ? 'checked' : ''}} name="day" value="0" type="radio" id="day_no"/>
                                    <label for="day_no">否</label>
                                </span>
                                <p>其它</p>
                                <span>
                                    <input name="other" {{$scenicData->other == 1 ? 'checked' : ''}} value="1" type="radio" id="other_yes"/>
                                    <label for="other_yes">是</label>
                                </span>
                                <span>
                                    <input class="with-gap" {{$scenicData->other == 0 ? 'checked' : ''}} name="other" value="0" type="radio" id="other_no"/>
                                    <label for="other_no">否</label>
                                </span>
                                <div>
                                    <a onclick="editScenicSpot({{$scenicData->id}})" class="waves-effect waves-light btn">保存景点信息</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-action">
                                上传图片信息
                            </div>
                            <div class="card-content">
                                <div id="imageBox">
                                    @foreach($imgData as $imgItem)
                                        <div class="col-md-4 col-sm-4">
                                            <div class="card">
                                                <div class="card-image waves-effect waves-block waves-light">
                                                    <img class="activator" src="{{$imgItem->img_url}}">
                                                    </div>
                                            </div>
                                            <a href="#" onclick="deleteImage({{$imgItem->id}})">删除</a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="input-field col s12">
                                    <input id="fileupload" type="file" name="Filedata"
                                           data-url="{{ url('/admin/upload') }}"
                                           data-sequential-uploads="true"
                                           data-form-data='{"script": "true"}'>
                                </div>
                                <div class="clearBoth"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
@endsection