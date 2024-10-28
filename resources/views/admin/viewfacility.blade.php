@include('admin/header')
@foreach($facility as $cat)

@endforeach
<div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Event Facility <span style="font-size:16px;color:#888da8;">Add Event Facility</span> </h4>
                    </div>
                </div>
                <div class="col-lg-8">
                                
                                    

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/adminhome')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/facility')}}">Event Facility List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Event Facility</li>
                                    </ol>
                                </nav>
                           
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('/updatefacility') }}" method="post" enctype="multipart/form-data">
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
                                            <label>Event Facility Name:<span class="red">*</span></label>
                                            <input type="text" required class="form-control" name="title" value="{{$cat->title}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Status:<span class="red">*</span></label>
                                            <select class="select" name="status" required>
                                                <option value="1" @if($cat->status=='1') selected="selected" @endif>Active</option>
                                                <option value="0" @if($cat->status=='0') selected="selected" @endif>Inactive</option>
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Icon <span class="red">*</span></label>
                                        <input class="form-control" onchange="checkFileDetails()" type="file" name="image" id="image" required>
                                    </div>
                                    <div class="clearfix margin-top-10">
<span class="label label-danger margin-right-2"> Note! </span>&nbsp;
<span class="note_txt">Type :<b>gif,jpeg,jpg,png</b> Size: <b>36x36</b>, only allowed &amp; Image name should not contain spaces.</span>
</div>
<div id="top_image_div"></div> 
                                </div>
                                <div class="col-sm-4">
                                <img src="../{{$cat->icon}}" style="width:50px;height:50px;">
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
<script>
    function checkFileDetails() {
         //alert('hai');
        var fi = document.getElementById('image');
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
                        if(w == 36 && h == 36)
                        {
                            isValid = true;
                        }
                        else
                        {
                            document.getElementById("top_image_div").innerHTML =document.getElementById("top_image_div").innerHTML;

                            alert("image must be in 36x36px");
                        }
                    }
                };
                reader.readAsDataURL(file);
            }
        }
        return isValid;
    }
    </script>
@include('admin/footer')