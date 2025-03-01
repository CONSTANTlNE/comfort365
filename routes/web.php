<?php

use App\Http\Controllers\PortfolioController;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $works=Portfolio::with('media')->take(10)->get();
    return view('index',compact('works'));
});

Route::get('/gallery',[PortfolioController::class,'gallery'])->name('gallery');



Route::controller(PortfolioController::class)->group(function () {
    Route::post('work/store', 'store')->name('work.store');
    Route::post('work/update', 'update')->name('work.update');
    Route::post('work/delete', 'delete')->name('work.delete');
})->middleware('auth');