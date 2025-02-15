@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        <div class="text-lg dark:text-gray-100">
            {{ $title }}
        </div>

        <div class="mt-4 dark:text-white">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-4 text-right bg-gray-100 dark:bg-gray-800">
        {{ $footer }}
    </div>
</x-jet-modal>
