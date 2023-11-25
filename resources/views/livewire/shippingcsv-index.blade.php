    <body class="h-100">
        <div class="d-flex flex-row w-100" style="height: calc(100% - 50px)">
            <!-- サイドメニュー -->
            <nav style="background-color:#EEEEEE">
                <ul class="nav flex-column m-0 p-3">
                    <li class="nav-item mb-2">
                        <x-jet-dropdown-link href="{{ route('bulkregistration.index') }}">
                                            {{ __('商品データアップロード') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('bulkregistrationimage.index') }}">
                                            {{ __('商品画像データアップロード') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('shippingcsv.index') }}">
                                            {{ __('発送後データアップロード') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('bulkregistrationorder.index') }}">
                                            {{ __('注文データアップロード') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('bulkregistrationorderpayment.index') }}">
                                            {{ __('入金データアップロード') }}
                        </x-jet-dropdown-link>
                    </li>
                </ul>
            </nav>
            <!-- メインコンテンツ -->
            <main class="w-99 bg-light" style="margin-right:auto;width:650px;margin-left:auto;">
               <!-- タイトルバー -->
                <div class="border shadow-sm d-flex flex-row align-items-center bg-light">
                    <div class="navbar-brand toggle-menu">
                        <button class="btn btn-light btn-sm" id="toggle"><i class="fas fa-bars fa-lg"></i></button>
                    </div>
                    <div class="fs-4 fw-bold">一括登録・編集</div>
                </div>
               <!-- コンテンツ -->
               <div class="p-3">
                <!-- 追加 -->
                    <div class="max-w-6xl mx-auto">
                    <div style="display:flex;align-items: center;">
                                <img class="mr-3" style="width:30px;hight:30px" src="..\img\title3.png">
                                発送後CSV取り込み
                        </div>
                        <div class="flex">
                            <div class="container bg-white left" style="width:500px;">
                                <div class="m-3">
                                    <div style="display:flex;justify-content:center;align-items: center;">
                                        <img class="mr-3" style="width:30px;hight:30px" src="..\img\title3.png">
                                        発送後CSVデータのアップロード
                                    </div>
                                </div>
                                <div>
                                    <span class="border-bottom">　　　　　　　　　　　　　　　　　　　　　　　</span>
                                </div>
                                <div class="mb-1 m-1">
                                    <p　>　　　　　　　　　アップロード可能なファイル形式</p>
                                </div>
                                <div class="flex">
                                    <div class="clearfix left ml-5" style="width:100px;hight:80px">
                                    </div>
                                    <div class="clearfix left ml-5" style="width:100px;hight:80px">
                                        <image class="float-end;" src="..\img\Excel_3.png">
                                    </div>
                                </div>
                                <div class="m-2">
                                    <table>
                                        <td>
                                            <span class="text-danger">　　　　形式を選択してください※
                                        </td>
                                        <td>
                                            <select class="form-select border-gray-200 ">
                                                <option selected>選択してください</option>
                                                <option value="1">佐川e飛伝Ⅱ</option>
                                                <option value="2">ヤマトB2</option>
                                                <option value="3">EMS</option>
                                                <option value="4">ゆうパック</option>
                                                <option value="5">クロスモード</option>
                                            </select>
                                        </td>
                                    </table>
                                </div>
                                <div class="m-2">
                                    <table>
                                        <td>
                                            <span class="text-danger">　　　注文番号の形式を選択してください※
                                        </td>
                                        <td>
                                            <select class="form-select border-gray-200 ">
                                                <option selected value="1">内部注文ID</option>
                                                <option selected value="2">モール上注文ID</option>
                                            </select>
                                        </td>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputFile">
                                        <label class="custom-file-label" for="inputFile" data-browse="参照">ファイルを選択(ここにドロップすることもできます)</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-secondary input-group-text" id="inputFileReset">取消</button>
                                    </div>
                                    </div>
                                </div>
                                <div class="text-right m-2 p-2">
                                    <x-jet-button class="btn btn-primary" wire:click="showBookModal">登録</x-jet-button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- 追加 -->
                </div>
            </div>
            </main>
        </div>
    </body>
    <script type="text/javascript">
        window.onload = () => {
            // toggleボタン
            let sidemenuToggle = document.getElementById('toggle')
            // メインコンテンツを囲むmain要素
            let page = document.getElementsByTagName('main')[0];
            // 表示状態 trueで表示中 falseで非表示
            let sidemenuStatus = true;
            // ボタンクリック時のイベント
            sidemenuToggle.addEventListener('click', () => {
                // 表示状態を判定
                if(sidemenuStatus){
                    page.style.cssText = 'margin-left: -230px'
                    sidemenuStatus = false;
                }else{
                    page.style.cssText = 'margin-left: 0px'
                    sidemenuStatus = true;
                }
            })
        }
    </script>
