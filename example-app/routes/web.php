<?php
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/my-route',function(){
//     return view('myform');
// });
// Route::get('/my-form',function(){
//     $data = ['val_a' => 'Hello'];
//     $data ['val_b'] = "Laravel";
//     return view('myfolder.pageform',$data);

// });
// Route::post('/my-route',function(Request $req){
//     $data['myinput'] = $req->input('myinput');
//     return view('myroute',$data);
// });


// Route::get('/login', [MyAuth::class, 'login_view'])->name('login');
// Route::get('/register', [MyAuth::class, 'register_view']);
// Route::get('/logout', [MyAuth::class, 'logout_process']);
// Route::post('/login', [MyAuth::class, 'login_process']);
// Route::post('/register', [MyAuth::class, 'register_process']);

// Route::resource('titles', C_titles::class)->middleware('auth');
// Route::middleware('auth')->group(function(){
//     // auth first
// });

use App\Http\Controllers\C_titles;
Route::resource('titles', C_titles::class);
