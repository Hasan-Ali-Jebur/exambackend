<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/sanctum/token', [AuthController::class, "login"]);
Route::middleware('auth:sanctum')->post('/sanctum/token/revoke', [AuthController::class, "logout"]);
Route::middleware('auth:sanctum')->post('/sanctum/token/refresh', [AuthController::class, "refresh"]);

Route::get('/quiz', function (Request $request) {
    return response()->json(\App\Models\Quiz::withCount("questions")->get());
});
Route::get('quiz/questions/{id}', function (Request $request) {
    $id = $request->id;
    return response()->json(\App\Models\Question::where("quiz_id", "=", $id)
        ->select(["id","question","quiz_id"])
        ->with(['answers' => function ($query) {
            $query->orderBy('identifier', 'asc');
        }])->get());
});

Route::get('quiz/questions/{id}/answer', function (Request $request) {
    $id = $request->id;

    return response()->streamDownload(function () use ($id){
        echo \App\Models\Answer::where("question_id", "=", $id)->get();
    }, 'questions.json');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
