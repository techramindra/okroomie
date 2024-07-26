<?php
use Illuminate\Support\Facades\Route;

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







Route::group(['middleware'=>'auth'],function(){
Route::get('get-current-plan',[App\Http\Controllers\Admin\PlanController::class, 'getCurrentPlan'])->name('getCurrentPlan');
Route::get('get-current-plan2',[App\Http\Controllers\Admin\PlanController::class, 'getCurrentPlan2'])->name('getCurrentPlan2');

Route::get('/find-me-a-room/EditListing/{id}',[App\Http\Controllers\DashboardController::class, 'editListingRoom'])->name('editListingRoom');
Route::get('/find-me-a-roomie/EditListing/{id}',[App\Http\Controllers\DashboardController::class, 'edit'])->name('editListingRoomie');
Route::post('sendMessage',[App\Http\Controllers\MessageController::class, 'store'])->name('sendMessage');
Route::post('sendMessageByDashboard',[App\Http\Controllers\MessageController::class, 'sendMessageByDashboard'])->name('sendMessageByDashboard');
	
Route::get('/status',[App\Http\Controllers\MessageController::class, 'userOnlineStatus'])->name('userOnlineStatus');

Route::post('messageUserBlock',[App\Http\Controllers\MessageController::class, 'messageUserBlock'])->name('messageUserBlock');
Route::post('deleteConversation',[App\Http\Controllers\MessageController::class, 'deleteConversation'])->name('deleteConversation');
Route::get('accountVerification',[App\Http\Controllers\DashboardController::class, 'accountVerification'])->name('accountVerificationView');
Route::post('room_roomie_like',[App\Http\Controllers\RoomRoomieLikeController::class, 'like'])->name('roomRoomieLike');
Route::get('favourite',[App\Http\Controllers\DashboardController::class, 'favourite'])->name('favourite');
Route::get('deactivateAccount',[App\Http\Controllers\DashboardController::class, 'deactivateAccount'])->name('deactivateAccount');
Route::get('emailAlertSetting',[App\Http\Controllers\DashboardController::class, 'emailAlertSetting'])->name('emailAlertSetting');
Route::get('myAccountSetting',[App\Http\Controllers\DashboardController::class, 'myAccountSetting'])->name('myAccountSetting');
Route::post('myAccountSetting',[App\Http\Controllers\DashboardController::class, 'myAccountSettingUpdate'])->name('myAccountSettingUpdate');
Route::post('chagePassword',[App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'changePassword'])->name('changePassword');
// help center
Route::get('helpcenter',[App\Http\Controllers\DashboardController::class, 'helpCenter'])->name('helpCenter');
Route::get('helpcenter/how_to_s',[App\Http\Controllers\DashboardController::class, 'helpCenterHowTo'])->name('helpCenterHowTo');
Route::get('helpcenter/current-articles',[App\Http\Controllers\DashboardController::class, 'helpCenterCurrentArticles'])->name('helpCenterCurrentArticles');
Route::get('helpcenter/agreements-and-legal-info',[App\Http\Controllers\DashboardController::class, 'helpCenterAgreementsAndLegalInfo'])->name('helpCenterAgreementsAndLegalInfo');
Route::get('helpcenter/forms',[App\Http\Controllers\DashboardController::class, 'helpCenterForms'])->name('helpCenterForms');
// help center end
Route::post('verify-mobile',[App\Http\Controllers\DashboardController::class, 'verifyMobileNumber'])->name('verifyMobileNumber');
//id verification from document
Route::get('document-verification/document-type',[App\Http\Controllers\DashboardController::class, 'documentType'])->name('documentType');
Route::get('document-verification/driving-liscence',[App\Http\Controllers\DashboardController::class, 'drivingLiscence'])->name('drivingLiscence');
Route::post('document-verification/driving-liscence',[App\Http\Controllers\DashboardController::class, 'drivingLiscenceStore'])->name('drivingLiscenceStore');
Route::get('document-verification/driving-liscence-upload',[App\Http\Controllers\DashboardController::class, 'drivingLiscenceUploadView'])->name('drivingLiscenceUploadView');
Route::post('document-verification/driving-liscence-upload',[App\Http\Controllers\DashboardController::class, 'drivingLiscenceUpload'])->name('drivingLiscenceUpload');



Route::get('document-verification/passport',[App\Http\Controllers\DashboardController::class, 'passport'])->name('passport');
Route::post('document-verification/passport',[App\Http\Controllers\DashboardController::class, 'passportStore'])->name('passportStore');
Route::get('document-verification/passport-upload',[App\Http\Controllers\DashboardController::class, 'passportUploadView'])->name('passportUploadView');
Route::get('document-verification/passport-upload',[App\Http\Controllers\DashboardController::class, 'passportImageUploadView'])->name('passportImageUploadView');
Route::post('document-verification/passport-upload',[App\Http\Controllers\DashboardController::class, 'passportImageUpload'])->name('passportImageUpload');
//roomie activate delete and deactivate listing
Route::get('activate-listing-roomie/{id}',[App\Http\Controllers\DashboardController::class, 'ActivateRoomie'])->name('ActivateRoomie');
Route::get('deactivate-listing-roomie/{id}',[App\Http\Controllers\DashboardController::class, 'DeactivateRoomie'])->name('DeactivateRoomie');
Route::get('delete-listing-roomie/{id}',[App\Http\Controllers\DashboardController::class, 'DeleteListingRoomie'])->name('DeleteListingRoomie');
//room activate delete and deactivate listing
Route::get('activate-listing-room/{id}',[App\Http\Controllers\DashboardController::class, 'ActivateRoom'])->name('ActivateRoom');
Route::get('deactivate-listing-room/{id}',[App\Http\Controllers\DashboardController::class, 'DeactivateRoom'])->name('DeactivateRoom');
Route::get('delete-listing-room/{id}',[App\Http\Controllers\DashboardController::class, 'DeleteListingRoom'])->name('DeleteListingRoom');

Route::post('feedback-RoomRoomie/{id}',[App\Http\Controllers\DashboardController::class, 'feedbackRoomRoomie'])->name('feedbackRoomRoomie');
Route::resource('room-inspection',App\Http\Controllers\InspectionController::class);
Route::resource('online-room-inspection',App\Http\Controllers\OnlineInspectionController::class);
Route::view('new-message','pages/frontend/new_message');

















});

