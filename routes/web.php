<?php
use App\Http\Controllers\StaticControler;
use Illuminate\Support\Facades\Route;

Route::get('/',  [StaticControler::class,'index'])->name('index');
Route::get('/about',  [StaticControler::class,'about'])->name('about');
Route::get('/contact',  [StaticControler::class,'contact'])->name('contact');




/*
Route::get('/store', function () {
    $filter = request('style');
    if(isset($filter)){
        return 'this is the store page<span style="color: red">'.strip_tags($filter).'</span>';

    }
    return 'this is the store page<span style="color: red">Store</span>';
});
*/