<div class="text-center">
    <input type="text" wire:model="name">
    <p>Name: {{ $name }}</p>
    <button wire:click="resetName">Reset</button>
</div>
