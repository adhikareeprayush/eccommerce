<button
    {{ $attributes->merge(['class' => 'inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg']) }}>
    {{ $slot }}
</button>
