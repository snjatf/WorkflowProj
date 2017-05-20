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
                        <h5>新增客户明细信息</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="get" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">标题</label>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">描述</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">解决方案</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">所属类型</label>

                                <div class="col-sm-2">
                                    <select class="form-control m-b" name="account">

                                        <option value="1">需求</option>
                                        <option value="2">产品BUG</option>
                                        <option value="3">项目BUG</option>
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">所属模块</label>

                                <div class="col-sm-6">
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1">流程定义</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2">步骤定义</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3">流程监控</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1">作废</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2">同意</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3">不同意</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1">打印</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2">表单</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3">表单数据异常</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1">会签</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2">分支解析错误</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3">新建流程</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1">发起</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2">制作表单</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3">标准角色</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option1">角色用户</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option2">流程查询</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" value="option3">文档管理</label>

                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">工作流版本</label>

                                <div class="col-sm-6">
                                    <label class="radio i-checks">
                                        <input type="radio" checked="" value="option2" name="a">  ERP251 &nbsp;
                                        <input type="radio" checked="" value="option2" name="a">  ERP351&nbsp;
                                        <input type="radio" checked="" value="option2" name="a">  ERP352
                                    </label>

                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>



                            <div class="form-group">
                                <label class="col-sm-2 control-label">处理人</label>
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