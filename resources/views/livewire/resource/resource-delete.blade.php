<x-modal>
    <x-slot name="title">
        @lang('Delete') @lang('Resource'): <span class="font-bold text-red-400">{{ $resource->name }}</span>
    </x-slot>

    <x-slot name="content">
        {{ __('Are you sure you want to delete this :item?', ['item' => strtolower(__('Resource'))]) }}
    </x-slot>

    <x-slot name="buttons">
        <x-jet-danger-button wire:click="delete" wire:loading.attr="disabled">
            {{ __('Yes') }}
        </x-jet-danger-button>
        <x-jet-button wire:click="$emit('closeModal')">
            {{ __('No, do not delete') }}
        </x-jet-button>
    </x-slot>
</x-modal>