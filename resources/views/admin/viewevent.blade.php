@include('admin/header')
@foreach($events as $event)

@endforeach
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css">
	<link rel="stylesheet" href="../css/style.css">
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
                        <form action="{{ url('/updateevent') }}" method="post">
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
                                                <option value="{{$ecat->id}}" @if($event->category==$ecat->id) selected="selected" @endif>{{$ecat->subcategory_name}}</option>
                                                @endforeach
                                            </select>                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Event details</h4>
                                        <div class="form-group">
                                            <label>Event Title: <span class="red">*</span></label>
                                            <input type="text" value="{{ $event->title }}" required placeholder="Give it a Short Distinct Name" class="form-control" name="title" id="title">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                       
                                        <div class="form-group">
                                            <label>Start Date & Time: <span class="red">*</span></label>
                                            <input type="text" value="{{$event->start_date}}" placeholder="{{date('d/m/Y')}}" class="form-control datetimepicker" name="start_date">
                                            </div></div>
                                            <?php if($event->start_time!='') {
                                            $start_time=explode(":",$event->start_time);
                                            $start_hour=$start_time[0];
                                            $start_min=$start_time[1];
}
else  {
    $start_hour='';
    $start_min='';
}if($event->end_time!='') {
                                            $end_time=explode(":",$event->end_time);
                                            $end_hour=$end_time[0];
                                            $end_min=$end_time[1];
}
else  {
    $end_hour='';
    $end_min='';
}
                                            ?>
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
                                                    <option @if($start_hour==$hh) selected="selected" @endif value="<?= $hh ?>"><?= $hh ?></option>
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
                                                        
                                                    <option @if($start_min==$mm) selected="selected" @endif value="<?= $mm ?>" 
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
                                            <input type="text" value="{{$event->end_date}}" placeholder="{{date('d/m/Y')}}" class="form-control datetimepicker" name="end_date">
                                            
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
                                                    <option @if($end_hour==$hh) selected="selected" @endif value="<?= $hh ?>"><?= $hh ?></option>
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
                                                        
                                                    <option @if($end_min==$mm) selected="selected" @endif value="<?= $mm ?>" 
                                                       ><?= $mm ?></option>
                                                <?php } ?>	
                                            </select>                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Location: <span class="red">*</span></label>
                                            <input value="{{ $event->location }}" type="text" required placeholder="Specify where its held" class="form-control" name="location">
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
                                                <option @if($event->venue==$venue->id) selected="selected" @endif value="{{$venue->id}}">{{$venue->name}}</option>
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
												<input class="form-check-input" type="radio" required name="admission" id="gender_male" value="Free" @if($event->admission=="Free") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">Free Entry</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" required name="admission" id="gender_female" value="Paid" @if($event->admission=="Paid") checked="checked" @endif>
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
                                            <textarea required class="form-control" name="description">{!!$event->description!!}</textarea>                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">Personal details</h4>-->
                                        <div class="form-group">
                                            <label>Tags:</label>
                                            <!--<select class="select" name="tag">
                                            <option value="">Select Tag</option>
                                                @foreach($tags as $tag)
                                                <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
                                                @endforeach
                                            </select>-->
                                            <select name="tag[]" multiple="" class="label ui selection fluid dropdown">
                                            @foreach($tags as $tag)
                                            <option value="">Select Tag</option>
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
                                            <input type="text"  class="form-control" name="facebook" value="{{$event->facebook}}">
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
												<input class="form-check-input" type="radio" name="photographer" id="gender_male" value="No" @if($event->photographer=="No") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">No</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="photographer" id="gender_female" value="Yes" @if($event->photographer=="Yes") checked="checked" @endif>
												<label class="form-check-label" for="gender_female">Yes</label>
											</div>                                         </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                      
                                        <div class="form-group">
                                            <label>Your Comments:</label>
                                            <textarea  class="form-control" name="comments" >{{$event->comments}}"</textarea>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Organizer Details</h4>
                                        <div class="form-group">
                                            <label>Organizer Name:</label>
                                            <select class="form-control select" name="organizer" ></select>
                                        </div>
                                        <a href="{{url('neworganizer')}}">+ Add New Organizer</a> 
                                       <br><br>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Contact Details</h4>
                                        <div class="form-group">
                                            <label>Name :</label>
                                            <input type="text"  class="form-control" name="contact_name" value="{{$event->contact_name}}" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Phone No :</label>
                                            <input type="text"  class="form-control" value="{{$event->contact_phone}}" name="contact_phone" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Email Address :</label>
                                            <input type="text"  class="form-control" value="{{$event->contact_email}}" name="contact_email" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Bystander Editor Options</h4>
                                        <div class="form-group">
                                            <label>Set Priority:</label><br>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bpriority" id="gender_male" value="1" @if($event->bpriority=="1") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">1</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bpriority" id="gender_female" value="2" @if($event->bpriority=="2") checked="checked" @endif>
												<label class="form-check-label" for="gender_female">2</label>
											</div> 
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bpriority" id="gender_male" value="3" @if($event->bpriority=="3") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">3</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bpriority" id="gender_female" value="4" @if($event->bpriority=="4") checked="checked" @endif>
												<label class="form-check-label" for="gender_female">4</label>
											</div> 
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bpriority" id="gender_male" value="5" @if($event->bpriority=="5") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">5</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bpriority" id="gender_female" value="6" @if($event->bpriority=="6") checked="checked" @endif>
												<label class="form-check-label" for="gender_female">6</label>
											</div>  
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>date :</label>
                                            <input type="text" value="{{$event->bdate}}" class="form-control datetimepicker" name="bdate" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Time :</label>
                                            <input type="text"  value="{{$event->btime}}" class="form-control timepicker btime" name="btime" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Location :</label>
                                            <input type="text"  value="{{$event->blocation}}" class="form-control" name="blocation" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Category :</label><br>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bcategory" id="gender_male" value="RHM Event" @if($event->bcategory=="RHM Event") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">RHM Event</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="bcategory" id="gender_female" value="Editorial Request [ER]" @if($event->bcategory=="Editorial Request [ER]") checked="checked" @endif>
												<label class="form-check-label" for="gender_female">Editorial Request [ER] </label>
											</div>                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>photographer :</label>
                                            <input type="text"  value="{{$event->contact_email}}" class="form-control" name="bphotographer" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Publication :</label>
                                            <input type="text"  value="{{$event->bpublication}}" class="form-control" name="bpublication" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Reason :</label>
                                            <input type="text"  value="{{$event->breason}}" class="form-control" name="breason" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Advertiser :</label><br>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="badvertiser" id="gender_male" value="Yes" @if($event->badvertiser=="Yes") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="badvertiser" id="gender_female" value="No" @if($event->badvertiser=="No") checked="checked" @endif>
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                         </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>RHM Contact :</label>
                                            <input type="text"  value="{{$event->brhm}}" class="form-control" name="brhm" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Comments :</label>
                                            <input type="text"  value="{{$event->bcomments}}" class="form-control" name="bcomments" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Administrator Options</h4>
                                        <div class="form-group">
                                            <label>Is Featured:</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_featured" id="gender_male" value="1" @if($event->is_featured=="1") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_featured" id="gender_female" value="0" @if($event->is_featured=="0") checked="checked" @endif>
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Is Sponsored :</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_sponsored" id="gender_male" value="1" @if($event->is_sponsored=="1") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_sponsored" id="gender_female" value="0" @if($event->is_sponsored=="0") checked="checked" @endif>
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Event Status :</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="status" id="gender_male" value="1" @if($event->status=="1") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="status" id="gender_female" value="0" @if($event->status=="0") checked="checked" @endif>
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Is Approved :</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_approved" id="gender_male" value="1" @if($event->is_approved=="1") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_approved" id="gender_female" value="0" @if($event->is_approved=="0") checked="checked" @endif>
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Show Event :</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_show" id="gender_male" value="1" @if($event->is_show=="1") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_show" id="gender_female" value="0" @if($event->is_show=="0") checked="checked" @endif>
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Show Event Banner:</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_showbanner" id="gender_male" value="1" @if($event->is_showbanner=="1") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_showbanner" id="gender_female" value="0" @if($event->is_showbanner=="0") checked="checked" @endif>
												<label class="form-check-label" for="gender_female">No </label>
											</div>                                          </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Show Countdown :</label>
                                            <div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_showcountdown" id="gender_male" value="1" @if($event->is_showcountdown=="1") checked="checked" @endif>
												<label class="form-check-label" for="gender_male">Yes</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="is_showcountdown" id="gender_female" value="0" @if($event->is_showcountdown=="0") checked="checked" @endif>
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
                                           
                                            <input type="file"   class="form-control" name="venue_map" placeholder="">
 
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">Manage SEO</h4>
                                        <div class="form-group">
                                            <label>Meta Title:</label>
                                            <input type="text"  value="{{$event->meta_title}}" class="form-control" name="meta_title" >
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Meta Description:</label>
                                            <textarea class="form-control" name="meta_desc" >{{$event->meta_desc}}</textarea>
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--<h4 class="card-title">2. Administrator Options</h4>-->
                                        <div class="form-group">
                                            <label>Meta Keywords :</label>
                                            <input type="text"  class="form-control" name="meta_keywords" value="{{$event->meta_keywords}}" placeholder="">
                                        </div>
                                        
                                       
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label>Meta URL:</label>
                                            {{url('updates/')}}
                                            <input type="text"  class="form-control" name="url" id="url" value="{{$event->url}}">
                                        </div>                                      
                                    </div>
                                    
                                </div>
                                <input type="hidden" name="tot" id="tot" value="1">
                                <input type="hidden" name="id" value="{{ $event->id }}">
                                <input type="hidden" name="regtime" value="<?php echo time(); ?>">
                                <input type="hidden" name="instid" value="{{ Auth::user()->instid }}">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                               <!-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Upload Top Banner:</label>
                                            <input type="file" placeholder="" class="form-control" name="top_image">
                                            <div class="clearfix margin-top-10">

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
<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>
  <script src="../js/main.js"></script>
@include('admin/footer')