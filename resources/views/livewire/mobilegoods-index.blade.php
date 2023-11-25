<link rel="stylesheet" type="text/css" href="..\css\mobile.css">
<script src="https://serratus.github.io/quaggaJS/examples/js/quagga.min.js"></script>

<div class="max-w-10xl mx-auto">
    {{-- <div class="text-right m-2 p-2">
        <label class="text-sm font-bold text-gray-600 uppercase" style="float: left;">商品詳細検索</label>
        <input type="text" wire:model="search" id="search" class="border-gray-300 rounded-md" placeholder="キーワード" />
        <x-jet-button class="bg-blue-600" wire:click="showBookModal">項目レイアウト</x-jet-button>
        <x-jet-button class="bg-blue-600" wire:click="showBookModal">詳細検索</x-jet-button>
    </div> --}}
    <div>
        <p>商品検索</p>
        <table style="margin-left:3%;margin-right:3%;width: 94%;">
            <tr>
                <td style="width:30%">
                    <label class="text-sm font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">商品番号</label>
                </td>
                <td style="width:70%">
                    <input id="ProductNo" class="w-full p-3 text-gray-700 bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                    <button id="btn">カメラでバーコードを読み込む</button>
                    <div id="modal" class="modal">
                    <div id="interactive" class="viewport"></div>
                    <p class="modaltext">カメラにバーコードを写してください。</p>
                    <button id="closebtn">閉じる</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-sm font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">商品名</label>
                </td>
                <td>
                    <input class="w-full p-3  mt-2 text-gray-700 bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-sm font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">登録日</label>
                </td>
                <td>
                    <input class="w-full p-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        type="date">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr style="height:100px">
                <td colspan="2">
                    {{-- <x-jet-button class="bg-green-600" wire:click="showEditUserinfoModal({{ $userinfo->id }})">検索</x-jet-button> --}}
                    {{-- <x-jet-button class="bg-green-600 mt-2" style="width:100px;">検索</x-jet-button> --}}
                    {{-- <x-jet-button class="btn-primary" style="width: 150px;height:30px;" wire:click="showBookModal">　　　検索</x-jet-button> --}}
                    <div style="text-align: center;">
                        <x-jet-button class="btn-primary" style="width: 150px;height:40px;" >　　　検索</x-jet-button>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <table class="w-full divide-y divide-gray-200">
            {{-- <thead class="table-primary">
                <tr>
                <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;"></th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">商品番号</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">商品画像</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">カテゴリ</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">商品名</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">販売価格</th>
                    <!-- <th class="p-1 text-gray-500 text-left" style="font-size: 0.8rem;">店内カテゴリ</th> -->
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">主な在庫場所</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">ヤフオク！商品名</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">登録者</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">登録店舗</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">ヤフオク送料パターン</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">登録日</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">アクション</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;"></th>
                </tr>
            </thead> --}}
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($goods as $goodss)
                {{-- <tr class="border">
                    <td class="p-4 ext-wrap" style="font-size: 0.8rem;width:50px;" rowspan="2">
                        <img class="mr-3" style="width:100px;hight:100px" src="..\goods_img\{{ $goodss->goods_no }}\{{ $goodss->Product_image }}">
                    </td>
                    <td class="p-4 ext-wrap" style="font-size: 0.8rem;width:50px;">
                        {{ $goodss->goods_no }}<br/>
                        {{ $goodss->category_id }}<br/>
                        {!! nl2br($goodss->disp_item_nm) !!}<br/>
                        @if($goodss->Selling_price<>0)
                            {!! nl2br(number_format($goodss->Selling_price))."円" !!}
                        @endif
                        @if($goodss->Purchase_price<>0)
                            <br> (仕入： {!! number_format(nl2br($goodss->Purchase_price))."円" !!} )
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <x-jet-button class="bg-green-600" style="width: 100px;height:30px;text-align: center;" >編集</x-jet-button>
                    </td>
                </tr> --}}
                <tr class="border">
                    <td class="p-4 ext-wrap" style="font-size: 0.8rem;width:50px;">
                        <img class="mr-3" style="width:100px;hight:100px" src="..\goods_img\{{ $goodss->goods_no }}\{{ $goodss->Product_image }}">
                    </td>
                    <td class="p-4 ext-wrap" style="font-size: 0.8rem;width:50px;">
                        {{ $goodss->goods_no }}<br/>
                        {{ $goodss->category_id }}<br/>
                        {!! nl2br($goodss->disp_item_nm) !!}<br/>
                        @if($goodss->Selling_price<>0)
                            {!! nl2br(number_format($goodss->Selling_price))."円" !!}
                        @endif
                        @if($goodss->Purchase_price<>0)
                            <br> (仕入： {!! number_format(nl2br($goodss->Purchase_price))."円" !!} )
                        @endif
                        <br/>
                        <x-jet-button class="bg-green-600" style="width: 100px;height:30px;text-align: center;" >　編集</x-jet-button>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="m-2 p-2">{{ $goods->links() }}</div>
    </div>
    <x-jet-dialog-modal wire:model="liveModal">
            @if ($editWork)
                <x-slot name="title"><h2 class="text-green-600">編集</h2></x-slot>
            @else
                <x-slot name="title"><h2 class="text-blue-600">登録</h2></x-slot>
            @endif
            <x-slot name="content">

            @if (session()->has('message'))
                <h3 class="p-2 text-2xl text-green-600">{{ session('message') }}</h3>
            @endif
            <form enctype="multipart/form-data">

                <x-jet-label for="user_name" value="名前" />
                <input type="text" id="user_name" wire:model.lazy="user_name"
                class="block w-full bg-white border border-gray-400 rounded-md" />
                @error('user_name') <span class="error text-red-400">{{ $message }}</span> @enderror

                <x-jet-label for="authority" value="権限" />
                <input type="text" id="authority" wire:model.lazy="authority"
                class="block w-full bg-white border border-gray-400 rounded-md" />
                <select class="custom-select border-0 shadow-none" id="operation" wire:model="operation">
                        @foreach($authoritys as $authority)
                            <option style="text-align: left;" value="{{ $authority['id'] }}" {{ $authority['id'] == $id ? "selected" : "" }}>{{ $authority['authority_nm']}}</option>
                        @endforeach
                </select>

                @error('authority') <span class="error text-red-400">{{ $message }}</span> @enderror

                <x-jet-label for="affiliation" value="所属" />
                <input type="text" id="affiliation" wire:model.lazy="affiliation"
                class="block w-full bg-white border border-gray-400 rounded-md" />
                @error('affiliation') <span class="error text-red-400">{{ $message }}</span> @enderror

                <x-jet-label for="operation" value="稼働" />
                <div class="form-check form-check-inline">
                    <input type="radio" name="release" class="form-check-input" id="operation" value="1" {{ old ('release') == '1' ? 'checked' : '' }} checked>
                    <label for="operation1" class="form-check-label">ON</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="release" class="form-check-input" id="operation" value="0" {{ old ('release') == '0' ? 'checked' : '' }}>
                    <label for="operation2" class="form-check-label">OFF</label>
                </div>
                </label>
                @error('operation') <span class="error text-red-400">{{ $message }}</span> @enderror

                <x-jet-label for="loginid" value="ログインID" />
                <input type="text" id="loginid" wire:model.lazy="loginid"
                class="block w-full bg-white border border-gray-400 rounded-md" />
                @error('loginid') <span class="error text-red-400">{{ $message }}</span> @enderror

                <x-jet-label for="password" value="パスワード" />
                <input type="text" id="password" wire:model.lazy="password"
                class="block w-full bg-white border border-gray-400 rounded-md" />
                @error('password') <span class="error text-red-400">{{ $message }}</span> @enderror

                <x-jet-label for="email" value="E-Mail" />
                <input type="text" id="email" wire:model.lazy="email"
                class="block w-full bg-white border border-gray-400 rounded-md" />
                @error('email') <span class="error text-red-400">{{ $message }}</span> @enderror

            </form>

        </x-slot>
        <x-slot name="footer">
        @if ($editWork)
            <x-jet-button wire:click="updateUserinfo({{ $Id }})">編集実行</x-jet-button>
        @else
            <x-jet-button wire:click="userinfoPost">登録実行</x-jet-button>
        @endif
        </x-slot>
    </x-jet-dialog-modal>
</div>
<script type="text/javascript">

    const btn = document.getElementById('btn');
    const modal = document.getElementById('modal');
    const closebtn = document.getElementById('closebtn');

    closebtn.addEventListener('click', () => {
        modal.style.display = 'none';
        document.body.style.overflow = '';
    });

    btn.addEventListener('click', () => {
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
    Quagga.init(
        {
        inputStream: {
            type: 'LiveStream',
            constraints: {
            width: window.innerWidth
            },
        },
        decoder: {
            readers: [
            {
                format: 'ean_reader',
                config: {},
            },
            ],
        },
        },
        (err) => {
        if (!err) {
            Quagga.start();
        } else {
            modal.style.display = 'none';
            document.body.style.overflow = '';
            Quagga.stop();
            alert(
            'この機能を利用するには\nブラウザのカメラ利用を許可してください。'
            );
        }
        }
    );
    });

Quagga.onDetected((result) => {
  const code = result.codeResult.code;
  document.getElementById('ProductNo').value = code;
  modal.style.display = 'none';
  document.body.style.overflow = '';
  Quagga.stop();
});

</script>