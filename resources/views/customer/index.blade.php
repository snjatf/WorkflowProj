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
                        <h5>客户台账</h5>

                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-2 m-b-xs">
                                <select class="input-sm form-control input-s-sm inline">
                                    <option value="0">所属区域</option>
                                    <option value="1">北京区域</option>
                                    <option value="2">上海区域</option>
                                    <option value="3">南京区域</option>
                                </select>
                            </div>
                            <div class="col-sm-2 m-b-xs">
                                <select class="input-sm form-control input-s-sm inline">
                                    <option value="0">工作流版本</option>
                                    <option value="1">ERP251</option>
                                    <option value="2">ERP252</option>
                                    <option value="3">ERP253</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="text" placeholder="请输入关键词" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                                </div>
                            </div>
                            <div class="col-sm-3">

                                <a class="btn btn-sm btn-primary" href="form_basic.html">新增客户</a>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th width="50">序号</th>
                                    <th width="120">客户简称</th>
                                    <th width="200">客户名称</th>
                                    <th width="150">工作流版本</th>
                                    <th width="70">个性化</th>
                                    <th width="120">所属区域</th>
                                    <th width="200">客户经理</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>北京北辰</td>
                                    <td>北京北辰实业股份有限公司</td>

                                    <td>ERP251，ERP351</td>
                                    <td>是</td>
                                    <td>北京区域</td>
                                    <td>胡洁（18771065867）</td>
                                    <td><a>编辑</a> <a>删除</a> <a>明细</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>北京北辰</td>
                                    <td>北京北辰实业股份有限公司</td>

                                    <td>ERP251，ERP351</td>
                                    <td>是</td>
                                    <td>北京区域</td>
                                    <td>胡洁（18771065867）</td>
                                    <td><a>编辑</a> <a>删除</a> <a>明细</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>北京北辰</td>
                                    <td>北京北辰实业股份有限公司</td>

                                    <td>ERP251，ERP351</td>
                                    <td>是</td>
                                    <td>北京区域</td>
                                    <td>胡洁（18771065867）</td>
                                    <td><a>编辑</a> <a>删除</a> <a>明细</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

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