Route::post('search',[App\Http\Controllers\HomeController::class,'searchOnHomePage'])->name('searchOnHomePage');
Route::get('room_details{id}',[App\Http\Controllers\DashboardController::class, 'roomDetails'])->middleware(['auth'])->name('roomDetails');

Route::get('roomie_details{id}',[App\Http\Controllers\DashboardController::class, 'roomieDetails'])->middleware(['auth'])->name('roomieDetails');
Route::get('roomie/{slug}',[App\Http\Controllers\DashboardController::class, 'roomieDetails'])->name('roomieDetailss');
Route::get('room/{id}',[App\Http\Controllers\DashboardController::class, 'roomDetails'])->middleware(['auth'])->name('roomDetailss');
Route::get('map',function(){
    return view('mapapidemo');
});




Route::get('/ContactUs',function(){
    return view('pages/frontend/contactus');
    });
Route::get('/find-me-a-room/step11',function(){
    return view('pages/frontend/find-me-a-room/step11');
    });
 

Route::get('/find-me-a-roomie/inspectionsavailability',function(){
return view('pages/frontend/find-me-a-roomie/inspectionsavailability');
});
Route::get('/find-me-a-roomie/inspectionsSettings',function(){
return view('pages/frontend/find-me-a-roomie/inspectionsSettings');
});
Route::get('/find-me-a-roomie/inspectionsVideo/{id}',function(){
return view('pages/frontend/find-me-a-roomie/inspectionsVideo');
});
Route::post('/find-me-a-roomie/inspectionsVideo',[App\Http\Controllers\FindMeARoomieController::class, 'inspectionsVideo'])->middleware(['auth'])->name('inspectionsVideo');
  
Route::get('/find-me-a-room/inspectionsVideo/{id}',function(){
    return view('pages/frontend/find-me-a-room/inspections_video_room');
    });
Route::post('/find-me-a-room/inspectionsVideo',[App\Http\Controllers\FindMeARoomController::class, 'inspectionsVideo'])->middleware(['auth'])->name('inspectionsVideoRoom');

Route::get('payment-history',[App\Http\Controllers\PaymentController::class,'index'])->middleware(['auth'])->name('paymentHistory'); 
Route::get('pause-plan',[App\Http\Controllers\Admin\PlanController::class,'pausePlan'])->middleware(['auth'])->name('pauseplan'); 
Route::get('resume-plan',[App\Http\Controllers\Admin\PlanController::class,'resumePlan'])->middleware(['auth'])->name('resumeplan');  




Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index']);
Route::post('/upload_image_dashboard', [App\Http\Controllers\UserController::class, 'upload_image_dashboard']);

//Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard_data', [App\Http\Controllers\DashboardController::class, 'data'])->middleware(['auth'])->name('dashboardData');

Route::post('/convertEncryption', [App\Http\Controllers\DashboardController::class, 'convertID'])->middleware(['auth'])->name('convertEncryption');


require __DIR__.'/auth.php';


Route::get("find-me-a-roomie/index",[App\Http\Controllers\FindMeARoomieController::class, 'step1'])->middleware(['auth']);
Route::post("find-me-a-roomie/index",[App\Http\Controllers\FindMeARoomieController::class, 'store_step1'])->middleware(['auth']);

Route::get("find-me-a-roomie/2/{step2}",[App\Http\Controllers\FindMeARoomieController::class, 'step2'])->middleware(['auth']);
Route::post('find-me-a-roomie/step-2',[App\Http\Controllers\FindMeARoomieController::class, 'store']);

// Route::get("find-me-a-roomie/3/{step3}",[App\Http\Controllers\FindMeARoomieController::class, 'step3'])->middleware(['auth']);
// Route::post('find-me-a-roomie/step-3',[App\Http\Controllers\FindMeARoomieController::class, 'store_step3']);

// Route::get("find-me-a-roomie/4/{step4}",[App\Http\Controllers\FindMeARoomieController::class, 'step4'])->middleware(['auth']);
// Route::post('find-me-a-roomie/step-4',[App\Http\Controllers\FindMeARoomieController::class, 'store_step4']);

// Route::get("find-me-a-roomie/5/{step5}",[App\Http\Controllers\FindMeARoomieController::class, 'step5'])->middleware(['auth']);
// Route::post('find-me-a-roomie/step-5',[App\Http\Controllers\FindMeARoomieController::class, 'store_step5']);

// Route::get("find-me-a-roomie/6/{step6}",[App\Http\Controllers\FindMeARoomieController::class, 'step6'])->middleware(['auth']);
// Route::post('find-me-a-roomie/step-6',[App\Http\Controllers\FindMeARoomieController::class, 'store_step6']);

// Route::get("find-me-a-roomie/7/{step7}",[App\Http\Controllers\FindMeARoomieController::class, 'step7'])->middleware(['auth']);
// Route::post('find-me-a-roomie/step-7',[App\Http\Controllers\FindMeARoomieController::class, 'store_step7']);

// Route::get("find-me-a-roomie/8/{step8}",[App\Http\Controllers\FindMeARoomieController::class, 'step8'])->middleware(['auth']);
// Route::post('find-me-a-roomie/step-8',[App\Http\Controllers\FindMeARoomieController::class, 'store_step8']);

// Route::get("find-me-a-roomie/9/{step9}",[App\Http\Controllers\FindMeARoomieController::class, 'step9'])->middleware(['auth']);
// Route::post('find-me-a-roomie/step-9',[App\Http\Controllers\FindMeARoomieController::class, 'store_step9']);

// Route::get("find-me-a-roomie/10/{step10}",[App\Http\Controllers\FindMeARoomieController::class, 'step10'])->middleware(['auth']);
// Route::post('find-me-a-roomie/step-10',[App\Http\Controllers\FindMeARoomieController::class, 'store_step10']);
Route::post('deleteImages',[App\Http\Controllers\Room_imageController::class, 'destroy'])->middleware(['auth']);


/************************** edit listing from dashboard ***************************/

Route::get("find-me-a-roomie/index/{rid}",[App\Http\Controllers\FindMeARoomieControllerListing::class, 'step2_demo11'])->middleware(['auth']);
Route::post("find-me-a-roomie/index1",[App\Http\Controllers\FindMeARoomieControllerListing::class, 'store_step1'])->middleware(['auth']);

Route::get("find-me-a-roomie/2/{step2}/{rid}",[App\Http\Controllers\FindMeARoomieControllerListing::class, 'step2'])->middleware(['auth']);
Route::post('find-me-a-roomie/step-22',[App\Http\Controllers\FindMeARoomieControllerListing::class, 'store']);

