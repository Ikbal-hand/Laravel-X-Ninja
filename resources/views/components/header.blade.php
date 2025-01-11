<nav class="sticky top-0 z-50 bg-white linear-gradient py-2">
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
                    <div
                        class="group {{ request()->is('/') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }} rounded-lg">
                        <x-nav-link href="/" class="py-2 px-2">Beranda</x-nav-link>
                    </div>
                    <!-- Profile -->
                    <div
                        class="relative group {{ request()->is('profile') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }} rounded-lg">
                        <x-nav-link href="/profile" class=" py-2 px-2">Profile</x-nav-link>
                        <div
                            class="invisible absolute top-10 right-0 flex flex-col bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ml-7 group-hover:visible">
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="{{ route('profile.tentang') }}">Tentang STTC</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="{{ route('profile.statuta') }}">Statuta STTC</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="{{ route('profile.organisasi') }}">Organisasi</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="{{ route('profile.sk_kode_etik') }}">SK Kode Etik</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="{{ route('profile.akreditasi') }}">Akreditasi</a>
                        </div>
                    </div>

                    <!-- Kehidupan Kampus -->
                    <div class="relative group {{ request()->is('kehidupan-kampus') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }} rounded-lg">
                        <x-nav-link href="/kehidupan-kampus" class="text-black py-2 px-2">Kehidupan Kampus</x-nav-link>
                        <div class="invisible absolute top-10 right-0 flex flex-col bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ml-7 group-hover:visible">
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200" href="{{ route('kehidupan.fasilitas') }}">Fasilitas</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200" href="{{ route('kehidupan.ormawa') }}">Ormawa</a>
                        </div>
                    </div>

                    <!-- Layanan -->
                    <div
                        class=" relative group {{ request()->is('layanan') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }} rounded-lg">
                        <x-nav-link href="/layanan" class="py-2 px-2">Layanan</x-nav-link>
                        <div
                            class="invisible absolute top-10 right-0 flex flex-col bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ml-7 group-hover:visible">
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="https://pustaka.sttcipasung.ac.id/">Perpustakaan Digital</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="https://journal.sttcipasung.ac.id/index.php/CTP">Jurnal</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="https://lppm.sttcipasung.ac.id/">LPPM</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200"
                                href="{{ route('layanan.upm') }}">UPM</a>
                        </div>
                    </div>

                    <!-- PMB Online -->
                    <div class=" group {{ request()->is('pmbonline') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }} rounded-lg">
                        <x-nav-link href="/pmbonline" class="text-black py-2 px-2">PMB Online</x-nav-link>
                        <div class="invisible absolute top-10 right-0 flex flex-col bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ml-7 group-hover:visible">
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200" href="{{ route('pmb.register') }}">Register</a>
                            <a class="border-gray-100 py-3 px-3 font-semibold text-gray-500 hover:text-black hover:bg-yellow-200" href="{{ route('pmb.persyaratan') }}">Persyaratan</a>
                        </div>
                    </div>
                    <!-- Login -->
                    <!-- <div class="{{ request()->is('login') ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative' }} rounded-lg">
                        <x-nav-link href="/login" class="text-black py-2 px-2">Login</x-nav-link>
                        </div> -->
                </div>
            </div>
        </nav>
    </div>
</nav>
