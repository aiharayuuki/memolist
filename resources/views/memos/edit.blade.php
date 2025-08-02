@extends('layouts.app')

@section('content')

<div class="prose ml-4">
    <h2 class="text-lg">id: {{ $memo->id }} のメモ編集ページ</h2>
</div>

<div class="flex justify-center">
    <form method="POST" action="{{ route('memos.update', $memo->id) }}" class="w-1/2">
        @csrf
        @method('PUT')

        <div class="form-control my-4">
            <label for="title" class="label">
                <span class="label-text">タイトル:</span>
            </label>
            <input type="text" name="title" value="{{ $memo->title }}" class="input input-bordered w-full">
        </div>

        <div class="form-control my-4">
            <label for="content" class="label">
                <span class="label-text">メモ:</span>
            </label>
            <input type="text" name="content" value="{{ $memo->content }}" class="input input-bordered w-full">
        </div>

        <button type="submit" class="btn btn-primary btn-outline">更新</button>
    </form>
</div>

@endsection