<!-- jQuery, popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script><div class="max-w-10xl mx-auto">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- jQuery, popper.js, Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script type="text/javascript">
    window.onload = onLoad;

    function onLoad() {
        document.getElementById("panel1").hidden = false;
        document.getElementById("panel2").hidden = true;
        document.getElementById("panel3").hidden = true;
        document.getElementById("panel4").hidden = true;
        document.getElementById("panel5").hidden = true;
        document.getElementById('option15').disabled = true;
        let element = document.getElementById('option1');
        element.checked = true;
    }
  </script>
  <div class="text-right m-2 p-1">
    <div>
                <div style="display:flex;align-items: center;">
                    <img class="mr-3" style="width:30px;hight:30px" src="..\img\title3.png">
                    商品詳細検索
                </div>
            </div>
        <!-- <x-jet-button class="btn-primary" wire:click="showEditgoodsModal">商品番号検索</x-jet-button> -->

        <x-jet-button class="btn-primary">項目レイアウト</x-jet-button>
        <x-jet-button class="btn-primary">詳細検索</x-jet-button>
    </div>
    <div class="text-right m-1 p-2">
        <table style="float: left;">
         <tr>
         <td>
            <!-- <p  class="text-sm font-bold text-gray-600 uppercase" style="float: left;">商品番号</p> -->
            <textarea  class="w-full mt-2 bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    rows=10 cols=40 placeholder="カンマ区切り、改行で複数検索可。複数検索の場合は完全一致検索となります" autofocus></textarea>
            </td>
        </tr>
        </table>
    </div>
    <div>
    <section class="text-left m-1 p-1">
    <table>
        <tr>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">商品名</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:800px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">在庫数</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:150px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:150px;height:25px;" type="text">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <td class="border">
                    <div class="form-check form-switch" style="font-size: 0.8rem;width:150px;margin-left:30px">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="flexSwitchCheckDefault" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault">AND</label>
                        <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="flexSwitchCheckChecked" style="margin-left:20px" >
                        <label class="form-check-label" style="margin-left:60px" for="flexSwitchCheckChecked">OR</label>
                    </div>
                </td>
        </tr>

    </table>
    <table>
        <tr>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">ブランド</span>
                </th>
                <td class="border">
                    <input class= "bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:400px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">仕入価格</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:200px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                        <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:200px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">販売価格</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:150px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                        <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:150px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
        </tr>
    </table>
    <table>
        <tr>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">店内カテゴリ</span>
                </th>
                <td class="border">
                    <input class= "bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:400px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">登録日</span>
                </th>
                <td class="border">
                    <div class="input-daterange input-group" id="datepicker">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="font-size: 0.8rem;height:25px;">開始日付</span>
                        </div>
                        <input type="text" class="input-sm form-control" style="font-size: 0.8rem;height:25px;" name="from">

                        <div class="input-group-append">
                            <span class="input-group-text" style="font-size: 0.8rem;height:25px;">終了日付</span>
                        </div>
                        <input type="text" class="input-sm form-control" style="font-size: 0.8rem;height:25px;" name="to">
                    </div>
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">カテゴリ</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:400px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                    </td>
                </td>
        </tr>
    </table>
    <table>
        <tr>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">ヤフオク！商品名</span>
                </th>
                <td class="border">
                    <input class= "bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:400px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">登録者</span>
                </th>
                <td class="border">
                    <select class="form-select border-gray-200 " style="width:150px;height:25px;font-size: 0.6rem;">
                        <option selected>選択してください</option>
                        <option value="1">テスト　　太郎</option>
                    </select>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">在庫場所・棚</span>
                </th>
                <td class="border">
                    <select class="form-select border-gray-200 " style="width:150px;height:25px;font-size: 0.6rem;">
                        <option selected>選択してください</option>
                        <option value="1">【SOHO_001】SOHO_001</option>
                    </select>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">ランク</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:400px;height:25px;" type="text">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
        </tr>
    </table>
    <table>
        <tr>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">登録店舗</span>
                </th>
                <td class="border">
                <select class="form-select border-gray-200 " style="width:400px;height:25px;font-size: 0.6rem;">
                        <option selected>選択してください</option>
                        <option value="1">あべのキューズモール店</option>
                    </select>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">在庫場所・棚</span>
                </th>
                <td class="border">
                    <select class="form-select border-gray-200 " style="width:400px;height:25px;font-size: 0.6rem;">
                        <option selected>選択してください</option>
                        <option value="1">【SOHO_001】SOHO_001</option>
                    </select>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">ランク</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    style="width:400px;height:25px;" type="text">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
        </tr>
    </table>
    <table>
        <tr>
                <th class="border table-primary" style="width:150px;height:25px;">
                <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">受注日</span>
                </th>
                <td class="border">
                    <div class="input-daterange input-group" id="datepicker">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="font-size: 0.8rem;height:25px;">開始日付</span>
                        </div>
                        <input type="text" class="input-sm form-control" style="font-size: 0.8rem;height:25px;width:125px;" name="from">

                        <div class="input-group-append">
                            <span class="input-group-text" style="font-size: 0.8rem;height:25px;">終了日付</span>
                        </div>
                        <input type="text" class="input-sm form-control" style="font-size: 0.8rem;height:25px;width:125px;" name="to">
                    </div>
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">入金日</span>
                </th>
                <td class="border">
                    <div class="input-daterange input-group" id="datepicker">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="font-size: 0.8rem;height:25px;">開始日付</span>
                        </div>
                        <input type="text" class="input-sm form-control" style="font-size: 0.8rem;height:25px;width:125px;" name="from">

                        <div class="input-group-append">
                            <span class="input-group-text" style="font-size: 0.8rem;height:25px;">終了日付</span>
                        </div>
                        <input type="text" class="input-sm form-control" style="font-size: 0.8rem;height:25px;width:125px;" name="to">
                    </div>
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">変更日時</span>
                </th>
                <td class="border">
                    <div class="input-daterange input-group" id="datepicker">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="font-size: 0.8rem;height:25px;">開始日付</span>
                        </div>
                        <input type="text" class="input-sm form-control" style="font-size: 0.8rem;height:25px;width:125px;" name="from">

                        <div class="input-group-append">
                            <span class="input-group-text" style="font-size: 0.8rem;height:25px;">終了日付</span>
                        </div>
                        <input type="text" class="input-sm form-control" style="font-size: 0.8rem;height:25px;width:125px;" name="to">
                    </div>
                </td>
        </tr>
    </table>
    <table>
        <tr>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">入札あり・なし</span>
                </th>
                <td class="border">
                    <select class="form-select border-gray-200 " style="font-size: 0.6rem;height:25px;">
                        <option selected>選択してください</option>
                        <option value="1">入札あり</option>
                        <option value="2">入札なし</option>
                    </select>
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">出品日数</span>
                </th>
                <td class="border">
                <input class=" border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    type="text" style="font-size: 0.8rem;height:25px;">
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
        </tr>
    </table>
    <table>
        <tr>
                <th class="border table-primary" style="width:150px;height:25px;">
                <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">販売モール</span>
                </th>
                <td class="border">
                    <select class="form-select border-gray-200 " style="font-size: 0.6rem;height:25px;">>
                        <option selected>選択してください</option>
                        <option value="1">ヤフオク店</option>
                    </select>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">着払い発送</span>
                </th>
                <td class="border">
                    <div class="form-check form-switch" style="font-size: 0.8rem;width:200px;margin-left:60px">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">有効</label>
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="flexSwitchCheckChecked" style="margin-left:20px" >
                        <label class="form-check-label" style="margin-left:60px" for="flexSwitchCheckChecked">無効</label>
                    </div>
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">送料無料発送</span>
                </th>
                <td class="border">
                    <div class="form-check form-switch" style="font-size: 0.8rem;width:200px;margin-left:60px">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">有効</label>
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="flexSwitchCheckChecked" style="margin-left:20px" >
                        <label class="form-check-label" style="margin-left:60px" for="flexSwitchCheckChecked">無効</label>
                    </div>
                </td>
                <th class="border table-primary" style="width:150px;height:25px;">
                <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">酒販売注意事項</span>
                </th>
                <td class="border">
                    <div class="form-check form-switch" style="font-size: 0.8rem;width:200px;margin-left:60px">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">有効</label>
                        <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="flexSwitchCheckChecked" style="margin-left:20px" >
                        <label class="form-check-label" style="margin-left:60px" for="flexSwitchCheckChecked">無効</label>
                    </div>
                </td>

            </tr>
    </table>
    </section>
    </div>
    <div class="m-2 table-primary fs-6">
        <table class="w-full divide-y divide-gray-200">
            <tr>
            <td style="width:150px">
                <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">検索結果表示件数</span>
            </td>
            <td style="width:100px">
            <select class="form-select border-gray-200 "style="font-size: 0.6rem;width: 80px;height:25px;">
                    <option value="1">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
                    <option value="150">150</option>
                    <option value="200">200</option>
                    <option value="300">300</option>
                    <option value="400">400</option>
                </select>
            </td>
            <td>
                 <x-jet-button class="btn-primary" style="width: 150px;height:30px;" wire:click="showBookModal">　　　検索</x-jet-button>
            </td>
            <td>
                    <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                    <label class="btn btn-primary"  style="font-size: 0.8rem;height:30px;" for="option1">商品一覧</label>

                    <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options" id="option2" autocomplete="off">
                    <label class="btn btn-primary"  style="font-size: 0.8rem;height:30px;" for="option2">出品状況</label>
            </td>
            <td style="float:right;">
                <!-- {{ $goods->links('vendor.pagination.bootstrap-4') }} -->
                {{ $goods->links() }}
            <td>
        </tr>
        </table>

    </div>
    <div class="m-2 table-primary fs-6">

        <table class="w-full divide-y divide-gray-200">
            <tr>
                <td>
                        <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options3" id="option11" autocomplete="off" checked>
                        <label class="btn btn-primary"  style="font-size: 0.8rem;height:30px;" for="option11">出品セットダウンロード</label>

                        <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options3" id="option12" autocomplete="off">
                        <label class="btn btn-primary"  style="font-size: 0.8rem;height:30px;" for="option12">一括出品</label>

                        <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options3" id="option13" autocomplete="off">
                        <label class="btn btn-primary"  style="font-size: 0.8rem;height:30px;" for="option13">一括出品解除</label>

                        <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options3" id="option14" autocomplete="off">
                        <label class="btn btn-primary"  style="font-size: 0.8rem;height:30px;" for="option14">商品データ</label>

                        <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options3" id="option15" autocomplete="off">
                        <label class="btn btn-primary"  style="font-size: 0.8rem;height:30px;" for="option15">出品状況</label>
                    </td>
            </tr>
        </table>
    </div>

    <!-- パネル関係 -->
    <div hidden class="m-2 table-white fs-6" style="font-size: 0.8rem;height:33px;" id="panel1">
        <table class="w-full divide-y divide-gray-200">
        <tr>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">競リナビヤフオク</x-jet-button>
                </td>
                <td>
        </tr>
        </table>

    </div>
    <div hidden class="m-2 table-white fs-6" style="font-size: 0.8rem;height:33px;" id="panel2">
        <table class="w-full divide-y divide-gray-200">
        <tr>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">競リナビヤフオク</x-jet-button>
                </td>
                <td>
        </tr>
        </table>

    </div>
    <div hidden class="m-2 table-white fs-6" style="font-size: 0.8rem;height:33px;" id="panel3">
        <table class="w-full divide-y divide-gray-200">
        <tr>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">競リナビヤフオク</x-jet-button>
                </td>
                <td>
        </tr>
        </table>

    </div>
    <div hidden class="m-2 table-white fs-6" style="font-size: 0.8rem;height:33px;" id="panel4">
        <table class="w-full divide-y divide-gray-200">
        <tr>
        <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">全項目エクセルデータ</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">全項目CSVデータ</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">商品画像</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">在庫場所移動</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">e-storeステータス変更用></x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">出品数集計用</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">SFステータス変更用</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">e-store読み込み用</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">[BENOS]新規出品</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">[BENOS]情報更新</x-jet-button>
                </td>
            </tr>
        </table>

    </div>
    <div hidden class="m-2 table-white fs-6" style="font-size: 0.8rem;height:33px;" id="panel5">
        <table class="w-full divide-y divide-gray-200">
        <tr>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">出品状況</x-jet-button>
                </td>
                <td>
        </tr>
        </table>

    </div>

    <!-- パネル関係 -->




    <div class="m-2 table-white fs-6" style="font-size: 0.8rem;height:33px;">
        <table class="w-full divide-y divide-gray-200">
        <tr>
            <div class="bg-white border">
                <td>
                    <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 1.0rem;height:25px;">商品検索結果一覧</span>
                </td>
            </div>
            <div class="bg-white border">
                <td>
                    <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">折り返し</span>
                    <input type="radio" style="font-size: 0.8rem;height:25px;" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                    <label class="btn btn-primary"  style="font-size: 0.8rem;height:25px;" for="option1">する</label>

                    <input type="radio" style="font-size: 0.8rem;height:25px;" class="btn-check" name="options" id="option2" autocomplete="off">
                    <label class="btn btn-primary"  style="font-size: 0.8rem;height:25px;" for="option2">しない</label>
                </td>
            </div>
            <div class="bg-white border">
                <td>
                    <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">文字サイズ</span>
                    <input type="radio" style="font-size: 0.8rem;height:25px;" class="btn-check" name="options1" id="option3" autocomplete="off" checked>
                    <label class="btn btn-primary" style="font-size: 0.6rem;height:25px;" for="option3">大</label>

                    <input type="radio" style="font-size: 0.8rem;height:25px;" class="btn-check" name="options1" id="option4" autocomplete="off">
                    <label class="btn btn-primary"  style="font-size: 0.6rem;height:25px;" for="option4">中</label>

                    <input type="radio" class="btn-check" name="options1" id="option5" autocomplete="off">
                    <label class="btn btn-primary"  style="font-size: 0.6rem;height:25px;" for="option5">小</label>
                </td>
            </div>
            <div class="bg-white border">
                <td>
                <x-jet-button class="btn-primary" style="font-size: 0.6rem;height:25px;" wire:click="showBookModal">印刷</x-jet-button>
                </td>
            </div>
            <div class="bg-white border">
                <td>
                    <!-- <i class="far fa-check-square"></i> -->
                    <i class="far fa-aperture"></i>
                    <x-jet-button style="font-size: 0.8rem;height:25px;" class="btn-primary" wire:click="showBookModal">列の編集</x-jet-button>
                </td>
            </div>
        </tr>
        </table>

    </div>
    <div>
        <table class="w-full divide-y divide-gray-200">
            <thead class="table-primary">
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
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;"></th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;"></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($goods as $goodss)
                <tr>
                    <td class="p-4 ext-wrap border" style="font-size: 0.8rem;width:50px;">
                        <input type="chekcbox" id="delete_flg" style="font-size: 0.8rem;width:20px;" class="block w-full bg-white border border-gray-400 rounded-md" />
                    </td>
                    <td class="p-4 ext-wrap border" style="font-size: 0.8rem;width:50px;">{{ $goodss->goods_no }}</td>
                    <td class="p-4 ext-wrapp border" style="font-size: 0.8rem;width:200px;">
                        <img class="mr-3" style="width:100px;hight:200px" src="..\goods_img\{{ $goodss->goods_no }}\{{ $goodss->Product_image }}">
                    </td>
                    <td class="p-4 ext-wrap border" style="font-size: 0.8rem;width:200px;">{{ $goodss->category_id }}</td>
                    <td class="p-4 ext-wrap border" style="font-size: 0.8rem;width:200px;">{!! nl2br($goodss->disp_item_nm) !!}</td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:250px;">
                        @if($goodss->Selling_price<>0)
                            {!! nl2br(number_format($goodss->Selling_price))."円" !!} 
                        @endif
                        @if($goodss->Purchase_price<>0)
                            <br> (仕入： {!! number_format(nl2br($goodss->Purchase_price))."円" !!} )
                        @endif
                    </td>
                    <!-- <td class="p-4 ext-wrap" style="font-size: 0.8rem;"></td> -->
                    <td class="p-4 ext-wrap border" style="font-size: 0.8rem;width:200px;">{!! nl2br($goodss->Stock_location ) !!}<br>{!!nl2br($goodss->Stock_location2) !!}</td>
                    <td class="p-4 text-wrap border " style="font-size: 0.8rem;width:500px;">{!! nl2br($goodss->yahoo_goods_nm) !!}</td>
                    <td class="p-4 ext-wrap border" style="font-size: 0.8rem;width:150px;">{!! nl2br($goodss->registered_person) !!}</td>
                    <td class="p-4 ext-wrap border" style="font-size: 0.8rem;width:150px;">{!! nl2br($goodss->registered_store) !!}</td>
                    <td class="p-4 ewhitespace-nowrap border" style="font-size: 0.8rem;width:200px;">{!! nl2br($goodss->yahoo_shipping_pattern) !!}</td>
                    <td class="p-4 ext-wrap border" style="font-size: 0.8rem;">{!! nl2br($goodss->registration_date) !!}</td>
                    <td class="p-4 text-right text-sm border" style="font-size: 0.8rem;width:100px;" >
                        <x-jet-button class="bg-green-600" wire:click="showEditgoodsModal({{ $goodss->goods_no }})" style="font-size: 0.8rem;width:80px;">編集</x-jet-button>
                    </td>
                    <td class="p-4 text-right text-sm border" style="font-size: 0.8rem;width:100px;" >
                        <x-jet-button class="bg-green-600" wire:click="showEditgoodsModal({{ $goodss->goods_no }})" style="font-size: 0.8rem;width:90px;">Prev</x-jet-button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="m-2 p-2">{{ $goods->links() }}</div>
    </div>
    <x-jet-dialog-modal wire:model="liveModal">
            @if ($editWork)
                <x-slot name="title"><h2 class="text-green-600"></h2></x-slot>
            @else
                <x-slot name="title"><h2 class="text-blue-600"></h2></x-slot>
            @endif
            <x-slot name="content">

            @if (session()->has('message'))
                <h3 class="p-2 text-2xl text-green-600">{{ session('message') }}</h3>
            @endif
            <form enctype="multipart/form-data">

                <p  class="text-sm font-bold text-gray-600 uppercase" style="float: left;">商品番号</p>
                <textarea  class="w-full p-3 mt-2 bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        rows=15 cols=40 placeholder="カンマ区切り、改行で複数検索可。複数検索の場合は完全一致検索となります" autofocus></textarea>
    
            </form>

            </x-slot>
        <x-slot name="footer">
        @if ($editWork)
            <x-jet-button wire:click="updateUserinfo({{ $Id }})">検索実行</x-jet-button>
        @else
            <x-jet-button wire:click="userinfoPost">検索実行</x-jet-button>
        @endif        
        </x-slot>
    </x-jet-dialog-modal>
