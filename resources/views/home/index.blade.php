<x-layouts.app>
    <section class=" dark:bg-gray-900 bg-svg">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-10 xl:gap-0 lg:py-16 lg:grid-cols-12 justify-between">
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex ">
                <img src="{{ asset('/img/Group 61.png') }}" alt="Founder">
            </div>
            <div class="mr-Auto ml-14 place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-green-700">
                    Pendidikan Tinggi Adalah Hak semua Orang </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From
                    Pendidikan tinggi adalah kunci untuk membuka peluang karier yang lebih luas dan meningkatkan
                    kualitas hidup. Dengan mengikuti program pendidikan tinggi, Anda tidak hanya mendapatkan pengetahuan
                    akademik yang mendalam, tetapi juga keterampilan praktis yang dibutuhkan di dunia kerja modern</p>
                </svg>
                </a>
                <div class="flex justify-start">
                    <button class="btn btn-sttc active py-2 px-6  : 'bg-white text-black rounded-lg">
                        Join Us!
                    </button>
                    <button
                        class="border bg-white text-black py-2 px-2' : 'bg-white px-2 hover:bg-yellow-200 rounded-lg relative">
                        Contact
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div class=" bg-svg mb-6 text-center bg-green-700 py-10 ">
        <h1 class="font-extrabold text-white text-[30px] mb-10 ">JURUSAN</h1>
        <div class="flex flex-row-2 justify-center space-y-3">

            <div
                class="container bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800"
                    id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                    <li class="me-2">
                        <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                            aria-controls="about" aria-selected="true"
                            class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Teknik
                            Informatika</button>
                    </li>
                    <li class="me-2">
                        <button id="services-tab" data-tabs-target="#services" type="button" role="tab"
                            aria-controls="services" aria-selected="false"
                            class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Teknik
                            Industri</button>
                    </li>
                </ul>

                <div id="defaultTabContent">
                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800 text-left flex flex-row"
                        id="about" role="tabpanel" aria-labelledby="about-tab">
                        <img src="https://media.istockphoto.com/id/1350696625/vector/education-emblem-with-book-and-graduation-cap.jpg?s=612x612&w=0&k=20&c=5jy03wNwUbwz4UmbQkHwpubd5TtNmTVAXeCKVM806Sw="
                            alt="" class="w-[400px]">
                        <div class="relative">

                            <h2 class="text-2xl text-bold">Teknik Informatika</h2>
                            <p class="text-light">
                                Di Jurusan Informatika kamu akan mempelajari berbagai prinsip terkait ilmu komputer
                                mulai
                                dari proses perancangan, pengembangan, pengujian, hingga evaluasi sistem operasi
                                perangkat
                                lunak. Selama kuliah kamu akan banyak mengkaji pemrograman dan komputasi, dan dibekali
                                pula
                                dengan keterampilan merancang perangkat lunak
                            </p>
                            <a href=""class="absolute bottom-0 right-0 btn btn-sttc"> Baca Selengkapnya </a>
                        </div>
                    </div>
                    <div class=" flex flex-row hidden text-left p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800"
                        id="services" role="tabpanel" aria-labelledby="services-tab">
                        <img src="https://media.istockphoto.com/id/1350696625/vector/education-emblem-with-book-and-graduation-cap.jpg?s=612x612&w=0&k=20&c=5jy03wNwUbwz4UmbQkHwpubd5TtNmTVAXeCKVM806Sw="
                            alt="" class="w-[400px]">
                        <div class="relative">

                            <h2 class="text-2xl text-bold">Teknik Industri</h2>
                            <p class="text-light">
                                Keilmuan Teknik Industri lahir dari keinginan untuk memperbaiki system pekerjaan yang
                                sudah ada. Itu dibuktikan dengan salah satu bahasan dalam keilmuan Teknik Industri yang
                                menerapkan Plan, Do, Check, Action.
                            </p>
                            <a href=""class="absolute bottom-0 right-0 btn btn-sttc"> Baca Selengkapnya </a>
                        </div>

                    </div>
                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="statistics" role="tabpanel"
                        aria-labelledby="statistics-tab">

                    </div>
                </div>
            </div>


        </div>
    </div>


    <h2 class="bg-svg text-2xl font-bold mb-6 text-center">Berita dan kegiatan Terbaru</h2>
    <div class="container mx-auto py-8 flex justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-12 justify-center">
            @foreach ($reports as $report)
                <x-card title='{{ $report->title }}'
                    image="https://asset.kompas.com/crops/YQrcfXdm304xoWSOn2yxjOxxFyQ=/0x168:5500x3834/750x500/data/photo/2022/01/11/61dd7a1b1e57e.jpg"
                    desc="{{ $report->content }}" route="{{ route('login') }}" btn="Baca Selengkapnya" />
            @endforeach

        </div>

    </div>
    <div class="flex justify-center py-4">
        <a href="" class="btn btn-sttc items-center"> Lihat Semua Berita dan kegiatan terbaru</a>
    </div>

    <div class="flex justify-center space-x-4 py-10 bg-white stroke-slate-100">
        <div class="mr-7 col-auto flex flex-col">
            <h4 class="text-xl ">STT Cipasung On YouTube</h4>
            <p class="text-lg">
                Lorem Ipsum is simply dummy text of the printing...
            </p>

            <a href="" class="mt-48 hover: btn btn-sttc">View More &#8594</a>
        </div>
        <iframe width="640" height="auto" src="https://www.youtube.com/embed/zV9LbxGakAI?si=oI4seEcxclOunjUk"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    </div>
</x-layouts.app>
