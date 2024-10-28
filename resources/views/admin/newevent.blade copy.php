@include('admin/header')
<div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Events <span style="font-size:16px;color:#888da8;">Add Event</span> </h4>
                    </div>
                </div>
                <div class="col-lg-8">
                                
                                    

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/adminhome')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/events')}}">Events List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Event</li>
                                    </ol>
                                </nav>
                           
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{url('/postevent')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="card-box">
                            @if(count($errors)>0)

@foreach($errors->all() as $error)

  <p class="alert alert-success">{{$error}}</p>

@endforeach

@endif
 
<div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Type of Events</h4>
                                        <div class="form-group">
                                            <label>Event Category: <span class="red">*</span></label>
                                            <select class="select" name="category">
                                            <option value="">Select Category</option>
                                                @foreach($eventcategory as $ecat)
                                                <option value="{{$ecat->id}}">{{$ecat->subcategory_name}}</option>
                                                @endforeach
                                            </select>                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Event details</h4>
                                        <div class="form-group">
                                            <label>Event Title: <span class="red">*</span></label>
                                            <input type="text" required placeholder="Give it a Short Distinct Name" class="form-control" name="title" id="title">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                       
                                        <div class="form-group">
                                            <label>Start Date & Time: <span class="red">*</span></label>
                                            <input type="text" value="{{date('d/m/Y')}}" placeholder="{{date('d/m/Y')}}" class="form-control datetimepicker" name="start_date">
                                            </div></div>
                                            <div class="col-md-4">
                                        
                                        <div class="form-group">
                                        <label>Starting Hours</label>
                                            <select class="select" name="start_hour" required>
                                            <option value="">Starting Hours</option>
                                                <?php
                                            
                                                for ($i = 0; $i <= 23; $i++) 
                                                {
                                                    if ($i <= 9) 
                                                    {
                                                        $hh = '0' . $i;
                                                    } 
                                                    else 
                                                    {
                                                        $hh = '' . $i;
                                                    } ?>
                                                    <option value="<?= $hh ?>"><?= $hh ?></option>
                                            <?php } ?>
                                            </select>
                                            </div></div>
                                            <div class="col-md-4">
                                        
                                        <div class="form-group">
                                        <label>Starting Minutes</label>
                                            <select required name="start_min" id="event_start_min" class="select" />
                                                <option value="">Starting Minutes</option>
                                                <?php
                                                for ($i = 0; $i <= 59; $i++) 
                                                {
                                                    if ($i <= 9) 
                                                    {
                                                        $mm = '0' . $i;
                                                    } 
                                                    else 
                                                    {
                                                        $mm = '' . $i;
                                                    }  ?>  
                                                        
                                                    <option value="<?= $mm ?>" 
                                                       ><?= $mm ?></option>
                                                <?php } ?>	
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                        
                                        <div class="form-group">
                                            <label>End Date & Time: <span class="red">*</span></label>
                                            <input type="text" value="{{date('d/m/Y')}}" placeholder="{{date('d/m/Y')}}" class="form-control datetimepicker" name="end_date">
                                            
                                            </div></div>
                                            <div class="col-md-4">
                                        
                                        <div class="form-group">
                                        <label>Ending Hours</label><select class="select" name="end_hour" required>
                                            <option value="">Ending Hours</option>
                                                <?php
                                            
                                                for ($i = 0; $i <= 23; $i++) 
                                                {
                                                    if ($i <= 9) 
                                                    {
                                                        $hh = '0' . $i;
                                                    } 
                                                    else 
                                                    {
                                                        $hh = '' . $i;
                                                    } ?>
                                                    <option value="<?= $hh ?>"><?= $hh ?></option>
                                            <?php } ?>
                                            </select>
                                                </div></div>
                                            <div class="col-md-4">
                                        
                                        <div class="form-group">
                                        <label>Ending Minutes</label>
                                            <select name="end_min" id="event_start_min" class="select" required/>
                                                <option value="">Ending Minutes</option>
                                                <?php
                                                for ($i = 0; $i <= 59; $i++) 
                                                {
                                                    if ($i <= 9) 
                                                    {
                                                        $mm = '0' . $i;
                                                    } 
                                                    else 
                                                    {
                                                        $mm = '' . $i;
                                                    }  ?>  
                                                        
                                                    <option value="<?= $mm ?>" 
                                                       ><?= $mm ?></option>
                                                <?php } ?>	
                                            </select>                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Location: <span class="red">*</span></label>
                                            <input type="text" required placeholder="Specify where its held" class="form-control" name="location">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Venue: <span class="red">*</span></label>
<select class="select" name="venue" required>
                                            <option value="">Select a Venue</option>
                                                @foreach($venues as $venue)
                                                <option value="{{$venue->id}}">{{$venue->name}}</option>
                                                @endforeach
                                            </select>                                        </div>
                                        
                                       <a href="{{url('newvenue')}}">+ Add New Venue</a><br><br>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Admission: <span class="red">*</span></label>
                                            <br>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" required name="admission" id="gender_male" value="Free">
												<label class="form-check-label" for="gender_male">Free Entry</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" required name="admission" id="gender_female" value="Paid">
												<label class="form-check-label" for="gender_female">Paid Entry</label>
											</div>                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <?php for($k=1; $k<=25; $k++) { ?>
                            <div id="chpater-row{{$k}}" @if($k != '1') style="display: none;" @endif>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Event Image: <span class="red">*</span></label>
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
                                            <input type="text"  class="form-control" name="fimagealt{{ $k }}" id="fimagealt{{ $k }}" placeholder="Event ALT Tag">
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
                                            <label>Event Description: <span class="red">*</span></label>
                                            <textarea required class="ckeditor form-control" name="description"></textarea>                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Tags:</label>
                                            <select class="select" name="tag">
                                            <option value="">Select Tag</option>
                                                @foreach($tags as $tag)
                                                <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Event Website URL:</label>
                                            <input type="text"  class="form-control" name="website" placeholder="http://www.abc.com">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Facebook URL:</label>
                                            <input type="text"  class="form-control" name="facebook">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                       <h4 class="card-title">Request</h4>
                                        <div class="form-group">
                                            <label>Ask For Photographer
Request for Bahrain This Month photographer / As far as availability:</label>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                      
                                        <div class="form-group">
                                            <label>Would you like our photographer to cover your event?:</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="photographer" id="gender_male" value="No">
												<label class="form-check-label" for="gender_male">No</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="photographer" id="gender_female" value="Yes">
												<label class="form-check-label" for="gender_female">Yes</label>
											</div>                                         </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                      
                                        <div class="form-group">
                                            <label>Your Comments:</label>
                                            <textarea  class="form-control" name="comments" ></textarea>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Organizer Details</h4>
                                        <div class="form-group">
                                            <label>Organizer Name:</label>
                                            <select class="form-control select" name="organizer" id="organizer">
                                            <option value="">Select Organizer</option>
                                                @foreach($organizers as $organizer)
                                                <option value="{{$organizer->id}}">{{$organizer->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <a href="#" onclick="vieworganizer()">+ Edit this Organizer</a> | <a target="_blank" href="{{url('neworganizer')}}">+ Add New Organizer</a> 
                                       <br><br>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Contact Details</h4>
                                        <div class="form-group">
                                            <label>Name :</label>
                                            <input type="text"  class="form-control" name="contact_name" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Phone No :</label>
                                            <input type="text"  class="form-control" name="contact_phone" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Email Address :</label>
                                            <input type="text"  class="form-control" name="contact_email" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Bystander Editor Options</h4>
                                        <div class="form-group">
                                            <label>Set Priority:</label><br>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bpriority" id="gender_male" value="1">
												<label class="form-check-label" for="gender_male">1</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bpriority" id="gender_female" value="2">
												<label class="form-check-label" for="gender_female">2</label>
											</div> 
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bpriority" id="gender_male" value="3">
												<label class="form-check-label" for="gender_male">3</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bpriority" id="gender_female" value="4">
												<label class="form-check-label" for="gender_female">4</label>
											</div> 
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bpriority" id="gender_male" value="5">
												<label class="form-check-label" for="gender_male">5</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bpriority" id="gender_female" value="6">
												<label class="form-check-label" for="gender_female">6</label>
											</div>  
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>date :</label>
                                            <input type="text"  class="form-control datetimepicker" name="bdate" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Time :</label>
                                            <input type="text"  class="form-control timepicker btime" name="btime" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Location :</label>
                                            <input type="text"  class="form-control" name="blocation" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Category :</label><br>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bcategory" id="gender_male" value="RHM Event">
												<label class="form-check-label" for="gender_male">RHM Event</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bcategory" id="gender_female" value="Editorial Request [ER]">
												<label class="form-check-label" for="gender_female">Editorial Request [ER] </label>
											</div>                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>photographer :</label>
                                            <input type="text"  class="form-control" name="bphotographer" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Publication :</label>
                                            <input type="text"  class="form-control" name="bpublication" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Reason :</label>
                                            <input type="text"  class="form-control" name="breason" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Advertiser :</label><br>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="badvertiser" id="gender_male" value="Yes">
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="badvertiser" id="gender_female" value="No">
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                         </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>RHM Contact :</label>
                                            <input type="text"  class="form-control" name="brhm" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Comments :</label>
                                            <input type="text"  class="form-control" name="bcomments" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Administrator Options</h4>
                                        <div class="form-group">
                                            <label>Is Featured:</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_featured" id="gender_male" value="1">
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_featured" id="gender_female" value="0">
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Is Sponsored :</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_sponsored" id="gender_male" value="1">
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_sponsored" id="gender_female" value="0">
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Event Status :</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="status" id="gender_male" value="1">
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="status" id="gender_female" value="0">
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Is Approved :</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_approved" id="gender_male" value="1">
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_approved" id="gender_female" value="0">
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Show Event :</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_show" id="gender_male" value="1">
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_show" id="gender_female" value="0">
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Show Event Banner:</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_showbanner" id="gender_male" value="1">
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_showbanner" id="gender_female" value="0">
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Show Countdown :</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_showcountdown" id="gender_male" value="1">
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_showcountdown" id="gender_female" value="0">
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Event Limitations & Facilities</h4>
                                @foreach($facilities as $facility)
                               
                                        <div class="form-group">
                                        <img src="{{$facility->icon}}">
                                            <label>{{$facility->title}} :</label>
                                            
                                        </div>
                                        
                                       
                                    
                                @endforeach
                                </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Event Venue Map</h4>
                                        <div class="form-group">
                                           
                                            <input type="file"  class="form-control" name="venue_map" placeholder="">
 
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Manage SEO</h4>
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
                               <!-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Upload Top Banner:</label>
                                            <input type="file" placeholder="" class="form-control" name="top_image">
                                            <div class="clearfix margin-top-10">
<span class="label label-danger margin-right-2"> Note! </span>&nbsp;
<span class="note_txt"> <p>Size: 1170 X 100 px, Supported formats JPEG, PNG, GIF </p> </span>
</div>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>-->
                                <input type="hidden" name="tot" id="tot" value="1">

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
<script type="text/javascript">
    function vieworganizer()
    {
        alert("hi");
        organizer=$("#organizer").val();
        alert(organizer);
        window.location.href = '../vieworganizer/'+organizer;
    }
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
        $('.btime').timepicker({
            timeFormat: 'H:i',
        });
    </script>