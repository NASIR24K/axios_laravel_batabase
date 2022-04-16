<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\axiosController;
use App\Http\Controllers\download_controller;
use App\Http\Controllers\File_upload_controller;
use Illuminate\Support\DB;



Route::get('/', [axiosController::class, 'OnSelect']);

Route::post('/InsertData', [axiosController::class, 'OnInsert']);
Route::get('/Insert', function(){
    return view('InsertData');
});

Route::post('/DeleteData', [axiosController::class, 'OnDelete']);
Route::get('/delete', function(){
    return view('DeleteData');
});
Route::post('/updateOnData', [axiosController::class, 'OnUpdate']);
Route::get('/update', function(){
    return view('UpdateData');
});
Route::get('/file', function(){
    return view('fileupload');
});
Route::post('/fileup', [axiosController::class, 'OnFileUp']);
Route::get('/filedownload', [download_controller::class, 'OnDownload']);
Route::get('/filelist', [download_controller::class, 'fileList']);

Route::get('/file1', function(){
    return view('fileupload');
});
Route::post('/fileup1', [File_upload_controller::class, 'fileUpload']);
//Route::get('/update');
//Route::get('/Delete');
//Route::get('/user/{id}', [UserController::class, 'show']);