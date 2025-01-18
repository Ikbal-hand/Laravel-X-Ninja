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
        <div class="flex flex-row-2 justify-center space-y-3"></div>
    </div>
    
    <div class="bg-svg mb-6 text-center bg-green-700 py-4 flex items-center justify-center">
    <h1 class="font-extrabold text-white text-[30px]">OUR PARTNER</h1>
</div>

<div class="bg-white p-5 flex items-center">
    <div class="w-1/5 flex justify-center">
        <img class="rounded-full w-32 h-32" src="https://png.pngtree.com/png-clipart/20230207/ourmid/pngtree-megawati-soekarno-daughter-of-the-president-of-the-republic-of-indonesia-png-image_6590527.png" alt="Alumni Image">
    </div>

    <div class="w-4/5">
        <h2 class="text-2xl font-bold text-gray-800">Mie Jha Wathi</h2>
        <h5 class="text-gray-600">Teknik Industri, Angkatan 2010</h5>
        <p class="text-gray-600 mt-4">
        Sekolah Tinggi Teknologi Cipasung adalah tempat yang mengubah cara pandang saya tentang teknologi dan masa depan. Dengan dosen-dosen yang berdedikasi, lingkungan belajar yang mendukung, dan teman-teman yang luar biasa, saya merasa benar-benar siap menghadapi tantangan dunia kerja.
        </p>
    </div>
</div>

<div class="bg-white p-5 flex items-center">
    <div class="w-1/5 flex justify-center">
        <img class="rounded-full w-32 h-32" src="data:image/jpeg;base64,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" alt="Alumni Image">
    </div>

    <div class="w-4/5">
        <h2 class="text-2xl font-bold text-gray-800">Ahmad Ridwan Syahputra</h2>
        <h5 class="text-gray-600">Teknik Informatika, Angkatan 2020</h5>
        <p class="text-gray-600 mt-4">
        Belajar di Sekolah Tinggi Teknologi Cipasung memberikan saya bekal yang lebih dari sekadar teori. Kampus ini mengajarkan pentingnya inovasi, kerja keras, dan kolaborasi. Saya bangga menjadi bagian dari keluarga besar Cipasung.
        </p>
    </div>
</div>

<div class="bg-white p-5 flex items-center">
    <div class="w-1/5 flex justify-center">
        <img class="rounded-full w-32 h-32" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQqRUf_cuSmqtZ0_g53INgfRYQTGduOQePwA&s" alt="Alumni Image">
    </div>

    <div class="w-4/5">
        <h2 class="text-2xl font-bold text-gray-800">Rizky Ramadhan Hakim</h2>
        <h5 class="text-gray-600">Teknik Informatika, Angkatan 2020</h5>
        <p class="text-gray-600 mt-4">
        Sekolah Tinggi Teknologi Cipasung bukan hanya tempat belajar, tetapi juga tempat saya menemukan potensi diri. Ilmu yang saya dapatkan di sini terus menjadi bekal untuk berkontribusi dalam dunia teknologi dan masyarakat.
        </p>
    </div>
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
