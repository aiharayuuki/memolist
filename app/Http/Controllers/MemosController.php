<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Memo;

class MemosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // メッセージ一覧を取得
        $memos = Memo::all();         // 追加

        // メッセージ一覧ビューでそれを表示
        return view('memos.index', [     // 追加
            'memos' => $memos,        // 追加
        ]);                                 // 追加
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $memo = new Memo;

        // メッセージ作成ビューを表示
        return view('memos.create', [
            'memo' => $memo,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
              'title' => 'required|max:255',  // 追加
            'content' => 'required|max:255',
        ]);

        // メッセージを作成
        $memo = new Memo;
          $memo->title = $request->title;    // 追加
        $memo->content = $request->content;
        $memo->save();

        // トップページへリダイレクトさせる
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // idの値でメッセージを検索して取得
        $memo = Memo::findOrFail($id);

        // メッセージ詳細ビューでそれを表示
        return view('memos.show', [
            'memo' => $memo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // idの値でメッセージを検索して取得
        $memo = Memo::findOrFail($id);

        // メッセージ編集ビューでそれを表示
        return view('memos.edit', [
            'memo' => $memo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // バリデーション
        $request->validate([
            'content' => 'required|max:255',
            'title' => 'required|max:255',
        ]);

        // idの値でメッセージを検索して取得
        $memo = Memo::findOrFail($id);
        // メッセージを更新
        $memo->title = $request->title;   // 追加
        $memo->content = $request->content;
        $memo->save();

        // トップページへリダイレクトさせる
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // idの値でメッセージを検索して取得
        $memo = Memo::findOrFail($id);
        // メッセージを削除
        $memo->delete();

        // トップページへリダイレクトさせる
        return redirect('/');
    }
}
