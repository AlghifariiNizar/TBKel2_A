<?php
include "koneksi.php";

if (isset($_POST['submit2'])) {
    $nik_anak = mysqli_real_escape_string($koneksi, $_POST['nik_anak']);
    $ayahnik = mysqli_real_escape_string($koneksi, $_POST['ayahnik']);
    $ibunik = mysqli_real_escape_string($koneksi, $_POST['ibunik']);

    // Check if nik_anak exists in siswa table
    $anak_exists = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nik = '$nik_anak'");
    
    if (mysqli_num_rows($anak_exists) > 0) {
        // Insert into dokumen table
        $query = "INSERT INTO dokumen SET
            nik_anak = '$nik_anak',
            ayahnik = '$ayahnik',
            ibunik = '$ibunik'";

        try {
            mysqli_query($koneksi, $query);
            echo "<script>alert('Data berhasil disimpan.'); window.location.href='./index.html';</script>";
        } catch (mysqli_sql_exception $e) {
            echo "<script>alert('Terjadi kesalahan: " . $e->getMessage() . "'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('NIK anak tidak sesuai, silakan periksa kembali.'); window.history.back();</script>";
    }
}
?>
