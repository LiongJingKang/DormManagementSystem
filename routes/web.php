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


Route::get('/', function () {
    return view('welcome');
});


Route::get('/addDorm', function () {
    return view('addDorm');
})->middleware('is_admin');

Route::post('/addDorm/store',[App\Http\Controllers\DormController::class,'add'])->name('addDorm')->middleware('is_admin');

Route::get('/viewDorm',[App\Http\Controllers\DormController::class,'view'])->name
('viewDorm')->middleware('is_admin');

Route::get('/deleteDorm/{id}',[App\Http\Controllers\DormController::class,'delete'])->name
('deleteDorm')->middleware('is_admin');

Route::get('/dormDetail/{id}',[App\Http\Controllers\DormController::class,'edit'])->name
('editDorm')->middleware('is_admin');
Route::get('/updateDorm',[App\Http\Controllers\DormController::class,'update'])->name
('updateDorm')->middleware('is_admin');

Route::get('/showDorm',[App\Http\Controllers\DormController::class,'show'])->name
('showDorm')->middleware('is_admin');

Route::get('/showDorm/{id}',[App\Http\Controllers\DormController::class,'showDetail'])->name
('showDormDetail')->middleware('is_admin');
Auth::routes();

Route::get('/addRoom', function () {
    return view('addRoom');
})->middleware('is_admin');

Route::post('/addRoom/store',[App\Http\Controllers\RoomController::class,'add'])->name('addRoom')->middleware('is_admin');

Route::get('/viewRoom',[App\Http\Controllers\RoomController::class,'view'])->name
('viewRoom');

Route::get('/deleteRoom/{id}',[App\Http\Controllers\RoomController::class,'delete'])->name
('deleteRoom')->middleware('is_admin');

Route::get('/roomDetail/{id}',[App\Http\Controllers\RoomController::class,'edit'])->name
('editRoom');

Route::get('/updateRoom',[App\Http\Controllers\RoomController::class,'update'])->name
('updateRoom')->middleware('is_admin');

Route::get('/showRoom',[App\Http\Controllers\RoomController::class,'show'])->name
('showRoom');

Route::get('/viewRoomStudent',[App\Http\Controllers\RoomController::class,'viewRoomStudent'])->name
('viewRoomStudent');


Route::get('/viewRoomStudent/{id}',[App\Http\Controllers\RoomController::class,'showDetail'])->name
('showRoomDetail');

Route::get('/myRent/{id}',[App\Http\Controllers\RoomController::class,'showCheckOut'])->name
('checkOut');
Auth::routes();

Route::get('/showRoom/{id}',[App\Http\Controllers\RoomController::class,'showDetailAdmin'])->name
('showRoomDetailAdmin');
Auth::routes();


Route::get('/addStudentInfo', function () {
    return view('addStudentInfo');
});

Route::post('/addStudentInfo/store',[App\Http\Controllers\StudentInfoController::class,'add'])->name('addStudentInfo');

Route::get('/viewStudentInfo',[App\Http\Controllers\StudentInfoController::class,'view'])->name
('viewStudentInfo');

Route::get('/StudentInfoDetail/{id}',[App\Http\Controllers\StudentInfoController::class,'edit'])->name
('editStudentInfo');

Route::get('/deleteStudentInfo/{id}',[App\Http\Controllers\StudentInfoController::class,'delete'])->name
('deleteStudentInfo');

Route::get('/updateStudentInfo',[App\Http\Controllers\StudentInfoController::class,'update'])->name
('updateStudentInfo');


Route::get('/addFeedback', function () {
    return view('addFeedback');
});


Route::post('/addFeedback/store',[App\Http\Controllers\FeedbackController::class,'add'])->name('addFeedback');



Route::get('/viewFeedback',[App\Http\Controllers\FeedbackController::class,'view'])->name
('viewFeedback')->middleware('is_admin');

Route::get('/deleteFeedback/{id}',[App\Http\Controllers\FeedbackController::class,'delete'])->name
('deleteFeedback')->middleware('is_admin');

Route::get('/feedbackDetail/{id}',[App\Http\Controllers\FeedbackController::class,'edit'])->name
('editFeedback')->middleware('is_admin');

