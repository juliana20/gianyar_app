<html>
@include('layouts.head_login')

<style>
input[type=password] {
  outline: none;border: none;border-bottom: 1px solid #ddd;font-size: 14px;
}
input[type=password]:focus {
  border-bottom: 1px solid #blue;
  color: #000;
}

input[type=text] {
  outline: none;border: none;border-bottom: 1px solid #ddd;font-size: 14px;
}
input[type=text]:focus {
  border-bottom: 1px solid #blue;
  color: #000;
}
</style>

<body class="hold-transition clBgBody">
@include('sweet::alert')
<div class="login-box clLoginBox">
    <p><h3 align="center">{{config('app.app_name')}}</h3></p>
        <!-- <div class="login-logo">
            <img src="{{url('public/image/logo.png')}}" width="200">
        </div> -->
        <!-- /.login-logo -->
        <div class="login-box-body">  
            <form action="{{url('/LoginPost')}}" method="post">
                 {{ csrf_field() }}
                <div class="form-group has-feedback ">
                    <input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus autocomplete="off">
                    <span class="glyphicon glyphicon-user form-control-feedback" style="color: #000"></span>
                </div>
                <div class="form-group has-feedback ">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
                    <span class="glyphicon glyphicon-lock form-control-feedback" style="color: #000"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                               <input type="checkbox" onclick="myFunction()"> <span style="font-size: 12.5px;vertical-align: 2.5;color:#585858">Show Password</span>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"> Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>