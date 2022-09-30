<?php

use minhduc\test\Http\Controllers\TestController;

Route::get('/test', [TestController::class,'index'])->name('test');

