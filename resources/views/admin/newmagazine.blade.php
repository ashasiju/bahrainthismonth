@include('admin/header')
<div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Magazine <span style="font-size:16px;color:#888da8;">Add Magazine</span> </h4>
                    </div>
                </div>
                <div class="col-lg-8">
                                
                                    

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/adminhome')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/magazines')}}">Magazine List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Magazine</li>
                                    </ol>
                                </nav>
                           
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{url('/postmagazine')}}" method="post" enctype="multipart/form-data">
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
                                                <option value="2">updates</option>
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">1. Add Magazine</h4>
                                        <div class="form-group">
                                            <label>Title: <span class="red">*</span></label>
                                            <input type="text" required class="form-control" name="title" id="title" placeholder="Give it a Distinct Name">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <?php for($k=1; $k<=25; $k++) { ?>
                            <div id="chpater-row{{$k}}" @if($k != '1') style="display: none;" @endif>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Featured Image: <span class="red">*</span></label>
                                            <input type="file"  class="form-control" name="fimage{{ $k }}" id="fimage{{ $k }}" placeholder="Choose A photo for Blog Display Image">
                                            <p class="image-tagline">We recommend using at least a 768x410px (2:1 ratio) image that's <br>
                                            no larger than 10MB.</p>
                                        </div>
                                       
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                           <!-- <label>Image ALT Tag:</label>-->
                                            <input type="text"  class="form-control" name="fimagealt{{ $k }}" id="fimagealt{{ $k }}" placeholder="Image ALT Tag">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                
                                @if($k != '25')
                                <span><strong><a href="javascript:newrow({{$k}});" onClick="newrow({{$k}});">+ Add More Images</a></strong></span>
                                @endif
                                <br>
                                @if($k != '1')
                                <span><strong><a href="javascript:removerow({{$k}});" onClick="removerow({{$k}});">- Remove Image</a></strong></span>
                                @endif
                                <br><br>
                            </div>
                            <?php } ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Featured Video:</label>
                                            <input type="file" placeholder="Video Type mp4,Flv,Avi,Mov" class="form-control" name="fvideo">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Body:</label>
                                            <textarea class="ckeditor form-control" name="body"></textarea>
                                           
                       
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">2. Administrator Options</h4>
                                        <div class="form-group">
                                            <label>Short Description1:</label>
                                            <textarea class="ckeditor form-control" name="desc1"></textarea>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Short Description2:</label>
                                            <textarea class="ckeditor form-control" name="desc2"></textarea>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Blog Tags:</label>
                                            <select class="select" class="form-control" name="tag">
                                                @foreach($tags as $tag)
                                                <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                                                @endforeach
</select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Blog Category: <span class="red">*</span></label>
                                            <select class="select" class="form-control" name="category" required>
                                                @foreach($ucategory as $tag)
                                                <option value="{{$tag->id}}">{{$tag->category_name}}</option>
                                                @endforeach
</select>                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Blog Position:</label>
                                            <input type="text"  class="form-control" name="position">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                       <!-- <h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Blog Date: <span class="red">*</span></label>
                                            <input type="text" required class="form-control datetimepicker" name="bdate" >
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                       <!-- <h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Blog Author: <span class="red">*</span></label><br>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" required name="author" id="gender_male" value="BTM Author">
												<label class="form-check-label" for="gender_male">BTM Author</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" required name="author" id="gender_female" value="Other">
												<label class="form-check-label" for="gender_female">Other</label>
											</div>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">3. Manage SEO</h4>
                                        <div class="form-group">
                                            <label>Meta Title:</label>
                                            <input type="text"  class="form-control" name="meta_title" >
                                            <p class="seo-p"><span class="textspans" id="title_count">60 </span>Characters.Most search engines use a maximum of 60 chars for the title.</p>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Meta Description:</label>
                                            <textarea class="form-control" name="meta_desc" ></textarea>
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
                                            <input type="text"  class="form-control" name="meta_keywords" placeholder="">
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>URL:</label>
                                            {{url('magazine/')}}
                                            <input type="text" required class="form-control" name="url" id="url" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <input type="hidden" name="tot" id="tot" value="1">
                                <input type="hidden" name="is_draft" id="is_draft" value="0">
                                <input type="hidden" name="regtime" value="<?php echo time(); ?>">
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
 