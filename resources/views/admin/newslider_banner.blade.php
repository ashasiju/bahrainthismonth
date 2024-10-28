@include('admin/header')
<div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Slider Banner  <span style="font-size:16px;color:#888da8;">Add Slider Banner</span> </h4>
                    </div>
                </div>
                <div class="col-lg-8">
                                
                                    

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/adminhome')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/slider_banner')}}">Slider Banner List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Slider Banner</li>
                                    </ol>
                                </nav>
                           
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{url('/postslider_banner')}}" method="post" enctype="multipart/form-data">
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
                                            <label>URL:</label>
                                            <input type="text"  class="form-control" name="url">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Banner Image:</label>
                                            <input type="file" placeholder="" class="form-control" name="banner_image">
                                            <div class="clearfix margin-top-10">
<span class="label label-danger margin-right-2"> Note! </span>&nbsp;
<span class="note_txt"> Image Dimensions Min :728 x 90 Px , Type :<b>gif,jpeg,jpg,png</b> only allowed </span>
</div>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Position:</label>
                                            <select class="form-control" name="position">
                                                <option value="">Select Position</option>
                                                <option value="1">Leaderboard</option>
                                               <option value="2">Middle</option>
                                               <option value="3">Footer</option>
</select> 

</div></div></div>
                               <!-- <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Mobile Banner Image:</label>
                                            <input type="file" placeholder="" class="form-control" name="mbanner_image">
                                            <div class="clearfix margin-top-10">
<span class="label label-danger margin-right-2"> Note! </span>&nbsp;
<span class="note_txt"> Image Dimensions Min :300 x 200 Px , Type :<b>gif,jpeg,jpg,png</b> only allowed </span>
</div>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Status:</label>
                                            <select class="select" name="status">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
</select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <input type="hidden" name="instid" value="{{ Auth::user()->instid }}">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
   <!-- <div class="sidebar-overlay" data-reff=""></div>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</body>

</html>-->
<style>
    .label-danger {
  background-color: #d9534f;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
.note_txt
{
    color:#ccc;
}
.margin-top-10 {
  margin-top: 10px !important;
}

</style>
@include('admin/footer')