
        @include('admin/header')
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-8 col-4">
                        <h4 class="page-title">Tickets <span style="font-size:16px;color:#888da8;">Manage Tickets</span></h4>
                    </div>
                    <div class="col-lg-8">
                                
                                    

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											
											<li class="breadcrumb-item active" aria-current="page">Tickets</li>
										</ol>
									</nav>
                               
                            </div>
                    <div class="col-sm-4 col-8 text-right m-b-30">
                        <a href="{{ url('/newticket') }}" class="btn btn-primary btn-rounded pull-right" ><i class="fa fa-plus"></i> Add New Ticket
                    
                    
                    </a>
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
                            <table class="table table-striped custom-table m-b-0 datatable" id="" >
                                <thead>
                                    <tr>
                                    <th>#</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;?>
                                    @foreach($tickets as $cat)
                                    <tr>
                                    <td>{{ $i}}</td>
                                        <td>{{$cat->title}}</td>
                                        <td class="text-left">
                                            <div class="dropdown action-label" >
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-danger"></i> @if($cat->status=='0') Inactive @elseif ($cat->status=='1') Active @endif
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:myFunction('1', {{ $cat->id }})"><i class="fa fa-dot-circle-o text-info"></i> Active</a>
                                                    <a class="dropdown-item" href="javascript:myFunction('0', {{ $cat->id }})"><i class="fa fa-dot-circle-o text-info"></i> Inactive</a>
                                                        </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{url('/viewticket/'.$cat->id)}}"  title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{url('/deleteticket/'.$cat->id)}}" onClick="return confirm('Are you sure to Delete??');" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
           
    <script>

    function myFunction(x, y) {

        //var token = $("input[name='_token']").val();
//alert(token);
                $.ajax({

                    url: "<?php echo route('ticket-status') ?>",

                    method: 'POST',

                    data: {status:x,cat_id:y, _token:'{{csrf_token()}}'},

                    success: function(data) {
                        //$("#ticketinfo").load("#ticketinfo");
                        alert("Status Updated");
                        location.reload(true); 
                        //$("#ticketinfo").empty();
       // $("#ticketinfo").load(location.href + " #ticketinfo>*", "");
                        
                        

                    }

                });

            

    }

</script>
    @include('admin/footer')