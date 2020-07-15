<div class="text-center">
    <h1>Counter</h1>
    <button wire:click="decrement" class="btn btn-primary">-</button>
    <h1 class="d-inline p-2">{{ $count }}</h1>
    <button wire:click="increment" class="btn btn-primary">+</button>
</div>