Route::get("find-me-a-roomie/3/{step3}/{rid}",[App\Http\Controllers\FindMeARoomieControllerListing::class, 'step3'])->middleware(['auth']);
Route::post('find-me-a-roomie/step-33',[App\Http\Controllers\FindMeARoomieControllerListing::class, 'store_step3']);

Route::get("find-me-a-roomie/4/{step4}/{rid}",[App\Http\Controllers\FindMeARoomieControllerListing::class, 'step4'])->middleware(['auth']);
Route::post('find-me-a-roomie/step-44',[App\Http\Controllers\FindMeARoomieControllerListing::class, 'store_step4']);

Route::get("find-me-a-roomie/5/{step5}/{rid}",[App\Http\Controllers\FindMeARoomieControllerListing::class, 'step5'])->middleware(['auth']);
Route::post('find-me-a-roomie/step-55',[App\Http\Controllers\FindMeARoomieControllerListing::class, 'store_step5']);

Route::get("find-me-a-roomie/6/{step6}/{rid}",[App\Http\Controllers\FindMeARoomieControllerListing::class, 'step6'])->middleware(['auth']);
Route::post('find-me-a-roomie/step-66',[App\Http\Controllers\FindMeARoomieControllerListing::class, 'store_step6']);

Route::get("find-me-a-roomie/7/{step7}/{rid}",[App\Http\Controllers\FindMeARoomieControllerListing::class, 'step7'])->middleware(['auth']);
Route::post('find-me-a-roomie/step-77',[App\Http\Controllers\FindMeARoomieControllerListing::class, 'store_step7']);

Route::get("find-me-a-roomie/8/{step8}/{rid}",[App\Http\Controllers\FindMeARoomieControllerListing::class, 'step8'])->middleware(['auth']);
Route::post('find-me-a-roomie/step-88',[App\Http\Controllers\FindMeARoomieControllerListing::class, 'store_step8']);

Route::get("find-me-a-roomie/9/{step9}/{rid}",[App\Http\Controllers\FindMeARoomieControllerListing::class, 'step9'])->middleware(['auth']);
Route::post('find-me-a-roomie/step-99',[App\Http\Controllers\FindMeARoomieControllerListing::class, 'store_step9']);

Route::get("find-me-a-roomie/10/{step10}/{rid}",[App\Http\Controllers\FindMeARoomieControllerListing::class, 'step10'])->middleware(['auth']);
Route::post('find-me-a-roomie/step-1010',[App\Http\Controllers\FindMeARoomieControllerListing::class, 'store_step10']);

/************************** end edit listing from dashboard ***************************/
Route::get('message',[App\Http\Controllers\MessageController::class, 'index'])->middleware(['auth']);
Route::get('getChat/{id}',[App\Http\Controllers\MessageController::class, 'getChatData'])->middleware(['auth'])->name('getChatData');
Route::get('getSingleChatData/{id}',[App\Http\Controllers\MessageController::class, 'getSingleChatData'])->middleware(['auth'])->name('getSingleChatData');
Route::get('getInstantMessagesCount',[App\Http\Controllers\MessageController::class, 'getInstantMessagesCount'])->middleware(['auth'])->name('getInstantMessagesCount');


Route::get('find-me-a-roomie/dashboard/{uuid}',[App\Http\Controllers\FindMeARoomieController::class, 'dashboard'])->middleware(['auth']);
Route::get('find-me-a-roomie/room_images',[App\Http\Controllers\Room_imageController::class, 'room_images'])->middleware(['auth']);
Route::post('find-me-a-roomie/room_images',[App\Http\Controllers\Room_imageController::class, 'uploadImage'])->middleware(['auth']);
Route::post('setfeatured',[App\Http\Controllers\Room_imageController::class, 'setFetatured'])->middleware(['auth']);








Route::get('plans',[App\Http\Controllers\Admin\PlanController::class, 'frontpage'])->middleware(['auth'])->name('showplan');
Route::get('plansss',[App\Http\Controllers\Admin\PlanController::class, 'frontpageDemo'])->middleware(['auth'])->name('showplandemo');

Route::get('payment-plan{id}',[App\Http\Controllers\Admin\PlanController::class, 'paymentView'])->middleware(['auth'])->name('paymentView');
Route::post('payment-plan{id}',[App\Http\Controllers\Admin\PlanController::class, 'stripePost'])->middleware(['auth'])->name('stripe.payment');



Route::get('/find-me-a-room/index',function(){
    return view('pages/frontend/find-me-a-room/index');
    });
    
