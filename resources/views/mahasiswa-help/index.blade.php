<x-layouts.app>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Help</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Mahasiswa Help</h2>
        <form action="#" method="get" class="mb-4">
            <div class="form-group">
                <label for="mataKuliah">Mata Kuliah</label>
                <input type="text" class="form-control" id="mataKuliah" placeholder="Masukan Mata Kuliah">
            </div>
            <div class="form-group">
                <label for="namaMahasiswa">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="namaMahasiswa" placeholder="Masukan Nama Mahasiswa">
            </div>
            <button type="submit" class="btn btn-primary">Cari</button>
            <button type="upload" class="btn btn-primary">Upload</button>
        </form>
        <div class="card">
            <div class="card-header">
                Hasil Pencarian
            </div>
            <div class="card-body">
                <p>Hasil pencarian akan ditampilkan di sini.</p>
            </div>
        </div>
    </div>
</body>

</x-layouts.app>
