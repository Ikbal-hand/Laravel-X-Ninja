<x-layouts.app>
    <div
        class="realtive grid grid-rows-3 grid-flow-col gap-4"
        id="HeroSection">
        <img
            src="{{ asset('/img/Group 47.png') }}"
            alt="Hero Section"
            class="hero items-start mr-32 row-span-3 "
        />
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
                    <button
                        class="btn btn-sttc active py-2 px-6 mx-2 : 'bg-white hover:bg-yellow-200 text-black rounded-lg"
                    >
                        Join Us!
                    </button>
                    <button class="border bg-white text-black py-2 px-2' : 'bg-white px-2 hover:bg-yellow-200 rounded-lg relative">
                        Contact
                    </button>
                </div>
            </div>
        </div>
    </div>
<div class="flex justify-center mt-12">

    <h1 class="font-extrabold text-[#03824f] text-[25px] items-center" >JURUSAN</h1>
</div>
<x-card :majors="$majors" />
<div class="flex flex-col align-items-center mt-12">
    <h1 class="breaking-news">
        Berita dan kegiatan terbaru
    </h1>
</div>

<div class="container mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6 text-center">Latest News</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <a href="#">
                <img class="w-full h-48 object-cover" src="https://media.istockphoto.com/id/1783743147/id/foto/pengusaha-muda-yang-bahagia-berbicara-di-mikrofon-saat-menghadiri-acara-pendidikan-di-aula.jpg?s=1024x1024&w=is&k=20&c=g4DvjUB-z9h3ZTj8jQP0o_3kRYdETK1RlbaAloh9Yuc=" alt="Ngambar seminar">
            </a>
            <div class="p-4">
                <a href="#">
                    <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600">Seminar Pendidikan</h3>
                </a>
                <p class="text-gray-600 mt-2">Ringkasan singkat berita pertama...</p>
                <a href="#" class="inline-block mt-4 text-blue-600 hover:underline">Read more</a>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <a href="#">
                <img class="w-full h-48 object-cover" src="https://media.istockphoto.com/id/1150397417/id/foto/molekul-dna-bercahkah-abstrak-dokter-menggunakan-tablet-dan-memeriksa-dengan-analisis-kromosom.jpg?s=1024x1024&w=is&k=20&c=NSb6WUWhmxKBvJYBHezdUn-KRw_d2pRmldFHaqTdRts=" alt="Gambar node">
            </a>
            <div class="p-4">
                <a href="#">
                    <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600">Neurotonical</h3>
                </a>
                <p class="text-gray-600 mt-2">Ringkasan singkat berita kedua...</p>
                <a href="#" class="inline-block mt-4 text-blue-600 hover:underline">Read more</a>
            </div>
        </div>
<!-- Card 3 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <a href="#">
                <img class="w-full h-48 object-cover" src="https://media.istockphoto.com/id/1135159540/id/foto/insinyur-otomasi-menggunakan-laptop-untuk-pemrograman-lengan-robot-era-baru-di-industri.jpg?s=1024x1024&w=is&k=20&c=4xSkBqvFmpW7LjSxOL0CsBikjWDZsD-1z0jOuvns_cQ=" alt="lab penelitian">
            </a>
            <div class="p-4">
                <a href="#">
                    <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600">Lab Penelitian</h3>
                </a>
                <p class="text-gray-600 mt-2">Ringkasan singkat berita ketiga...</p>
                <a href="#" class="inline-block mt-4 text-blue-600 hover:underline">Read more</a>
            </div>
        </div>
<!-- card4 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <a href="#">
                <img class="w-full h-48 object-cover" src="https://media.istockphoto.com/id/1413600685/id/foto/ilmuwan-medis-yang-terfokus-dan-serius-menganalisis-pemindaian-penelitian-di-komputer-bekerja.jpg?s=1024x1024&w=is&k=20&c=FfBDxahf6UBU9ZDxF85mNOdfjr49giDXIcNYqe8aXSg=" alt="foto sains">
            </a>
            <div class="p-4">
                <a href="#">
                    <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600">Penelitian</h3>
                </a>
                <p class="text-gray-600 mt-2">Ringkasan singkat berita ketiga...</p>
                <a href="#" class="inline-block mt-4 text-blue-600 hover:underline">Read more</a>
            </div>
        </div>
    </div>
</div>


    <div class="mb-12">
        <div class="flex justify-center space-x-4" >
            <div class="mr-7 col-auto flex flex-col">
                <h4 class="text-xl">STT Cipasung On YouTube</h4>
                <p class="text-lg">
                    Lorem Ipsum is simply dummy text of the printing...
                </p>

                <a href="" class="mt-48 hover: btn btn-sttc">View More &#8594</a>
            </div>
            <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/zV9LbxGakAI?si=oI4seEcxclOunjUk"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
            ></iframe>

        </div>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</x-layouts.app>
