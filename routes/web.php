<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminInstructorController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ContactUsController;
use App\Http\Controllers\User\CourseController;
use App\Http\Controllers\User\DonationController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\InstructorController;
use App\Http\Controllers\User\ServiceController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Architecture\Services\ServiceContainer;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about-us', [AboutController::class, 'index'])->name('about');
Route::get('services', [ServiceController::class, 'index'])->name('services');
Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact.us');
Route::get('courses', [CourseController::class, 'index'])->name('courses');
Route::get('instructors', [InstructorController::class, 'index'])->name('instructors');
Route::get('donate', [DonationController::class, 'index'])->name('donate');




// admin
Route::view('/admin/login', 'admin.auth.login')->name('admin');
Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login');

Route::middleware('auth:admin')->group(function () {
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // category
    Route::get('/category', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/create/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('index', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/category/delete', [CategoryController::class, 'delete'])->name('category.delete');
    Route::post('/category/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update', [CategoryController::class, 'update'])->name('category.update');

    //course

    Route::get('/course', [AdminCourseController::class, 'create'])->name('course.create');
    Route::post('/course/create',[AdminCourseController::class,'store'])->name('course.store');

    // instructor
    Route::get('admin/instructor/index',[AdminInstructorController::class, 'index'])->name('instructor.index');
    Route::get('admin/instructor/create',[AdminInstructorController::class, 'create'])->name('instructor.create');
    Route::post('admin/instructor/store',[AdminInstructorController::class, 'store'])->name('instructor.store');
    Route::get('admin/instructor/edit/{id',[AdminInstructorController::class, 'edit'])->name('instructor.edit');
    Route::post('admin/instructor/update',[AdminInstructorController::class, 'update'])->name('instructor.update');
    Route::get('admin/instructor/delete/{id',[AdminInstructorController::class, 'delete'])->name('instructor.delete');
});
