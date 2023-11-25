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

    }
  </script>

<div class="max-w-10xl mx-auto">
    <div class="text-right m-2 p-2">
        
        <div style="display:flex;align-items: center;">
                    <img class="mr-3" style="width:30px;hight:30px" src="..\img\title3.png">
                    注文一覧
                    </div>
        <!-- <x-jet-button class="btn-success" wire:click="showBookModal">商品番号検索</x-jet-button> -->
        <x-jet-button class="btn-success" wire:click="showBookModal">項目レイアウト</x-jet-button>
        <x-jet-button class="btn-success" wire:click="showBookModal">詳細検索</x-jet-button>
    </div>
    <div class="m-2 table-secondary fs-6">
    <table>
        <tr>
            <td>
            <label style="font-size: 0.8rem;height:30px;">★</label>
            </td>
            <td>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option01" autocomplete="off" checked>
            <label class="btn btn-light border-spacing-1 border "  style="font-size: 0.8rem;height:30px;" for="option01">新規</label>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option01" autocomplete="off" checked>
            </td>
            <td>
            <label class="btn btn-light border-spacing-1"  style="font-size: 0.8rem;height:30px;" for="option01">1件</label>
            </td>
            <td>
            <label style="font-size: 0.8rem;height:30px;">★</label>
            </td>

            <td>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option02" autocomplete="off">
            <label class="btn btn-light"  style="font-size: 0.8rem;height:30px;" for="option02">入金待ち</label>
            </td>
            <td>
            <label class="btn btn-light border-spacing-1 border"  style="font-size: 0.8rem;height:30px;" for="option01">0件</label>
            </td>
            <td>
            <label style="font-size: 0.8rem;height:30px;">★</label>
            </td>

            <td>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option03" autocomplete="off">
            <label class="btn btn-light"  style="font-size: 0.8rem;height:30px;" for="option03">不足あり</label>
            </td>
            <td>
            <label class="btn btn-light border-spacing-1 border"  style="font-size: 0.8rem;height:30px;" for="option01">0件</label>
            </td>
            <td>
            <label style="font-size: 0.8rem;height:30px;">★</label>
            </td>

            <td>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option04" autocomplete="off">
            <label class="btn btn-light"  style="font-size: 0.8rem;height:30px;" for="option04">キャンセル案内</label>
            </td>
            <td>
            <label class="btn btn-light border-spacing-1 border"  style="font-size: 0.8rem;height:30px;" for="option01">0件</label>
            </td>
            <td>
            <label style="font-size: 0.8rem;height:30px;">★</label>
            </td>

            <td>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option05" autocomplete="off">
            <label class="btn btn-light"  style="font-size: 0.8rem;height:30px;" for="option05">期限切れ延長</label>
            </td>
            <td>
            <label class="btn btn-light border-spacing-1 border"  style="font-size: 0.8rem;height:30px;" for="option01">0件</label>
            </td>
            <td>
            <label style="font-size: 0.8rem;height:30px;">★</label>
            </td>

            <td>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option06" autocomplete="off">
            <label class="btn btn-light"  style="font-size: 0.8rem;height:30px;" for="option06">入金済　明日以降発</label>
            </td>
            <td>
            <label class="btn btn-light border-spacing-1 border"  style="font-size: 0.8rem;height:30px;" for="option01">0件</label>
            </td>
            <td>
            <label style="font-size: 0.8rem;height:30px;">★</label>
            </td>

            <td>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option07" autocomplete="off">
            <label class="btn btn-light"  style="font-size: 0.8rem;height:30px;" for="option07">入金済み</label>
            </td>
            <td>
            <label class="btn btn-light border-spacing-1 border"  style="font-size: 0.8rem;height:30px;" for="option01">3件</label>
            </td>
            <td>
            <label style="font-size: 0.8rem;height:30px;">★</label>
            </td>

            <td>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option08" autocomplete="off">
            <label class="btn btn-light"  style="font-size: 0.8rem;height:30px;" for="option08">国内発送分</label>
            </td>
            <td>
            <label class="btn btn-light border-spacing-1 border"  style="font-size: 0.8rem;height:30px;" for="option01">0件</label>
            </td>
            <td>
            <label style="font-size: 0.8rem;height:30px;">★</label>
            </td>

            <td>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option009" autocomplete="off">
            <label class="btn btn-light"  style="font-size: 0.8rem;height:30px;" for="option09">海外発送分</label>
            </td>
            <td>
            <label class="btn btn-light border-spacing-1 border"  style="font-size: 0.8rem;height:30px;" for="option01">0件</label>
            </td>
            <td>
            <label style="font-size: 0.8rem;height:30px;">★</label>
            </td>

            <td>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option010" autocomplete="off">
            <label class="btn btn-light"  style="font-size: 0.8rem;height:30px;" for="option010">保留</label>
            </td>
            <td>
            <label class="btn btn-light border-spacing-1 border"  style="font-size: 0.8rem;height:30px;" for="option01">0件</label>
            </td>
            <td>
            <label style="font-size: 0.8rem;height:30px;">★</label>
            </td>

            <td>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option011" autocomplete="off">
            <label class="btn btn-light"  style="font-size: 0.8rem;height:30px;" for="option011">処理済</label>
            </td>
            <td>
            <label class="btn btn-light border-spacing-1 border"  style="font-size: 0.8rem;height:30px;" for="option01">5件</label>
            </td>
            <td>
            <label style="font-size: 0.8rem;height:30px;">★</label>
            </td>

            <td>
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options0" id="option012" autocomplete="off">
            <label class="btn btn-light"  style="font-size: 0.8rem;height:30px;" for="option012">キャンセル</label>
            </td>

        </tr>
        </table>
        </div>
    <div class="text-right m-1 p-2">
        <table style="float: left;">
         <tr>
         <td>
            <!-- <p class="text-sm font-bold text-gray-600 uppercase" style="float: left;">商品番号</p> -->
            <textarea  class="w-full mt-2 bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    rows=7 cols=40 placeholder="カンマ区切り、改行で複数検索可。複数検索の場合は完全一致検索となります" autofocus></textarea>
            </td>
        </tr>
        </table>
    </div>
    <!-- <div class="text-right m-2 p-2">
        <table style="float: left;">
         <tr>
         <td><textarea
                    class="w-full p-3 mt-2 bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                    rows=16 cols=40 placeholder="カンマ区切り、改行で複数検索可。複数検索の場合は完全一致検索となります" autofocus></textarea>
            </td>
        </tr>
        </table>
    </div> -->

    <div>

    <section class="text-left m-1 p-1">
    <table>
        <tr>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">注文ID</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">モール</span>
                </th>
                <td class="border">
                    <select class="form-select border-green-200 " style="font-size: 0.6rem;height:25px;width:200px">
                        <option selected>選択してください</option>
                        <option value="1">ヤフオク店</option>
                    </select>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">送り状伝票番号</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:200px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">支払い方法</span>
                </th>
                <td class="border">
                    <select class="form-select border-gray-200 " style="font-size: 0.6rem;height:25px;width:200px">
                        <option selected>選択してください</option>
                        <option value="1">郵便振替</option>
                    </select>
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
                <th class="border table-success" style="width:150px;height:25px;">
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
                <th class="border table-success" style="width:150px;height:25px;">
                <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">発送日</span>
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
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">入金日</span>
                </th>
                <td class="border">
                    <div class="input-daterange input-group" id="datepicker">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="font-size: 0.8rem;height:25px;">開始日付</span>
                        </div>
                        <input type="text" class="input-sm form-control" style="font-size: 0.8rem;height:25px;width:125px;" name="from">

                        <div class="input-group-append">
                            <span class="input-group-text" style="font-size: 0.8rem;;height:25px;">終了日付</span>
                        </div>
                        <input type="text" class="input-sm form-control" style="font-size: 0.8rem;height:25px;width:125px;" name="to">
                    </div>
                </td>
            </tr>
            
        </tr>
    </table>
    <table>
        <tr>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">注文番号</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">ひとことメモ</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">名前</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">名前(フリガナ)</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
        </tr>
    </table>
    <table>
        <tr>
            <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">都道府県</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">メールアドレス</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">電話番号</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">購入者ID</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>

        </tr>
    </table>
    <table>
        <tr>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">表示用商品名</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">商品番号</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">ブランド</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">登録者</span>
                </th>
                <td class="border">
                    <input class="bg-white border border-gray-200 rounded-lg focus:outline-none focus:bg-white focus:border-gray-500"
                        style="width:300px;height:25px;" type="text">
                        @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
        </tr>
        </tr>
    </table>
    <table>
        <tr>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">在庫場所・棚</span>
                </th>
                <td class="border">
                    <select class="form-select border-green-200 " style="font-size: 0.6rem;height:25px;">
                        <option selected>選択してください</option>
                        <option value="1">【SOHO_001】SOHO_001</option>
                    </select>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">ヤフオク送料パターン</span>
                </th>
                <td class="border">
                    <select class="form-select border-green-200 " style="font-size: 0.6rem;height:25px;">
                        <option selected>選択してください</option>
                        <option value="1">B11送料パターンA</option>
                    </select>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">登録店舗</span>
                </th>
                <td class="border">
                    <select class="form-select border-green-200 " style="font-size: 0.6rem;height:25px;">
                        <option selected>選択してください</option>
                        <option value="1">あべのキューズモール店</option>
                    </select>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">着払い発送</span>
                </th>
                <td class="border">
                    <div class="form-check form-switch" style="font-size: 0.8rem;width:200px;margin-left:60px">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">有効</label>
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="flexSwitchCheckChecked" style="margin-left:20px" checked>
                        <label class="form-check-label" style="margin-left:60px" for="flexSwitchCheckChecked">無効</label>
                    </div>
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">キャンセル日</span>
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
    </section>
    </div>
    <div class="m-2 table-success fs-6">
        <table class="w-full divide-y divide-gray-200">
            <tr>
            <td style="width:150px">
                <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">検索結果表示件数</span>
            </td>
            <td>
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
            <td style="width:100px">
                 <x-jet-button class="btn-success" style="width: 150px;height:30px;" wire:click="showBookModal">　　　検索</x-jet-button>
            </td>
            <td style="float:right;">
                <!-- {{ $orders->links('vendor.pagination.bootstrap-4') }} -->
                {{ $orders->links() }}
            <td>
