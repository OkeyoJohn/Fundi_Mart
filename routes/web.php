<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

Route::get('/Cement', function () {
    return view('Cement');
})->name('Cement');

Route::get('/Electricals', function () {
    return view('Electricals');
})->name('Electricals');

Route::get('/Labour', function () {
    return view('Labour');
})->name('Labour');

Route::get('/Status', function () {
    return view('Status');
})->name('Status');

Route::get('/Tools', function () {
    return view('Tools');
})->name('Tools');

