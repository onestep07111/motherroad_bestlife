
<form wire:submit.prevent="confirm">
@csrf
<div class="max-w-6xl mx-auto">
    <div>
            <div class="m-3">
                <div style="display:flex;align-items: center;">
                    <img class="mr-3" style="width:30px;hight:30px" src="..\img\title3.png">
                    特定商取引法
                </div>
            </div>
            @foreach($transactionLaws as $transactionLaw)
            <section>
            <table>    
            <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">ショップ名</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $transactionLaw->shop_nm }}">
                    @error('posts.shop_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror

                </td>
            </tr>

            <tr>
            <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">ショップ名(英語表記）</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $transactionLaw->shop_english_nm }}">
                    @error('posts.shop_english_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
            </tr>
                
            <tr>
            <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">運営責任者</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $transactionLaw->operation_administrator }}">
                    @error('posts.operation_administrator') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">運営責任者(英語表記）</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $transactionLaw->operation_english_nm }}">
                    @error('posts.operation_english_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">郵便番号</span>
                </th>
                <td class="border">
                    〒
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:80px;" type="text" value="{{ substr($transactionLaw->post_code,0,3) }}">
                    -    
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:80px;" type="text" value="{{ substr($transactionLaw->post_code,3,4) }}">
                    @error('posts.post_code') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">都道府県コード</span>
                </th>
                <!-- <td>
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $transactionLaw->prefectures }}">
                    @error('posts.prefectures') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                        <select class="form-select border-gray-200 " style="width: 150px;">
                            <option value="">選択してください</option>
                            <option value="1">北海道</option>
                            <option value="2">青森県</option>
                            <option value="3">岩手県</option>
                            <option value="4">宮城県</option>
                            <option value="5">秋田県</option>
                            <option value="6">山形県</option>
                            <option value="7">福島県</option>
                            <option value="8">茨城県</option>
                            <option value="9">栃木県</option>
                            <option value="10">群馬県</option>
                            <option value="11">埼玉県</option>
                            <option value="12">千葉県</option>
                            <option value="13">東京都</option>
                            <option value="14">神奈川県</option>
                            <option value="15">新潟県</option>
                            <option value="16">富山県</option>
                            <option value="17">石川県</option>
                            <option value="18">福井県</option>
                            <option value="19">山梨県</option>
                            <option value="20">長野県</option>
                            <option value="21">岐阜県</option>
                            <option value="22">静岡県</option>
                            <option value="23">愛知県</option>
                            <option value="24">三重県</option>
                            <option value="25">滋賀県</option>
                            <option value="26">京都府</option>
                            <option selected value="27">大阪府</option>
                            <option value="28">兵庫県</option>
                            <option value="29">奈良県</option>
                            <option value="30">和歌山県</option>
                            <option value="31">鳥取県</option>
                            <option value="32">島根県</option>
                            <option value="33">岡山県</option>
                            <option value="34">広島県</option>
                            <option value="35">山口県</option>
                            <option value="36">徳島県</option>
                            <option value="37">香川県</option>
                            <option value="38">愛媛県</option>
                            <option value="39">高知県</option>
                            <option value="40">福岡県</option>
                            <option value="41">佐賀県</option>
                            <option value="42">長崎県</option>
                            <option value="43">熊本県</option>
                            <option value="44">大分県</option>
                            <option value="45">宮崎県</option>
                            <option value="46">鹿児島県</option>
                            <option value="47">沖縄県</option>
                        </select>
                </td>

                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">住所１</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $transactionLaw->address1 }}">
                    @error('posts.address1') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">住所２</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $transactionLaw->address2 }}">
                    @error('posts.address2') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">住所(英語表記)１</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $transactionLaw->address1_english }}">
                    @error('posts.address1_english') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">住所(英語表記)２</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $transactionLaw->address2_english }}">
                    @error('posts.address2_english') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>

                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">電話１</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:80px;" type="text" value="{{ $transactionLaw->tel1 }}">
                    @error('posts.tel1') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:80px;" type="text" value="{{ $transactionLaw->tel2 }}">
                    @error('posts.tel1') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:80px;" type="text" value="{{ $transactionLaw->tel3 }}">
                    @error('posts.tel1') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>

                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">店舗営業時間</span>
                </th>
                <td class="border">
                <textarea class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" rows="5">{{ $transactionLaw->Store_business_hours }}</textarea>
                    @error('posts.Store_business_hours') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">営業許可免許</span>
                </th>
                <td class="border">
                <textarea class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" rows="5">{{ $transactionLaw->business_license }}</textarea>
                    @error('posts.business_license') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                </table>    
            </section>
            @endforeach
            <x-jet-button class="btn btn-primary btn-sm" style="float:right" wire:click="bookPost">登録実行</x-jet-button>
    </div>
</div>
</form>   
