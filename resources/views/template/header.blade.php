<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>WorkflowProj</title>

    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{URL::asset('assets/css/bootstrap.min.css?v=3.3.5')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/font-awesome.min.css?v=4.4.0')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/animate.min.css" rel="stylesheet')}}">
    <link href="{{URL::asset('assets/css/style.min.css?v=4.0.0')}}" rel="stylesheet">

    <style type="text/css">
        .container-flex{
            margin-left: 10px;
            margin-right: 10px;;
        }
        html body{
            font-family: Microsoft YaHei,Tahoma,Helvetica,Arial,"\5b8b\4f53",sans-serif;
        }
        label{
            color: #555;
        }
        th{
            color: #555;
        }
        table tr{
            cursor: pointer;
        }
    </style>
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
@yield('content')
<script src="{{URL::asset('assets/js/jquery.min.js?v=2.1.4')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js?v=3.3.5')}}"></script>
<script src="{{URL::asset('assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{URL::asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::asset('assets/js/plugins/layer/layer.min.js')}}"></script>
<script src="{{URL::asset('assets/js/hplus.min.js?v=4.0.0')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/contabs.min.js')}}"></script>
<script src="{{URL::asset('assets/js/plugins/pace/pace.min.js')}}"></script>
</body>