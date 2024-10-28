
@include('admin/header')
            <div class="content container-fluid">
            <div class="row">
                    <div class="col-sm-7 col-4">
                        <h4 class="page-title">Dashboard <span style="font-size:16px;color:#888da8;">Statistics & Reports</span></h4>
                    </div>

                   <!-- <div class="col-sm-5 col-8 text-right m-b-30">
                        <a href="edit-profile.html" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
                    </div>-->
                </div>
              <!--  <div class="card-box">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="assets/img/user.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 m-b-0">John Doe</h3>
                                                <small class="text-muted">Web Designer</small>
                                                <div class="staff-id">Employee ID : FT-0001</div>
                                                <div class="staff-msg"><a href="chat.html" class="btn btn-primary">Send Message</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="">9876543210</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="">johndoe@example.com</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Birthday:</span>
                                                    <span class="text">24th July</span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text">Male</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="dash-widget-icon bg-success"><i class="fa fa-money" aria-hidden="true"></i></span>
                            <div class="dash-widget-info">
                                <h3>$998</h3>
                                <span>Revenue</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="dash-widget-icon bg-info"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info">
                                <h3>1072</h3>
                                <span>Users</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="dash-widget-icon bg-warning"><i class="fa fa-files-o"></i></span>
                            <div class="dash-widget-info">
                                <h3>72</h3>
                                <span>Projects</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="dash-widget-icon bg-danger"><i class="fa fa-tasks" aria-hidden="true"></i></span>
                            <div class="dash-widget-info">
                                <h3>618</h3>
                                <span>Tasks</span>
                            </div>
                        </div>
                    </div>
                </div>
               
                
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-table card-table-top">
                            <div class="card-header bg-white">
                                <h4 class="card-title m-b-0">Latest 10 Enquiry</h4>
                            </div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table table-striped custom-table m-b-0">
										<thead>
											<tr>
												<th>Sl No</th>
												<th>Name</th>
												<th>Email</th>
												<th>Phone</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><a href="invoice-view.html">#INV-0001</a></td>
												<td>
													<h2><a href="#">Hazel Nutt</a></h2>
												</td>
												<td>8 Aug 2017</td>
												<td>$380</td>
												<td>
													<span class="badge badge-warning-border">Partially Paid</span>
												</td>
											</tr>
											<tr>
												<td><a href="invoice-view.html">#INV-0002</a></td>
												<td>
													<h2><a href="#">Paige Turner</a></h2>
												</td>
												<td>17 Sep 2017</td>
												<td>$500</td>
												<td>
													<span class="badge badge-success-border">Paid</span>
												</td>
											</tr>
											<tr>
												<td><a href="invoice-view.html">#INV-0003</a></td>
												<td>
													<h2><a href="#">Ben Dover</a></h2>
												</td>
												<td>30 Nov 2017</td>
												<td>$60</td>
												<td>
													<span class="badge badge-danger-border">Unpaid</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
                            <div class="card-footer text-center bg-white">
                                <a href="invoices.html" class="text-muted">View all invoices</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-table card-table-top">
                            <div class="card-header bg-white">
                                <h4 class="card-title m-b-0">Latest 10 Event Details</h4>
                            </div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table table-striped custom-table m-b-0">
										<thead>
											<tr>
												<th>Sl No</th>
												<th>Event Name</th>
												<th>Location</th>
												<th>Start Date Date</th>
												<th>End Date</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><a href="invoice-view.html">#INV-0004</a></td>
												<td>
													<h2><a href="#">Barry Cuda</a></h2>
												</td>
												<td>Paypal</td>
												<td>11 Jun 2017</td>
												<td>$380</td>
											</tr>
											<tr>
												<td><a href="invoice-view.html">#INV-0005</a></td>
												<td>
													<h2><a href="#">Tressa Wexler</a></h2>
												</td>
												<td>Paypal</td>
												<td>21 Jul 2017</td>
												<td>$500</td>
											</tr>
											<tr>
												<td><a href="invoice-view.html">#INV-0006</a></td>
												<td>
													<h2><a href="#">Ruby Bartlett</a></h2>
												</td>
												<td>Paypal</td>
												<td>28 Aug 2017</td>
												<td>$60</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
                            <div class="card-footer text-center bg-white">
                                <a href="payments.html" class="text-muted">View all payments</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
           
    @include('admin/footer')
