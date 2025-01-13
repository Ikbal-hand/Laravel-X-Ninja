<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Admin</title>
        <!-- Add your CSS links or CDN here -->
    </head>

    <body>
        <div class="container">
            <div class="sidebar">
                <ul>
                    <li><a href="{{ route('admin.fasilitas') }}">Fasilitas Kampus</a></li>
                    <li><a href="{{ route('admin.news') }}">News Report</a></li>
                    <li><a href="{{ route('admin.organisasi') }}">Organisasi Mahasiswa</a></li>
                    <li><a href="{{ route('admin.calon-mahasiswa') }}">Daftar Calon Mahasiswa</a></li>
                </ul>
            </div>
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </body>

</html>
