<div>
    <div wire:offline>
        You are now offline.
    </div>
    <div class="form-group row">
        <label class="block font-medium text-sm text-gray-700" for="title">
            Title
        </label>
        <input wire:model="title" id="title" type="text"
               class="form-control mt-2 mb-2 text-sm sm:text-base pl-2 pr-2 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" />
    </div>
    <div class="form-group row">
        <label class="block font-medium text-sm text-gray-700" for="slug">
            Slug
        </label>
        <input wire:model="slug" id="slug" type="text"
               class="form-control mt-2 text-sm sm:text-base pl-2 pr-2 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" />
    </div>
</div>
