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
    <header>
        <div class="flex justify-center m-5">
            <img src="{{ asset('/img/informatika.jpg') }}" alt="" />
        </div>
        <h1 class="font-extrabold text-center m-5">Ini adalah kampus tercinta kami</h1>
    </header>

    <section>
        <div class="container">
            <h1 class="text-center font-extrabold text-[25px] m-5 text-[#03824f]">Fasilitas</h1>
        </div>
        <div class="flex justify-center m-8 text-center">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem atque consequatur aut, earum nostrum
                repudiandae corporis animi delectus sequi eligendi, dolores doloremque, quidem quos sint. Mollitia
                assumenda aspernatur tempora nihil.</h2>
        </div>
    </section>
    <!-- Hero Section with full width -->
    <section>
        <div class="container flex justify-center m-5">
            <img src="img/informatika.jpg" alt="">
        </div>
        <h1 class="flex justify-center m-5">MESJID</h1>
        <div class="container w-full flex justify-center">
            <img src="img/informatika.jpg" alt="">
            <h1>Perpustakaan</h1>
        </div>
    </section>

    <!-- About Section centered -->
    <section id="about">
        <div class="container text-center">
            <h2></h2>
        </div>
    </section>

    <section id="facilities">
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
