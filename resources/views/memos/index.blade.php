@extends('layouts.app')

@section('content')

<div class="prose ml-4">
  <h2 class="text-lg">メモ 一覧</h2>
</div>

@if (isset($memos))
<table class="table table-zebra w-full my-4">
  <thead>
    <tr>
      <th>id</th>
      <th>メモ</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($memos as $memo)
    <tr>
      <td><a class="link link-hover text-info" href="{{ route('memo.show', $memo->id) }}">{{ $memo->id }}</a></td>
      <td>{{ $memo->content }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif

{{-- メモ作成ページへのリンク --}}
<a class="btn btn-primary" href="{{ route('memo.create') }}">新規メモの投稿</a>

@endsection




