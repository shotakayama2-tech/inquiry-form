<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AuthController;

// ================================
// お問い合わせフォーム（正しいルート）
// ================================
// ================================
// お問い合わせフォーム
// ================================
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact.index');

Route::post('/contact/confirm', [ContactController::class, 'confirm'])
    ->name('contact.confirm');

Route::post('/contact/send', [ContactController::class, 'send'])
    ->name('contact.send');  // ← 修正ポイント

Route::get('/contact/thanks', function () {
    return view('contacts.thanks');
})->name('contact.thanks');

Route::get('/home', function () {
    return view('home');
})->name('home');





// ================================
// ログイン & 会員登録
// ================================
// 会員登録
// 会員登録フォーム表示
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

// 会員登録処理（POST）
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




