<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SadminController;
use App\Http\Controllers\SsadminController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\ServerStatusController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\VehicleHistoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ManualEntryController;
use App\Http\Controllers\ParkingMapController;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\SettingsController;



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

Route::redirect('/', destination:'login');

Route::get('redirects','App\Http\Controllers\HomeController@index');

 //Route::get('/dashboard', function () {
    //  return view('dashboard');
 //})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:ssadmin'])->group(function(){
    Route::get('/ssadmin/dashboard', [SsadminController::class, 'SsadminDashboard'])->name('ssadmin.dashboard');
    Route::get('/ssadmin/vehicle_history', [VehicleHistoryController::class, 'VehicleHistory'])->name('ssadmin.vehicle_history');
    Route::get('/ssadmin/server_status_ssadmin', [ServerStatusController::class, 'ServerStatusSsadmin'])->name('ssadmin.server_status_ssadmin');
    Route::get('/ssadmin/parking_map_ssadmin', [ParkingMapController::class, 'ParkingMap'])->name('ssadmin.parking_map');
    Route::get('/ssadmin/logout', [SsadminController::class, 'SsadminLogout'])->name('ssadmin.logout');
    Route::get('/ssadmin/register_client', [ClientController::class, 'RegisterClient'])->name('ssadmin.register_client');
    Route::get('/register_client', [ClientController::class, 'create'])->name('register_client');
    Route::post('/register_client', [ClientController::class, 'store']);
}); //end group ssadmin middleware

Route::middleware(['auth','role:sadmin'])->group(function(){
    Route::get('/sadmin/dashboard', [SadminController::class, 'SadminDashboard'])->name('sadmin.dashboard');
    Route::get('/sadmin/vehicles', [VehiclesController::class, 'Vehicles'])->name('sadmin.vehicles');
    Route::get('/sadmin/server_status_sadmin', [ServerStatusController::class, 'ServerStatusSadmin'])->name('sadmin.server_status_sadmin');
    Route::get('/sadmin/payment_sadmin', [PaymentController::class, 'PaymentSadmin'])->name('sadmin.payment_sadmin');
    Route::get('/sadmin/settings', [SettingsController::class, 'Settings'])->name('sadmin.settings');
    Route::get('/sadmin/manual_entry', [ManualEntryController::class, 'ManualEntry'])->name('sadmin.manual_entry');
    Route::get('/sadmin/logout', [SadminController::class, 'SadminLogout'])->name('sadmin.logout');


}); //end group sadmin middleware

Route::middleware(['auth','role:security'])->group(function(){
    Route::get('/security/dashboard', [SecurityController::class, 'SecurityDashboard'])->name('security.dashboard');
    Route::get('/security/payment_security', [PaymentController::class, 'PaymentSecurity'])->name('security.payment_security');
    Route::get('/security/server_status_security', [ServerStatusController::class, 'ServerStatusSecurity'])->name('security.server_status_security');
    Route::get('/security/logout', [SecurityController::class, 'SecurityLogout'])->name('security.logout');
}); //end group security middleware




Route::get('/manual_entry', [ManualEntryController::class, 'ManualEntry'])->name('manual_entry');
Route::get('/manual_exit', [ManualEntryController::class, 'ManualExit'])->name('manual_exit');



Route::post('/manual_entry', [ManualEntryController::class, 'store'])->name('manual_entry.store');
Route::post('/manual_exit', [ManualEntryController::class, 'storeExit'])->name('manual_exit.store');


Route::post('/parking-slots/store', [SadminController::class, 'storeParkingSlot'])->name('parking-slots.store');

Route::get('/sadmin/parkingMap', [SadminController::class, 'ParkingMap'])->name('sadmin.parking_map');







Route::get('/sadmin/dashboard', [SadminController::class, 'SadminDashboard'])->name('sadmin.dashboard');
Route::get('/sadmin/parking-slots/create', [SadminController::class, 'createParkingSlotPage'])->name('parking-slots.create');
Route::post('/sadmin/parking-slots', [SadminController::class, 'storeParkingSlot'])->name('parking-slots.store');

Route::get('/show-parking-slot-add-form', 'SadminController@showParkingSlotAddForm')->name('sadmin.show_parking_slot_add_form');
Route::post('/store-parking-slot', 'SadminController@storeParkingSlot')->name('sadmin.store_parking_slot');






Route::get('/parking-map-add', [SadminController::class, 'showAddParkingSlot'])->name('sadmin.parking_map_add');




Route::get('/store-parking-slot', [SadminController::class, 'create'])->name('store_parking_slot');
Route::post('/store-parking-slot', [SadminController::class, 'store']);




Route::get('sadmin/parking_map', [SadminController::class, 'index'])->name('sadmin.parking_map');
Route::get('sadmin/parking_map/add', [SadminController::class, 'create'])->name('sadmin.parking_map_add');
//Route::get('sadmin/parking_map/{id}/edit', [SadminController::class, 'edit'])->name('sadmin.edit');
//Route::patch('sadmin/parking_map/{id}', [SadminController::class, 'update'])->name('sadmin.update');
Route::get('sadmin/parking_map/{id}/delete', [SadminController::class, 'destroy'])->name('sadmin.delete');
Route::delete('sadmin/parking_map/{id}', [SadminController::class, 'destroy'])->name('sadmin.destroy');


Route::get('/dashboard', [SadminController::class, 'SadminDashboard'])->name('sadmin.dashboard');

Route::get('/sadmin/edit/{id}', [SadminController::class, 'edit'])->name('sadmin.edit');
Route::patch('/sadmin/update/{id}', [SadminController::class, 'update'])->name('sadmin.update');


Route::delete('/sadmin/{id}', [SadminController::class, 'destroy'])->name('sadmin.destroy');
 // Changed route name to 'destroy'





