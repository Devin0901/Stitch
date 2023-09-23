<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\chatController;
use App\Http\Controllers\clothController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\fixCloth;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|---------------------------------------- ---------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('')
Route::get('/', function () {
    return view('home',['title'=>'home']);
})->name('home');;

Route::get('/landing_page', function () {
    return view('landing_page');
});
Route::get('/tailorProfile', function () {
    return view('tailorProfile');
});
Route::get('/tailorProfile', function () {
    return view('tailorProfile');
});

Route::get('/user_profile_edit', function () {
    return view('user_profile_edit');
})->name('user_profile_edit');
// Route::get('/user_profile',function(){
//     // $user = User::find(Auth::id());
//     // return view('user_profile', ['user'=> $user]);
// })->name('user_profile');
Route::get('/user_profile', [DataController::class, 'getaddress']);

Route::get('/seeTailorProfile', function () {
    return view('seeTailorProfile');
});
Route::get('/transaction', function () {
    return view('transaction');
});
Route::get('/tailorDeal', function () {
    return view('tailorDeal');
})->name('tailorDeal');

Route::get('/chat/{id}', [chatController::class,'chat'])->name('chat');
Route::post('/chat', [chatController::class,'chat_action'])->name('chat_action');
Route::get('/chat/{id}', [chatController::class,'chat'])->name('chat');
Route::post('/chat', [chatController::class,'chat_action'])->name('chat_action');
Route::get('/tailorInbox', function () {
    return view('tailorInbox');
});
Route::get('/payment', function () {
    return view('payment');
})->name('payment');
Route::get('/invoice', function () {
    return view('invoice');
});
Route::get('/deal', function () {
    return view('deal');
});
Route::get('/customerInbox', function () {
    return view('customerInbox');
});
// Route::get('/fix_cloth_page')
Route::get('fix_cloth_page', [clothController::class, 'get_fix_cloth'])->name('fix_cloth_page');
Route::get('custom_cloth_page', [clothController::class, 'custom_fix_cloth'])->name('custom_cloth_page');

Route::get('click_handler/{id}',[clothController::class,'view_tailor'])->name('view_tailor');
Route::get('transaction',[UserController::class,'transaction'])->name('transaction');

// Route::get('/fixCloth', function () {
//     return view('fixCloth');
// })->name('fixCloth');
// Route::get('/fixCloth_page', [fixCloth::class, 'fixCloth'])->name('fixCloth_page');
// Route::get('/customCloth', function () {
//     return view('customCloth');
// });







Route::get('/custom', function () {
    return view('custom');
});

Route::get('/fix', function(){
    return view('fix', ['title' =>'fix']);
})->name('fix');;

Route::get('/custom', function(){
    return view('custom', ['title' =>'custom']);
})->name('custom');;
;



Route::get('getaplicant', [DataController::class, 'getaplicantdata'])->name('getaplicant');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('tailorregis', [UserController::class, 'tailor'])->name('tailor');
Route::post('tailorregis', [UserController::class, 'tailor_action'])->name('tailor.action');
Route::post('acceptedadmin/{id}', [DataController::class, 'accepted_admin'])->name('acceptedadmin/{id}');
Route::get('addproduct', [DataController::class, 'addproduct'])->name('addproduct');
Route::post('addproduct_to_db', [DataController::class, 'addproduct_action'])->name('addproduct.action');
// Route::post('tailorregis1', [UserController::class, 'coba'])->name('coba');
Route::get('address', [UserController::class, 'address'])->name('address');
Route::post('address', [UserController::class, 'address_action'])->name('address.action');
Route::get('inbox', [UserController::class, 'inbox'])->name('inbox');
// Route::get('address', [UserController::class, 'address_action'])->name('address.action');

Route::get('seetailor/{id}', [UserController::class, 'seetailor'])->name('seetailor');


Route::get('transaction_confirm', [UserController::class, 'transaction_confirm'])->name('transaction_confirm');
Route::get('history',[UserController::class, 'history'])->name('history');
Route::get('deal', [UserController::class, 'deal'])->name('deal');
Route::post('deal', [UserController::class, 'deal_action'])->name('deal.action');
Route::get('dealuser', [UserController::class, 'dealuser'])->name('dealuser');
Route::get('dealuser', [UserController::class, 'dealuser'])->name('dealuser');
// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
// Route::get('registration', [AuthController::class, 'registration'])->name('register');
// Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
// Route::get('dashboard', [AuthController::class, 'dashboard']);
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');
