@include('header')

    <!-- Content -->
    <div class="page-content bg-white subscribe1">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle mob-view-breadcrumb" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <!-- <h1 class="text-white">Login</h1> -->
					<!-- <p>Find awesome places, bars, restaurants & activities.</p> -->
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>Add Blog</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		
        <!-- contact area -->
        	<div class="container-width pt-5">
			
				<div class="col-lg-12 login-form-box">
				<form action="{{url('/postuserblog')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="tot" id="tot" value="1">

					<div class="content-box">

						<div class="content-body">
							<div class="form-group">
								<label>Category</label>

								<select name="category">
								<option>Choose a Category</option>
									@foreach($ucategory as $ucat)
									
									<option value="{{$ucat->id}}">{{$ucat->category_name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Blog Title</label>
								<input required="" name="title" type="text" class="form-control m-b10" placeholder="Give it a distinct name">
							</div>
							<div class="form-group">
								<label>Add Featured Image</label>
								<input name="fimage" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
								<p class="pt-3">We recommend using at least a 768x410px (2:1 ratio) image that's no larger than 10MB.</p>
							</div>
							<div class="form-group">
								
								<?php for($k=1; $k<=25; $k++) { ?>
									<div id="chpater-row{{$k}}" @if($k != '1') style="display: none;" @endif>

									<input type="text" name="fimagealt{{ $k }}" id="fimagealt{{ $k }}" class="form-control m-b10" placeholder="Image ALT Tag">
								<input type="file" name="fimage{{ $k }}" id="fimage{{ $k }}"  accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
								<p class="pt-3">We recommend using at least a 768x410px (2:1 ratio) image thats no larger than 10MB.</p>
								<label><a href="javascript:newrow({{$k}});" onClick="newrow({{$k}});">+ Add More Images</a></label>
								<br><label><a href="javascript:removerow({{$k}});" onClick="removerow({{$k}});">- Remove Image</a></label>
								</div>
								<?php } ?>
								<!--<input type="text" class="form-control m-b10" placeholder="Image ALT Tag">-->
								<label>Add Featured Video URL</label>
								<input type="text" name="fvideo" class="form-control m-b10">
							</div>
						</div>
						<div class="content-body editor">
							<div class="form-group ">
								<label>Body </label>
								<input name="description" type="text" value="<b>My contents are from <u><span style=&quot;color:rgb(0, 148, 133);&quot;>INPUT</span></u></b>" class="jqte-test">
							</div>
						</div>

						
					</div>

					<input type="submit" class="site-button text-uppercase radius-xl align-self-center album-btn" value="Submit Blog">

					<input  type="submit" class="site-button text-uppercase radius-xl align-self-center album-btn cancel-btn" value="Save Draft">

					<p>Blogs will be active after approval of administrator and current status can view through <a href="dashboard.html"><b>Dashboard</b></a></p>
</form>
				</div>

			</div>

		<!-- contact area END -->
    </div>
    <!-- Content END-->
	@include('footer')

<script>
jQuery(document).ready(function(){
	
	$('.jqte-test').jqte();
	
	// settings of status
	var jqteStatus = true;
	$(".status").on('click',function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('.jqte-test').jqte({"status" : jqteStatus})
	});
	
	$('[data-toggle="tooltip"]').tooltip()

	
	jQuery(document).on('click','.add-social-btn',function(){
		var copy_data = '<div class="input-group"><select id="mySelect"><option>Instagram</option><option>LinkedIn</option><option>Facebook</option></select><input type="text" class="form-control" placeholder="http://"><div class="input-group-prepend"><button class="site-button btn-block add-social-btn" type="button"><i class="fa fa-plus"></i> Add</button><button class="site-button btn-block remove-social-btn red" type="button"><i class="fa fa-times"></i> Close</button></div></div>';
		jQuery('.social-btn-container').append(copy_data);
		jQuery('select').selectpicker();
	});
	
	jQuery(document).on('click','.remove-social-btn',function(){
			jQuery(this).parents('.input-group').remove();
	});

	$('input[type="file"]').imageuploadify();
	
	$('#input-tags').tagEditor({
		placeholder: 'Enter tags ...',
	});
	
});	
   
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

</body>
</html>