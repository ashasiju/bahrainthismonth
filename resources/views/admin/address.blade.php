@include('admin/header')
@foreach($address as $media)

@endforeach
           
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-8 col-4">
                        <h4 class="page-title">Address <span style="font-size:16px;color:#888da8;">Address Form</span></h4>
                    </div>
                    <div class="col-lg-8">
                                
                                    

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											
											<li class="breadcrumb-item active" aria-current="page">Edit Address</li>
										</ol>
									</nav>
                               
                            </div>
</div>
                <div class="row">
                    <div class="col-md-12">
                    <form action="{{url('/updateaddress')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="card-box">
                           
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name <span class="red">*</span></label>
                                        <input class="form-control" required type="text" name="name" value="{{$media->name}}">
                                    </div>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address <span class="red">*</span></label>
                                        <input class="form-control " required name="address" value="{{$media->address}}" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile No <span class="red">*</span> </label>
                                        <input class="form-control" pattern='[0-9]{10}' title='Phone Number (Format: 9999999923)' required type="text" name="mobile" value="{{$media->mobile}}">
                                    </div>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Telephone <span class="red">*</span></label>
                                        <input class="form-control " pattern='[0-9]{10}' title='Phone Number (Format: 9999999923)' required value="{{$media->telephone}}" name="telephone" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="red">*</span> </label>
                                        <input class="form-control" pattern="[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" title="(format: xxx@xxx.xxx)" required type="email" name="email" value="{{$media->email}}">
                                    </div>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Fax No <span class="red">*</span></label>
                                        <input class="form-control " required name="faxno" value="{{$media->faxno}}" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Website <span class="red">*</span> </label>
                                        <input class="form-control" required type="text" name="website" value="{{$media->website}}">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Image <span class="red">*</span> </label>
                                        <input class="form-control"  type="file" onchange="checkFileDetails()" name="image" id="image">
                                    </div>
                                    <div class="clearfix margin-top-10">
<span class="label label-danger margin-right-2"> Note! </span>&nbsp;
<span class="note_txt">Type :<b>gif,jpeg,jpg,png</b> Size: <b>198x135</b>, only allowed &amp; Image name should not contain spaces.</span>
</div>
                                </div>
                                <div class="col-sm-4">
                                <img src="{{$media->image}}" style="width:50px;height:50px;">
                                </div>
                                
                            </div>
                            <input type="hidden" name="id" value="1">

                                <input type="hidden" name="instid" value="{{ Auth::user()->instid }}">
                                
                            <div class="row">
                                <div class="col-sm-12 text-center m-t-20">
                                    <button type="submit" class="btn btn-primary">Save &amp; update</button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
    @include('admin/footer')<script>
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
                        if(w == 198 && h == 135)
                        {
                            isValid = true;
                        }
                        else
                        {
                            document.getElementById("image_div").innerHTML =document.getElementById("image_div").innerHTML;

                            alert("image must be in 198x135px");
                        }
                    }
                };
                reader.readAsDataURL(file);
            }
        }
        return isValid;
    }
    </script>