<?php

use App\Http\Controllers\Api\BankWebhookAction;
use App\Http\Controllers\Api\DebtListAction;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/debt-list', DebtListAction::class);
Route::post('/bank-webhook', BankWebhookAction::class);
