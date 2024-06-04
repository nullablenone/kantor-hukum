<header class="relative z-50 w-full h-24">
    <div
        class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

        <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
            <svg class="w-auto h-6 text-indigo-600 fill-current" viewBox="0 0 194 116"
                xmlns="http://www.w3.org/2000/svg">
                <g fill-rule="evenodd">
                    <path
                        d="M96.869 0L30 116h104l-9.88-17.134H59.64l47.109-81.736zM0 116h19.831L77 17.135 67.088 0z" />
                    <path d="M87 68.732l9.926 17.143 29.893-51.59L174.15 116H194L126.817 0z" />
                </g>
            </svg>
            <span class="ml-3 text-xl text-gray-800">Nullablenone<span class="text-pink-500">.</span></span>
        </a>

        <nav id="nav"
            class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
            <a href="{{ url('/') }}"
                class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Beranda</a>
            <a href="{{ route('tentang-kami.index') }}"
                class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Tentang Kami</a>
            <a href="{{ route('layanan.index') }}"
                class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Layanan</a>
            <a href="{{ route('pengacara.index') }}"
                class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Pengacara</a>
            <a href="#"
                class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Artikel</a>
            <a href="{{ route('kontak.index') }}"
                class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Kontak</a>
            
            
        </nav>

        
        <div id="nav-mobile-btn"
            class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
            <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
            <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
        </div>

    </div>
</header>