@include('admin/header')
@foreach($video as $vid)

@endforeach
<div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Video <span style="font-size:16px;color:#888da8;">Add Video</span> </h4>
                    </div>
                </div>
                <div class="col-lg-8">
                                
                                    

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/adminhome')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/gallerylist')}}">Video List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Video</li>
                                    </ol>
                                </nav>
                           
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{url('/updatevideo')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="card-box">
                            @if(count($errors)>0)

@foreach($errors->all() as $error)

  <p class="alert alert-success">{{$error}}</p>

@endforeach

@endif
<!--<div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Personal details</h4>
                                        <div class="form-group">
                                            <label>Type:</label>
                                            <select class="select" name="type">
                                            <option value="">Select Type</option>
                                                <option value="1">Informaion</option>
                                                <option value="2">gallery</option>
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">1. Add a Video</h4>
                                        <div class="form-group">
                                            <label>Video Title: <span class="red">*</span></label>
                                            <input type="text" value="{{$vid->title}}" required class="form-control" name="title" id="title" placeholder="Give it a Distinct Name">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Video Thumb Image: <span class="red">*</span></label>
                                            <input type="file" placeholder="We recommend using at least a 827x551px (1.5:1 ratio) image that's
no larger than 10MB." class="form-control" name="cover_image">
<div><img src="{{asset($vid->cover_image)}}" width="100" height="100"> </div>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                       
                                        <div class="form-group">
                                            <label>Video URL: <span class="red">*</span></label>
                                            <input required type="text" name="url" class="form-control" value="{{$vid->url}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>    
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">2. Manage SEO</h4>
                                        <div class="form-group">
                                            <label>Meta Title:</label>
                                            <input value="{{$vid->meta_title}}" type="text"  class="form-control" name="meta_title" >
                                            <p class="seo-p"><span class="textspans" id="title_count">60 </span>Characters.Most search engines use a maximum of 60 chars for the title.</p>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Meta Description:</label>
                                            <textarea class="form-control" name="meta_desc" >{{$vid->meta_desc}}</textarea>
                                            <p class="seo-p"><span class="textspans" id="description_count">160 </span>Characters.Most search engines use a maximum of 160 chars for the title.</p>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Meta Keywords :
(Comma separated)</label>
                                            <input type="text"  class="form-control" name="meta_keywords" placeholder="" value="{{$vid->meta_keywords}}">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Status: <span class="red">*</span></label>
                                            <select class="select" name="status" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <input type="hidden" name="id" value="{{ $vid->id }}">

<input type="hidden" name="instid" value="{{ Auth::user()->instid }}">
 <div class="text-left">
                                    <button type="submit" class="btn btn-primary" onclick="change_value('0')">Submit</button>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary" onclick="change_value('1')">Save Draft</button>
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
    .image-tagline {
  float: left;
  width: 100%;
  padding-top: 12px;
  font-size: 14px;
  color: #b3b3b3;
}
</style>
<script type="text/javascript">
    
        function newrow(x)
        {
            var val = 1;
            var tot = $('#tot').val();

            var rowcount = parseInt(x) + parseInt(val);
            var total = parseInt(tot) + parseInt(val);

            document.getElementById('tot').value = total;
            $("#chpater-row"+rowcount).show();
        }
        function removerow(x)
        {
            var rowcount = x;
            var val = 1;
            var tot = $('#tot').val();

            var total = parseInt(tot) - parseInt(val);
            document.getElementById('tot').value = total;
                                                
            document.getElementById('fimage'+x).value = '';
            document.getElementById('fimagealt'+x).value = '';
            
            $("#chpater-row"+rowcount).hide();
        }
        </script>
@include('admin/footer')
<script type="text/javascript">
     $('#title').on('keyup',function(){
	 var title=$(this).val();
	 
	 $("#url").val(convertToAlias($.trim($(this).val())));
 });
 function change_value(val)
 {
    //alert(val);
    $("#is_draft").val(val);
 }
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
 