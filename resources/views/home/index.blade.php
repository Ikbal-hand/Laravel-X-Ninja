<x-layouts.app>
    <div class=" grid grid-rows-3 grid-flow-col gap-4" id="HeroSection">
        <img src="{{ asset('/img/Group 47.png') }}" alt="Hero Section" class="hero items-start mr-32 row-span-3" />
        <div class="flex items-center">
            <div>
                <h1 class="font-extrabold text-[#03824f] text-[30px] ">
                    STT CIPASUNG
                </h1>
                <p class="mt-4 text-bg-light max-w-md text-left">
                    Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit.Aliquam rem voluptates impedit totam inventore laborum
                    incidunt voluptas odit, esse adipisci ullam. Ducimus vero a
                    molestias. Natus minima quibusdam consequatur neque?
                </p>
                <div class="flex justify-start mt-4">
                    <button class="btn btn-sttc active py-2 px-6 mx-2 rounded-lg">
                        Join Us!
                    </button>
                    <button class="border py-2 px-6 mx-2 rounded-lg">
                        Contact
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-12">

        <h1 class="font-extrabold text-[#03824f] text-[25px] items-center">JURUSAN</h1>
    </div>
    <x-card :majors="$majors" />

    <div class=" flex justify-center container-me py-10 mb-28">

        <div class="flex flex-col space-y-5 text-center">

            <h1 class="font-extrabold text-[#03824f] text-[30px] ">
                Pendaftaran Mahasiswa Baru
            </h1>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ducimus quis ipsa debitis labore
                voluptates
                itaque fugit laborum aperiam deleniti vitae dignissimos nihil repellat autem commodi porro, facere
                explicabo
                consequuntur?
            </p>
            <a href="" class="btn btn-sttc text-center self-center "> Daftar Sekarang</a>
        </div>
    </div>

    <div class="mb-12">
        <div class="flex justify-center space-x-4">
            <div class="mr-7 col-auto flex flex-col">
                <h4 class="text-xl">STT Cipasung On YouTube</h4>
                <p class="text-lg">
                    Lorem Ipsum is simply dummy text of the printing...
                </p>

                <a href="" class="hover:underline mt-48 ">View More &#8594</a>
            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/zV9LbxGakAI?si=oI4seEcxclOunjUk"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        </div>
    </div>
</x-layouts.app>
