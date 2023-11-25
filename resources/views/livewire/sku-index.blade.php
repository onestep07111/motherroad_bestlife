<div class="max-w-6xl mx-auto">
    <div class="text-right m-2 p-2">
    <x-jet-button class="btn btn-primary btn-sm" wire:click="showBookModal">登録</x-jet-button>
    </div>
    <div class="m-2 p-2">
    <div style="display:flex;align-items: center;">
            <img class="mr-3" style="width:30px;hight:30px" src="..\img\title3.png">
            SKU・規格管理
    </div>
        <table class="w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="p-1 text-gray-500 text-left">ID</th>
                    <th class="p-1 text-gray-500 text-left">規格名(登録)</th>
                    <th class="p-1 text-gray-500 text-left">分類登録</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($Skus as $Sku)
                <tr>
                    <td class="p-1 whitespace-nowrap">{{ $Sku->kikaku_cd }}</td>
                    <td class="p-1 whitespace-nowrap">{{ $Sku->kikau_nm }}</td>
                    <td class="p-1 text-right text-sm">
                        <x-jet-button class="btn btn-primary btn-sm" wire:click="showEditUserinfoModal({{ $Sku->id }})">分類登録</x-jet-button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
