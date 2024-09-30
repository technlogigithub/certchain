<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return redirect('admin/login');
});



require __DIR__.'/auth.php';
require __DIR__.'/front.php';
