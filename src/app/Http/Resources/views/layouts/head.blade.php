<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $title }} {{config('app.app_name')}} </title>
  	<!-- Tell the browser to be responsive to screen width -->
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  <meta name="csrf-token" content="{{ csrf_token() }}">
	{!! Html::style('public/assets/plugin/bootstrap/dist/css/bootstrap.min.css') !!}
	{!! Html::style('public/assets/plugin/font-awesome/css/font-awesome.min.css') !!}
	{!! Html::style('public/assets/dist/css/AdminLTE.min.css') !!}
	{!! Html::style('public/assets/dist/css/skins/_all-skins.min.css') !!}
	{!! Html::style('public/assets/plugin/datatables/dataTables.bootstrap.css') !!}
	{!! Html::style('public/assets/plugin/datatables/responsive.dataTables.min.css') !!}
	{!! Html::style('public/assets/dist/css/bootstrap-datepicker.min.css') !!}
	{!! Html::style('public/css/buttons.dataTables.min.css') !!}
	{!! Html::style('public/css/bootstrap-select.min.css') !!}
	{!! Html::style('public/css/toastr.min.css') !!}
	
	<script src="{{ url('public/js/jquery.js')}}"></script>
	<script src="{{ url('public/js/chartjs/Chart.js')}}"></script>
	<script src="{{ url('public/js/moment.min.js')}}"></script>

	<!-- loading harap tunggu -->
	<link rel="stylesheet" type="text/css" href="{{url('public/css/loading.css')}}"> 
	<script type="text/javascript" src="{{url('public/js/loading.js')}}"></script>
	 <!-- end -->
  

   <link rel="shortcut icon" href="{{url('public/image/View.ico')}}">
   <script type="text/javascript" src="{{url('public/js/toastr.min.js')}}"></script>
   <script src="{{url('public/js/bootstrap-select.min.js')}}"></script>


  <script src="{{url('public/js/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ url('public/css/select2.min.css')}}">

  {!! Html::style('public/css/bootstrap/bootstrap.min.css') !!}

  


<!-- TOOLTIP DI MODAL -->
  <script src="{{url('public/js/sweetalert.min.js')}}"></script>
	<style type="text/css">
		.tooltip{
			font-size: 11px;
		}
	</style>


<!-- LOADING DI DATATABLES -->
<style type="text/css">
.table-loader .loading{width:50px;height:50px;border-radius:50%;-webkit-box-sizing:border-box;box-sizing:border-box;border:solid 2px rgba(0,179,147,0.94);border-top-color:#fff;animation:spin 1s infinite linear;-webkit-animation:spin 1s infinite linear;display:inline-block}

@keyframes spin {
    100% {transform: rotate(360deg);}
}
@-webkit-keyframes spin { 
    100% {-webkit-transform: rotate(360deg);} 
} 

</style>

<!-- GRAFIK -->
<link rel="stylesheet" href="{{url('public/css/morris.css')}}">


<!-- STYLE CUSTOME -->
 <style type="text/css">
 	.circleGreen{
 		padding: 4px 8px 4px 8px;background-color: #00a65a;border-radius: 14px;color: #fff;font-size: 12px;
 	}
 	.circleRed{
 		padding: 4px 8px 4px 8px;background-color: #ef4620;border-radius: 14px;color: #fff;font-size: 12px;
 	}

 	.circleBlue{
 		padding: 5px 10px 5px 10px;background-color: #3c8dbc;border-radius: 14px;color: #fff;
 	}
 	.boxTitle{
 		font-size: 14px;font-weight: 550;line-height:1.3em;margin-bottom: 0px;
 	}
 	.rowEdit{
 		padding: 0px 15px 0px 15px;
 	}

 	.boxHeader{
 		margin-bottom: 8px;
 	}
 	.boxHeaderDashboard{
 		margin: 0px 15px 15px 15px;text-align: center;
 	}
 	#titleDashboard{
 		font-size: 19px;padding: 10px;font-weight: 550;line-height:1.3em;
 	}
 </style>



</head>
