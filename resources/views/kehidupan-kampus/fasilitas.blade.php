<x-layouts.app>

    <div class="flex flex-col justify-center">


        @foreach ($fasilitases as $fasilitas)
            <p>
                {{ $fasilitas->nama }}
            </p>
            <x-ticketcard timeline="{{ $fasilitas->tahun_pembaruan }}" month="April" name="{{ $fasilitas->nama }}"
                image_url="{{ $fasilitas->foto }}" descriptions ="{{ $fasilitas->deskripsi }}" />
        @endforeach

    </div>


</x-layouts.app>
