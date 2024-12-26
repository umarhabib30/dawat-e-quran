<?php

use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ContactUsController;
use App\Http\Controllers\User\CourseController;
use App\Http\Controllers\User\DonationController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\InstructorController;
use App\Http\Controllers\User\ServiceController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Architecture\Services\ServiceContainer;



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('about-us',[AboutController::class,'index'])->name('about');
Route::get('services',[ServiceController::class,'index'])->name('services');
Route::get('contact-us',[ContactUsController::class,'index'])->name('contact.us');
Route::get('courses',[CourseController::class,'index'])->name('courses');
Route::get('instructors',[InstructorController::class,'index'])->name('instructors');
Route::get('donate',[DonationController::class,'index'])->name('donate');
