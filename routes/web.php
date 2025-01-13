<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.index');
});

Route::get('animals', function () {
    return view('backend.animals');
});

Route::get('animals/add', function () {
    return view('backend.animals-add');
});

Route::get('calender', function () {
    return view('backend.calender');
});

Route::get('contacts', function () {
    return view('backend.contacts');
});