Route::get('/privacyPolicy',function(){
 return view('pages/frontend/privacy_policy');
});

Route::get('/termsAndConditions',function(){
    return view('pages/frontend/terms_and_conditions');
   });

Route::get('about_us',function(){
    return view('pages.frontend.about_us');
});

Route::view('cookie_policy','pages.frontend.cookies_policy');

//Route::get('find-me-a-room/step-1',[App\Http\Controllers\StepformControllerPlace::class, 'step1'])->middleware(['auth']);
//Route::post('find-me-a-room/step-1',[App\Http\Controllers\StepformControllerPlace::class, 'store'])->middleware(['auth']);
Route::get('find-me-a-room/step-1',[App\Http\Controllers\FindMeARoomController::class, 'step1'])->middleware(['auth']);
Route::post('find-me-a-room/step-1',[App\Http\Controllers\FindMeARoomController::class, 'store'])->middleware(['auth']);
Route::get('find-me-a-room/step-2',[App\Http\Controllers\FindMeARoomController::class, 'step2'])->middleware(['auth']);
Route::post('find-me-a-room/step-2',[App\Http\Controllers\FindMeARoomController::class, 'store_step2'])->middleware(['auth']);
Route::get('find-me-a-room/step-3',[App\Http\Controllers\FindMeARoomController::class, 'step4'])->middleware(['auth']);
Route::post('find-me-a-room/step-3',[App\Http\Controllers\FindMeARoomController::class, 'store_step4'])->middleware(['auth']);
Route::get('find-me-a-room/step-4',[App\Http\Controllers\FindMeARoomController::class, 'step3'])->middleware(['auth']);
Route::post('find-me-a-room/step-4',[App\Http\Controllers\FindMeARoomController::class, 'store_step3'])->middleware(['auth']);
//Route::get('find-me-a-room/step-5',[App\Http\Controllers\FindMeARoomController::class, 'step5'])->middleware(['auth']);

Route::get('find-me-a-room/step-5',[App\Http\Controllers\FindMeARoomController::class, 'step7'])->middleware(['auth']);
Route::post('find-me-a-room/step-5',[App\Http\Controllers\FindMeARoomController::class, 'store_step7'])->middleware(['auth']);
Route::get('find-me-a-room/step-6',[App\Http\Controllers\FindMeARoomController::class, 'step18'])->middleware(['auth']);
Route::post('find-me-a-room/step-6',[App\Http\Controllers\FindMeARoomController::class, 'store_step18'])->middleware(['auth']);

Route::get('find-me-a-room/step-7',[App\Http\Controllers\FindMeARoomController::class, 'step8'])->middleware(['auth']);
Route::post('find-me-a-room/step-7',[App\Http\Controllers\FindMeARoomController::class, 'store_step8'])->middleware(['auth']);
Route::get('find-me-a-room/step-8',[App\Http\Controllers\FindMeARoomController::class, 'step19'])->middleware(['auth']);
Route::post('find-me-a-room/step-8',[App\Http\Controllers\FindMeARoomController::class, 'store_step19'])->middleware(['auth']);
Route::get('find-me-a-room/step-9',[App\Http\Controllers\FindMeARoomController::class, 'step10'])->middleware(['auth']);

Route::get('find-me-a-room/dash',[App\Http\Controllers\FindMeARoomController::class, 'store_step10'])->middleware(['auth']);

Route::get('find-me-a-room/dashboard/{id}',[App\Http\Controllers\FindMeARoomController::class, 'step11'])->middleware(['auth']);

Route::post('find-me-a-room/user_images',[App\Http\Controllers\Room_imageController::class, 'uploadImageUser'])->middleware(['auth']);

Route::post('setfeaturedUser',[App\Http\Controllers\Room_imageController::class, 'setFetaturedUser'])->name('setfeaturedUser')->middleware(['auth']);
Route::post('deleteImagesUser',[App\Http\Controllers\Room_imageController::class, 'destroy_user_imageUser'])->middleware(['auth']);



// Route::get('find-me-a-room/demo_dashboard',function(){
  
//      return view('pages.frontend.find-me-a-room.demo_dashboard');
// })->middleware(['auth']);

Route::get('find-me-a-room/demostep1',function(){
  
    return view('pages.frontend.demostep1');
})->middleware(['auth']);

Route::get('find-me-a-room/demostep2',function(){
  
    return view('pages.frontend.demostep2');
})->middleware(['auth']);

