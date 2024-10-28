@include('header')

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle mob-view-breadcrumb" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <!-- <h1 class="text-white">Login</h1> -->
					<!-- <p>Find awesome places, bars, restaurants & activities.</p> -->
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>Login</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		
		
		
			
			<div class="container-width pt-5">
			
				<div class="col-lg-12 login-form-box">
				
						
						<div class="tab-content">
							<div id="login" class="tab-pane active">
								<form method="post" class="dlab-form" action="{{url('/usersignin')}}">
								{{ csrf_field() }}
								<h3 class="form-title m-t0 text-center">Please login to your account</h3>
									<div class="text-center m-b20">
										<a href="#" class="site-button facebook btn-block"><i class="fa fa-facebook-official m-r10"></i> Log in with Facebook</a>
									</div>
									@if(count($errors)>0)

@foreach($errors->all() as $error)

  <p class="alert alert-success">{{$error}}</p>

@endforeach

@endif
									<div class="form-group">
										<input name="email" required="" class="form-control" placeholder="Username or Email Address" type="text"/>
									</div>
									<div class="form-group">
										<input name="password" required="" class="form-control " placeholder="Type Password" type="password"/>
									</div>
									<div class="form-group field-btn text-left">
										<div class="input-block">
											<input id="check1" type="checkbox">
											<label for="check1">Keep me logged in</label>
										</div>
										<a data-toggle="tab" href="#forgot-password" class="btn-link forgot-password "> Forgot Password</a>
									</div>
									<div class="form-group">
										<button class="site-button btn-block button-md">login</button>
									</div>
									<div class="form-group">
										<p class="info-bottom">Don’t have an account? <a data-toggle="tab" href="#register" class="btn-link">SignUp Now</a> </p>
									</div>
								</form>
							</div>
							<div id="forgot-password" class="tab-pane fade">
								<form class="dlab-form">
								{{ csrf_field() }}
									<!-- <h3 class="form-title m-t0">Find Your Account</h3> -->
									<div class="form-group text-center">
										<a href="#" class="site-button facebook btn-block"><i class="fa fa-facebook-official m-r10"></i> Log in with Facebook</a>
									</div>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Enter Your Email ID" type="text"/>
									</div>
									<div class="form-group"> 
										<button class="site-button btn-block button-md">Submit</button>
									</div>
									<div class="form-group">
										<p class="info-bottom">
											<a data-toggle="tab" href="#login" class="btn-link">Login </a> | 
											<a data-toggle="tab" href="#register" class="btn-link">Register</a> 
										</p>
									</div>
								</form>
							</div>
							<div id="register" class="tab-pane fade">
								<form class="dlab-form" method="post" action="{{url('/usersignup')}}">
								{{ csrf_field() }}
									<!-- <h3 class="form-title m-t0">Create an account! It's free and always will be.</h3> -->
									<div class="form-group text-center">
										<a href="#" class="site-button facebook"><i class="fa fa-facebook-official m-r10"></i> Log in with Facebook</a>
									</div>
									<div class="form-group">
										<input  required="" class="form-control" name="name" placeholder="Full Name" type="text"/>
									</div>
									<div class="form-group">
										<input  required="" pattern="[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" title="(format: xxx@xxx.xxx)" class="form-control" name="email" placeholder="Email Id" type="email"/>
									</div>
									<div class="form-group">
										<input required="" pattern='[0-9]{10}' title='Phone Number (Format: 9999999923)' class="form-control" name="mobile" placeholder="Mobile" type="text"/>
									</div>
									
									
									<div class="form-group">
										<input  required="" class="form-control" name="password" placeholder="Password" type="password"/>
									</div>
									
									<div class="form-group">
										<input type="checkbox" id="privacy-policy" required>
										<label for="privacy-policy">Accept <a href="termsandconditions.html" class="btn-link">Terms of Use </a>& <a href="privacypolicy.html" class="btn-link"> Privacy Policy .</a></label>
									</div>
									<div class="form-group"> 
										<button class="site-button button-md btn-block">SignUp Now !</button>
									</div>
									<div class="form-group">
										<p class="info-bottom">
											<a data-toggle="tab" href="#login" class="btn-link">Login with username and password?</a> 
										</p>
									</div>
								</form>
							</div>
						</div>
					
				</div>
				
			
		</div>
			
    </div>
    <!-- Content END-->
	@include('footer')
