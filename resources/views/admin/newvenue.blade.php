@include('admin/header')
<div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Venues <span style="font-size:16px;color:#888da8;">Add Venue</span> </h4>
                    </div>
                </div>
                <div class="col-lg-8">
                                
                                    

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/adminhome')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/venues')}}">venues List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add venue</li>
                                    </ol>
                                </nav>
                           
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{url('/postvenue')}}" method="post" enctype="multipart/form-data">
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
                                            <input type="text" required class="form-control" name="name" id="title" placeholder="Venue Name">
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
                                                @foreach($venuecategory as $ecat)
                                                <option value="{{$ecat->id}}">{{$ecat->category_name}}</option>
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
                                            <input type="text" placeholder="Location" class="form-control" name="location">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Venue Telephone:</label>
                                            <input type="text"  pattern='[0-9]{10}' title='Phone Number (Format: 9999999923)' class="form-control" name="telephone" placeholder="Venue Telephone">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Venue Website:</label>
                                            <input type="text"  class="form-control" name="website" placeholder="http://www.abc.com">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Venue Description:</label>
                                            <textarea class="form-control" name="description"></textarea>
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
                                                <option value="{{$ecat->id}}">{{$ecat->tag_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                       
                                        <div class="form-group">
                                            <label>Meta Title:</label>
                                            <input type="text"  class="form-control" name="meta_title" >
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Meta Description:</label>
                                            <textarea class="form-control" name="meta_desc" ></textarea>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Meta Keywords :</label>
                                            <input type="text"  class="form-control" name="meta_keywords" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Meta URL:</label>
                                            {{url('updates/')}}
                                            <input type="text"  class="form-control" name="url" id="url">
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
                                <input type="hidden" name="regtime" value="<?php echo time(); ?>">
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
@include('admin/footer')
<script type="text/javascript">
     $('#title').on('keyup',function(){
	 var title=$(this).val();
	 
	 $("#url").val(convertToAlias($.trim($(this).val())));
 });
 
 function convertToAlias(Text)
{
    //return Text.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'-').replace('_','-');
   // org return Text.toLowerCase().replace(/[^\w-]+/g,'-').replace('_','-');
       //return Text.toLowerCase().replace('','-').replace(' ','-').replace(/[^\w-]+/g,'');
       //return Text.toLowerCase().replace(/[^\w-]+/g,'-').replace("'",'').replace("-",'');
       Text1=Text.replace("- ",'');
       Text2=Text1.replace("'",'');
       return Text2.toLowerCase().replace(/[^\w-]+/g,'-');

}

 </script>
 <script>
        $(document).ready(function () {
            $("#bg_color_code").val($("#bg_color").val());

            // change value
            $("#bg_color").change(function () {
                $("#bg_color_code").val($("#bg_color").val());
            })
        });
    </script>
    <script>
    function checkFileDetails() {
         //alert('hai');
        var fi = document.getElementById('top_image');
        var isValid = false;
        if (fi.files.length > 0) {           
            for (var i = 0; i <= fi.files.length - 1; i++) {
                var fileName, fileExtension, fileSize, fileType, dateModified;
                fileName = fi.files.item(i).name;
                fileExtension = fileName.replace(/^.*\./, '');
                if (fileExtension == 'png' || fileExtension == 'jpg' || fileExtension == 'jpeg') {
                   readImageFile(fi.files.item(i));
                }
            }

            function readImageFile(file) {
                var reader = new FileReader(); // CREATE AN NEW INSTANCE.

                reader.onload = function (e) {
                    var img = new Image();      
                    img.src = e.target.result;

                    img.onload = function () {
                        var w = this.width;
                        var h = this.height;
                        if(w == 1170 && h == 100)
                        {
                            isValid = true;
                        }
                        else
                        {
                            document.getElementById("top_image_div").innerHTML =document.getElementById("top_image_div").innerHTML;

                            alert("image must be in 1170x100px");
                        }
                    }
                };
                reader.readAsDataURL(file);
            }
        }
        return isValid;
    }
    function checkFileDetails1() {
         //alert('hai');
        var fi = document.getElementById('featured_image');
        var isValid = false;
        if (fi.files.length > 0) {           
            for (var i = 0; i <= fi.files.length - 1; i++) {
                var fileName, fileExtension, fileSize, fileType, dateModified;
                fileName = fi.files.item(i).name;
                fileExtension = fileName.replace(/^.*\./, '');
                if (fileExtension == 'png' || fileExtension == 'jpg' || fileExtension == 'jpeg') {
                   readImageFile(fi.files.item(i));
                }
            }

            function readImageFile(file) {
                var reader = new FileReader(); // CREATE AN NEW INSTANCE.

                reader.onload = function (e) {
                    var img = new Image();      
                    img.src = e.target.result;

                    img.onload = function () {
                        var w = this.width;
                        var h = this.height;
                        if(w == 200 && h == 200)
                        {
                            isValid = true;
                        }
                        else
                        {
                            document.getElementById("featured_image_div").innerHTML =document.getElementById("featured_image_div").innerHTML;

                            alert("image must be in 200x200px");
                        }
                    }
                };
                reader.readAsDataURL(file);
            }
        }
        return isValid;
    }
    function checkFileDetails2() {
         //alert('hai');
        var fi = document.getElementById('background_image');
        var isValid = false;
        if (fi.files.length > 0) {           
            for (var i = 0; i <= fi.files.length - 1; i++) {
                var fileName, fileExtension, fileSize, fileType, dateModified;
                fileName = fi.files.item(i).name;
                fileExtension = fileName.replace(/^.*\./, '');
                if (fileExtension == 'png' || fileExtension == 'jpg' || fileExtension == 'jpeg') {
                   readImageFile(fi.files.item(i));
                }
            }

            function readImageFile(file) {
                var reader = new FileReader(); // CREATE AN NEW INSTANCE.

                reader.onload = function (e) {
                    var img = new Image();      
                    img.src = e.target.result;

                    img.onload = function () {
                        var w = this.width;
                        var h = this.height;
                        if(w == 1600 && h == 970)
                        {
                            isValid = true;
                        }
                        else
                        {
                            document.getElementById("background_image_div").innerHTML =document.getElementById("background_image_div").innerHTML;

                            alert("image must be in 1600x970px");
                        }
                    }
                };
                reader.readAsDataURL(file);
            }
        }
        return isValid;
    }
</script>
