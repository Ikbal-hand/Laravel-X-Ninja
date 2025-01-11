<x-layouts.app>
    <style>
        .border-box {
            border: 2px dashed #333;
            min-height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <header class="bg-dark text-black py-3">
        <div class="flex justify-center m-5">
            <img src="{{ asset('/img/informatika.jpg') }}" alt="" />

        <div class="container">
            <h1 class="text-extrabold text-center text-[25px] text-[#03824f]">Kehidupan Kampus</h1>
        </div>
        <h1 class="font-extrabold text-center m-5">Ini adalah kampus tercinta kami</h1>
    </header>

    <section>
        <div class="container">
            <h1 class="text-center font-extrabold text-[25px] m-5 text-[#03824f]">Fasilitas</h1>
        </div>
        <div class="flex justify-center">
            <h2>Deskripsi Fasilitas</h2>
    <!-- Hero Section with full width -->
    <section>
        <div class="container mx-auto w-full">
        <img src="img/informatika.jpg" alt="">

        </div>
    </section>

    <!-- About Section centered -->
    <section id="about" class="my-7 flex justify-center">
        <div class="container text-center">
            <h2>Ini adalah kampus tercinta kami</h2>
        </div>
    </section>

    <section id="facilities" class="bg-light">
        <div class="container my-7 border-box">
            <img src="img/informatika.jpg" alt="">
        </div>
    </section>

    <section id="events" class="py-5 border-box">
        <div class="container">
            Events Section
        </div>
    </section>

    <footer id="contact" class="bg-dark text-white py-4 border-box">
        <div class="container">
            Footer Section
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</x-layouts.app>
