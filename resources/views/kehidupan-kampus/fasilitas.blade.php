<x-layouts.app>
    <div class="container mx-auto px-6 py-16 bg-gradient-to-br from-[#fafcfa] to-[#ffffff]">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-[#03824f] leading-tight mb-4">Fasilitas Kampus</h1>
            <p class="text-gray-600 text-lg">Berbagai Fasilitas sebagai penopang pengembangan akademik dan non-akademik
                mahasiswa.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            @foreach ($fasilitases as $fasilitas)
                <x-card title="{{ $fasilitas->nama }}" desc="{{ $fasilitas->deskripsi }}"
                    image="https://berkas.lektur.id/kbbi-tesaurus/fasilitas.jpg"></x-card>
            @endforeach

        </div>
    </div>


</x-layouts.app>
