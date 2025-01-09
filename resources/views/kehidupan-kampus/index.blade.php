<x-layouts.app>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .border-box {
            border: 2px dashed #333;
            min-height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <header class="bg-dark text-white py-3 border-box">
        <div class="container">
            Header Section
        </div>
    </header>

    <section class="hero border-box">
        <div class="container">
            Hero Section
        </div>
    </section>

    <section id="about" class="py-5 border-box">
        <div class="container">
            About Section
        </div>
    </section>

    <section id="facilities" class="py-5 bg-light border-box">
        <div class="container">
            Facilities Section
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