</tr>
        </table>

    </div>
    <div class="m-2 table-success fs-6">
            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options3" id="option11" autocomplete="off" checked>
            <label class="btn btn-success"  style="font-size: 0.8rem;height:30px;" for="option11">手続きパネル</label>

            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options3" id="option12" autocomplete="off">
            <label class="btn btn-success"  style="font-size: 0.8rem;height:30px;" for="option12">注文データダウンロード</label>

            <input type="radio" style="font-size: 0.8rem;height:30px;" class="btn-check" name="options3" id="option13" autocomplete="off">
            <label class="btn btn-success"  style="font-size: 0.8rem;height:30px;" for="option13">入金データダウンロード</label>
    </div>
    <!-- パネル関係 -->
    <div hidden class="m-2 table-white fs-6" style="font-size: 0.8rem;height:33px;" id="panel1">
        <table class="w-full divide-y divide-gray-200">
        <tr>
                <th class="border table-success" style="width:100px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">ステータス</span>
                </th>
                <td class="border">
                    <select class="form-select border-green-200 " style="font-size: 0.6rem;height:25px;width:150px">
                        <option selected>--------</option>
                        <option value="1">新規</option>
                        <option value="2">入金待ち</option>
                        <option value="3">不足あり</option>
                        <option value="4">キャンセル案内</option>
                        <option value="5">期限切れ延長</option>
                        <option value="6">入金済　明日以降発</option>
                        <option value="7">入金済み</option>
                        <option value="8">国内発送分</option>
                        <option value="9">保留</option>
                        <option value="10">処理済</option>
                        <option value="11">キャンセル</option>
                    </select>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <td>
                 <x-jet-button class="btn-success" style="width: 80px;height:30px;" wire:click="showBookModal">更新</x-jet-button>
                </td>

                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">帳票出力：</span>
                </th>
                <td class="border">
                    <div class="form-check-inline">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check1" checked>
                        <label class="custom-control-label" for="custom-check1">明細書</label>
                        </div>
                    </div>
                    <div class="form-check-inline">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check2">
                        <label class="custom-control-label" for="custom-check2">領収書</label>
                        </div>
                    </div>
                    <div class="form-check-inline">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="custom-check3">
                        <label class="custom-control-label" for="custom-check3">インボイス</label>
                        </div>
                    </div>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="width: 80px;height:30px;" wire:click="showBookModal">作成</x-jet-button>
                </td>
                <th class="border table-success" style="width:150px;height:25px;">
                   <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;">受注チェック</span>
                </th>
                <td class="border">
                    <select class="form-select border-green-200 " style="font-size: 0.6rem;height:25px;width:200px">
                        <option selected>--------</option>
                        <option value="1">競リナビヤフオク</option>
                    </select>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <td class="border">
                    <select class="form-select border-green-200 " style="font-size: 0.6rem;height:25px;width:80px">
                        <option selected>日前設定<option>
                        <option value="1">1日</option>
                        <option value="3">3日</option>
                        <option value="7">7日</option>
                    </select>
                    @error('posts.store_nm') <span class="text-red-600 err-message">{{ $message }}</span> @enderror
                </td>
                <td>
                 <x-jet-button class="btn-success" style="width: 80px;height:30px;" wire:click="showBookModal">ﾁｪｯｸ</x-jet-button>
                </td>



            </tr>
        </table>

    </div>
    <div hidden class="m-2 table-white fs-6" style="font-size: 0.8rem;height:33px;" id="panel2">
        <table class="w-full divide-y divide-gray-200">
        <tr>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">全項目エクセルデータ</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">全項目CSVデータ</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">国内出荷指示データ</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">売上SFｱｯﾌﾟﾛｰﾄﾞ用(国内)</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">売上SFｱｯﾌﾟﾛｰﾄﾞ用(海外)</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">店舗出品点数確認用</x-jet-button>
                </td>
            </tr>
        </table>

    </div>
    <div hidden class="m-2 table-white fs-6" style="font-size: 0.8rem;height:33px;" id="panel3">
        <table class="w-full divide-y divide-gray-200">
        <tr>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">全項目エクセルデータ</x-jet-button>
                </td>
                <td>
                 <x-jet-button class="btn-success" style="height:30px;" wire:click="showBookModal">全項目CSVデータ</x-jet-button>
                </td>
            </tr>
        </table>

    </div>
    <!-- パネル関係 -->


    <div class="m-2 table-white fs-6" style="font-size: 0.8rem;height:33px;">
        <table class="w-full divide-y divide-gray-200">
        <tr>
            <div class="bg-white border">
                <td>
                    <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 1.0rem;height:25px;">ステータス</span>
                </td>
            </div>
            <div class="bg-white border">
                <td>
                    <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">お届け先</span>
                    <input type="radio" style="font-size: 0.8rem;height:25px;" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                    <label class="btn btn-success"  style="font-size: 0.8rem;height:25px;" for="option1">国内</label>

                    <input type="radio" style="font-size: 0.8rem;height:25px;" class="btn-check" name="options" id="option2" autocomplete="off">
                    <label class="btn btn-success"  style="font-size: 0.8rem;height:25px;" for="option2">海外</label>
                </td>
            </div>
            <div class="bg-white border">
                <td>
                    <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">折り返し</span>
                    <input type="radio" style="font-size: 0.8rem;height:25px;" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                    <label class="btn btn-success"  style="font-size: 0.8rem;height:25px;" for="option1">する</label>

                    <input type="radio" style="font-size: 0.8rem;height:25px;" class="btn-check" name="options" id="option2" autocomplete="off">
                    <label class="btn btn-success"  style="font-size: 0.8rem;height:25px;" for="option2">しない</label>
                </td>
            </div>
            <div class="bg-white border">
                <td>
                    <span class="text-sm font-bold text-gray-600 uppercase" style="font-size: 0.8rem;height:25px;">文字サイズ</span>
                    <input type="radio" style="font-size: 0.8rem;height:25px;" class="btn-check" name="options1" id="option3" autocomplete="off" checked>
                    <label class="btn btn-success" style="font-size: 0.6rem;height:25px;" for="option3">大</label>

                    <input type="radio" style="font-size: 0.8rem;height:25px;" class="btn-check" name="options1" id="option4" autocomplete="off">
                    <label class="btn btn-success"  style="font-size: 0.6rem;height:25px;" for="option4">中</label>

                    <input type="radio" class="btn-check" name="options1" id="option5" autocomplete="off">
                    <label class="btn btn-success"  style="font-size: 0.6rem;height:25px;" for="option5">小</label>
                </td>
            </div>
            <div class="bg-white border">
                <td>
                <i class="fa-solid fa-truck"></i>
                <x-jet-button class="btn-success" style="font-size: 0.6rem;height:25px;" wire:click="showBookModal"></x-jet-button>
                </td>
            </div>
            <div class="bg-white border">
                <td>
                    <!-- <i class="far fa-check-square"></i> -->
                    <i class="far fa-aperture"></i>
                    <x-jet-button style="font-size: 0.8rem;height:25px;" class="btn-success" wire:click="showBookModal">列の編集</x-jet-button>
                </td>
            </div>
        </tr>
        </table>

    </div>
    <div>
        <table class="w-full divide-y divide-gray-200">
            <thead class="table-success">
                <tr>
                <th class="p-1 text-blue-500 text-left border"></th>
                    <th class="p-1 text-blue-500 text-left border" style="font-size: 0.8rem;">受注日</th>
                    <th class="p-1 text-blue-500 text-left border" style="font-size: 0.8rem;">商品画像</th>
                    <th class="p-1 text-blue-500 text-left border" style="font-size: 0.8rem;">棚</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">商品名</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">受注番号</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">送料パターン</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">着払い発送</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">商品番号</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">アイコン</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">都道府県</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">お名前</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">支払方法</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">入金日</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">対応状況</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">ひとことメモ</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">発送情報</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">発送希望日時</th>
                    <th class="p-1 text-gray-500 text-left border" style="font-size: 0.8rem;">キャンセル日</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($orders as $order)
                <tr>
                    <td class="p-4 text-wrap  border" style="font-size: 0.8rem;width:20px;">
                        <input type="chekcbox" id="delete_flg" style="font-size: 0.8rem;width:20px;" class="block w-full bg-white border border-gray-400 rounded-md" />
                    </td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:100px;">{{ $order->Order_date}}</td>
                    <td class="p-4 text-wrap  border" style="font-size: 0.8rem;width:200px;">
                        <img class="mr-3" style="width:100px;hight:200px" src="..\goods_img\{{ $order->goods_no }}\{{ $order->Product_image }}">
                    </td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:50px;"></td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:500px;">{!! nl2br($order->goods_nm) !!}</td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:50px;">{!! nl2br($order->Order_NO) !!}</td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:50px;"></td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:50px;"></td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:50px;">{!! nl2br($order->goods_no) !!}</td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:50px;"></td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:200px;">{!! nl2br($order->prefectures) !!}</td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:200px;">{!! nl2br($order->simei) !!}</td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:150px;">{!! nl2br($order->payment_method) !!}</td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:100px;">{!! substr(nl2br($order->Payment_day),0.10) !!}</td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:300px;">{!! nl2br($order->status) !!}</td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:50px;"></td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:200px;">{!! nl2br($order->delivery_company) !!}<br>{!! nl2br($order->Baggage_slip_number) !!}</td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:200px;">{!! nl2br($order->delivery_date) !!}<br>{!! nl2br($order->delivery_time) !!}</td>
                    <td class="p-4 text-wrap border" style="font-size: 0.8rem;width:200px;">{!! nl2br($order->cancel_date) !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="m-2 p-2">{{ $orders->links() }}</div>
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
            document.getElementById("option11").addEventListener(
            "click",
            () => {
                document.getElementById("panel1").hidden = false;
                document.getElementById("panel2").hidden = true;
                document.getElementById("panel3").hidden = true;
            },
            false,
            );
            document.getElementById("option12").addEventListener(
            "click",
            () => {
                document.getElementById("panel1").hidden = true;
                document.getElementById("panel2").hidden = false;
                document.getElementById("panel3").hidden = true;
            },
            false,
            );
            document.getElementById("option13").addEventListener(
            "click",
            () => {
                document.getElementById("panel1").hidden = true;
                document.getElementById("panel2").hidden = true;
                document.getElementById("panel3").hidden = false;
            },
            false,
            );
    </script>
