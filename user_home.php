<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>User - Homepage</title>
  <style>
    .navbar-brand {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .carousel-caption h5 {
      font-size: 2rem;
      font-weight: bold;
    }

    .carousel-caption p {
      font-size: 1.25rem;
    }

    .info-section img {
      border-radius: 50%;
      margin-bottom: 20px;
    }

    .info-section address {
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .info-section {
      padding: 40px 0;
    }

    footer {
      background: #343a40;
      color: white;
      padding: 20px 0;
    }

    footer a {
      color: #ffc107;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    .content-wrapper {
      min-height: calc(100vh - 80px); /* Adjust this value to match the footer height */
      padding-bottom: 80px; /* Adjust this value to match the footer height */
    }
  </style>
</head>

<body class="bg-light">
  <div class="container-fluid content-wrapper">
    <!-- nav section start -->
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
              <a class="nav-link active" aria-current="page" href="user_home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_pendaftar.php">Cek Data Pendaftar</a>
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
    <!-- nav section end -->

    <!-- Carousel start -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="latar.jpg" class="d-block w-100" alt="" style="height: 520px; object-fit: cover;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Penerimaan Siswa Baru</h5>
            <p>SDN 3 MUARASANDING</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel end -->

    <!-- Info Section start -->
    <div class="row text-center align-items-center mt-4 info-section">
      <div class="col-12">
        <img src="pic1.png" width="170" height="150" alt="School Logo" />
        <h2 class="mt-3">SDN 3 MUARASANDING</h2>
        <address>
          <strong>Alamat:</strong><br>
          Jl. Cimanuk Kp. Sanding Gg. Burung Bao RT.03 / RW.06,<br>
          Desa / Kelurahan: Muara Sanding,<br>
          Kecamatan: Kec. Garut Kota,<br>
          Kabupaten: Kab. Garut,<br>
          Provinsi: Prov. Jawa Barat
        </address>
      </div>
    </div>
    <!-- Info Section end -->
  </div>

  <!-- Footer start -->
  <footer class="text-center">
    <div class="container">
      <p>&copy; 2024 SDN 3 Muarasanding. All rights reserved.</p>
      <p>Developed by <a href="#">Kelompok 2 Informatika - A</a></p>
    </div>
  </footer>
  <!-- Footer end -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>
