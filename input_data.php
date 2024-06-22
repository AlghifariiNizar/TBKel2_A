<?php 
include "koneksi.php";

if(isset($_POST['submit'])){
    $nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $namalengkap = mysqli_real_escape_string($koneksi, $_POST['namalengkap']);
    $jeniskelamin = mysqli_real_escape_string($koneksi, $_POST['jeniskelamin']);
    $tempatlahir = mysqli_real_escape_string($koneksi, $_POST['tempatlahir']);
    $tgllahir = mysqli_real_escape_string($koneksi, $_POST['tgllahir']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $agama = mysqli_real_escape_string($koneksi, $_POST['agama']);

    $query = "INSERT INTO siswa SET
        nik = '$nik',
        password = '$password',
        namalengkap = '$namalengkap',
        jeniskelamin = '$jeniskelamin',
        tempatlahir = '$tempatlahir',
        tgllahir = '$tgllahir',
        alamat = '$alamat',
        agama = '$agama'";

    try {
        mysqli_query($koneksi, $query);
        echo "<script>alert('Data berhasil disimpan.'); window.location.href='./formulir_ortu.php';</script>";
    } catch (mysqli_sql_exception $e) {
        echo "<script>alert('Terjadi kesalahan: " . $e->getMessage() . "'); window.history.back();</script>";
    }
}
?>
