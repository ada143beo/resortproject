<?php

use App\Livewire\Admin\AdminDashboard;
use App\Livewire\Auth\AuthLogin;
use App\Livewire\Auth\AuthRegister;
use App\Livewire\User\UserDashboard;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', AuthLogin::class)->name('login');
Route::get('/register', AuthRegister::class)->name('register');
Route::get('/admin', AdminDashboard::class)->name('admin-dashboard');
Route::get('/userdashboard', UserDashboard::class);
