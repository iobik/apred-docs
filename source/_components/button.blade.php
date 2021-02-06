<button {{ $attributes->merge(['class' => 'py-3 px-8 bg-burgundy text-white rounded-full cursor-pointer hover:bg-red-700 transition duration-500 uppercase font-light text-lg']) }}>
    {{ $slot }}
</button>