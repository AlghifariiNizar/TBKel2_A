<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>PPDB - Homepage</title>
</head>

<body class="bg-light">
  <div class="container-fluid" style="height: 100vh">
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
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="persyaratan.html">Persyaratan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pengumuman.html">Pengumuman</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Account/Daftar
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="formulir.html">Daftar</a></li>
                <li><a class="dropdown-item" href="loginpage.html">Login</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulir Pendaftaran</title>
        <link rel="stylesheet" href="style.css">
    <body style="background-color: rgb(255, 255, 255);">
        
                <?php
                
                include "koneksi.php";

                echo"

                <form action='data_pendaftar.php?kode=$tampil[nik]' method='post' >
                <fieldset>
               <label>NIK</label>
               <div>
                <input type='text' name='nik'>

                $ambildata = mysqli_query($koneksi,'select * from formulir where
                nik = '$_POST[nik]'');
                $tampil = mysqli_fetch_array($ambildata);

                </div>
                </fieldset>
                <div>
                <button name='submit'>
                    <span>Cari</span>
                </button>
                </div>
                </form>

                ";

                

                ?>
               