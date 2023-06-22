<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemberController;



Route::get('/',[MemberController::class,'index']);
Route::post('/add/member',[MemberController::class,'addMember']);
Route::get('/edit/member/{id}',[MemberController::class,'editMember']);
Route::post('/update/member/{id}',[MemberController::class,'updateMember']);
Route::get('/delete/member/{id}',[MemberController::class,'deleteMember']);