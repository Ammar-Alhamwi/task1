<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserSkillController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/UserSkill', [UserSkillController::class, 'index']);
Route::get('/username/{user_name}', [UserSkillController::class, 'username']);
Route::get('/skillid/{skill_id}', [UserSkillController::class, 'skillid']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
