
        @include('admin/header')
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-8 col-4">
                        <h4 class="page-title">Events <span style="font-size:16px;color:#888da8;">Manage Events</span></h4>
                    </div>
                    <div class="col-lg-8">
                                
                                    

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											
											<li class="breadcrumb-item active" aria-current="page">Events</li>
										</ol>
									</nav>
                               
                            </div>
                    <div class="col-sm-4 col-8 text-right m-b-30">
                        <a href="{{ url('/newevent') }}" class="btn btn-primary btn-rounded pull-right" ><i class="fa fa-plus"></i> Add New Event</a>
                    </div>
                </div>
              <!--  <div class="row filter-row">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">Employee Name</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Status</label>
                            <select class="select floating">
                                <option> -- Select -- </option>
                                <option> Pending </option>
                                <option> Approved </option>
                                <option> Returned </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Priority</label>
                            <select class="select floating">
                                <option> -- Select -- </option>
                                <option> High </option>
                                <option> Low </option>
                                <option> Medium </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">From</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">To</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table m-b-0 datatable" >
                                <thead>
                                    <tr>
                                    <th>Sl No</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Date & Time</th>
                                        <th>Location</th>
                                        <th>Created On</th>
                                        <th>Created By</th>
                                        <th>Status</th>
                                       
                                        <th>Is Approved</th>
                                        <th>Show</th>
                                        <th>Confirmed</th>
                                        
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;?>
                                    @foreach($events as $tag)
                                    <tr>
                                    <td>{{ $i}}</td>
                                        <td>{{$tag->title}}</td>
                                        <td>{{$tag->subcategory_name}}</td>
                                        <td>{{$tag->start_date}}{{$tag->start_time}}</td>
                                        <td>{{$tag->location}}</td>
                                        <td>{{$tag->created_at}}</td>
                                        <td><?php echo $name=App\Models\User::instname($tag->instid,'name');?></td>
                                        <td>{{$tag->status}}</td>
                                        <td>{{$tag->is_approved}}</td>
                                        <td>{{$tag->is_show}}</td>
                                        <td>{{$tag->is_approved}}</td>
                                        <td class="text-right">
                                            <div class+="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{url('/viewevent/'.$tag->regtime)}}"  title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{url('/deleteevent/'.$tag->regtime)}}" onClick="return confirm('Are you sure to Delete??');" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                       
                                        
                                        
                                    </tr>
                                    <?php $i++;?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
    @include('admin/footer')