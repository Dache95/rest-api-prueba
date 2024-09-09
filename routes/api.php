<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\userController;
use App\Http\Controllers\Api\requestController;
use App\Http\Controllers\Api\assignmentsController;



Route::get('/user', [userController::class, 'index']);

Route::get('/requests', [requestController::class, 'index']);
Route::post('/requests', [requestController::class, 'store']);

Route::get('/assignments', [assignmentsController::class, 'index']);
Route::post('/requests/{id}/assign', [AssignmentsController::class, 'assign']);
