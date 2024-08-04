<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vorräte') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
            <livewire:vorraete.create />
        </div>
    </div>
</x-app-layout>
