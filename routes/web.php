<?php
use Src\Route;
Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup'])->middleware('admin');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/abonents', [Controller\Site::class, 'abonents']);
Route::add(['GET', 'POST'], '/divisions', [Controller\Site::class, 'divisions']);
Route::add(['GET', 'POST'], '/numbers', [Controller\Site::class, 'numbers']);
Route::add(['GET', 'POST'], '/rooms', [Controller\Site::class, 'rooms']);