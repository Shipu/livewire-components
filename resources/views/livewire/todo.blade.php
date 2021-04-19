<div>
    <div class="mb-4">
        <form wire:submit.prevent="store">
            <div class="flex mt-4">
                <input type="text" wire:model="title" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Add Todo">
                @error('title') <span class="error">{{ $message }}</span> @enderror
                <x-button type="submit">Add</x-button>
            </div>
        </form>
    </div>
    <h1 class="text-grey-darkest">Todo List</h1>
    <div class="bg-white rounded p-2 shadow">
        @foreach($todos as $todo)
            <div class="flex mb-4 items-center">
                @if ($todo->status == \App\Enums\TodoStatus::PENDING)
                    <p class="w-full text-grey-darkest">
                        {{ $todo->title }}
                    </p>
                    <x-button wire:click="statusUpdate({{ $todo->id }}, '{{ \App\Enums\TodoStatus::COMPLETE}}')">Done</x-button>
                @else
                    <p class="w-full text-grey-darkest">
                        <s>{{ $todo->title }}</s>
                    </p>
                    <x-button wire:click="statusUpdate({{ $todo->id }}, '{{ \App\Enums\TodoStatus::PENDING}}')" color="gray">Not Done</x-button>
                @endif
                <x-button color="red" wire:click="delete({{ $todo->id }})">Remove</x-button>
            </div>
        @endforeach
    </div>
</div>
