<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Bahrain This Month</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/morris/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
    <style>
        .breadcrumb
        {
            background:none!important;
            margin-left:-17px;
        }
    </style>
     <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<?php

  $url = Request::segment(1);

?>

    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" width="140" height="50" alt="">
                </a>
            </div>
            <div class="page-title-box pull-left">
                <h3>Bahrain This Month</h3>
            </div>
            <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <ul class="nav user-menu pull-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-primary pull-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">L</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">G</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <!--<li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-primary pull-right">8</span></a>
                </li>-->
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{url('/adminhome')}}">Go To Home</a>
						<a class="dropdown-item" href="{{url('/myprofile')}}">My Profile</a>
						<a class="dropdown-item" href="{{url('/reset-password')}}">Reset Password</a>
						<a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu pull-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{url('/adminhome')}}">Go To Home</a>
                    <a class="dropdown-item" href="{{url('/myprofile')}}">My Profile</a>
                    <a class="dropdown-item" href="{{url('/reset-password')}}">Reset Password</a>
                    <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        
                        <li class="@if(($url == 'adminhome')) active @endif">
                            <a href="{{url('/adminhome')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        
                       <!-- <li class="submenu">
                            <a href="#"><i class="fa fa-video-camera camera" aria-hidden="true"></i> <span> Calls</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="voice-call.html">Voice Call</a></li>
                                <li><a href="video-call.html">Video Call</a></li>
                                <li><a href="incoming-call.html">Incoming Call</a></li>
                            </ul>
                        </li>-->
                        
                        
                       
                       
                        <li class="submenu">
                            <a href="javascript:void(0);" ><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Master </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                            <li>
                                    <a href="{{ url('/tags') }}" class="@if(($url == 'tags') || ($url == 'newtag') || ($url == 'viewtag') || ($url == 'deletetag')) active @endif">Manage Tags</a>
                                </li>
                                <li>
                                    <a href="{{ url('/vcategory') }}" class="@if(($url == 'vcategory') || ($url == 'newvcategory') || ($url == 'viewvcategory') || ($url == 'deletevcategory')) active @endif">Venue Category</a>
                                </li>
                                <li>
                                    <a href="{{ url('/venuesmanagement') }}" class="@if(($url == 'venues') || ($url == 'newvenue') || ($url == 'viewvenue') || ($url == 'deletevenue')) active @endif">Manage Venues</a>
                                </li>
                                <li>
                                    <a href="{{ url('/wstorymanagement') }}" class="@if(($url == 'wstory') || ($url == 'newwstory') || ($url == 'viewwstory') || ($url == 'deletewstory')) active @endif">Manage Web Stories</a>
                                </li>
                                <li>
                                    <a href="tasks.html">SEO Manager</a>
                                </li>
                                <li>
                                    <a href="{{ url('/address') }}" class="@if(($url == 'address')) active @endif">Address</a>
                                </li>
                                <li>
                                    <a href="{{ url('/social_media') }}" class="@if(($url == 'social_media')) active @endif">Social URL</a>
                                </li>
                                <li class="submenu">
                                    <a href="#" class=""><span> CMS</span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled" style="display: none;">
                                        <li><a href="{{ url('/cmsmenu') }}" class="@if(($url == 'cmsmenu') || ($url == 'newcmsmenu') || ($url == 'viewcmsmenu') || ($url == 'deletecmsmenu')) active @endif">CMS Menu</a></li>
                                        <li><a href="{{ url('/cmspage') }}" class="@if(($url == 'cmspage') || ($url == 'newcmspage') || ($url == 'viewcmspage') || ($url == 'deletecmspage')) active @endif">CMS Page</a></li>
                                        
                                    </ul>
                                </li>
                                
                                <li class="submenu">
                                    <a href="#"><span> Events Category </span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled" style="display: none;">
                                        <li><a href="{{ url('/eventcategory') }}" class="@if(($url == 'eventcategory') || ($url == 'neweventcategory') || ($url == 'vieweventcategory') || ($url == 'deleteeventcategory')) active @endif">Category</a></li>
                                        <li><a href="{{ url('/eventsubcategory') }}" class="@if(($url == 'eventsubcategory') || ($url == 'neweventsubcategory') || ($url == 'vieweventsubcategory') || ($url == 'deleteeventsubcategory')) active @endif">Sub Category</a></li>
                                       
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('/mcategory') }}" class="@if(($url == 'mcategory') || ($url == 'newmcategory') || ($url == 'viewmcategory') || ($url == 'deletemcategory')) active @endif">Magazine Category</a>
                                </li>
                                <li>
                                    <a href="{{ url('/ucategory') }}" class="@if(($url == 'ucategory') || ($url == 'newucategory') || ($url == 'viewucategory') || ($url == 'deleteucategory')) active @endif">Update category</a>
                                </li>
                                <li>
                                    <a href="{{ url('/facility') }}" class="@if(($url == 'facility') || ($url == 'newfacility') || ($url == 'viewfacility') || ($url == 'deletefacility')) active @endif">Event Facilities</a>
                                </li>
                                <li>
                                    <a href="{{ url('/tickets') }}" class="@if(($url == 'tickets') || ($url == 'newticket') || ($url == 'viewticket') || ($url == 'deleteticket')) active @endif">Manage Ticket</a>
                                </li>
                                <li>
                                    <a href="{{ url('/dedition') }}" class="@if(($url == 'dedition') || ($url == 'viewdedition')) active @endif">Digital Edition</a>
                                </li>
                                <li>
                                    <a href="{{ url('/links') }}" class="@if(($url == 'links') || ($url == 'newlink') || ($url == 'viewlink') || ($url == 'deletelink')) active @endif">Manage Links</a>
                                </li>
                                
                                
                                
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-users camera" aria-hidden="true"></i> <span> Users List</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ url('/users') }}" class="@if(($url == 'users') || ($url == 'newuser') || ($url == 'viewuser') || ($url == 'deleteuser')) active @endif">User List</a></li>
                                
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class="@if(($url == 'eventsmanagement') || ($url == 'newevent')) active @endif"><i class="fa fa-calendar camera" aria-hidden="true"></i> <span> Events</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ url('/newevent') }}" class="@if($url == 'newevent') active @endif">Add Events</a></li>
                                <li><a href="{{ url('/eventsmanagement') }}" class="@if($url == 'eventsmanagement') active @endif">List Events</a></li>
                                <li><a href="#">Events Request</a></li>
                                <li><a href="#">Bystander Events</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class="@if(($url == 'gallerylist') || ($url == 'newgallery')  || ($url == 'newvideo') || ($url == 'videolist') || ($url == 'viewgallery') || ($url == 'deletegallery')) active @endif"><i class="fa fa-th camera" aria-hidden="true"></i> <span> Gallery</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ url('/newgallery') }}" class="@if($url == 'newgallery') active @endif">Add Gallery</a></li>
                                <li><a href="{{ url('/gallerylist') }}" class="@if($url == 'gallerylist') active @endif">Gallery List</a></li>
                                <li><a href="{{ url('/newvideo') }}" class="@if($url == 'newvideo') active @endif">Add Video</a></li>
                                <li><a href="{{ url('/videolist') }}" class="@if($url == 'videolist') active @endif">Videos List</a></li>
                               <!-- <li><a href="#">Gallery Request List</a></li>
                                <li><a href="#">Gallery Draft List</a></li>-->

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class="@if(($url == 'updates') || ($url == 'draft_updates') || ($url == 'newupdate') || ($url == 'viewupdate') || ($url == 'deleteupdate')) active @endif"><i class="fa fa-pencil camera" aria-hidden="true"></i> <span> Updates</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ url('/updates') }}" class="@if($url == 'updates') active @endif">Updates List</a></li>
                                <li><a href="{{ url('/draft_updates') }}" class="@if($url == 'draft_updates') active @endif">Draft Updates List</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class="@if(($url == 'blogs')) active @endif"><i class="fa fa-commenting-o camera" aria-hidden="true"></i> <span> Blogs</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ url('/blogs') }}" class="@if($url == 'blogs') active @endif">Blogs Request</a></li>
                                <li><a href="voice-call.html" class="@if($url == 'draft_updates') active @endif">Draft Blogs Request</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class="@if(($url == 'magazines') || ($url == 'draft_magazines') || ($url == 'newmagazine') || ($url == 'viewmagazine') || ($url == 'deletemagazine')) active @endif"><i class="fa fa-book camera" aria-hidden="true"></i> <span> Magazines</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ url('/magazines') }}" class="@if($url == 'magazines') active @endif">Magazines List</a></li>
                                <li><a href="{{ url('/draft_magazines') }}" class="@if($url == 'draft_magazines') active @endif">Draft Magazines List</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class="@if(($url == 'slider_banner') || ($url == 'event_banner') || ($url == 'top_banner') || ($url == 'center_banner') || ($url == 'bottom_banner')) active @endif"><i class="fa fa-image camera" aria-hidden="true"></i> <span> Ads Management</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ url('/slider_banner') }}" class="@if(($url == 'slider_banner')) active @endif">Ads Slider Banner</a></li>
                               <!-- <li><a href="{{ url('/event_banner') }}" class="@if(($url == 'event_banner')) active @endif">Home Event List Ads</a></li>
                                <li><a href="{{ url('/top_banner') }}" class="@if(($url == 'top_banner')) active @endif">Home Ads Top </a></li>
                                <li><a href="{{ url('/center_banner') }}" class="@if(($url == 'center_banner')) active @endif">Home Ads Center </a></li>
                                <li><a href="{{ url('/bottom_banner') }}" class="@if(($url == 'bottom_banner')) active @endif">Home Ads Bottom </a></li>
    -->
                            </ul>
                        </li>
                       <!-- <li class="submenu">
                            <a href="#"><i class="fa fa-video-camera camera" aria-hidden="true"></i> <span> Ads Management</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="voice-call.html">Magazines List</a></li>
                                <li><a href="voice-call.html">Draft Magazines List</a></li>

                            </ul>
                        </li>-->
                        <li class="submenu">
                            <a href="#"><i class="fa fa-question camera" aria-hidden="true"></i> <span> Enquiry</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="{{ url('/subscribers') }}" class="@if(($url == 'subscribers')) active @endif">Subscribers</a></li>
                                

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-money camera" aria-hidden="true"></i> <span> Payments</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="voice-call.html">Magazines List</a></li>
                                <li><a href="voice-call.html">Draft Magazines List</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">

        