Route::get('find-me-a-room/demo_video',function(){
    return view('pages.frontend.demo_video');
})->middleware(['auth']);

Route::get('howItWorks',function(){ return view('pages.frontend.how_it_works');})->middleware(['auth']);
Route::get('info',function(){ return view('pages.frontend.info');})->middleware(['auth']);
Route::get('faq',function(){ return view('pages.frontend.faq');})->middleware(['auth']);
Route::get('humanitarianContributions',function(){ return view('pages.frontend.Humanitarian_Contributions');})->middleware(['auth']);








Route::post('deleteUserImages',[App\Http\Controllers\Room_imageController::class, 'destroy_user_image'])->middleware(['auth']);

Route::get('command/{param}',[App\Http\Controllers\ArtisanController::class, 'show']);
Route::get('clear',[App\Http\Controllers\ArtisanController::class, 'index']);

/*************************************** FIND ME A ROOM*************************/

Route::get('find-me-a-room1/index',function(){
    return view('pages.frontend.find-me-a-room1.index');
})->middleware(['auth']);

Route::get('find-me-a-room1/step-1',function(){
    return view('pages.frontend.find-me-a-room1.step1');
})->middleware(['auth']);

Route::get('find-me-a-room/update-1',[App\Http\Controllers\FindMeARoomUpdateController::class,'update1'])->name('roomUpdate1')->middleware(['auth']);

Route::post('find-me-a-room/update-1',[App\Http\Controllers\FindMeARoomUpdateController::class,'update_update1'])->name('update_update1')->middleware(['auth']);

Route::get('find-me-a-room/update-2',[App\Http\Controllers\FindMeARoomUpdateController::class,'update2'])->name('roomUpdate2')->middleware(['auth']);

Route::post('find-me-a-room/update-2',[App\Http\Controllers\FindMeARoomUpdateController::class,'update_update2'])->name('update_update2')->middleware(['auth']);

Route::get('find-me-a-room/update-3',[App\Http\Controllers\FindMeARoomUpdateController::class,'update3'])->name('roomUpdate3')->middleware(['auth']);

Route::post('find-me-a-room/update-3',[App\Http\Controllers\FindMeARoomUpdateController::class,'update_update3'])->name('update_update3')->middleware(['auth']);

Route::get('find-me-a-room/update-4',[App\Http\Controllers\FindMeARoomUpdateController::class,'update4'])->name('roomUpdate4')->middleware(['auth']);

Route::post('find-me-a-room/update-4',[App\Http\Controllers\FindMeARoomUpdateController::class,'update_update4'])->name('update_update4')->middleware(['auth']);

Route::get('find-me-a-room/update-5',[App\Http\Controllers\FindMeARoomUpdateController::class,'update5'])->name('roomUpdate5')->middleware(['auth']);

Route::post('find-me-a-room/update-5',[App\Http\Controllers\FindMeARoomUpdateController::class,'update_update5'])->name('update_update5')->middleware(['auth']);

Route::get('find-me-a-room/update-6',[App\Http\Controllers\FindMeARoomUpdateController::class,'update6'])->name('roomUpdate6')->middleware(['auth']);

Route::post('find-me-a-room/update-6',[App\Http\Controllers\FindMeARoomUpdateController::class,'update_update6'])->name('update_update6')->middleware(['auth']);




Route::get('find-me-a-room1/step-3',function(){
    return view('pages.frontend.find-me-a-room1.step3');
})->middleware(['auth']);

Route::get('find-me-a-room1/step-4',function(){
    return view('pages.frontend.find-me-a-room1.step4');
})->middleware(['auth']);

Route::get('find-me-a-room1/step-5',function(){
    return view('pages.frontend.find-me-a-room1.step5');
})->middleware(['auth']);

Route::get('find-me-a-room1/step-6',function(){
    return view('pages.frontend.find-me-a-room1.step6');
})->middleware(['auth']);

Route::get('find-me-a-room1/step-7',function(){
    return view('pages.frontend.find-me-a-room1.step7');
})->middleware(['auth']);

Route::get('find-me-a-room1/step-8',function(){
    return view('pages.frontend.find-me-a-room1.step8');
})->middleware(['auth']);

Route::get('find-me-a-room1/step-9',function(){
    return view('pages.frontend.find-me-a-room1.step9');
})->middleware(['auth']);

Route::get('find-me-a-room1/step-10',function(){
    return view('pages.frontend.find-me-a-room1.step10');
})->middleware(['auth']);

