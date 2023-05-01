<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/patient-add', function () {
    return view('patient-add');
});

Route::get('/patient-list', function () {
    return view('patient-list');
});

Route::get('/patient-profile', function () {
    return view('patient-profile');
});


Route::get('/appointment', [AppointmentController::class, 'index']);
Route::get('/up-appointment/{id}', [AppointmentController::class, 'update']);
Route::post('/up-appointment', [AppointmentController::class, 'edit']);
Route::post('/add-appointment', [AppointmentController::class, 'store']);
Route::post('/add-patient', [PatientController::class, 'store']);
