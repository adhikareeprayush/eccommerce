{{-- Products --}}

<x-layout>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <x-product url="{{ asset('images/products/1.png') }}" category="Saari" title="Lehenga" price="$32.01" />
                <x-product url="{{ asset('images/products/2.png') }}" category="Saari" title="Lehenga" price="$32.01" />
                <x-product url="{{ asset('images/products/3.png') }}" category="Saari" title="Lehenga" price="$32.01" />
                <x-product url="{{ asset('images/products/4.png') }}" category="Saari" title="Lehenga" price="$32.01" />
                <x-product url="{{ asset('images/products/5.png') }}" category="Saari" title="Lehenga" price="$32.01" />
                <x-product url="{{ asset('images/products/6.png') }}" category="Saari" title="Lehenga" price="$32.01" />
                <x-product url="{{ asset('images/products/7.png') }}" category="Saari" title="Lehenga" price="$32.01" />
                <x-product url="{{ asset('images/products/8.png') }}" category="Saari" title="Lehenga" price="$32.01" />
            </div>
            <div class="flex align-center justify-center mt-7">
                <button
                    class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">View
                    More</button>
            </div>
        </div>
    </section>

</x-layout>
