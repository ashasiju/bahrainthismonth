@include('admin/header')
@foreach($users as $user)

@endforeach
<div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">users <span style="font-size:16px;color:#888da8;">Add user</span> </h4>
                    </div>
                </div>
                <div class="col-lg-8">
                                
                                    

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/adminhome')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/users')}}">users List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit user</li>
                                    </ol>
                                </nav>
                           
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('/updateuser') }}" method="post">
                        {{ csrf_field() }}
                            <div class="card-box">
                            @if(count($errors)>0)

@foreach($errors->all() as $error)

  <p class="alert alert-success">{{$error}}</p>

@endforeach

@endif
<div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>User Type:</label>
                                            <select class="select" name="type">
                                            <option value="">Select Type</option>
                                                <option value="2" @if($user->type=='2') selected="selected" @endif>Editor</option>
                                                <option value="3" @if($user->type=='3') selected="selected" @endif>Business Owner</option>
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" required class="form-control" name="name" value="{{$user->name}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" pattern="[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" title="(format: xxx@xxx.xxx)" required class="form-control" name="email" value="{{$user->email}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Mobile No:</label>
                                            <input type="text" pattern='[0-9]{10}' title='Phone Number (Format: 9999999923)' required class="form-control" name="mobileno" value="{{$user->mobileno}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Status:</label>
                                            <select class="select" name="status">
                                                <option value="1" @if($user->status=='1') selected="selected" @endif>Active</option>
                                                <option value="0" @if($user->status=='0') selected="selected" @endif>Inactive</option>
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>

                                <input type="hidden" name="id" value="{{ $user->regtime }}">

                                <input type="hidden" name="instid" value="{{ Auth::user()->instid }}">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
    <!--<div class="sidebar-overlay" data-reff=""></div>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</body>

</html>-->
@include('admin/footer')