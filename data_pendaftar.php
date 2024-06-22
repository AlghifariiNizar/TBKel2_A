<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="nizar.css">
  <title>PPDB - SDN 3 Muarasanding</title>
</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SDN 3 Muarasanding</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="user_home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="data_pendaftar.php">Cek Data Pendaftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pengumuman.html">Pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="loginpage.html">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <!-- Form Pencarian -->
    <form action="" method="get" class="mb-3">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari berdasarkan NIK" name="search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </div>
    </form>

    <!-- Tabel Data Pendaftar -->
    <div class="data_pendaftar">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Lahir</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "koneksi.php";
          $no = 1;
          
          // Proses pencarian jika ada parameter 'search' dari URL
          $condition = '';
          if (isset($_GET['search']) && !empty($_GET['search'])) {
            $search = $_GET['search'];
            $condition = "WHERE nik LIKE '%$search%'";
          }

          $ambildata = mysqli_query($koneksi, "SELECT * FROM siswa $condition");
          while ($tampil = mysqli_fetch_array($ambildata)) {
            echo "
              <tr>
                <td>$no</td>
                <td>$tampil[nik]</td>
                <td>$tampil[namalengkap]</td>
                <td>$tampil[jeniskelamin]</td>
                <td>$tampil[alamat]</td>
                <td>$tampil[tgllahir]</td>
              </tr>
            ";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

</body>

</html>
