@include('admin/header')
@foreach($details as $detail)
@endforeach
            <div class="content container-fluid">
            <div class="row">
                    <div class="col-sm-7 col-4">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    <div class="col-sm-5 col-8 text-right m-b-30">
                        <a href="edit-profile.html" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
                    </div>
                </div>
                <div class="card-box">
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
                                                <h3 class="user-name m-t-0 m-b-0">{{$detail->name}}</h3>
                                                <!--<small class="text-muted">Web Designer</small>
                                                <div class="staff-id">Employee ID : FT-0001</div>-->
                                                <div class="staff-msg"><a href="#" class="btn btn-primary">Edit Profile Picture</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="">{{$detail->mobileno}}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="">{{$detail->email}}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Status:</span>
                                                    <span class="text">{{$detail->status}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Description:</span>
                                                    <span class="text"></span>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
    @include('admin/footer')
