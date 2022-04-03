<?php

use Illuminate\Support\Facades\Route;


// Backend
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\TeammatesController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Frontend\FrontendController;



// Frontend Start
Route::get('/',[FrontendController::class,'home'])->name('frontend.home');
Route::get('/gallery',[FrontendController::class,'gallery'])->name('frontend.gallery');
Route::get('/team',[FrontendController::class,'team'])->name('frontend.team');
Route::get('/about',[FrontendController::class,'about'])->name('frontend.about');

//Search
Route::get ('/search',[FrontendController::class,'search'])->name('search');


// Admin Start
Route::group(['prefix'=>'admin'],function(){
Route::get('/', function () {
    return view('admin.pages.dashboard.dash');
})->name('admin.dashboard');
});

// Dashboard
Route::get ('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

// Contact
Route::post('/contact/store',[ContactController::class,'store'])->name('contact.store');


// Home
Route::get ('/home/index',[HomeController::class,'index'])->name('home.index');
Route::get ('/home/create',[HomeController::class,'create'])->name('home.create');
Route::post('/home/store',[HomeController::class,'store'])->name('home.store');
Route::get ('/home/details/{id}',[HomeController::class,'details'])->name('home.details');
Route::get ('/home/edit/{id}',[HomeController::class,'edit'])->name('home.edit');
Route::put ('/home/update/{id}',[HomeController::class,'update'])->name('home.update');
Route::get ('/home/delete/{id}',[HomeController::class,'delete'])->name('home.delete');

// Gallery
Route::get ('/gallery/index',[GalleryController::class,'index'])->name('gallery.index');
Route::get ('/gallery/create',[GalleryController::class,'create'])->name('gallery.create');
Route::post('/gallery/store',[GalleryController::class,'store'])->name('gallery.store');
Route::get ('/gallery/details/{id}',[GalleryController::class,'details'])->name('gallery.details');
Route::get ('/gallery/edit/{id}',[GalleryController::class,'edit'])->name('gallery.edit');
Route::put ('/gallery/update/{id}',[GalleryController::class,'update'])->name('gallery.update');
Route::get ('/gallery/delete/{id}',[GalleryController::class,'delete'])->name('gallery.delete');

// Teammates
Route::get ('/team/index',[TeammatesController::class,'index'])->name('team.index');
Route::get ('/team/create',[TeammatesController::class,'create'])->name('team.create');
Route::post('/team/store',[TeammatesController::class,'store'])->name('team.store');
Route::get ('/team/details/{id}',[TeammatesController::class,'details'])->name('team.details');
Route::get ('/team/edit/{id}',[TeammatesController::class,'edit'])->name('team.edit');
Route::put ('/team/update/{id}',[TeammatesController::class,'update'])->name('team.update');
Route::get ('/team/delete/{id}',[TeammatesController::class,'delete'])->name('team.delete');