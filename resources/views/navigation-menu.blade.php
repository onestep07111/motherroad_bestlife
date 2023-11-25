<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-language" content="ja">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .container {
        margin: 50px;
      }
    </style>

<div style="display:flex;align-items: center;">
        <img class="mr-3" style="width:30px;hight:30px" src="..\img\reindeer.png">
        BESTLIFE
</div>
<!-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100"> -->
<!-- <nav class="navbar navbar-expand navbar-dark bg-secondary sticky-top"> -->
<nav class="navbar navbar-expand navbar-dark bg-secondary">
    <!-- Primary Navigation Menu -->
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" style="color:white">
                        {{ __('HOME') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('goods.index') }}" :active="request()->routeIs('dashboard')" style="color:white">
                        {{ __('商品一覧') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('order.index') }}" :active="request()->routeIs('dashboard')" style="color:white">
                        {{ __('受注一覧') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" style="color:white">
                        {{ __('メール管理') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('bulkregistration.index') }}" :active="request()->routeIs('dashboard')" style="color:white">
                        {{ __('一括処理') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" style="color:white">
                        {{ __('集計処理') }}
                    </x-jet-nav-link>
                </div>
                <!-- 追加 START -->
                <!-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{  __('商品') }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-jet-dropdown-link href="{{ route('goods.index') }}">
                                            {{ __('詳細検索') }}
                                        </x-jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                    </x-slot>
                            </x-jet-dropdown>
                    </div>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{  __('注文') }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-jet-dropdown-link href="{{ route('order.index') }}">
                                            {{ __('受注一覧') }}
                                        </x-jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                    </x-slot>
                            </x-jet-dropdown>
                    </div>
                </div> -->
                <div  style="margin-left: 150px;" class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{  __('基本設定') }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-jet-dropdown-link href="{{ route('companys.index') }}">
                                            {{ __('会社設定') }}
                                        </x-jet-dropdown-link>
                                        <x-jet-dropdown-link href="{{ route('transactionLaws.index') }}">
                                            {{ __('特定商取引法') }}
                                        </x-jet-dropdown-link>
                                        <x-jet-dropdown-link href="{{ route('userinfos.index') }}">
                                            {{ __('メンバー管理') }}
                                        </x-jet-dropdown-link>

                                        <div class="border-t border-gray-100"></div>

                                    </x-slot>
                            </x-jet-dropdown>
                    </div>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{  __('マスタ設定') }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">

                                        <x-jet-dropdown-link href="{{ route('dashboard') }}">
                                            {{ __('SKU・規格管理') }}
                                        </x-jet-dropdown-link>
                                        <x-jet-dropdown-link href="{{ route('mastermanagement.index') }}">
                                            {{ __('マスタ管理') }}
                                        </x-jet-dropdown-link>
                                        <x-jet-dropdown-link href="{{ route('dashboard') }}">
                                            {{ __('発送方法設定') }}
                                        </x-jet-dropdown-link>
                                        <x-jet-dropdown-link href="{{ route('dashboard') }}">
                                            {{ __('支払方法設定') }}
                                        </x-jet-dropdown-link>
                                        <div class="border-t border-gray-100"></div>

                                    </x-slot>
                            </x-jet-dropdown>
                    </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{  __('システム設定') }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">

                                        <x-jet-dropdown-link href="{{ route('stores.index') }}">
                                            {{ __('モール設定') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('terminal.index') }}">
                                            {{ __('端末設定') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('places.index') }}">
                                            {{ __('場所設定') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('shelfs.index') }}">
                                            {{ __('棚設定') }}
                                        </x-jet-dropdown-link>

                                        <!-- <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('権限管理') }}
                                        </x-jet-dropdown-link> -->
                                        <x-jet-dropdown-link href="{{ route('dashboard') }}">
                                            {{ __('権限管理') }}
                                        </x-jet-nav-link>

                                        <!-- <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('マスタデータ管理') }}
                                        </x-jet-dropdown-link> -->
                                        <x-jet-dropdown-link href="{{ route('dashboard') }}">
                                            {{ __('マスタデータ管理') }}
                                        </x-jet-nav-link>


                                        <div class="border-t border-gray-100"></div>

                                    </x-slot>
                            </x-jet-dropdown>
                    </div>
                    <div  class="hidden sm:flex sm:items-center sm:ml-6">
                        <div class="text-right m-2 p-2">
                            <input type="text" wire:model="search" id="search" class="border-gray-300 rounded-md" placeholder="キーワード" />
                        </div>
                    </div>
                </div>
                <!-- 追加 END -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{  __('モバイル') }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-jet-dropdown-link href="{{ route('mobilegoods.index') }}">
                                            {{ __('検索画面') }}
                                        </x-jet-dropdown-link>
                                        <x-jet-dropdown-link href="{{ route('mobilegoodsdetail.index') }}">
                                            {{ __('詳細画面') }}
                                        </x-jet-dropdown-link>
                                        <div class="border-t border-gray-100"></div>

                                    </x-slot>
                            </x-jet-dropdown>
                    </div>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <!-- <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div> -->

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('プロフィール') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('ログアウト') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

            </div>
        </div>
    </div>
</nav>