Route::get('/updateFeedback',[App\Http\Controllers\FeedbackController::class,'update'])->name
('updateFeedback')->middleware('is_admin');

Route::get('/viewFeedback/{id}',[App\Http\Controllers\FeedbackController::class,'showDetail'])->name
('showFeedback')->middleware('is_admin');
Auth::routes();

Route::get('/viewFeedbackStudent',[App\Http\Controllers\FeedbackController::class,'viewStudent'])->name
('viewFeedbackStudent');

Route::get('/viewFeedbackStudent/{id}',[App\Http\Controllers\FeedbackController::class,'showDetailStudent'])->name
('showFeedbackStudent');



Route::get('/addReply', function () {
    return view('addReply')->middleware('is_admin');
});

Route::get('/viewReply', function () {
    return view('viewReply');
});




Route::get('/editAccount', function () {
    return view('editAccount');
});








Route::get('/Dorm', function () {
    return view('Dorm');
});

Route::get('/Room', function () {
    return view('Room');
});

Route::get('/Account', function () {
    return view('Account');
});



Route::get('/Payment', function () {
    return view('Payment');
});

Route::get('/Feedback', function () {
    return view('Feedback');
});

Route::get('/adminKey', function () {
    return view('adminKey');
});


Route::get('/homeAdmin', function () {
    return view('homeAdmin');
});

Route::get('/homeStudent', function () {
    return view('homeStudent');
});


Route::get('/pageToHomeAdmin', function () {
    return redirect('homeAdmin');
});

Route::get('/pageToHomeStudent', function () {
    return redirect('homeStudent');
});

Route::get('/DormtoAdd', function () {
    return redirect('addDorm');
});

Route::get('/DormtoView', function () {
    return redirect('viewDorm');
});

Route::get('/DormtoShow', function () {
    return redirect('showDorm');
});

Route::get('/RoomtoAdd', function () {
    return redirect('addRoom');
});

Route::get('/RoomtoView', function () {
    return redirect('viewRoom');
});

Route::get('/RoomtoShow', function () {
    return redirect('showRoom');
});

Route::get('/hometodorm', function () {
    return redirect('Dorm');
});

Route::get('/hometoroom', function () {
    return redirect('Room');
});

Route::get('/hometoacc', function () {
    return redirect('Account');
});

Route::get('/hometoRent', function () {
    return redirect('viewRoomStudent');
});

Route::get('/hometoFeedback', function () {
    return redirect('Feedback');
});

Route::get('/hometoStatus', function () {
    return redirect('viewStudentInfo');
});

Route::get('/hometoAdmin', function () {
    return redirect('homeAdmin');
});

Route::get('/hometoStudent', function () {
    return redirect('homeStudent');
});

Route::get('/acctofeedback', function () {
    return redirect('viewFeedback');
});

Route::get('/acctoEdit', function () {
    return redirect('editAccount');
});

Route::get('/statustoPayment', function () {
    return redirect('Payment');
});

Route::get('/showtoAddReply', function () {
    return redirect('addReply');
});

Route::get('/statustoPayment', function () {
    return redirect('myRent');
});

Route::get('/feedbacktoAdd', function () {
    return redirect('addFeedback');
});

Route::get('/feedbacktoView', function () {
    return redirect('viewFeedbackStudent');
});


Route::get('/myRent', [App\Http\Controllers\RentController::class, 'showMyRent'])->name('myRent');
   

Route::any('/addRent', [App\Http\Controllers\RentController::class, 'add'])->name('addRent');

Route::any('/checkingOut', [App\Http\Controllers\RentController::class, 'out'])->name('checkingOut');
    

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/viewRent',[App\Http\Controllers\RentController::class,'view'])->name
('viewRent');

Route::get('/RentDetail/{id}',[App\Http\Controllers\RentController::class,'edit'])->name
('editRent');

Route::get('/deleteRent/{id}',[App\Http\Controllers\RentController::class,'delete'])->name
('deleteRent');

Route::get('/updateRent',[App\Http\Controllers\RentController::class,'update'])->name
('updateRent');

Route::get('/homeAdmin', [App\Http\Controllers\DashboardController::class, 'index'])->middleware('is_admin');