<div id="layanan" class="relative w-full px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
    <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
        <h2 class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Layanan Kami</h2>
        <h3
            class="max-w-2xl px-5 mt-2 text-3xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl">
            Layanan Terbaik Hukum Online</h3>
        <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-20">

            @foreach ($layanans as $layanan)
                <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/2">
                    <div class="relative flex flex-col items-center justify-center w-full h-full p-20 mr-5 rounded-lg">
                        <svg class="absolute w-full h-full text-gray-100 fill-current" viewBox="0 0 358 372"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path
                                        d="M315.7 6.5c30.2 15.1 42.6 61.8 41.5 102.5-1.1 40.6-15.7 75.2-24.3 114.8-8.7 39.7-11.3 84.3-34.3 107.2-23 22.9-66.3 23.9-114.5 30.7-48.2 6.7-101.3 19.1-123.2-4.1-21.8-23.2-12.5-82.1-21.6-130.2C30.2 179.3 2.6 141.9.7 102c-2-39.9 21.7-82.2 57.4-95.6 35.7-13.5 83.3 2.1 131.2 1.7 47.9-.4 96.1-16.8 126.4-1.6z" />
                                </g>
                            </g>
                        </svg>
                        <!-- FEATURE Icon 2 -->
                        <img class="relative w-20 h-20" src="{{ asset('storage/' . $layanan->foto) }}" alt="">
                        <h4 class="relative mt-6 text-lg font-bold">{{ $layanan->judul }}</h4>
                        <p class="relative mt-2 text-base text-center text-gray-600">
                            {{ $layanan->deskripsi }} 
                        </p>
                        <a href="#_" class="relative flex mt-2 text-sm font-medium text-indigo-500 underline">Learn
                            More</a>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</div>
