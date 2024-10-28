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
							<li>Add Gallery</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		
						<div class="container-width pt-5">
							<div class="col-lg-12 login-form-box">
				
								<h3 class="form-title m-t0 text-center galleryadd-page">Add Gallery</h3>

								<form action="{{url('/postusergallery')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="tot" id="tot" value="1">									<div class="form-group">
										<label class="gallery-label">Gallery Category </label>
										<select name="subcategory">
											<option>Choose a Category</option>
											@foreach($category as $cat)
											<option value="{{$cat->id}}">{{$cat->subcategory_name}}</option>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label class="gallery-label">Gallery Title </label>
										<input name="title" required="" class="form-control" placeholder="Give it a short distinct name" type="text"/>
									</div>

									<div class="form-group">
										<label class="gallery-label">Description</label>
										<textarea name="description" required="" class="form-control" placeholder="Description" type="text"/></textarea>
									</div>

									<div class="content-box">
										<div class="content-header">
											<h3 class="title">Gallery Cover Image
											</h3>
										</div>
										<div class="content-body">
											<div class="form-group">
												<label>Add Album Cover</label>
												<input name="cover_image" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
												<p class="pt-3">We recommend using at least a 827X551px (1.5:1 ratio) image that's no larger than 10MB.</p>
												<input name="dzName" required="" class="form-control" placeholder="Image ALT Tag" type="text"/></input>
											</div>
										</div>
									</div>

									<div class="content-box">
										<div class="content-header">
											<h3 class="title">Gallery Images
											</h3>
										</div>
										<div class="content-body">
											<div class="form-group">
												<label>Add Photos</label>
												<?php for($k=1; $k<=25; $k++) { ?>
													<div id="chpater-row{{$k}}" @if($k != '1') style="display: none;" @endif>
												<input name="gallery_image{{ $k }}" id="gallery_image" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
												<p class="pt-3">We recommend using at least a 827X551px (1.5:1 ratio) image</p>
												<label><a href="javascript:newrow({{$k}});" onClick="newrow({{$k}});">+ Add More Images</a></label>
								<br><label><a href="javascript:removerow({{$k}});" onClick="removerow({{$k}});">- Remove Image</a></label>
								
											</div>
								<?php } ?>
											</div>
										</div>
									</div>

									<a href="#"><button class="site-button text-uppercase radius-xl align-self-center album-btn">Create Album</button></a>

									<a href="#"><button class="site-button text-uppercase radius-xl align-self-center album-btn cancel-btn">Save Draft</button></a>

								</form>

							</div>
						</div>
       


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
                                                
            document.getElementById('gallery_image'+x).value = '';
            //document.getElementById('fimagealt'+x).value = '';
            
            $("#chpater-row"+rowcount).hide();
        }  
</script>

</body>
</html>