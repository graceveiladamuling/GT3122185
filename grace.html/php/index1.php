<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perhitungan Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
    <div class="container-sm">
    <h1>Form Nilai Mahasiswa</h1>
    <form action="hasil.php" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" name="namaMahasiswa" class="form-control" required>
        </div>  
        <div class="mb-3">
            <label for="nilai" class="form-label">Nim</label>
            <input type="text" name="nim" class="form-control" name="nim" required>

        <div class="mb-3">
            <label for="nilai" class="form-label">Mata Kuliah</label>
            <input type="text" name="matakuliah" class="form-control" name="matakuliah" required>
        </div>

        <div class="mb-3">
            <label for="nilai" class="form-label">Nilai Tugas Mahasiswa</label>
            <input type="number" name="nilaitugasMahasiswa" class="form-control" name="nilaitugasMahasiswa" required>
        </div>

        <div class="mb-3">
            <label for="nilai" class="form-label">Nilai UTS Mahasiswa</label>
            <input type="number" name="nilaiutsMahasiswa" class="form-control" name="nilaiutsMahasiswa" required>
        </div>

        <div class="mb-3">
            <label for="nilai" class="form-label">Nilai UAS Mahasiswa</label>
            <input type="number" name="nilaiuasMahasiswa" class="form-control" name="nilaiuasMahasiswa" required>
        </div>
        <button type="submit" class="btn btn-primary">Proses Perhitungan</button>
        <button type="reset" class="btn btn-danger">Bersihkan</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>