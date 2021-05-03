<div>
    <div class="flex relative">
        <div class="bg-gray-200 flex justify-center items-center relative rounded-full">
            <svg class="w-9 h-9 m-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>

            <span wire:offline.class="hidden" class="w-4 h-4 bg-green-500 absolute bottom-2 right-0 rounded-full"></span>

            <span wire:offline class="w-4 h-4 bg-red-500 absolute bottom-2 right-0 rounded-full"></span>
        </div>
        <div class="mt-5 ml-3">
            Shipu Ahamed <br>
            <span wire:offline.class="hidden"  class="text-xs italic ">You are now online.</span>
            <span wire:offline class="text-xs italic">You are now offline.</span>
        </div>
    </div>
</div>
