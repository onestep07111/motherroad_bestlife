<div class="max-w-6xl mx-auto">
    <div class="text-right m-2 p-2">
    <x-jet-button class="btn btn-primary btn-sm" wire:click="showPlaceModal">登録</x-jet-button>
    </div>
    <div class="m-2 p-2">
        <div style="display:flex;align-items: center;">
            <img class="mr-3" style="width:30px;hight:30px" src="..\img\title3.png">
           場所設定
        </div>
        <table class="w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="p-1 text-gray-500 text-left border" style="width:50px">ID</th>
                    <th class="p-1 text-gray-500 text-left border" style="width:800px">場所名</th>
                    <th class="p-1 text-gray-500 text-left border">削除</th>
                    <th class="p-1 text-gray-500 text-left border"></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($places as $place)
                <tr>
                    <td class="p-1 whitespace-nowrap border">{{ $place->id }}</td>
                    <td class="p-1 whitespace-nowrap border">{{ $place->place_nm }}</td>
                    @if(nl2br($place->delete_flg)==1)
                    <td class="p-1 whitespace-nowrap border">削除</td>
                    @else
                    <td class="p-1 whitespace-nowrap border"></td>
                    @endif
                    <td class="p-1 text-right text-sm border">
                        <x-jet-button class="bg-green-600" wire:click="showEditPlaceModal({{ $place->id }})">編集</x-jet-button>
                        <x-jet-button class="bg-red-400" wire:click="deletePlace({{ $place->id }})">削除</x-jet-button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="m-2 p-2">{{ $places->links() }}</div>
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
                            <x-jet-label for="place_nm" value="場所名	" />
                    </th>
                <td class="border">
                        <input type="text" id="place_nm" wire:model.lazy="place_nm" 
                        class="block w-full bg-white border border-gray-400 rounded-md" style="width:300px;height:25px;" />
                        @error('place_nm') <span class="error text-red-400">{{ $message }}</span> @enderror
                    </td>
                    </tr>
                </table>
                <table>
                    <tr>
                    <th class="border table-primary" style="width:150px;height:25px;">
                        <x-jet-label for="operation" value="削除" />
                    </th>
                    <td class="border">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="release" class="form-check-input" id="operation" value="1" {{ old ('release') == '1' ? 'checked' : '' }}> 
                            <label for="operation1" class="form-check-label">ON</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="release" class="form-check-input" id="operation" value="0" {{ old ('release') == '0' ? 'checked' : '' }} checked>
                            <label for="operation2" class="form-check-label">OFF</label>
                        </div>
                        @error('operation') <span class="error text-red-400">{{ $message }}</span> @enderror
                    </td>
                    </tr>
                </table>

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
