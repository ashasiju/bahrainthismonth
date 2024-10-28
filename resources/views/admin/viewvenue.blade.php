@include('admin/header')
@foreach($venues as $venue)

@endforeach
<div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">venues <span style="font-size:16px;color:#888da8;">Add venue</span> </h4>
                    </div>
                </div>
                <div class="col-lg-8">
                                
                                    

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/adminhome')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/venues')}}">venues List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit venue</li>
                                    </ol>
                                </nav>
                           
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('/updatevenue') }}" method="post">
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
                                            <label>Venue Name: <span class="red">*</span></label>
                                            <input type="text" required class="form-control" name="name" id="title" placeholder="Venue Name" value="{{$venue->name}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
<div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Venue Category:</label>
                                            <select class="select" name="category">
                                            <option value="">Select Category</option>
                                                @foreach($venuecategory as $vcat)
                                                <option value="{{$vcat->id}}" @if($venue->category==$vcat->id) selected="selected" @endif>{{$vcat->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Location:</label>
                                            <input type="text" placeholder="Location" class="form-control" name="location" value="{{$venue->location}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Venue Telephone:</label>
                                            <input type="text"  pattern='[0-9]{10}' title='Phone Number (Format: 9999999923)' class="form-control" name="telephone" placeholder="Venue Telephone" value="{{$venue->telephone}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Venue Website:</label>
                                            <input type="text"  class="form-control" name="website" placeholder="http://www.abc.com" value="{{$venue->website}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Venue Description:</label>
                                            <textarea class="form-control" name="description">{{$venue->description}}</textarea>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Tags:</label>
                                            <select class="select" name="tag">
                                            <option value="">Select Tag</option>
                                                @foreach($tags as $ecat)
                                                <option value="{{$ecat->id}}" @if($venue->tag==$ecat->id) selected="selected" @endif>{{$ecat->tag_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                       
                                        <div class="form-group">
                                            <label>Meta Title:</label>
                                            <input type="text"  class="form-control" name="meta_title" value="{{$venue->meta_title}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Meta Description:</label>
                                            <textarea class="form-control" name="meta_desc" >{{$venue->meta_desc}}</textarea>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Meta Keywords :</label>
                                            <input type="text"  class="form-control" name="meta_keywords" placeholder="" value="{{$venue->meta_keywords}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Meta URL:</label>
                                            {{url('updates/')}}
                                            <input type="text"  class="form-control" name="url" id="url" value="{{$venue->url}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Upload Top Banner:</label>
                                            <input type="file" placeholder="" class="form-control" name="top_image" id="top_image" onchange="checkFileDetails()">
                                            <div class="clearfix margin-top-10">
<span class="label label-danger margin-right-2"> Note! </span>&nbsp;
<span class="note_txt"> <p>Size: 1170 X 100 px, Supported formats JPEG, PNG, GIF </p> </span>
</div>

                                        </div>
                                 <div id="top_image_div"></div>       
                                       
                                    </div>
                                    @if($venue->top_image!='')
                                    <div class="col-md-4">
                                        <img src="{{url($venue->top_image)}}" width="300" height="250">
                                            </div> 
                                            @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Upload Featured Image:</label>
                                            <input type="file" placeholder="" class="form-control" name="featured_image" id="featured_image" onchange="checkFileDetails1()">
                                            <div class="clearfix margin-top-10">
<span class="label label-danger margin-right-2"> Note! </span>&nbsp;
<span class="note_txt"> <p>Size: 200 X 200 px, Supported formats JPEG, PNG, GIF </p> </span>
</div>
                                        </div>
                                        
                                        <div id="featured_image_div"></div>  
                                    </div>
                                    @if($venue->featured_image!='')
                                    <div class="col-md-4">
                                        <img src="{{$venue->featured_image}}" width="50" height="50">
                                            </div> 
                                            @endif   
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Upload Background Image:</label>
                                            <input type="file" placeholder="" class="form-control" name="background_image" id="background_image" onchange="checkFileDetails2()">
                                            <div class="clearfix margin-top-10">
<span class="label label-danger margin-right-2"> Note! </span>&nbsp;
<span class="note_txt"> <p>Size: 1600 X 970 px, Supported formats JPEG, PNG, GIF </p> </span>
</div>
                                        </div>
                                        
                                        <div id="background_image_div"></div>
                                    </div>
                                    @if($venue->background_image!='')
                                    <div class="col-md-4">
                                        <img src="{{$venue->background_image}}" width="500" height="300">
                                            </div> 
                                            @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Background Image Color:</label><br>
                                            <input type="color" placeholder=""  name="bg_color" id="bg_color">
                                            <input type="text" name="v_bg_color" id="bg_color_code" readonly>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
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
                                <input type="hidden" name="prtop_image" value="{{ $venue->top_image }}">
                                <input type="hidden" name="prfeatured_image" value="{{ $venue->featured_image }}">
                                <input type="hidden" name="prbackground_image" value="{{ $venue->background_image }}">

                                <input type="hidden" name="id" value="{{ $venue->regtime }}">

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