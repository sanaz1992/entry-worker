<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Livewire\Admin\Company\CompanyCreate;
use App\Livewire\Admin\Company\CompanyList;
use App\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::name('admin.')->prefix('/admin')->group(function () {

    Route::get('/companies', CompanyList::class)->name('companies.index');
    Route::get('/companies/create', CompanyCreate::class)->name('companies.create');
});
