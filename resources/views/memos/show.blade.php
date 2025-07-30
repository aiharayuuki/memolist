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

        <tr>
            <th>メモ</th>
            <td>{{ $memo->content }}</td>
        </tr>
    </table>

      {{-- メモ編集ページへのリンク --}}
    <a class="btn btn-outline" href="{{ route('memo.edit', $memo->id) }}">このメモを編集</a>
@endsection