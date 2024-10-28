@include('admin/header')
<div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">CMS Pages <span style="font-size:16px;color:#888da8;">Add cmspage</span> </h4>
                    </div>
                </div>
                <div class="col-lg-8">
                                
                                    

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/adminhome')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/cmspage')}}">Pages List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Page</li>
                                    </ol>
                                </nav>
                           
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{url('/postcmspage')}}" method="post">
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
                                            <label>Menu: <span class="red">*</span></label>
                                            <select class="select" name="menu" id="menu">
                                            <option value="">Select Menu</option>
                                                @foreach($cmsmenu as $menu)
                                                <option value="{{$menu->id}}">{{$menu->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Title: <span class="red">*</span></label>
                                            <input type="text" required class="form-control" name="title" id="title">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Status: <span class="red">*</span></label>
                                            <select class="select" name="status" id="status">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Description:</label>
                                            <textarea name="description" id="description" class="form-control"></textarea>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                       
                                        <div class="form-group">
                                            <label>Meta Title:</label>
                                            <input type="text"  class="form-control" name="meta_title" id="meta_title">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Meta Description:</label>
                                            <textarea class="form-control" name="meta_desc" id="meta_desc"></textarea>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Meta Keywords :</label>
                                            <input type="text"  class="form-control" name="meta_keywords" id="meta_keywords" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>URL:</label>
                                            <input type="text" required class="form-control" name="url" id="url">
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
$('#menu').on('change',function(){
    
	//var token_value=$( "input[name='"+token_name+"']" ).val();
	if($("#menu").val()!='')
	{
        //alert("if");
        menu=$("#menu").val();
		$.ajax
		({
			url: "<?php echo route('get-data') ?>",
            method: "POST",
            data: {menu_id:menu, _token:'{{csrf_token()}}'},
			success: function(response)
			{
                //alert(response.data[0]['id']);
			   $("#title").val(response.data[0]['title']);
               $("#description").val(response.data[0]['description']);
               $("#meta_title").val(response.data[0]['meta_title']);
               $("#meta_desc").val(response.data[0]['meta_desc']);
               $("#meta_keywords").val(response.data[0]['meta_keywords']);
               $("#status").val(response.data[0]['status']);
               $("#url").val(response.data[0]['url']);
			}
		});
	}else{
        $("#title").val('');
               $("#description").val('');
               $("#meta_title").val('');
               $("#meta_desc").val('');
               $("#meta_keywords").val('');
               $("#status").val('');
               $("#url").val('');
	}
})
 </script>
 