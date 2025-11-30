<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AuthController;

// ================================
// お問い合わせフォーム（正しいルート）
// ================================
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact.index');

Route::post('/contact/confirm', [ContactController::class, 'confirm'])
    ->name('contact.confirm');

Route::post('/contact/thanks', [ContactController::class, 'send'])
    ->name('contact.thanks');



// ================================
// ログイン & 会員登録
// ================================
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.post');

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.post');

// ================================
// 管理画面
// ================================
Route::get('/admin/contacts', [AdminContactController::class, 'index'])
    ->name('admin.contacts.index');

Route::get('/admin/contacts/{id}', [AdminContactController::class, 'show'])
    ->name('admin.contacts.show');

Route::get('/admin/contacts/export', [AdminContactController::class, 'export'])->name('admin.contacts.export');

