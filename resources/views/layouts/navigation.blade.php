<!-- Responsive Settings Options -->
<div class="pt-4 pb-1 border-t border-gray-200">
    <div class="px-4">
        @if (Auth::check())
            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
        @else
            <div class="font-medium text-base text-gray-800">ゲスト</div>
            <div class="mt-2 space-x-4">
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">ログイン</a>
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">登録</a>
            </div>
        @endif
    </div>

    @if (Auth::check())
    <div class="mt-3 space-y-1">
        <x-responsive-nav-link :href="route('profile.edit')">
            {{ __('Profile') }}
        </x-responsive-nav-link>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
        {{ __('Log Out') }}
    </button>

        </form>
    </div>
    @endif
</div>