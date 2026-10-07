<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        
        <!-- Lebar form (responsive) -->
        <div class="col-md-8 col-lg-6">
            
            <div class="p-4 bg-light rounded">
                <h3 class="mb-3 text-center">Edit Mahasiswa</h3>

                <form action="{{ route('admin.mahasiswa.update', $mahasiswa->idMahasiswa) }}" method="POST">
                    @csrf

                    @method('PUT')

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value={{ $mahasiswa->nama }}>
                    </div>

                    <div class="mb-3">
                        <label>NIM</label>
                        <input type="text" name="nim" class="form-control"value={{ $mahasiswa->nim }}>
                    </div>

                    <div class="mb-3">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value={{ $mahasiswa->alamat }}>
                    </div>

                     <div class="mb-3">
                        <label>No HP</label>
                        <input type="text" name="no_hp" class="form-control" value={{ $mahasiswa->no_hp }}>
                    </div>

                    <button class="btn btn-primary w-100">Simpan</button>
                </form>
            </div>

        </div>

    </div>
</div>

</body>
</html>