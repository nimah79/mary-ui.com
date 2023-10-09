<?php

use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new #[Title('Modal')] class extends Component {
    public bool $myModal = false;
}

?>

<div class="docs">

    <x-header title="Modal" with-anchor />
    <x-header title="Native HTML" with-anchor size="text-2xl" class="mt-10 mb-5" />

    <p>
        Note the following examples that <code>onclick</code> , <code>.showModal()</code> and <code>.close()</code> are native HTML stuff, not Mary/Livewire/Alpine.
    </p>

    <br>

    <x-code>
        @verbatim('docs')
            {{-- Note `onclick` is HTML --}}
            <x-button label="Open modal" class="btn-primary" onclick="modal17.showModal()" />

            {{-- Here is modal`s ID --}}
            <x-modal id="modal17" title="Are you sure?">
                Click "cancel" or press ESC to exit.

                <x-slot:actions>
                    {{-- Note `onclick` is HTML --}}
                    <x-button label="Cancel" onclick="modal17.close()" />
                    <x-button label="Confirm" class="btn-primary" />
                </x-slot:actions>
            </x-modal>
        @endverbatim
    </x-code>

    <x-header title="With Livewire" with-anchor size="text-2xl" class="mt-10 mb-5" />

    <p>
        <strong>You don't need</strong> <code>id="xxx"</code>.
    </p>

    <p>
        You can toggle visibility with Livewire or Alpine. In both cases you need <code>wire:model</code>. In the following example, we consider you have declared:
    </p>

    <x-code no-render language="php">
        public bool $myModal = false;
    </x-code>

    <br>

    <x-code class="flex gap-5">
        @verbatim('docs')
            {{-- Livewire: fires network request --}}
            <x-button label="Livewire" class="btn-primary" wire:click="$toggle('myModal')" />

            {{-- Alpine: no network request --}}
            <x-button label="Alpine" class="btn-warning" @click="$wire.myModal = true" />

            {{-- Note `wire:model`, no `id="xxx"` --}}
            <x-modal wire:model="myModal" title="Hello" subtitle="Livewire example" separator>
                Click "cancel" or press ESC to exit.

                <x-slot:actions>
                    <x-button label="Cancel" @click="$wire.myModal = false" />
                    <x-button label="Confirm" class="btn-primary" />
                </x-slot:actions>
            </x-modal>
        @endverbatim
    </x-code>
</div>
