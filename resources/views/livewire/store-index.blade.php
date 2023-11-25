<form wire:submit.prevent="confirm">
@csrf
<div class="max-w-6xl mx-auto">
    <div>
            <!-- <span class="text-sm font-bold text-gray-600 uppercase">モール設定(競リナビヤフオク)</span> -->
            <div class="m-3">
                <div style="display:flex;align-items: center;">
                    <img class="mr-3" style="width:30px;hight:30px" src="..\img\title3.png">
                    モール設定(競リナビヤフオク)
                </div>
            </div>
            @foreach($stores as $store)
            <section>
            <table>    
            <tr>
            <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">店舗名</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->store_nm }}">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
            <tr>
            <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">店舗種別</span>
                </th>
                <!-- <td>
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->store_type }}">
                    @error('posts.store_type') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                        <select class="form-select border-gray-200 " style="width:250px">
                            <option selected value="1">競リナビヤフオク</option>
                        </select>
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">店舗別販売価格マスタID</span>
                </th>
                <!-- <td>
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->store_master_id }}">
                    @error('posts.store_master_id') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                        <select class="form-select border-gray-200 " style="width:250px">
                            <option selected value="">ヤフオク｜価格</option>
                        </select>
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">メール送信時のメールアカウント</span>
                </th>
                <!-- <td>
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->mail_send_acount }}">
                    @error('posts.mail_send_acount') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                        <select class="form-select border-gray-200 " style="width:250px">
                            <option value="">選択してください</option>
                            <option selected value="1">ベスオク</option>
                            <option value="2">楽天</option>
                        </select>
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">商品の消費税設定</span>
                </th>
                <!-- <td>
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->tax_kbn }}">
                    @error('posts.tax_kbn') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                        <select class="form-select border-gray-200 " style="width: 15px;">
                            <option value="">選択してください</option>
                            <option selected value="1">消費税込</option>
                            <option value="2">消費税別</option>
                        </select>
                </td>
            </tr>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">モール上の注文データを連動させる</span>
                </th>
                <!-- <td>
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->tax_kbn }}">
                    @error('posts.tax_kbn') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    type="checkbox" checked>
                    @error('posts.auction_end_relisting') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">ビジネスマネージャーID</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->business_manager_id }}">
                    @error('posts.business_manager_id') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">ビジネスマネージャーパスワード</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->business_manager_password }}">
                    @error('posts.business_manager_password') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">送信エラー受ヤフーショッピング用Yahoo!ID付</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->yahoo_id }}">
                    @error('posts.yahoo_id') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">ヤフーショッピング用Yahoo!パスワード</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->yahoo_password }}">
                    @error('posts.yahoo_password') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">公開鍵</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->public_key }}">
                    @error('posts.public_key') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">公開鍵バージョン</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->public_key_version }}">
                    @error('posts.public_key_version') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>

                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">ヤフーショッピング用リフレッシュトークン	</span>
                </th>
                <td class="border">
                <textarea class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" rows="5" cols="500">{{ $store->yahoo_token }}</textarea>
                    @error('posts.yahoo_token') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>

                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">ストアID</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->store_id }}">
                    @error('posts.store_id') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">ヤフオク用画像ZIPファイルの最大サイズ</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->zip_size }}">
                    @error('posts.zip_size') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">入札通知先メールアドレス</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->bid_notification_email }}">
                    @error('posts.bid_notification_email') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">入札で在庫連動</span>
                </th>
                <!-- <td>
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->bid_inventory }}">
                    @error('posts.bid_inventory') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    type="checkbox" checked>
                    @error('posts.auction_end_relisting') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">自動再出品時の終了日</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->auto_relisting_enddate }}">
                    @error('posts.auto_relisting_enddate') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">オークション終了時に自動で再出品する</span>
                </th>
                <!-- <td>
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->auction_end_relisting }}">
                    @error('posts.auction_end_relisting') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    type="checkbox" checked>
                    @error('posts.auction_end_relisting') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>

                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">画像結合をする/しない</span>
                </th>
                <!-- <td>
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->image_join }}">
                    @error('posts.image_join') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                        <select class="form-select border-gray-200 " style="width:100px">
                            <option selected value="1">する</option>
                            <option value="2">しない</option>
                        </select>
                </td>
            </tr>

                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">最大画像登録枚数</span>
                </th>
                <!-- <td>
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->max_image_sheets }}">
                    @error('posts.max_image_sheets') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                        <select class="form-select border-gray-200 " style="width:100px">
                            <option selected value="1">1枚</option>
                            <option value="2">2枚</option>
                            <option value="3">3枚</option>
                            <option value="4">4枚</option>
                            <option value="5">5枚</option>
                            <option value="6">6枚</option>
                            <option value="7">7枚</option>
                            <option value="8">8枚</option>
                            <option value="9">9枚</option>
                            <option value="10">10枚</option>
                            <option value="11">11枚</option>
                            <option value="12">12枚</option>
                            <option value="13">13枚</option>
                            <option value="14">14枚</option>
                            <option value="15">15枚</option>
                            <option value="16">16枚</option>
                            <option value="17">17枚</option>
                            <option value="18">18枚</option>
                            <option value="19">19枚</option>
                            <option value="20">20枚</option>
                        </select>
                </td>
            </tr>

                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">最大画像結合枚数</span>
                </th>
                <!-- <td>
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->max_image_join }}">
                    @error('posts.max_image_join') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                        <select class="form-select border-gray-200 " style="width:180px">
                            <option selected value="4">4枚(縦2*横2)</option>
                            <option value="6">6枚(縦3*横2)</option>
                            <option value="9">9枚(縦3*横3)</option>
                        </select>
                </td>
            </tr>

                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">対応するマスタ列</span>
                </th>
                <!-- <td> -->
                <!-- <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $store->master_column }}">
                    @error('posts.master_column') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                        <select class="form-select border-gray-200 " style="width:120px">
                            <option selected value="1">表記1</option>
                            <option value="2">表記2</option>
                            <option value="3">表記3</option>
                            <option value="4">表記4</option>
                            <option value="5">表記5</option>
                            <option value="6">表記6</option>
                            <option value="7">表記7</option>
                            <option value="8">表記8</option>
                            <option value="9">表記9</option>
                            <option value="10">表記10</option>
                            <option value="11">表記11</option>
                            <option value="12">表記12</option>
                            <option value="13">表記13</option>
                            <option value="14">表記14</option>
                            <option value="15">表記15</option>
                            <option value="16">表記16</option>
                            <option value="17">表記17</option>
                            <option value="18">表記18</option>
                            <option value="19">表記19</option>
                            <option value="20">表記20</option>
                        </select>
                </td>
            </tr>

                </table>    
            </section>
            @endforeach
            <x-jet-button class="btn btn-primary btn-sm" style="float:right" wire:click="bookPost">登録実行</x-jet-button>
    </div>
</div>
</form>   