Route::get('find-me-a-room1/step-11',function(){
    return view('pages.frontend.find-me-a-room1.step11');
})->middleware(['auth']);


Route::get('find-me-a-room1/step-12',function(){
    return view('pages.frontend.find-me-a-room1.step12');
})->middleware(['auth']);


/*********************************  dummy find-me-a-roomie **************************************** */

Route::get('find-me-a-roomie/update-1',[App\Http\Controllers\FindMeARoomieUpdateController::class,'index'])->name('roomieUpdateIndex')->middleware(['auth']);

Route::post('find-me-a-roomie/update-1',[App\Http\Controllers\FindMeARoomieUpdateController::class,'store_index'])->name('roomieUpdateIndexPost')->middleware(['auth']);

Route::get('find-me-a-roomie/update-2',[App\Http\Controllers\FindMeARoomieUpdateController::class,'update2view'])->name('roomieUpdate2View')->middleware(['auth']);

Route::post('find-me-a-roomie/update-2',[App\Http\Controllers\FindMeARoomieUpdateController::class,'store_update2view'])->name('roomieUpdate2view')->middleware(['auth']);

Route::get('find-me-a-roomie/update-3',[App\Http\Controllers\FindMeARoomieUpdateController::class,'update3view'])->name('roomieUpdate3View')->middleware(['auth']);

Route::post('find-me-a-roomie/update-3',[App\Http\Controllers\FindMeARoomieUpdateController::class,'store_update3view'])->name('roomieUpdate3view')->middleware(['auth']);

Route::get('find-me-a-roomie/update-4',[App\Http\Controllers\FindMeARoomieUpdateController::class,'update4view'])->name('roomieUpdate4View')->middleware(['auth']);

Route::post('find-me-a-roomie/update-4',[App\Http\Controllers\FindMeARoomieUpdateController::class,'store_update4view'])->name('roomieUpdate4view')->middleware(['auth']);

Route::get('find-me-a-roomie/update-5',[App\Http\Controllers\FindMeARoomieUpdateController::class,'update5view'])->name('roomieUpdate5View')->middleware(['auth']);

Route::post('find-me-a-roomie/update-5',[App\Http\Controllers\FindMeARoomieUpdateController::class,'store_update5view'])->name('roomieUpdate5view')->middleware(['auth']);

Route::get('find-me-a-roomie/update-6',[App\Http\Controllers\FindMeARoomieUpdateController::class,'update6view'])->name('roomieUpdate6View')->middleware(['auth']);

Route::post('find-me-a-roomie/update-6',[App\Http\Controllers\FindMeARoomieUpdateController::class,'store_update6view'])->name('roomieUpdate6view')->middleware(['auth']);









Route::get('find-me-a-roomie1/step-1',function(){
    return view('pages.frontend.find-me-a-roomie1.step-1');
})->middleware(['auth']);

Route::get('find-me-a-roomie1/step-2',function(){
    return view('pages.frontend.find-me-a-roomie1.step-2');
})->middleware(['auth']);

Route::get('find-me-a-roomie1/step-3',function(){
    return view('pages.frontend.find-me-a-roomie1.step-3');
})->middleware(['auth']);

Route::get('find-me-a-roomie1/step-4',function(){
    return view('pages.frontend.find-me-a-roomie1.step-4');
})->middleware(['auth']);

Route::get('find-me-a-roomie1/step-5',function(){
    return view('pages.frontend.find-me-a-roomie1.step-5');
})->middleware(['auth']);

Route::get('find-me-a-roomie1/step-6',function(){
    return view('pages.frontend.find-me-a-roomie1.step-6');
})->middleware(['auth']);

Route::get('find-me-a-roomie1/step-7',function(){
    return view('pages.frontend.find-me-a-roomie1.step-7');
})->middleware(['auth']);

Route::get('find-me-a-roomie1/step-8',function(){
    return view('pages.frontend.find-me-a-roomie1.step-8');
})->middleware(['auth']);

Route::get('find-me-a-roomie1/step-9',function(){
    return view('pages.frontend.find-me-a-roomie1.step-9');
})->middleware(['auth']);

Route::get('find-me-a-roomie1/step-10',function(){
    return view('pages.frontend.find-me-a-roomie1.step-10');
})->middleware(['auth']);


















   






// Google login
Route::get('login/google',[App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::any('callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::any('facebook_callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
