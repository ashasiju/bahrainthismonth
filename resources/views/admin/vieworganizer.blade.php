@include('admin/header')
@foreach($organizers as $organizer)
@endforeach
<div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Organizers <span style="font-size:16px;color:#888da8;">Add Organizer</span> </h4>
                    </div>
                </div>
                <div class="col-lg-8">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/adminhome')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit organizer</li>
                                    </ol>
                                </nav>
                           
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('/updateorganizer') }}" method="post">
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
                                            <label>Name:  <span class="red">*</span></label>
                                            <input type="text" required class="form-control" name="name" value="{{$organizer->name}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Company Name:  </label>
                                            <input type="text"  class="form-control" name="company_name" value="{{$organizer->company_name}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Email Address:  </label>
                                            <input type="email" pattern="[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" title="(format: xxx@xxx.xxx)"  class="form-control" name="email" value="{{$organizer->email}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Website:  </label>
                                            <input type="text"  class="form-control" name="website" value="{{$organizer->website}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Phone No:  </label>
                                            <input type="text" pattern='[0-9]{10}' value="{{$organizer->phoneno}}" title='Phone Number (Format: 9999999923)'  class="form-control" name="phoneno">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Mobile No:  </label>
                                            <input type="text" pattern='[0-9]{10}' value="{{$organizer->mobileno}}" title='Phone Number (Format: 9999999923)'  class="form-control" name="mobileno">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Facebook Page:  </label>
                                            <input type="text"  class="form-control" name="facebook" value="{{$organizer->facebook}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Twitter:  </label>
                                            <input type="text"  class="form-control" name="twitter" value="{{$organizer->twitter}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <input type="hidden" name="id" value="{{ $organizer->id }}">

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