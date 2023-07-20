<?php

use Illuminate\Support\Facades\Route;

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

//fronted ----*-------*//
Route::get('/front', function () { 
    return view('fronted/header');
});
Route::get('/Home', function () { 
    return view('fronted/index');
});
Route::get('/About', function () { 
    return view('fronted/about');
});
Route::get('/Trainers', function () { 
    return view('fronted/trainers');
});
Route::get('/Courses', function () { 
    return view('fronted/courses');
});
Route::get('/Events', function () { 
    return view('fronted/event');
});
Route::get('/Contact', function () { 
    return view('fronted/contact');
});
    
    





//deshbord ------*------*
Route::get("/deshbord", "App\Http\Controllers\IndexController@index");

//USERS------*------*
//form
Route::get("/formshow", "App\Http\Controllers\backend\users@form");
Route::post("/formshow", "App\Http\Controllers\backend\users@addform");
//list
Route::get("/listshow", "App\Http\Controllers\backend\users@showuserlist");
//Edit
Route::get("/edituserlist/{id}", "App\Http\Controllers\backend\users@edituserlist");
Route::post("/edituserlist/{id}", "App\Http\Controllers\backend\users@updateUser");
//Delete
Route::get("/deleteUser/{id}", "App\Http\Controllers\backend\users@deleteUser");



//BANNER--------*-----*
//form
Route::get("/formbanner", "App\Http\Controllers\backend\Banners@form");
Route::post("/formbanner", "App\Http\Controllers\backend\Banners@addform");
//list
Route::get("/listbanner", "App\Http\Controllers\backend\Banners@showuserlist");
//Edit
Route::get("/editbannerlist/{id}", "App\Http\Controllers\backend\Banners@edituserlist");
Route::post("/editbannerlist/{id}", "App\Http\Controllers\backend\Banners@updateUser");
//Delete
Route::get("/deletebanner/{id}", "App\Http\Controllers\backend\Banners@deleteUser");


//CMS--------*--------*
//form
Route::get("/formcms", "App\Http\Controllers\backend\Cmss@form")->name('formcms.index');
Route::post("/formcms", "App\Http\Controllers\backend\Cmss@addform");
//list
Route::get("/stutas-update/{id}", "App\Http\Controllers\backend\Cmss@stutas");

Route::get("/listcms", "App\Http\Controllers\backend\Cmss@showuserlist");

//Edit
Route::get("/editcmslist/{id}", "App\Http\Controllers\backend\Cmss@edituserlist");
Route::post("/editcmslist/{id}", "App\Http\Controllers\backend\Cmss@updateUser");

//Delete
Route::get("/deletecms/{id}", "App\Http\Controllers\backend\Cmss@deleteUser");





//Courses-------*--------*
//form
Route::get("/formCourses", "App\Http\Controllers\backend\Coursess@form");
Route::post("/formCourses", "App\Http\Controllers\backend\Coursess@addform");
//list
Route::get("/listCourses", "App\Http\Controllers\backend\Coursess@showuserlist");

//Edit
Route::get("/editCourseslist/{id}", "App\Http\Controllers\backend\Coursess@edituserlist");
Route::post("/editCourseslist/{id}", "App\Http\Controllers\backend\Coursess@updateUser");

//Delete
Route::get("/deleteCourses/{id}", "App\Http\Controllers\backend\Coursess@deleteUser");








//trainers-------*-------*
//form
Route::get("/formTrainers", "App\Http\Controllers\backend\Trainerss@form");
Route::post("/formTrainers", "App\Http\Controllers\backend\Trainerss@addform");
//list
Route::get("/listTrainers", "App\Http\Controllers\backend\Trainerss@showuserlist");
// Route::get("/stutas-update/{id}", "App\Http\Controllers\backend\Trainers@stutas");
//Edit
Route::get("/editTrainerslist/{id}", "App\Http\Controllers\backend\Trainerss@edituserlist");
Route::post("/editTrainerslist/{id}", "App\Http\Controllers\backend\Trainerss@updateUser");

//Delete
Route::get("/deleteTrainers/{id}", "App\Http\Controllers\backend\Trainerss@deleteUser");



//Event-------*-------*
//form
Route::get("/formEvents", "App\Http\Controllers\backend\Events@form");
Route::post("/formEvents", "App\Http\Controllers\backend\Events@addform");
//list
Route::get("/listEvents", "App\Http\Controllers\backend\Events@showuserlist");

//Edit
Route::get("/editEventlist/{id}", "App\Http\Controllers\backend\Events@edituserlist");
Route::post("/editEventlist/{id}", "App\Http\Controllers\backend\Events@updateUser");

//Delete
Route::get("/deleteEvent/{id}", "App\Http\Controllers\backend\Events@deleteUser");
