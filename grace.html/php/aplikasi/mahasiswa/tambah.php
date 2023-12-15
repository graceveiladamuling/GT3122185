<?php
include "../functions.php";

if (isset($_POST['simpan'])){
    if (insertDataMahasiswa($_POST) > 0){
        echo 
        "
            <div class='alert alert-success' role='alert'> Data Mahasiswa Berhasil di Simpan!! </div>
            <script>
                setTimeout(function(){
                    document.location='index.php'
                    },1000);
            </script>
        ";
    } else {
        echo 
        "
            <div class='alert alert-danger' role='alert'> Data Mahasiswa Gagal di Simpan!! </div>
            <script>
                setTimeout(function(){
                    document.location='index.php'
                    },1000);
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form Tambah Data</h4>
                </div>
                <form action="" method="POST">
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="nim" class="form-label">*NIM</label>
                            <input type="text" name="nim" placeholder="Masukkan nama nim..."class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">*Nama</label>
                            <input type="text" name="nama" placeholder="Masukkan nama nama..."class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">*Jurusan</label>
                            <input type="text" name="jurusan" placeholder="Masukkan nama jurusan..." class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">*E-mail</label>
                            <input type="text" name="email" placeholder="Masukkan nama email..."class="form-control" required>
                        </div>
                    </div>
                    <div class="card-footer">
                    
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="button" class="btn btn-success" onclick="document.location='index.php'">Kembali</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>