<?php

use App\Http\Controllers\API\v1\AnnouncementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//TODO: !! This will need to be authenticated in a full implementation !!
Route::prefix('announcements')->group(function () {
    Route::get('/load', [AnnouncementController::class, 'load']);
});
