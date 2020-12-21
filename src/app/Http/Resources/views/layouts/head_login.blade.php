<head>
<title>{{config('app.app_name')}} |     Login    </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="shortcut icon" href="{{url('public/image/View.ico')}}">
    {!! Html::style('public/assets/plugin/bootstrap/dist/css/bootstrap.min.css') !!}
   <link rel="stylesheet" type="text/css" href="{{ url('public/css/login/AdminLTE.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ url('public/css/login/ionicons.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ url('public/css/login/goggle_font.css')}}"> 
   <link rel="stylesheet" href="{{ url('public/css/login/font-awesome.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ url('public/css/login/adds.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ url('public/css/login/jquery-ui.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ url('public/css/login/cmxform.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ url('public/css/login/pace.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{ url('public/css/login/select2.css')}}">

   <script src="{{ url('public/js/jquery.js')}}"></script>
   {!! Html::style('public/css/toastr.min.css') !!}
   <script type="text/javascript" src="{{url('public/js/toastr.min.js')}}"></script>

   <script src="{{ url('public/js/login/jquery.min.js')}}"></script>
   <script src="{{ url('public/js/login/bootstrap.min.js')}}"></script>
  <script src="{{url('public/js/sweetalert.min.js')}}"></script>

  <style type="text/css">
    .clBgBody {
      background: url('public/image/bg.jpg') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;overflow: hidden;"
    }

    .clLoginBox{
       border: 1px solid #ddd;
       padding: 3px;
       z-index:200;
       position: fixed;
       left: 50%;
       top: 40%;
       transform: translate(-50%, -50%);
    }
  </style>

</head>