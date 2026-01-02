<?php
/**
 * Module 4 routes — merge into routes/api.php
 */

use App\Http\Controllers\Api\Notifications\OutboxController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum','resolveSalon','requireRole:owner,admin'])->group(function () {
    Route::get('notifications/outbox', [OutboxController::class,'index']);
    Route::post('notifications/outbox', [OutboxController::class,'enqueue']);
    Route::post('notifications/outbox/{id}/retry', [OutboxController::class,'retry']);
});
