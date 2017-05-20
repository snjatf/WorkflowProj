<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>WorkflowProj</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{URL::asset('assets/css/bootstrap.min.css?v=3.3.5')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/font-awesome.min.css?v=4.4.0')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/style.min.css?v=4.0.0')}}" rel="stylesheet">
    <base target="_blank">

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>客户台账</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="table_basic.html#">选项1</a></li>
                            <li><a href="table_basic.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
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
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>序号</th>
                                <th>项目</th>
                                <th>进度</th>
                                <th>任务</th>
                                <th>日期</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>米莫说｜MiMO Show</td>
                                <td><span class="pie">0.52/1.561</span>
                                </td>
                                <td>20%</td>
                                <td>2014.11.11</td>
                                <td><a href="table_basic.html#"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>商家与购物用户的交互试衣应用</td>
                                <td><span class="pie">6,9</span>
                                </td>
                                <td>40%</td>
                                <td>2014.11.11</td>
                                <td><a href="table_basic.html#"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3
                                </td>
                                <td>天狼---智能硬件项目</td>
                                <td><span class="pie">3,1</span>
                                </td>
                                <td>75%</td>
                                <td>2014.11.11</td>
                                <td><a href="table_basic.html#"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4
                                </td>
                                <td>线下超市+线上商城+物流配送互联系统</td>
                                <td><span class="pie">4,9</span>
                                </td>
                                <td>18%</td>
                                <td>2014.11.11</td>
                                <td><a href="table_basic.html#"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.min.js?v=3.3.5')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/plugins/peity/jquery.peity.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/content.min.js?v=1.0.0')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/plugins/iCheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/demo/peity-demo.min.js')}}"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>

</body>

</html>