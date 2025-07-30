<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemosController;

// デフォルトのコメント部分は省略

Route::get('/', [MemosController::class, 'index']);

// CRUD
// メッセージの個別詳細ページ表示
Route::get('memos/{id}', [MemosController::class, 'show'])->name('memo.show');
// メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
Route::post('memos', [MemosController::class, 'store'])->name('memo.store');
// メッセージの更新処理（編集画面を表示するためのものではありません）
Route::put('memos/{id}', [MemosController::class, 'update'])->name('memo.update');
// メッセージを削除
Route::delete('memos/{id}', [MemosController::class, 'destroy'])->name('memo.destroy');

// index: showの補助ページ
Route::get('memos', [MemosController::class, 'index'])->name('memo.index');
// create: 新規作成用のフォームページ
Route::get('memos/create', [MemosController::class, 'create'])->name('memo.create');
// edit: 更新用のフォームページ
Route::get('memos/{id}/edit', [MemosController::class, 'edit'])->name('memo.edit');