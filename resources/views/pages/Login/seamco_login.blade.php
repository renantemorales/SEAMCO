
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEAMCO</title>

    <link rel="icon" type="image/png" href="{{ asset('/images/logo/favi.png') }}"/>
    <link href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/iCheck/all.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/Login_v14/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/Login_v14/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/Login_v14/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/Login_v14/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/Login_v14/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/Login_v14/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/Login_v14/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/Login_v14/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/Login_v14/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/Login_v14/css/main.css') }}">

</head>
<body>

	<div class="limiter">
		<div class="container-login100 login-box">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">
        
        <div class="login-box">
          <div class="login-logo">
            <h1><a href="{!! url('/pages/Index/'); !!}" style="color:#2ACCC0;font-size:35px;text-decoration:none;">- <b>SEAMCO</b> -</a></h1>
          </div>
        </div>
        <div class="login-box-body">
          <!--  -->
          <div class="row">
            <span class="txt1 p-b-11">
            <br/><br/>
              Username
            </span>
            <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
              <input class="input100" type="text" name="username" >
              <span class="focus-input100"></span>
            </div>
            
            <span class="txt1 p-b-11">
              Password
            </span>
            <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
              <span class="btn-show-pass">
                <i class="fa fa-eye"></i>
              </span>
              <input class="input100" type="password" name="pass" >
              <span class="focus-input100"></span>
            </div>
              
          </div>
					
          <!--  -->
          <div class="row">
            <div class="col-xs-4">
            </div>
            
            <div class="col-xs-4">
              <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                  Login
                </button>
              </div>
            </div>
            
            <div class="col-xs-4">
            </div>
          </div>
        <!--  -->
          <hr>
            <div class="social-auth-links text-center">
              <p>New to site? <a href="{!! url('/pages/Register/seamco_register'); !!}"><b>Create account</b></a></p>
            </div>
            <br/><br/>
            <p style="font-size:10pt;" class="text-center">©2018 All Rights Reserved</p>
            <p style="font-size:10pt;" class="text-center">Seafarers Mighty Credit Corporation. Privacy and Terms</p>
            </div>
				</form>

			</div>
		</div>
	</div>

  <script src="{{ asset('/Login_v14/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('/Login_v14/vendor/animsition/js/animsition.min.js') }}"></script>
  <script src="{{ asset('/Login_v14/vendor/bootstrap/js/popper.js') }}"></script>
  <script src="{{ asset('/Login_v14/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/Login_v14/vendor/select2/select2.min.js') }}"></script>
  <script src="{{ asset('/Login_v14/vendor/daterangepicker/moment.min.js') }}"></script>
  <script src="{{ asset('/Login_v14/vendor/daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('/Login_v14/vendor/countdowntime/countdowntime.js') }}"></script>
  <script src="{{ asset('/Login_v14/js/main.js') }}"></script>

</body>
</html>
