<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');
Route::view('/tentang-kami', 'pages.about');
Route::view('/layanan-kami', 'pages.services');
Route::view('/portfolio', 'pages.portfolio');
