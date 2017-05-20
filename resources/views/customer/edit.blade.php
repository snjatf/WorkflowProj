@extends('template.header')

<link href="{{URL::asset('assets/css/bootstrap.min.css?v=3.3.5')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/font-awesome.min.css?v=4.4.0')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/animate.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/style.min.css?v=4.0.0')}}" rel="stylesheet">

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>新增客户</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="get" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">客户名称</label>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">客户简称</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control"> <span class="help-block m-b-none">不填写则默认和客户名称一样</span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">工作流版本</label>

                                <div class="col-sm-6">
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1">ERP251</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2">ERP252</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3">ERP253</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1">ERP251</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2">ERP252</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3">ERP253</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1">ERP251</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2">ERP252</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3">ERP253</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1">ERP251</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2">ERP252</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3">ERP253</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1">ERP251</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2">ERP252</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3">ERP253</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1">ERP251</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2">ERP252</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3">ERP253</label>

                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">是否个性化客户

                                </label>

                                <div class="col-sm-6">
                                    <label class="radio i-checks">
                                        <input type="radio" checked="" value="option2" name="a">  是 &nbsp;
                                        <input type="radio" checked="" value="option2" name="a">  否
                                    </label>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">所属区域</label>

                                <div class="col-sm-2">
                                    <select class="form-control m-b" name="account">
                                        <option>北京区域</option>
                                        <option>上海区域</option>
                                        <option>广州区域</option>
                                        <option>深圳区域</option>
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">客户经理</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="" class="form-control">
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">

                                <label class="col-sm-2 control-label">联系方式</label>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">

                                <label class="col-sm-2 control-label">备注</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>



                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存内容</button>
                                    <button class="btn btn-white" type="submit">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{URL::asset('assets/js/jquery.min.js?v=2.1.4')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js?v=3.3.5')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/content.min.js?v=1.0.0')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/iCheck/icheck.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/demo/peity-demo.min.js')}}"></script>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
@stop