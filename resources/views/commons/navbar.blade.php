<header class="mb-4">
    <nav class="navbar bg-neutral text-neutral-content">
        {{-- トップページへのリンク --}}
        <div class="flex-1">
            <h1><a class="btn btn-ghost normal-case text-xl" href="/">Memolist</a></h1>
        </div>

        <div class="flex-none">
            <ul tabindex="0" class="menu hidden lg:block lg:menu-horizontal">
                {{-- メッセージ作成ページへのリンク --}}
                <li><a class="link link-hover" href="{{ route('memos.create') }}">新規メッセージの投稿</a></li>
            </ul>
            <div class="dropdown dropdown-end">
                <button type="button" tabindex="0" class="btn btn-square btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-info">
                    {{-- メッセージ作成ページへのリンク --}}
                    <li><a class="link link-hover" href="{{ route('memo.create') }}">新規メモの投稿</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
app.blade.phpに追加
resources/views/layouts/app.blade.php
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Memolist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>

        {{-- ナビゲーションバー --}}
        @include('commons.navbar')      // navbar.blade.phpを読み込む

        <div class="container mx-auto">
            {{-- エラーメッセージ --}}
            @include('commons.error_memos')

            @yield('content')
        </div>

    </body>
</html>