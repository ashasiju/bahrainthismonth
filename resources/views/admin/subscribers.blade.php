
        @include('admin/header')
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-sm-8 col-4">
                        <h4 class="page-title">Subscribers <span style="font-size:16px;color:#888da8;">Subscribers List</span></h4>
                    </div>
                    <div class="col-lg-8">
                                
                                    

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											
											<li class="breadcrumb-item active" aria-current="page">Subscribers List</li>
										</ol>
									</nav>
                               
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;?>
                                    @foreach($subscribers as $cat)
                                    <tr>
                                    <td>{{ $i}}</td>
                                        <td>{{$cat->name}}</td>
                                        <td>{{$cat->email}}</td>
                                        <td>{{$cat->phone}}</td>
                                        
                                        
                                       
                                        
                                        
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

                    url: "<?php echo route('facility-status') ?>",

                    method: 'POST',

                    data: {status:x,cat_id:y, _token:'{{csrf_token()}}'},

                    success: function(data) {
                        //$("#facilityinfo").load("#facilityinfo");
                        alert("Status Updated");
                        location.reload(true); 
                        //$("#facilityinfo").empty();
       // $("#facilityinfo").load(location.href + " #facilityinfo>*", "");
                        
                        

                    }

                });

            

    }

</script>
    @include('admin/footer')