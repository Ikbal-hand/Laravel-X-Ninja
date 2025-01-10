<nav class="sticky top-0 z-50 bg-white linear-gradient py-2 ">
    <div class="">
        <nav class="navbar mx-9">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a class="navbar-brand" href="#">
                        <img src='{{ asset('img/STT-CIPASUNG-2-e1688823058980.png') }}' alt="Logo Here" width="50"
                            height="auto" />
                    </a>
                    <h1 class="font-extrabold text-[#03824f] text-[25px]">STT CIPASUNG</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <x-nav-link href="/"
                        class="{{ request()->is('/') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }}  rounded-lg">
                        Beranda </x-nav-link>

                    {{-- <x-dropdown></x-dropdown> --}}
                    <div
                        class="group {{ request()->is('login') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 text-black relative' }}  rounded-lg">

                        <x-nav-link href="/login" class=" text-black py-2 px-2 rounded-lg"> Login
                        </x-nav-link>
                        <div
                            class="invisible absolute top-10 right-0 flex flex-col bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ml-7 group-hover:visible">

                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:gree "
                                href="/">
                                Login </a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200 "
                                href="/">
                                Kehidupan </a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200  "
                                href="/">
                                Perkara </a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200 "
                                href="/">
                                Grup anjeng </a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200 "
                                href="/">
                                Tailwind sialan </a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200 "
                                href="/">
                                Aing na nu bodo </a>

                        </div>
                    </div>

                    {{-- <x-nav-link href="/pmbonline"
                        class="{{ request()->is('pmbonline') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }}  rounded-lg">
                        PMB Online </x-nav-link> --}}
                    <div
                        class="group-first {{ request()->is('profile') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }} rounded-lg">
                        <x-nav-link href="/profile" class="text-black py-2 px-2">Profile</x-nav-link>
                        <div
                            class="invisible absolute top-10 right-0 flex flex-col bg-white  divide-gray-100 rounded-lg shadow w-44 ml-7 group-frist-hover:visible">
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="#">Tentang STTC</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="#">Statuta STTC</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="#">Organisasi</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="#">SK Kode Etik</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="#">Akreditasi</a>
                        </div>
                    </div>
                    <x-nav-link href="/kehidupan-kampus"
                        class="{{ request()->is('kehidupan-kampus') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }}  rounded-lg">
                        Kehidupan Kampus </x-nav-link>
                    <x-nav-link href="/layanan"
                        class="{{ request()->is('layanan') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }}  rounded-lg">
                        Layanan </x-nav-link>
                    <x-nav-link href="/tautan"
                        class="{{ request()->is('tautan') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }}  rounded-lg">
                        Tautan </x-nav-link>
                    <div
                        class="group {{ request()->is('pmbonline') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }} rounded-lg">
                        <x-nav-link href="/pmbonline" class="text-black py-2 px-2">PMB Online</x-nav-link>
                        <div
                            class="invisible absolute top-10 right-0 flex flex-col bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ml-7 group-hover:visible">
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="#">PMB Link 1</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="#">PMB Link 2</a>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
    </div>
</nav>
