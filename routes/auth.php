<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LMS;
use App\Http\Controllers\LMS_admins;
use App\Http\Controllers\Zoom;


//Zoom Redirect
Route::get('/zoomredirect', [Zoom::class, 'zoomredirect'])
                ->middleware('auth');
                
//Examinations 
Route::get('/examinations', function(){
   return view('countdown');
})->name('examinations');


//First Attempt  
Route::get('/firstattempt', function(){
   return view('attempt1');
})->name('firstattempt');

//First Attempt  
Route::get('/secondattempt', function(){
   return view('attempt2');
})->name('secondattempt');

//Announcements  
Route::get('/announcements', [LMS::class, 'announcements'])
                ->middleware('auth')
                ->name('announcements');


//Finances  
Route::get('finances/{id}', [LMS::class, 'finances'])
                ->middleware('auth');
               




//examination results view  
Route::get('examinationresults/{id}', [LMS::class, 'examinationresults'])
                ->middleware('auth');



//assignments view  
Route::get('/check', [LMS::class, 'checkassignments'])
                ->middleware('auth')->name('check');




//First Attempt  
Route::get('/streaming', function(){
   return view('streaming');
})->name('streaming');













//Admin assignmentsupload query
Route::get('/upload', function(){
   return view('upload');
})->middleware('admin')->name('upload');



//assignmentsupload  
Route::post('/assignmentsupload', [LMS_admins::class, 'assignmentsupload'])
                ->middleware('admin')->name('assignmentsupload');




//Admin announcementsupload query
Route::get('/makeannouncements', function(){
   return view('makeannouncements');
})->middleware('admin')->name('makeannouncements');



//assignmentsupload  
Route::post('/announcementsupload', [LMS_admins::class, 'announcementsupload'])
                ->middleware('admin')->name('announcementsupload');







   //Admin handoutsupload query
   Route::get('/handout', function(){
   return view('handout');
   }) ->middleware('admin')->name('handout');


   //handoutsupload  
Route::post('/handoutsupload', [LMS_admins::class, 'handoutsupload'])
->middleware('admin')->name('handoutsupload');


//check handouts  
Route::get('/checkhandouts', [LMS::class, 'checkhandouts'])
                ->middleware('auth')->name('checkhandouts');


//studentsupload  
Route::post('studentsqsn/{id}', [LMS::class, 'studentsqsn'])
->middleware('auth');


//check students upload Questions  
Route::get('/viewstudentsupload', [LMS::class, 'viewstudentsupload'])
->middleware('auth')->name('viewstudentsupload');

//students upload query
Route::get('/studentsupload', function(){
   return view('studentsupload');
   })->name('studentsupload');


   //admins profile upload
Route::get('/adminprofile', function(){
   return view('adminProfile');
   })->middleware('admin')->name('adminprofile');


   //Admins Further details to be implemented later 
Route::post('adminregister/{id}', [LMS_admins::class, 'adminregister'])
->middleware('admin');




//Admin Add  
Route::post('adminadd/{id}', [LMS_admins::class, 'adminadd'])
->middleware('superadmin');


 //View Admins Profile  
 Route::get('/viewadminprofile', [LMS_admins::class, 'viewadminprofile'])
 ->middleware('auth')->name('viewadminprofile');



//View Admins for add  
Route::get('/viewadmin', [LMS_admins::class, 'viewadmin'])
->middleware('superadmin');




//super admin trial
Route::get('/superadmin', function(){
   return view('superadmin');
   })->middleware('superadmin')->name('superadmin');
 

  //admin trial
Route::get('/admin', function(){
   return view('admindashboard');
   })->middleware('admin')->name('admin'); 



//view admins trial  
Route::post('/viewadminprofile', [LMS_admins::class, 'viewadminprofile'])
->middleware('admin')->name('viewadminprofile');


//Exam Papers Download
Route::get('/exampapers', function(){
   return view('exampapers');
   })->name('exampapers');

 //G12Exam Papers Download
Route::get('/g12', function(){
   return view('g12');
   })->name('g12');

   //GCEExam Papers Download
Route::get('/gce', function(){
   return view('gce');
   })->name('gce');

   //CambridgeExam Papers Download
Route::get('/cambridge', function(){
   return view('cambridge');
   })->name('cambridge');

   //BuyVideo  Download
Route::get('/buyvideo', function(){
   return view('buyvideo');
   })->name('buyvideo');


   //Payments Checkout
//Route::get('checkout/{id}/{videoname}', function(){
  // return view('checkout');
  // });

  Route::get('checkout/{paidamount}/{videoid}', [LMS_admins::class, 'checkout'])
  ->middleware('auth');  





   //Videos Upload Query
Route::get('/videosupload', function(){
   return view('videosupload');
   })->middleware('admin');

   //videos upload admins trial  
Route::post('/videosupload', [LMS_admins::class, 'videosupload'])
->middleware('admin')->name('videosupload');  


//retrieving videos  
Route::get('/retrievevideos', [LMS_admins::class, 'retrievevideos'])
->middleware('auth')->name('retrievevideos');  

//Conversion Query
Route::get('/conversions', function(){
   return view('conversions');
   })->middleware('auth')->name('conversions');


   //Equations Query
Route::get('/equations', function(){
   return view('equations');
   })->middleware('auth')->name('equations');



   //Financesregistration Query
Route::get('/financesupload', function(){
   return view('financesupload');
   })->middleware('superadmin')->name('financesupload');




//Financesregistration upload  
Route::post('/financesregistration', [LMS_admins::class, 'financesregistration'])
->middleware('superadmin')->name('financesregistration');


//View  Registered students 
Route::get('/viewregisteredstudents', [LMS_admins::class, 'viewregisteredstudents'])
->middleware('admin')->name('viewregisteredstudents');

//Delete student from Finances Table  
Route::get('remove/{id}', [LMS_admins::class, 'remove'])
->middleware('superadmin');

//Update Student Query
Route::get('update/{id}', [LMS_admins::class, 'update'])
->middleware('superadmin');


//Update Student From Finances Table
Route::POST('update/{id}', [LMS_admins::class, 'updatetable'])
->middleware('superadmin');



//TimeTable Notice
 Route::get('/timetableNotice', function(){
return view('timetableNotice');
})->middleware('auth')->name('timetableNotice');


//ChatRoom
Route::get('/chatroom', function(){
   return view('chatroom');
   })->middleware('auth')->name('chatroom');










Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
