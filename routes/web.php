<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\HospitalController;

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

Route::group( ['prefix' => 'panel','middleware' => 'auth'], function () {

    Route::group( ['prefix' => 'cities'], function () {

        Route::get('/',[CityController::class,'display'])->name('cities');
        Route::get('create',[CityController::class,'create'])->name('cities.create');
        Route::post('/store',[CityController::class,'store'])->name('cities.store');
        Route::get('/delete/{id}',[CityController::class,'delete'])->name('cities.delete');
        Route::get('/edit/{id}',[CityController::class,'edit'])->name('cities.edit');
        Route::post('/update/{city}',[CityController::class,'update'])->name('cities.update');
        
        });
        
        Route::group( ['prefix' => 'areas'], function () {
        
            Route::get('/',[AreasController::class,'display'])->name('areas');
            Route::get('/create',[AreasController::class,'create'])->name('areas.create');
            Route::post('/store',[AreasController::class,'store'])->name('areas.store');
            Route::get('/delete/{id}',[AreasController::class,'delete'])->name('areas.delete');
            Route::get('/edit/{id}',[AreasController::class,'edit'])->name('areas.edit');
            Route::post('/update/{area}',[AreasController::class,'update'])->name('areas.update');        
            
         });
        
         Route::group( ['prefix' => 'hospitals'], function () {
        
            Route::get('/',[HospitalController::class,'display'])->name('hospitals');
            Route::get('/create',[HospitalController::class,'create'])->name('hospital.create');
            Route::post('/store',[HospitalController::class,'store'])->name('hospital.store');
            Route::get('/delete/{id}',[HospitalController::class,'delete'])->name('hospitals.delete');
            Route::get('/edit/{id}',[HospitalController::class,'edit'])->name('hospitals.edit');
            Route::post('/update/{hospital}',[HospitalController::class,'update'])->name('hospitals.update');
        
         });
        
});







// Route::get('cities',[CityController::class,'display'])->name('cities');
// Route::get('cities/create',[CityController::class,'create'])->name('cities.create');
// Route::post('cities/store',[CityController::class,'store'])->name('cities.store');
// Route::get('cities/delete/{id}',[CityController::class,'delete'])->name('cities.delete');
// Route::get('cities/edit/{id}',[CityController::class,'edit'])->name('cities.edit');
// Route::post('cities/update/{city}',[CityController::class,'update'])->name('cities.update');


//Areas
// Route::get('areas',[AreasController::class,'display'])->name('areas');
// Route::get('areas/create',[AreasController::class,'create'])->name('areas.create');
// Route::post('areas/store',[AreasController::class,'store'])->name('areas.store');
// Route::get('areas/delete/{id}',[AreasController::class,'delete'])->name('areas.delete');
// Route::get('areas/edit/{id}',[AreasController::class,'edit'])->name('areas.edit');
// Route::post('areas/update/{area}',[AreasController::class,'update'])->name('areas.update');

//Hospital
// Route::get('hospitals',[HospitalController::class,'display'])->name('hospitals');
// Route::get('hospitals/create',[HospitalController::class,'create'])->name('hospital.create');
// Route::post('hospitals/store',[HospitalController::class,'store'])->name('hospital.store');
// Route::get('hospitals/delete/{id}',[HospitalController::class,'delete'])->name('hospitals.delete');
// Route::get('hospitals/edit/{id}',[HospitalController::class,'edit'])->name('hospitals.edit');
// Route::post('hospitals/update/{hospital}',[HospitalController::class,'update'])->name('hospitals.update');








Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


