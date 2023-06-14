<?php

use App\Http\Controllers\PenontonController;
use App\Http\Controllers\StaffController;
use App\Models\Staff;
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
Route::get('/coba', function () {
    return view('index');
});
Route::get('/', function () {
    return view('main');
});
Route::get('/dasboard', function () {
    $status = session()->get('status');
    if (!$status){
        return view('index');
    }
    return view('admin.index');
});
Route::get('/daftarakun', function () {
    return view('daftarakun');
});





Route::get('/daftar', [PenontonController::class, 'index']);
Route::get('/laporan', [PenontonController::class, 'index2']);
Route::get('/hapusdata/{id}', [PenontonController::class, 'deletedata']);
Route::post('/tambahdata', [PenontonController::class, 'tambahdata']);
Route::post('/editdata', [PenontonController::class, 'editdata']);
Route::post('/cektamu', [PenontonController::class, 'detaildata']);
Route::post('/daftartamu', [PenontonController::class, 'daftartamu']);
Route::post('/login', [StaffController::class, 'login']);
Route::get('/logout', [StaffController::class, 'logout']);
