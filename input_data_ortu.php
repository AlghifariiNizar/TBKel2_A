<?php
include "koneksi.php";

if (isset($_POST['submit1'])) {
    $nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
    $nama_ayah = mysqli_real_escape_string($koneksi, $_POST['nama_ayah']);
    $ayahpendidikan = mysqli_real_escape_string($koneksi, $_POST['ayahpendidikan']);
    $ayahpekerjaan = mysqli_real_escape_string($koneksi, $_POST['ayahpekerjaan']);
    $ayahpenghasilan = mysqli_real_escape_string($koneksi, $_POST['ayahpenghasilan']);
    $nama_ibu = mysqli_real_escape_string($koneksi, $_POST['nama_ibu']);
    $ibupendidikan = mysqli_real_escape_string($koneksi, $_POST['ibupendidikan']);
    $ibupekerjaan = mysqli_real_escape_string($koneksi, $_POST['ibupekerjaan']);
    $ibupenghasilan = mysqli_real_escape_string($koneksi, $_POST['ibupenghasilan']);
    $telepon = mysqli_real_escape_string($koneksi, $_POST['telepon']);
    $kk = mysqli_real_escape_string($koneksi, $_POST['kk']);

    // Check if NIK exists in siswa table
    $result = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nik = '$nik'");
    
    if (mysqli_num_rows($result) > 0) {
        $query = "INSERT INTO orang_tua SET
            nik = '$nik',
            nama_ayah = '$nama_ayah',
            ayahpendidikan = '$ayahpendidikan',
            ayahpekerjaan = '$ayahpekerjaan',
            ayahpenghasilan = '$ayahpenghasilan',
            nama_ibu = '$nama_ibu',
            ibupendidikan = '$ibupendidikan',
            ibupekerjaan = '$ibupekerjaan',
            ibupenghasilan = '$ibupenghasilan',
            telepon = '$telepon',
            kk = '$kk'";
        
        try {
            mysqli_query($koneksi, $query);
            echo "<script>alert('Data berhasil disimpan.'); window.location.href='./index.html';</script>";
        } catch (mysqli_sql_exception $e) {
            echo "<script>alert('Terjadi kesalahan: " . $e->getMessage() . "'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('NIK tidak sesuai, silakan periksa kembali.'); window.history.back();</script>";
    }
}
?>
