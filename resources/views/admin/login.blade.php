<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Bahrain This Month</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="account-page">
            <div class="container">
                <h3 class="account-title">Login to Your Account</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <a href="index.html"><img src="assets/img/logo.png" alt="Preadmin"></a>
                        </div>
                        <form action="{{url('/adminsignin')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @if(count($errors)>0)
                      @foreach($errors->all() as $error)
                        <p class="alert alert-success">{{$error}}</p>
                      @endforeach
                    @endif
                            <div class="form-group form-focus">
                                <label class="focus-label">Enter your Username</label>
                                <input class="form-control floating" name="username" type="text" required maxlength="35">
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">Enter your Password</label>
                                <input class="form-control floating" name="password" type="password" required maxlength="8">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-block account-btn" type="submit">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="{{ url('forgotpassword')}}">Forgot your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>