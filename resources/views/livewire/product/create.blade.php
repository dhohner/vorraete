<?php

use App\Models\User;
use function Livewire\Volt\{rules, state};

state(['name' => '', 'unit' => 'none']);

rules([
    'name' => ['bail', 'required', 'string', 'max:50'],
    'unit' => ['bail', 'required', 'not_in:none']
]);

$store = function () {
    /** @var array $validated */
    $validated = $this->validate();

    /** @var User $user */
    $user = auth()->user();
    $user->products()->create($validated);

    $this->name = '';
    $this->unit = 'none';
};

?>

<div>
    <form wire:submit="store">
        <div class="grid gap-4 mb-2">
            <div>
                <label for="productname">Name:</label>
                <input
                    wire:model.lazy="name"
                    id="productname"
                    placeholder="{{ __('Productname') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >
                <x-input-error :messages="$errors->get('name')"/>
            </div>
            <div>
                <label for="productunit">Unit:</label>
                <select
                    wire:model="unit"
                    id="productunit"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >
                    <option value="none">--Please select an option--</option>
                    <option value="liter">Liter</option>
                </select>
                <x-input-error :messages="$errors->get('unit')"/>
            </div>
        </div>
        <div class="flex justify-end gap-4">
            <x-secondary-button type="reset" class="mt-4">{{ __('Reset') }}</x-secondary-button>
            <x-primary-button class="mt-4">{{ __('Create Product') }}</x-primary-button>
        </div>

    </form>
</div>
