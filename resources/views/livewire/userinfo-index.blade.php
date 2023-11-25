<div class="max-w-6xl mx-auto">
    <div class="text-right m-2 p-2">
    <x-jet-button class="btn btn-primary btn-sm" wire:click="showUserinfoModal">登録</x-jet-button>
    </div>
    <div class="m-2 p-2">
        <div style="display:flex;align-items: center;">
            <img class="mr-3" style="width:30px;hight:30px" src="..\img\title3.png">
            メンバー管理
        </div>
        <table class="w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-1 text-gray-500 text-left border">ID</th>
                    <th class="p-1 text-gray-500 text-left border">権限コード</th>
                    <th class="p-1 text-gray-500 text-left border">名前</th>
                    <th class="p-1 text-gray-500 text-left border">所属</th>
                    <th class="p-1 text-gray-500 text-left border">稼働</th>
                    <!-- <th class="p-1 text-gray-500 text-left">ログインID</th>
                    <th class="p-1 text-gray-500 text-left">パスワード</th>
                    <th class="p-1 text-gray-500 text-left">E-mail</th> -->
                    <th class="p-1 text-gray-500 text-right border"></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($userinfos as $userinfo)
                <tr>
                    <td class="p-1 whitespace-nowrap border">{{ $userinfo->id }}</td>
                    @if(nl2br($userinfo->authority)==0)
                        <td class="p-1 whitespace-nowrap border">システム管理者</td>
                    @elseif(nl2br($userinfo->authority)==1)
                        <td class="p-1 whitespace-nowrap border">店舗管理者</td>
                    @elseif(nl2br($userinfo->authority)==2)
                        <td class="p-1 whitespace-nowrap border">副管理者</td>
                    @elseif(nl2br($userinfo->authority)==3)
                        <td class="p-1 whitespace-nowrap border">店長</td>
                    @elseif(nl2br($userinfo->authority)==4)
                        <td class="p-1 whitespace-nowrap border">運営スタッフ</td>
                    @elseif(nl2br($userinfo->authority)==5)
                        <td class="p-1 whitespace-nowrap border">物流・倉庫</td>
                    @endif
                    <td class="p-1 whitespace-nowrap border">{{ $userinfo->user_name }}</td>
                    <td class="p-1 whitespace-nowrap border">{!! nl2br($userinfo->affiliation) !!}</td>
                    @if(nl2br($userinfo->operation)==1)
                    <td class="p-1 whitespace-nowrap border">稼働中</td>
                    @else
                    <td class="p-1 whitespace-nowrap border"></td>
                    @endif
                    <!-- <td class="p-1 whitespace-nowrap">{!! nl2br($userinfo->loginid) !!}</td>
                    <td class="p-1 whitespace-nowrap">{!! nl2br($userinfo->password) !!}</td>
                    <td class="p-1 whitespace-nowrap">{!! nl2br($userinfo->email) !!}</td> -->
                    <td class="p-1 text-right text-sm border">
                        <x-jet-button class="bg-green-600" wire:click="showEditUserinfoModal({{ $userinfo->id }})">編集</x-jet-button>
                        <x-jet-button class="bg-red-400" wire:click="deleteUserinfo({{ $userinfo->id }})">削除</x-jet-button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="m-2 p-2">{{ $userinfos->links() }}</div>
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
                <section>
                <table>
                    <tr>
                    <th class="border table-primary" style="width:150px;height:25px;">
                        <x-jet-label for="user_name" value="名前" />
                    </th>
                    <td class="border">
                        <input type="text" id="user_name" wire:model.lazy="user_name" 
                        class="block w-full bg-white border border-gray-400 rounded-md" />
                        @error('user_name') <span class="error text-red-400">{{ $message }}</span> @enderror
                    </td>
                    </tr>
                </table>
            
                <table>
                    <tr>
                    <th class="border table-primary" style="width:150px;height:25px;">
                        <x-jet-label for="authority" value="権限" />
                    </th>
                    <td class="border">
                        <select class="custom-select border-0 shadow-none" id="operation" wire:model="operation">
                                <!-- @foreach($authoritys as $authority)
                                    <option style="text-align: left;" value="{{ $authority['id'] }}" {{ $authority['id'] == $id ? "selected" : "" }}>{{ $authority['authority_nm']}}</option>
                                @endforeach -->
                                <option selected style="text-align: left;" value="0">システム管理者</option>
                                <option  style="text-align: left;" value="1">店舗管理者</option>
                                <option  style="text-align: left;" value="2">副管理者</option>
                                <option  style="text-align: left;" value="3">店長</option>
                                <option  style="text-align: left;" value="4">運営スタッフ</option>
                                <option  style="text-align: left;" value="5">物流・倉庫</option>
                        </select>
                        @error('authority') <span class="error text-red-400">{{ $message }}</span> @enderror
                    </td>
                    </tr>
                </table>


                <table>
                    <tr>
                    <th class="border table-primary" style="width:150px;height:25px;">
                        <x-jet-label for="affiliation" value="所属" />
                    </th>
                    <td class="border">
                        <input type="text" id="affiliation" wire:model.lazy="affiliation" 
                        class="block w-full bg-white border border-gray-400 rounded-md" />
                        @error('affiliation') <span class="error text-red-400">{{ $message }}</span> @enderror
                    </td>
                    </tr>
                </table>

                <table>
                    <tr>
                    <th class="border table-primary" style="width:150px;height:25px;">
                        <x-jet-label for="operation" value="稼働" />
                    </th>
                    <td class="border">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="release" class="form-check-input" id="operation" value="1" {{ old ('release') == '1' ? 'checked' : '' }} checked>
                            <label for="operation1" class="form-check-label">ON</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="release" class="form-check-input" id="operation" value="0" {{ old ('release') == '0' ? 'checked' : '' }}>
                            <label for="operation2" class="form-check-label">OFF</label>
                        </div>
                        @error('operation') <span class="error text-red-400">{{ $message }}</span> @enderror
                    </td>
                    </tr>
                </table>

                <table>
                    <tr>
                    <th class="border table-primary" style="width:150px;height:25px;">
                            <x-jet-label for="loginid" value="ログインID" />
                    </th>
                    <td class="border">
                        <input type="text" id="loginid" wire:model.lazy="loginid" 
                        class="block w-full bg-white border border-gray-400 rounded-md" />
                        @error('loginid') <span class="error text-red-400">{{ $message }}</span> @enderror
                    </td>
                    </tr>
                </table>

                <table>
                    <tr>
                    <th class="border table-primary" style="width:150px;height:25px;">
                        <x-jet-label for="password" value="パスワード" />
                    </th>
                    <td class="border">
                        <input type="text" id="password" wire:model.lazy="password" 
                        class="block w-full bg-white border border-gray-400 rounded-md" />
                        @error('password') <span class="error text-red-400">{{ $message }}</span> @enderror
                    </td>
                    </tr>
                </table>

                <table>
                    <tr>
                    <th class="border table-primary" style="width:150px;height:25px;">
                        <x-jet-label for="email" value="E-Mail" />
                    </th>
                    <td class="border">
                        <input type="text" id="email" wire:model.lazy="email" 
                        class="block w-full bg-white border border-gray-400 rounded-md" />
                        @error('email') <span class="error text-red-400">{{ $message }}</span> @enderror
                    </td>
                    </tr>
                </table>
            </section>    

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
