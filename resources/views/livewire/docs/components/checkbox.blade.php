<?php

use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new #[Title('Checkbox')] class extends Component {
    public bool $item1 = true;

    public bool $item2 = false;

    public bool $item3 = false;
}

?>

<div class="docs">

    <x-header title="Checkbox" with-anchor />

    <x-code class="flex gap-5 justify-center">

        @verbatim('docs')
            <div class="w-96 border-dashed border border-gray-400/50 rounded-lg p-8">
                <x-checkbox label="Left" wire:model="item1" />

                <hr class="my-5" />

                <x-checkbox label="Right" wire:model="item2" right />

                <hr class="my-5" />

                <x-checkbox label="Right Tight" wire:model="item3" class="checkbox-warning" right tight />

                <hr class="my-5" />

                <x-button label="Switch with $wire" @click="$wire.item3 = !$wire.item3" class="btn-outline" />
            </div>
        @endverbatim
    </x-code>
</div>
