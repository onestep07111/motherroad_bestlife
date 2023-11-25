<form wire:submit.prevent="confirm">
@csrf
<div class="max-w-6xl mx-auto">
    <div>
            <div class="m-3">
                <div style="display:flex;align-items: center;">
                    <img class="mr-3" style="width:30px;hight:30px" src="..\img\title3.png">
                    会社設定
                </div>
            </div>
            @foreach($companys as $company)
            <section>
            <table>    
            <tr>
            <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">会社名（必須）</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->company_nm }}">
                    @error('posts.company_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror

                </td>
            </tr>

            <tr>
            <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">会社ふりがな名（必須）</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->company_kana_nm }}">
                    @error('posts.company_kana_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror

                <tr>
                </td>
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">会社英語表記（必須）</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->company_english_nm }}">
                    @error('posts.company_english_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror

                </td>

                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">管理責任者</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->chief_administrator }}">
                    @error('posts.chief_administrator') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">商品注文受付メールアドレス</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->order_reception_email }}">
                    @error('posts.order_reception_email') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">問い合わせ受付メールアドレス</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->chief_adminiaddress_inquiries_emailstrator }}">
                    @error('posts.address_inquiries_email') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">メール送信元</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->source_email }}">
                    @error('posts.source_email') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">送信エラー受付</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->send_error_reception }}">
                    @error('posts.send_error_reception') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">適格請求書登録番号</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->bill_registration_number }}"">
                    @error('posts.bill_registration_number') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">定休日</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->regular_holiday }}">
                    @error('posts.regular_holiday') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">消費税率</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:50px;" type="text" value="{{ $company->tax_rate }}">%
                    @error('posts.tax_rate') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>

                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">課税規則</span>
                </th>
                <!-- <td> -->
                <!-- <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->taxation_rules }}">
                    @error('posts.taxation_rules') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td> -->
                <td class="border">
                        <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                         id="sun" type="checkbox" checked>日
                        <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                         id="mon" type="checkbox" >月
                        <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                         id="thu" type="checkbox" >火
                        <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                         id="wed" type="checkbox" >水
                        <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                         id="the" type="checkbox" >木
                        <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                         id="fry" type="checkbox" >金
                        <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                         id="sat" type="checkbox" checked>土
                </td>
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">送料無料条件</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:100px;" type="text" value="{{ $company->free_shipping_conditions }}">円以上購入時無料
                    @error('posts.free_shipping_conditions') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">EMSID</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->ems_id }}">
                    @error('posts.ems_id') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">EMSIPASSWORD</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->ems_password }}">
                    @error('posts.ems_password') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">XML Service Site ID</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->xml_Service_Site_ID }}">
                    @error('posts.xml_Service_Site_ID') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">XML Service Site ID</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->xml_Service_Password }}">
                    @error('posts.xml_Service_Password') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                
                <tr>
                <th class="border table-primary">
                <span class="text-sm font-bold text-gray-600 uppercase">DHL 輸出用アカウント番号</span>
                </th>
                <td class="border">
                <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:800px;" type="text" value="{{ $company->dhl_export_account }}">
                    @error('posts.dhl_export_account') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>

                </table>    
            </section>
            <x-jet-button class="btn btn-primary btn-sm" style="float:right" wire:click="bookPost">登録実行</x-jet-button>
            @endforeach
    </div>
</div>
</form>   
