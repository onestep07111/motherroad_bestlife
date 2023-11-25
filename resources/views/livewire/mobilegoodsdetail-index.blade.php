<link rel="stylesheet" type="text/css" href="..\css\mobile.css">

<div class="max-w-10xl mx-auto">
    {{-- <div class="text-right m-2 p-2">
        <label class="text-sm font-bold text-gray-600 uppercase" style="float: left;">商品詳細検索</label>
        <input type="text" wire:model="search" id="search" class="border-gray-300 rounded-md" placeholder="キーワード" />
        <x-jet-button class="bg-blue-600" wire:click="showBookModal">項目レイアウト</x-jet-button>
        <x-jet-button class="bg-blue-600" wire:click="showBookModal">詳細検索</x-jet-button>
    </div> --}}
    <div style="display: flex;width: 96%;overflow-x: scroll;">
        <img class="mr-3" style="width:100px;hight:100px" src="..\goods_img\10200347300\10200347300-1.jpg">
        <img class="mr-3" style="width:100px;hight:100px" src="..\goods_img\10200347300\10200347300-2.jpg">
        <img class="mr-3" style="width:100px;hight:100px" src="..\goods_img\10200347300\10200347300-3.jpg">
        <img class="mr-3" style="width:100px;hight:100px" src="..\goods_img\10200347300\10200347300-4.jpg">
    </div>
    <div>
        <table style="margin-left:2%;margin-right:2%;width: 96%;">
            <tr class="bg-silver">
                <td colspan="3" style="text-aline:center">
                    商品検索
                </td>
            </tr>
            <tr>
                <td style="width:30%">
                    <label class="text-sm font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">商品情報</label>
                </td>
                <td style="width:70%" colspan="2">
                    {{-- <input class="w-full p-3 text-gray-700 bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500" type="text">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror --}}
                    <input type="text" class="form-control" placeholder="">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">登録店舗</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">楽天配送</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">ヤフオク/非課税</label>
                </td>
                <td colspan="2">
                    <div class="toggle_button">
                        <input id="toggle1" type="checkbox"  placeholder="" class="toggle_input">
                        <label for="toggle1" class="toggle_label"/>
                    </div>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">値下げ対応</label>
                </td>
                <td colspan="2">
                    <div class="toggle_button">
                        <input id="toggle2" type="checkbox"  placeholder="" class="toggle_input">
                        <label for="toggle2" class="toggle_label"/>
                    </div>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">e-store出品商品</label>
                </td>
                <td colspan="2">
                    <div class="toggle_button">
                        <input id="toggle3" type="checkbox"  placeholder="" class="toggle_input">
                        <label for="toggle3" class="toggle_label"/>
                    </div>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">e-storeオークション形式</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">e-store開始価格</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="">
                </td>
                <td>
                    円
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">e-store最低落札価格</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="">
                </td>
                <td>
                    円
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">画像登録確認</label>
                </td>
                <td colspan="2">
                    <div class="toggle_button">
                        <input id="toggle4" type="checkbox"  placeholder="" class="toggle_input">
                        <label for="toggle4" class="toggle_label"/>
                    </div>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">アイテム</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">ブランド</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">型番</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">商品名</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">ヤフオク商品名</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">対象</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">生産国</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">製造年</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="">
                </td>
                <td>
                    年
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">販売元</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">シリアル</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">刻印</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">素材1</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">素材2</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">カラー</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">表記サイズ</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">品質表示</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">重量</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">おすすめポイント</label>
                </td>
                <td colspan="2">
                    <textarea class="form-control" placeholder=""></textarea    >
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">付属品</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">付属品その他</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">仕入価格</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    円
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">在庫数</label>
                </td>
                <td colspan="2">
                    <input type="text" class="form-control" placeholder="" disabled="false">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">販売価格</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    円
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">登録日</label>
                </td>
                <td colspan="2">
                    <input type="date" class="form-control" placeholder="">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">登録者</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">公開/非公開</label>
                </td>
                <td colspan="2">
                    <div class="toggle_button">
                        <input id="toggle5" type="checkbox"  placeholder="" class="toggle_input">
                        <label for="toggle5" class="toggle_label"/>
                    </div>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">ヤフオク出品形式</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">ヤフオク送料パターン</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">送料無料発送</label>
                </td>
                <td colspan="2">
                    <div class="toggle_button">
                        <input id="toggle6" type="checkbox"  placeholder="" class="toggle_input">
                        <label for="toggle6" class="toggle_label"/>
                    </div>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">着払い発送</label>
                </td>
                <td colspan="2">
                    <div class="toggle_button">
                        <input id="toggle7" type="checkbox"  placeholder="" class="toggle_input">
                        <label for="toggle7" class="toggle_label"/>
                    </div>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">酒販売注意事項</label>
                </td>
                <td colspan="2">
                    <div class="toggle_button">
                        <input id="toggle8" type="checkbox"  placeholder="" class="toggle_input">
                        <label for="toggle8" class="toggle_label"/>
                    </div>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr style="background-color: #c0c0c0">
                <td colspan="3" style="text-aline:center">
                    商品詳細
                </td>
            </tr>
            <tr style="background-color: #c0c0c0">
                <td colspan="3" style="text-aline:center">
                    出品詳細
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">ランク</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">備考欄</label>
                </td>
                <td colspan="2">
                    <textarea class="form-control" placeholder=""></textarea    >
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">外・表面</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">外・形状</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">角・縁</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">ハンドル-ストラップ</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">内側</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">金具部分</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">におい</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="text-xs font-bold text-gray-600 uppercase" style="float: left;margin-left:10px;">特記事項</label>
                </td>
                <td>
                    <input type="text" class="form-control" placeholder="" disabled="false">
                </td>
                <td>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">➡</button>
                </td>
            </tr>
        </table>
        <div class="sp-fixed" style="background-color: #808080">
                    {{-- <x-jet-button class="bg-green-600" wire:click="showEditUserinfoModal({{ $userinfo->id }})">検索</x-jet-button> --}}
                    {{-- <x-jet-button class="bg-green-600 mt-2" style="width:100px;">検索</x-jet-button> --}}
                    {{-- <x-jet-button class="btn-primary" style="width: 150px;height:30px;" wire:click="showBookModal">　　　検索</x-jet-button> --}}

            <div style="text-align: center;">
                <x-jet-button class="btn-primary" style="width: 150px;height:40px;" >　　　登録</x-jet-button>
            </div>
        </div>
    </div>



    {{-- <div>
        <table class="w-full divide-y divide-gray-200">
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($goods as $goodss)
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
    </div> --}}
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