</div>
  <!-- bootstrap-datepicker -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ja.min.js"></script>

    <!-- bootstrap-datepickerの設定 -->
    <script>
      $('.input-daterange').datepicker({
        language:'ja', // 日本語化
        format: 'yyyy/mm/dd', // 日付表示をyyyy/mm/ddにフォーマット
      })
      .on({
        changeDate: function() {
          // datepickerの日付を取得
          console.log('開始日付 :', $('input[name="from"]').val() );  // 開始日付を取得
          console.log('終了日付 :', $('input[name="to"]').val() );    // 終了日付を取得
        }
      });
    </script>
    <script>
            document.getElementById("option1").addEventListener(
            "click",
            () => {
                document.getElementById("panel1").hidden = false;
                document.getElementById("panel2").hidden = true;
                document.getElementById("panel3").hidden = true;
                document.getElementById("panel4").hidden = true;
                document.getElementById("panel5").hidden = true;
                document.getElementById('option15').disabled = true;
            },
            false,
            );
            document.getElementById("option2").addEventListener(
            "click",
            () => {
                document.getElementById("panel1").hidden = false;
                document.getElementById("panel2").hidden = true;
                document.getElementById("panel3").hidden = true;
                document.getElementById("panel4").hidden = true;
                document.getElementById("panel5").hidden = true;
                document.getElementById('option15').disabled = false;
            },
            false,
            );

            document.getElementById("option11").addEventListener(
            "click",
            () => {
                document.getElementById("panel1").hidden = false;
                document.getElementById("panel2").hidden = true;
                document.getElementById("panel3").hidden = true;
                document.getElementById("panel4").hidden = true;
                document.getElementById("panel5").hidden = true;
            },
            false,
            );
            document.getElementById("option12").addEventListener(
            "click",
            () => {
                document.getElementById("panel1").hidden = true;
                document.getElementById("panel2").hidden = false;
                document.getElementById("panel3").hidden = true;
                document.getElementById("panel4").hidden = true;
                document.getElementById("panel5").hidden = true;
            },
            false,
            );
            document.getElementById("option13").addEventListener(
            "click",
            () => {
                document.getElementById("panel1").hidden = true;
                document.getElementById("panel2").hidden = true;
                document.getElementById("panel3").hidden = false;
                document.getElementById("panel4").hidden = true;
                document.getElementById("panel5").hidden = true;
            },
            false,
            );
            document.getElementById("option14").addEventListener(
            "click",
            () => {
                document.getElementById("panel1").hidden = true;
                document.getElementById("panel2").hidden = true;
                document.getElementById("panel3").hidden = true;
                document.getElementById("panel4").hidden = false;
                document.getElementById("panel5").hidden = true;
            },
            false,
            );
            document.getElementById("option15").addEventListener(
            "click",
            () => {
                document.getElementById("panel1").hidden = true;
                document.getElementById("panel2").hidden = true;
                document.getElementById("panel3").hidden = true;
                document.getElementById("panel4").hidden = true;
                document.getElementById("panel5").hidden = false;
            },
            false,
            );
    </script>
