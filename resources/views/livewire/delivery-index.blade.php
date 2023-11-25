<div class="max-w-6xl mx-auto">
    <div class="text-right m-2 p-2">
    <x-jet-button class="bg-blue-600" wire:click="showBookModal">登録</x-jet-button>
    </div>
    <div class="m-2 p-2">
        <table class="w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="p-4 text-gray-500 text-left">ID</th>
                    <th class="p-4 text-gray-500 text-left">規格名(登録)</th>
                    <th class="p-4 text-gray-500 text-left">分類登録</th>
                    <th class="p-4 text-gray-500 text-left">削除</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($places as $place)
                <tr>
                    <td class="p-4 whitespace-nowrap">{{ $place->id }}</td>
                    <td class="p-4 whitespace-nowrap">{{ $place->place_nm }}</td>
                    <td class="p-4 text-right text-sm">
                        <x-jet-button class="bg-green-600" wire:click="showEditUserinfoModal({{ $place->id }})">編集</x-jet-button>
                        <x-jet-button class="bg-red-400" wire:click="deleteUserinfo({{ $place->id }})">削除</x-jet-button>
                    </td>
                    <td class="p-4 whitespace-nowrap">{{ $place->delete_flg }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
