<x-layouts.app>

    <div class=" flex flex-col items-center justify-center gap-y-4">

        <h2 class=" text-4xl font-bold justify-center text-green-700"> Fasilitas Kampus </h2>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-12 justify-center">

            @foreach ($fasilitases as $fasilitas)
                <x-card title="{{ $fasilitas->nama }}"
                    image="https://cdn.pixabay.com/photo/2024/08/26/14/33/ai-generated-8999615_640.jpg"
                    desc="{{ $fasilitas->deskripsi }}" route="{{ route('kehidupan.fasilitas') }}"
                    btn="Lihat selengkapnya" />
            @endforeach
        </div>

    </div>


</x-layouts.app>
