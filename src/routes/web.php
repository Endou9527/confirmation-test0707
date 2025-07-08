<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightLogController;
use App\Http\Controllers\UserController;

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

// 体重記録の詳細を表示
Route::get('/weight_logs/detail',
//Route::get('/weight_logs/{:weightLogId}',
[WeightLogController::class,'detail']);
// 体重記録を更新する
Route::get('/weight_logs/{:weightLogId}/update',[WeightLogController::class,'update']);
// 体重記録を削除する
Route::get('/weight_logs/{:weightLogId}/delete',[WeightLogController::class,'destroy']);
// 管理画面を表示
Route::get('/weight_logs',[WeightLogController::class,'show']);
// 「追加」登録
Route::get('/weight_logs/create',[WeightLogController::class,'create']);
// 体重検索結果を表示
Route::get('/weight_logs/search',[WeightLogController::class,'search']);
// 目標設定画面を表示する
// 「wight」でok（※typoではない）
Route::get('/wight_logs/goal_setting',[WeightLogController::class,'setting']);
// 目標体重を更新する
Route::get('/target',[WeightLogController::class,'target']);

// 会員登録画面（STEP1を表示する）
Route::get('/register/step1',[UserController::class,'step1']);
// 会員登録画面（STEP2へ移行する）
Route::post('/register/step2',[UserController::class,'step2']);
// 会員登録処理（DB保存）
Route::get('/register',[UserController::class,'register']);
// ログイン画面を表示する
Route::get('/login',[UserController::class,'login']);


// Route::middleware('auth')->group(function () {
//   Route::get('/admin', [UserController::class, 'admin'])->middleware('auth');
//   });