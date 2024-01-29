<?php

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
Route::get('/my-route',function(){
    return view('myform');
});
// Route::get('/my-form',function(){
//     $data = ['val_a' => 'Hello'];
//     $data ['val_b'] = "Laravel";
//     return view('myfolder.pageform',$data);

// });
// Route::post('/my-route',function(Request $req){
//     $data['myinput'] = $req->input('myinput');
//     return view('myroute',$data);
// });
