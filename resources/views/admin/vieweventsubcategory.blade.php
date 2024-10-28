@include('admin/header')
@foreach($eventsubcategory as $cat)

@endforeach
<div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Event Category <span style="font-size:16px;color:#888da8;">Add Event Category</span> </h4>
                    </div>
                </div>
                <div class="col-lg-8">
                                
                                    

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/adminhome')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/eventsubcategory')}}">Event Sub Category List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Event Sub Category</li>
                                    </ol>
                                </nav>
                           
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('/updateeventsubcategory') }}" method="post">
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
                                            <label>Category Name:  <span class="red">*</span></label>
                                            
<select name="category_name" class="select form-control" required>
                                                <option value="">Select Category</option>
                                                @foreach($eventcategory as $ecat)
                                                <option value="{{$ecat->id}}" @if($cat->category_name==$ecat->id) selected="selected" @endif>{{$ecat->category_name}}</option>
                                                @endforeach
                                            </select>
</div></div></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Sub Category Name:  <span class="red">*</span></label>
                                            <input type="text" required class="form-control" name="subcategory_name" value="{{$cat->subcategory_name}}">
                                        </div>
                                        
                                       
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Show in Event:</label>
                                            <select class="select" name="show_in_event">
                                                <option value="1" @if($cat->show_in_event=='1') selected="selected" @endif>Yes</option>
                                                <option value="0" @if($cat->show_in_event=='0') selected="selected" @endif>No</option>
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Position:  <span class="red">*</span></label>
                                            <input type="text" required class="form-control" name="position" value="{{$cat->position}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <input type="hidden" name="id" value="{{ $cat->id }}">

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