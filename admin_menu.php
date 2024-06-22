<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="nizar.css">
    <style>
        th {
            text-align: center;
        }

        .action_buttons {
            white-space: nowrap;
        }

        .action_buttons a {
            margin-right: 5px;
        }
    </style>
    <title>PPDB - SDN 3 Muarasanding</title>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin - SDN 3 Muarasanding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="admin_home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin_menu.php">Data Pendaftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginpage.html">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="data_pendaftar">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK Siswa</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $no = 1;
                $ambildata = mysqli_query($koneksi, "select * from siswa");
                while ($tampil = mysqli_fetch_array($ambildata)) {
                    echo "
                    <tr>
                        <td class='text-center'>$no</td>
                        <td class='text-center'>$tampil[nik]</td>
                        <td class='text-center'>$tampil[namalengkap]</td>
                        <td class='text-center'>$tampil[jeniskelamin]</td>
                        <td class='text-center'>$tampil[alamat]</td>
                        <td class='text-center'>$tampil[tgllahir]</td>
                        <td class='text-center action_buttons'>
                            <a href='?kode=$tampil[nik]' class='btn btn-sm btn-danger'>Delete</a>
                            <a href='admin_menu_update.php?kode=$tampil[nik]' class='btn btn-sm btn-primary'>Update</a>
                        </td>
                        <td class='text-center action_buttons'>
                            <a href='admin_detail_siswa.php?kode=$tampil[nik]' class='btn btn-sm btn-info'>Detail Siswa</a>
                            <a href='admin_detail_ortu.php?kode=$tampil[nik]' class='btn btn-sm btn-info'>Detail Orang Tua</a>
                        </td>
                    </tr>
                    ";
                    $no++;
                }
                ?>

                <?php
                if (isset($_GET['kode'])) {
                    $nik = $_GET['kode'];
                    if (mysqli_query($koneksi, "DELETE FROM siswa WHERE nik='$nik'")) {
                        echo "<script>alert('Data berhasil dihapus.'); window.location.href='admin_menu.php';</script>";
                    } else {
                        echo "hapus data error";
                    }
                }
                ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-XRBs8h4cpg3cgYJZweM9pSft6Z1EOH2i4KM+Lz4lFqTVdDTEvA+7J4+61e5XhlFV"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-s/aZ2FUHXa6I3vqZkNYY2f3we5z/DtAd9PH9MZY4kGQ5GqL+dM6YszrU+u3h"
        crossorigin="anonymous"></script>
</body>

</html>
