<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemosController;

// トップページ（メモ一覧）
Route::get('/', [MemosController::class, 'index']);

// 新規作成用フォームページ
Route::get('memos/create', [MemosController::class, 'create'])->name('memo.create');

// 編集用フォームページ
Route::get('memos/{id}/edit', [MemosController::class, 'edit'])->name('memo.edit');

// メモ一覧ページ
Route::get('memos', [MemosController::class, 'index'])->name('memo.index');

// メモ個別詳細ページ表示
Route::get('memos/{id}', [MemosController::class, 'show'])->name('memo.show');

// メモの新規登録処理
Route::post('memos', [MemosController::class, 'store'])->name('memo.store');

// メモの更新処理
Route::put('memos/{id}', [MemosController::class, 'update'])->name('memo.update');

// メモの削除処理
Route::delete('memos/{id}', [MemosController::class, 'destroy'])->name('memo.destroy');