@include('admin/header')
@foreach($event_banner as $cat)

@endforeach
<div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Event Ads <span style="font-size:16px;color:#888da8;">Add Event Facility</span> </h4>
                    </div>
                </div>
                <div class="col-lg-8">
                                
                                    

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/adminhome')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/event_banner')}}">Event Ads List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Event Ads</li>
                                    </ol>
                                </nav>
                           
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('/updateevent_banner') }}" method="post" enctype="multipart/form-data">
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
                                            <label>Google:</label>
                                            <select class="select" name="status">
                                                <option value="Custom" @if($cat->type=='Custom') selected="selected" @endif>Custom</option>
                                                <option value="Google Ads" @if($cat->type=='Google Ads') selected="selected" @endif>Google Ads</option>
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Ads Manage URL:</label>
                                            <input type="text" required class="form-control" name="url" value="{{$cat->url}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Ads Manage Name:</label>
                                            <input type="text" required class="form-control" name="name" value="{{$cat->name}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Banner Image </label>
                                        <input class="form-control" type="file" name="banner_image">
                                    </div>
                                    <div class="clearfix margin-top-10">
<span class="label label-danger margin-right-2"> Note! </span>&nbsp;
<span class="note_txt"> Image Dimensions Min : <b id="">282px X 564Px</b> , Type :<b>gif,jpeg,jpg,png</b> only allowed </span>
</div>
                                </div>
                                <div class="col-sm-4">
                                <img src="../{{$cat->banner_image}}" style="width:50px;height:50px;">
                                </div>
                                
                            </div>
                            <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Status:</label>
                                            <select class="select" name="status">
                                                <option value="1" @if($cat->status=='1') selected="selected" @endif>Active</option>
                                                <option value="0" @if($cat->status=='0') selected="selected" @endif>Inactive</option>
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <input type="hidden" name="id" value="1">

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
<style>
    .note_txt
{
    color:#ccc;
}
    </style>
@include('admin/footer')