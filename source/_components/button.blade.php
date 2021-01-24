<button {{ $attributes->merge(['class' => 'py-2 px-6 bg-burgundy text-white rounded-full cursor-pointer hover:bg-red-700 transition duration-500']) }}>
    {{ $slot }}
</button>