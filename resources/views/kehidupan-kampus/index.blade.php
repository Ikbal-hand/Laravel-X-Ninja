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
        <div class="container">
            <h1 class="text-extrabold text-center text-[25px] text-[#03824f]">Kehidupan Kampus</h1>
        </div>
    </header>

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
</x-layouts.app>
