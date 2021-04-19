<div>
    <button {{ $attributes->merge(['type' => 'button', 'class' => 'bg-'.$color.'-500 hover:bg-'.$color.'-700 text-white w-max font-bold py-2 px-4 rounded ml-1']) }}>
        {{ $slot }}
    </button>
</div>
