@extends('admin.common')
@section('title', '售票系统后台-增加景点信息')

{{--内容--}}
@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                增加景点信息
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin/tourismlist') }}">景点列表</a></li>
                <li class="active">增加景点信息</li>
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
                                        <input id="text" type="text" class="validate" name="title">
                                        <label for="text" data-error="wrong" data-success="right">标题</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="describe" name="describe" class="materialize-textarea"></textarea>
                                        <label for="describe">基本描述</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="discount" type="text" class="validate" name="discount">
                                        <label for="discount" data-success="right">优惠信息</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="number" type="number" class="validate" name="number">
                                        <label for="number" data-success="right">产品数量</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="city" type="text" class="validate" name="city">
                                        <label for="city" data-success="right">浏览城市</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="package" type="text" class="validate" name="package">
                                        <label for="package" data-success="right">行程套餐</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="price" type="number" name="price" class="validate">
                                        <label for="price" data-success="right">价格</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="date_time" type="text" placeholder="xxxx年xx月xx日" name="date_time" class="validate">
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
                                    <input name="recommend" checked value="1" type="radio" id="recommend_yes"/>
                                    <label for="recommend_yes">是</label>
                                </span>
                                <span>
                                    <input class="with-gap" name="recommend" value="0" type="radio" id="recommend_no"/>
                                    <label for="recommend_no">否</label>
                                </span>
                                <p>热门景点</p>
                                <span>
                                    <input name="hot" checked type="radio" value="1" id="hot_yes"/>
                                    <label for="hot_yes">是</label>
                                </span>
                                <span>
                                    <input class="with-gap" name="hot" value="0" type="radio" id="hot_no"/>
                                    <label for="hot_no">否</label>
                                </span>
                                <p>本地游推荐</p>
                                <span>
                                    <input name="local" checked value="1" type="radio" id="local_yes"/>
                                    <label for="local_yes">是</label>
                                </span>
                                <span>
                                    <input class="with-gap" value="0" name="local" type="radio" id="local_no"/>
                                    <label for="local_no">否</label>
                                </span>
                                <p>一日游推荐</p>
                                <span>
                                    <input name="day" checked value="1" type="radio" id="day_yes"/>
                                    <label for="day_yes">是</label>
                                </span>
                                <span>
                                    <input class="with-gap" name="day" value="0" type="radio" id="day_no"/>
                                    <label for="day_no">否</label>
                                </span>
                                <p>其它</p>
                                <span>
                                    <input name="other" checked value="1" type="radio" id="other_yes"/>
                                    <label for="other_yes">是</label>
                                </span>
                                <span>
                                    <input class="with-gap" name="other" value="0" type="radio" id="other_no"/>
                                    <label for="other_no">否</label>
                                </span>
                                <div>
                                    <a id="scenicspot" class="waves-effect waves-light btn">保存景点信息</a>
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
                                <div id="imageBox"></div>
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