<?php
// menampilkan hasil input
$nama = $_POST ['namaMahasiswa'];
$nilaitugasMahasiswa = $_POST ['nilaitugasMahasiswa'];

// hitung nilai

if ($nilaiTugasMahasiswa > 75) {
    $keteranganNt = "Selamat Anda Lulus";
}
else {
    $keteranganNt = "Maaf Anda Gagal";
}

// hitung nilai
$nama = $_POST ['namaMahasiswa'];
$nilaiutsMahasiswa = $_POST ['nilaiutsMahasiswa'];

if ($nilaiUTSMahasiswa > 75) {
    $keteranganNuts = "Selamat Anda Lulus";
}
else {
    $keteranganNuts = "Maaf Anda Gagal";
}

// hitung nilai
$nama = $_POST ['namaMahasiswa'];
$nilaiuasMahasiswa = $_POST ['nilaiuasMahasiswa'];

if ($nilaiUASMahasiswa > 75) {
    $keteranganNuas = "Selamat Anda Lulus";
}
else {
    $keteranganNuas = "Maaf Anda Gagal";
}

// menampilkan
echo "Hasil Perhitungan Nilai Mahasiswa<br>";
echo "Nama Mahasiswa : $nama <br>";
echo "Nilai Tugas: $nilaitugasMahasiswa <br>";
echo "Keterangan : $keteranganNt <br>";
echo "Nilai UTS: $nilaiutsMahasiswa <br>";
echo "Keterangan : $keteranganNuts <br>";
echo "Nilai UAS: $nilaiuasMahasiswa <br>";
echo "Keterangan : $keteranganNuas <br>";
