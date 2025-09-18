<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'top'])->name('top');       // TOP + フォーム
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm'); // 確認画面
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');         // 完了画面
Route::post('/contact/edit', [ContactController::class, 'edit'])->name('contact.edit');         //修正ボタン用
?>
