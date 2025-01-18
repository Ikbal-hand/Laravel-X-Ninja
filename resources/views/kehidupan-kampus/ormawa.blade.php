<x-layouts.app>

    <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-12 justify-center">

        @foreach ($ormawas as $ormawa)
            <x-card title="{{ $ormawa->nama }}"
                image=" https://eswpcd25uod.exactdn.com/blog/wp-content/uploads/2017/05/01-1024x1024.jpg?strip=all&lossy=1&ssl=1"
                route="" btn="Selengkapnya " desc="{{ $ormawa->deskripsi }}" />
        @endforeach

    </div>


</x-layouts.app>
