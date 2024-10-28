<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UpdatesController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

use App\Http\Middleware\CheckStatus;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home']);

Route::get('/authbtm', function () { return view('admin.login'); });
Route::get('/forgotpassword', function () { return view('admin.forgotpassword'); });
Route::post('/postforgotpassword', [AdminController::class, 'postforgotpassword']);
Route::get('/resetpassword/{id}',[AdminController::class, 'resetadminpassword']);
Route::post('/update-resetpassword', [AdminController::class, 'updateadminresetpassword']);

Route::post('/adminsignin', [AdminController::class, 'adminsignin']);
Route::get('/events', [HomeController::class, 'events']);
Route::get('/gallery', [HomeController::class, 'gallery']);
//Route::get('/event/{id}', [HomeController::class, 'singleevent']);
Route::get('/events/{category}/{title}', [HomeController::class, 'singleevent']);

Route::get('/venues', [HomeController::class, 'venue']);
Route::get('/venue/{id}', [HomeController::class, 'singlevenue']);
Route::get('/signin', function () { return view('signin'); });
Route::post('/usersignup', [HomeController::class, 'usersignup']);
Route::post('/usersignin', [HomeController::class, 'usersignin']);
Route::get('/magazine', [HomeController::class, 'magazine']);
Route::get('/Dashboard', [HomeController::class, 'dashboard']);
Route::get('/addevent', [HomeController::class, 'addevent']);
Route::get('/addblog', [HomeController::class, 'addblog']);
Route::post('/postuserblog',  [BlogController::class, 'postuserblog']);
Route::get('/addgallery', [HomeController::class, 'addgallery']);
Route::post('/postusergallery',  [HomeController::class, 'postusergallery']);
Route::post('/filter-eventlist', [HomeController::class, 'eventlistfilter']);
Route::get('/fetch-events', [HomeController::class, 'fetchEventsByDate']);
Route::post('/fetch_event_calendar', [HomeController::class, 'fetchEventCalendar']);



