<div wire:poll.750ms>
    <span class="text-xs">{{ now()->timezone('Asia/Dhaka')->format('d M Y') }}</span><br>
    <span class="text-xl">{{ now()->timezone('Asia/Dhaka')->format('h:i:s A') }}</span>
</div>
