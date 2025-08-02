@extends('layouts.app')

@section('content')

<div class="prose ml-4">
    <h2>id = {{ $memo->id }} のメモ詳細ページ</h2>
</div>

<table class="table w-full my-4">
    <tr>
        <th>id</th>
        <td>{{ $memo->id }}</td>
    </tr>
    <th>タイトル</th>
    <td>{{ $memo->title }}</td>
    <tr>
        <th>メモ</th>
        <td>{{ $memo->content }}</td>
    </tr>
</table>

{{-- メモ編集ページへのリンク --}}
<a class="btn btn-outline" href="{{ route('memos.edit', $memo->id) }}">このメモを編集</a>

{{-- メッセージ削除フォーム --}}
<form method="POST" action="{{ route('memos.destroy', $memo->id) }}" class="my-2">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-error btn-outline"
        onclick="return confirm('id = {{ $memo->id }} のメッセージを削除します。よろしいですか？')">削除</button>
</form>

@endsection