Route::middleware([CheckStatus::class])->group(function(){
Route::get('/adminhome',  [AdminController::class, 'adminhome']);
Route::get('/logout',  [AdminController::class, 'logout']);

Route::get('/organizers',  [MasterController::class, 'organizers']);
Route::get('/neworganizer',  [MasterController::class, 'neworganizer']);
Route::post('/postorganizer',  [MasterController::class, 'postorganizer']);
Route::get('/vieworganizer/{id}',  [MasterController::class, 'vieworganizer']);
Route::post('/updateorganizer',  [MasterController::class, 'updateorganizer']);
Route::get('/deleteorganizer/{id}',  [MasterController::class, 'deleteorganizer']);

Route::get('/tags',  [MasterController::class, 'tags']);
Route::get('/newtag',  [MasterController::class, 'newtag']);
Route::post('/posttag',  [MasterController::class, 'posttag']);
Route::get('/viewtag/{id}',  [MasterController::class, 'viewtag']);
Route::post('/updatetag',  [MasterController::class, 'updatetag']);
Route::get('/deletetag/{id}',  [MasterController::class, 'deletetag']);


Route::get('/mcategory',  [MasterController::class, 'mcategory']);
Route::get('/newmcategory',  [MasterController::class, 'newmcategory']);
Route::post('/postmcategory',  [MasterController::class, 'postmcategory']);
Route::get('/viewmcategory/{id}',  [MasterController::class, 'viewmcategory']);
Route::post('/updatemcategory',  [MasterController::class, 'updatemcategory']);
Route::get('/deletemcategory/{id}',  [MasterController::class, 'deletemcategory']);
Route::post('mcategory-status', [AjaxController::class, 'mcategorystatus'])->name('mcategory-status');

Route::get('/vcategory',  [MasterController::class, 'vcategory']);
Route::get('/newvcategory',  [MasterController::class, 'newvcategory']);
Route::post('/postvcategory',  [MasterController::class, 'postvcategory']);
Route::get('/viewvcategory/{id}',  [MasterController::class, 'viewvcategory']);
Route::post('/updatevcategory',  [MasterController::class, 'updatevcategory']);
Route::get('/deletevcategory/{id}',  [MasterController::class, 'deletevcategory']);
Route::post('vcategory-status', [AjaxController::class, 'vcategorystatus'])->name('vcategory-status');

Route::get('/ucategory',  [MasterController::class, 'ucategory']);
Route::get('/newucategory',  [MasterController::class, 'newucategory']);
Route::post('/postucategory',  [MasterController::class, 'postucategory']);
Route::get('/viewucategory/{id}',  [MasterController::class, 'viewucategory']);
Route::post('/updateucategory',  [MasterController::class, 'updateucategory']);
Route::get('/deleteucategory/{id}',  [MasterController::class, 'deleteucategory']);
Route::post('ucategory-status', [AjaxController::class, 'ucategorystatus'])->name('ucategory-status');

Route::get('/links',  [MasterController::class, 'links']);
Route::get('/newlink',  [MasterController::class, 'newlink']);
Route::post('/postlink',  [MasterController::class, 'postlink']);
Route::get('/viewlink/{id}',  [MasterController::class, 'viewlink']);
Route::post('/updatelink',  [MasterController::class, 'updatelink']);
Route::get('/deletelink/{id}',  [MasterController::class, 'deletelink']);
Route::post('link-status', [AjaxController::class, 'linkstatus'])->name('link-status');

Route::get('/dedition',  [MasterController::class, 'dedition']);
Route::get('/viewdedition/{id}',  [MasterController::class, 'viewdedition']);
Route::post('/updatededition',  [MasterController::class, 'updatededition']);
Route::post('dedition-status', [AjaxController::class, 'deditionstatus'])->name('dedition-status');

Route::get('/tickets',  [MasterController::class, 'tickets']);
Route::get('/newticket',  [MasterController::class, 'newticket']);
Route::post('/postticket',  [MasterController::class, 'postticket']);
Route::get('/viewticket/{id}',  [MasterController::class, 'viewticket']);
Route::post('/updateticket',  [MasterController::class, 'updateticket']);
Route::get('/deleteticket/{id}',  [MasterController::class, 'deleteticket']);
Route::post('ticket-status', [AjaxController::class, 'ticketstatus'])->name('ticket-status');

Route::get('/eventcategory',  [MasterController::class, 'eventcategory']);
Route::get('/neweventcategory',  [MasterController::class, 'neweventcategory']);
Route::post('/posteventcategory',  [MasterController::class, 'posteventcategory']);
Route::get('/vieweventcategory/{id}',  [MasterController::class, 'vieweventcategory']);
Route::post('/updateeventcategory',  [MasterController::class, 'updateeventcategory']);
Route::get('/deleteeventcategory/{id}',  [MasterController::class, 'deleteeventcategory']);
Route::post('eventcategory-status', [AjaxController::class, 'eventcategorystatus'])->name('eventcategory-status');

Route::get('/eventsubcategory',  [MasterController::class, 'eventsubcategory']);
Route::get('/neweventsubcategory',  [MasterController::class, 'neweventsubcategory']);
Route::post('/posteventsubcategory',  [MasterController::class, 'posteventsubcategory']);
Route::get('/vieweventsubcategory/{id}',  [MasterController::class, 'vieweventsubcategory']);
Route::post('/updateeventsubcategory',  [MasterController::class, 'updateeventsubcategory']);
Route::get('/deleteeventsubcategory/{id}',  [MasterController::class, 'deleteeventsubcategory']);
Route::post('eventsubcategory-status', [AjaxController::class, 'eventsubcategorystatus'])->name('eventsubcategory-status');
Route::post('eventshow-approve', [AjaxController::class, 'eventshowapprove'])->name('eventshow-approve');
Route::post('eventshow-reject', [AjaxController::class, 'eventshowreject'])->name('eventshow-reject');

Route::get('/wstorymanagement',  [MasterController::class, 'wstory']);
Route::get('/newwstory',  [MasterController::class, 'newwstory']);
Route::post('/postwstory',  [MasterController::class, 'postwstory']);
Route::get('/viewwstory/{id}',  [MasterController::class, 'viewwstory']);
Route::post('/updatewstory',  [MasterController::class, 'updatewstory']);
Route::get('/deletewstory/{id}',  [MasterController::class, 'deletewstory']);
Route::post('wstory-status', [AjaxController::class, 'wstorystatus'])->name('wstory-status');

Route::get('/social_media',  [MasterController::class, 'socialmedia']);
Route::post('/updatesocialmedia',  [MasterController::class, 'updatesocialmedia']);

Route::get('/address',  [MasterController::class, 'address']);
Route::post('/updateaddress',  [MasterController::class, 'updateaddress']);

Route::get('/cmsmenu',  [MasterController::class, 'cmsmenu']);
Route::get('/newcmsmenu',  [MasterController::class, 'newcmsmenu']);
Route::post('/postcmsmenu',  [MasterController::class, 'postcmsmenu']);
Route::get('/viewcmsmenu/{id}',  [MasterController::class, 'viewcmsmenu']);
Route::post('/updatecmsmenu',  [MasterController::class, 'updatecmsmenu']);
Route::get('/deletecmsmenu/{id}',  [MasterController::class, 'deletecmsmenu']);
Route::post('cmsmenu-status', [AjaxController::class, 'cmsmenustatus'])->name('cmsmenu-status');


Route::get('/cmspage',  [MasterController::class, 'cmspage']);
Route::get('/newcmspage',  [MasterController::class, 'newcmspage']);
Route::post('/postcmspage',  [MasterController::class, 'postcmspage']);
Route::get('/viewcmspage/{id}',  [MasterController::class, 'viewcmspage']);
Route::post('/updatecmspage',  [MasterController::class, 'updatecmspage']);
Route::get('/deletecmspage/{id}',  [MasterController::class, 'deletecmspage']);
Route::post('cmspage-status', [AjaxController::class, 'cmspagestatus'])->name('cmspage-status');
Route::post('get-data', [AjaxController::class, 'getdata'])->name('get-data');

Route::get('/facility',  [MasterController::class, 'facility']);
Route::get('/newfacility',  [MasterController::class, 'newfacility']);
Route::post('/postfacility',  [MasterController::class, 'postfacility']);
Route::get('/viewfacility/{id}',  [MasterController::class, 'viewfacility']);
Route::post('/updatefacility',  [MasterController::class, 'updatefacility']);
Route::get('/deletefacility/{id}',  [MasterController::class, 'deletefacility']);
Route::post('facility-status', [AjaxController::class, 'facilitystatus'])->name('facility-status');

Route::get('/subscribers',  [EnquiryController::class, 'subscribers']);

Route::get('/users',  [UserController::class, 'users']);
Route::get('/newuser',  [UserController::class, 'newuser']);
Route::post('/postuser',  [UserController::class, 'postuser']);
Route::get('/viewuser/{id}',  [UserController::class, 'viewuser']);
Route::post('/updateuser',  [UserController::class, 'updateuser']);
Route::get('/deleteuser/{id}',  [UserController::class, 'deleteuser']);
Route::post('user-status', [AjaxController::class, 'userstatus'])->name('user-status');

Route::get('/updates',  [UpdatesController::class, 'updates']);
Route::get('/draft_updates',  [UpdatesController::class, 'draftupdates']);
Route::get('/newupdate',  [UpdatesController::class, 'newupdate']);
Route::post('/postupdate',  [UpdatesController::class, 'postupdate']);
Route::get('/viewupdate/{id}',  [UpdatesController::class, 'viewupdate']);
Route::post('/updateupdates',  [UpdatesController::class, 'updateupdates']);
Route::get('/deleteupdate/{id}',  [UpdatesController::class, 'deleteupdate']);
Route::post('update-status', [AjaxController::class, 'updatestatus'])->name('update-status');
Route::get('/remove-update-image/{id}',  [UpdatesController::class, 'removeupdateimage']);

Route::get('/magazines',  [MagazineController::class, 'magazines']);
Route::get('/draft_magazines',  [MagazineController::class, 'draftmagazines']);
Route::get('/newmagazine',  [MagazineController::class, 'newmagazine']);
Route::post('/postmagazine',  [MagazineController::class, 'postmagazine']);
Route::get('/viewmagazine/{id}',  [MagazineController::class, 'viewmagazine']);
Route::post('/updatemagazine',  [MagazineController::class, 'updatemagazine']);
Route::get('/deletemagazine/{id}',  [MagazineController::class, 'deletemagazine']);
Route::post('magazine-status', [AjaxController::class, 'magazinestatus'])->name('magazine-status');

Route::get('/slider_banner',  [BannerController::class, 'slider_banner']);
Route::get('/newslider_banner',  [BannerController::class, 'newslider_banner']);
Route::post('/postslider_banner',  [BannerController::class, 'postslider_banner']);
Route::get('/viewslider_banner/{id}',  [BannerController::class, 'viewslider_banner']);
Route::post('/updateslider_banner',  [BannerController::class, 'updateslider_banner']);
Route::get('/deleteslider_banner/{id}',  [BannerController::class, 'deleteslider_banner']);
Route::post('slider_banner-status', [AjaxController::class, 'slider_bannerstatus'])->name('slider_banner-status');

Route::get('/event_banner',  [BannerController::class, 'event_banner']);
Route::get('/viewevent_banner/{id}',  [BannerController::class, 'viewevent_banner']);
Route::post('/updateevent_banner',  [BannerController::class, 'updateevent_banner']);
Route::get('/deleteevent_banner/{id}',  [BannerController::class, 'deleteevent_banner']);
//Route::post('event_banner-status', [AjaxController::class, 'event_bannerstatus'])->name('event_banner-status');

Route::get('/top_banner',  [BannerController::class, 'top_banner']);
Route::get('/newtop_banner',  [BannerController::class, 'newtop_banner']);
Route::post('/posttop_banner',  [BannerController::class, 'posttop_banner']);
Route::get('/viewtop_banner/{id}',  [BannerController::class, 'viewtop_banner']);
Route::post('/updatetop_banner',  [BannerController::class, 'updatetop_banner']);
Route::get('/deletetop_banner/{id}',  [BannerController::class, 'deletetop_banner']);
//Route::post('top_banner-status', [AjaxController::class, 'top_bannerstatus'])->name('top_banner-status');

Route::get('/center_banner',  [BannerController::class, 'center_banner']);
Route::get('/viewcenter_banner/{id}',  [BannerController::class, 'viewcenter_banner']);
Route::post('/updatecenter_banner',  [BannerController::class, 'updatecenter_banner']);
Route::get('/deletecenter_banner/{id}',  [BannerController::class, 'deletecenter_banner']);
//Route::post('center_banner-status', [AjaxController::class, 'center_bannerstatus'])->name('center_banner-status');


Route::get('/bottom_banner',  [BannerController::class, 'bottom_banner']);
Route::get('/viewbottom_banner/{id}',  [BannerController::class, 'viewbottom_banner']);
Route::post('/updatebottom_banner',  [BannerController::class, 'updatebottom_banner']);
Route::get('/deletebottom_banner/{id}',  [BannerController::class, 'deletebottom_banner']);
//Route::post('bottom_banner-status', [AjaxController::class, 'bottom_bannerstatus'])->name('bottom_banner-status');

Route::get('/venuesmanagement',  [VenueController::class, 'venues']);
Route::get('/newvenue',  [VenueController::class, 'newvenue']);
Route::post('/postvenue',  [VenueController::class, 'postvenue']);
Route::get('/viewvenue/{id}',  [VenueController::class, 'viewvenue']);
Route::post('/updatevenue',  [VenueController::class, 'updatevenue']);
Route::get('/deletevenue/{id}',  [VenueController::class, 'deletevenue']);
Route::post('venue-status', [AjaxController::class, 'venuestatus'])->name('venue-status');

Route::get('/eventsmanagement',  [EventController::class, 'events']);
Route::get('/newevent',  [EventController::class, 'newevent']);
Route::post('/postevent',  [EventController::class, 'postevent']);
Route::get('/viewevent/{id}',  [EventController::class, 'viewevent']);
Route::post('/updateevent',  [EventController::class, 'updateevent']);
Route::get('/deleteevent/{id}',  [EventController::class, 'deleteevent']);


Route::get('/myprofile',  [SettingsController::class, 'myprofile']);

Route::get('/gallerylist',  [GalleryController::class, 'gallerylist']);
Route::get('/newgallery',  [GalleryController::class, 'newgallery']);
Route::post('/postgallery',  [GalleryController::class, 'postgallery']);
Route::get('/viewgallery/{id}',  [GalleryController::class, 'viewgallery']);
Route::post('/updategallery',  [GalleryController::class, 'updategallery']);
Route::get('/deletegallery/{id}',  [GalleryController::class, 'deletegallery']);
Route::post('gallery-status', [GalleryController::class, 'gallerystatus'])->name('gallery-status');

Route::get('/videolist',  [GalleryController::class, 'videolist']);
Route::get('/newvideo',  [GalleryController::class, 'newvideo']);
Route::post('/postvideo',  [GalleryController::class, 'postvideo']);
Route::get('/viewvideo/{id}',  [GalleryController::class, 'viewvideo']);
Route::post('/updatevideo',  [GalleryController::class, 'updatevideo']);
Route::get('/deletevideo/{id}',  [GalleryController::class, 'deletevideo']);
Route::post('video-status', [GalleryController::class, 'videostatus'])->name('video-status');

});