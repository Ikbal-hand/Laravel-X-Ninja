<x-layouts.app>
    <div class="container mx-auto px-6 py-16 bg-gradient-to-br from-[#fafcfa] to-[#ffffff]">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-[#03824f] leading-tight mb-4">Organisasi Mahasiswa</h1>
            <p class="text-gray-600 text-lg">Berbagai Organisasi sebagai penopang pengembangan akademik dan non-akademik
                mahasiswa.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            @foreach ($organizer as $organisasi)
                <x-card title="{{ $organisasi->nama }}" desc="{{ $organisasi->deskripsi }}"
                    image="https://assets-a1.kompasiana.com/items/album/2016/09/22/budayamusyawararapatorganisasi-57e3644e9693734c0c554966-57e37669c3afbd640c4a300e.jpg"></x-card>
            @endforeach

        </div>

    </div>
</x-layouts.app>
