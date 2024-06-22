<!DOCTYPE html>

<?php

include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from orang_tua where nik='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Admin - Detail Orang Tua</title>
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
        <title>Edit Data Siswa</title>
        <link rel="stylesheet" href="style.css">
    <body style="background-color: rgb(255, 255, 255);">
        
        <form action="" method="post" >
                <!-- formulir -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Data Siswa</h2>
                                    <p>* Masukkan Data Baru untuk Update Data</p>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">
                                    <div class="form-group">
                        <label>NIK*</label>
                        <input name="nik" type="text" class="form-control" value="<?php echo $data['nik'];?>" readonly>
                  </div>
                </div>
                </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Data Orang Tua/Wali</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">
                                        
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>No Kartu Keluarga*</label>
                                                <input name="kk" type="text" class="form-control" value="<?php echo $data['kk'];?>" readonly>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nama Ayah*</label>
                                                <input name="nama_ayah" type="text" class="form-control" value="<?php echo $data['nama_ayah'];?>" readonly>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Pendidikan Ayah</label>
                                                <input name="ayahpendidikan" type="text" class="form-control" value="<?php echo $data['ayahpendidikan'];?>" readonly>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Pekerjaan Ayah</label>
                                                <input name="ayahpekerjaan" type="text" class="form-control" value="<?php echo $data['ayahpekerjaan'];?>" readonly>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Penghasilan Ayah per bulan</label>
                                                <input name="ayahpenghasilan" type="text" class="form-control" value="<?php echo $data['ayahpenghasilan'];?>" readonly>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>No Telepon</label>
                                                <input name="telepon" type="text" class="form-control" value="<?php echo $data['telepon'];?>" readonly>
                                            </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>

                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nama Ibu*</label>
                                                <input name="nama_ibu" type="text" class="form-control" value="<?php echo $data['nama_ibu'];?>" readonly>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Pendidikan Ibu</label>
                                                <input name="ibupendidikan" type="text" class="form-control" value="<?php echo $data['ibupendidikan'];?>" readonly>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Pekerjaan Ibu</label>
                                                <input name="ibupekerjaan" type="text" class="form-control" value="<?php echo $data['ibupekerjaan'];?>" readonly>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Penghasilan Ibu per bulan</label>                                 
                                                <<input name="ibupenghasilan" type="text" class="form-control" value="<?php echo $data['ibupenghasilan'];?>" readonly>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                        <a href="admin_menu.php" class="btn btn-secondary">Back</a>
                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>          
            ?>                             