<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Data Ortu - Formulir Pendaftaran</title>
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Account/Daftar
              </a>
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
    <body style="background-color: rgb(255, 255, 255);"></body>

    <form action="input_data_ortu.php" method="post" >
                <!-- formulir -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <p>* Data yang telah diinput tidak dapat diubah kembali, harap isi dengan teliti dan benar</p>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">

                                    <div class="col-12">
                                    <div class="col">
                    <div class="form-group">
                        <label>NIK*</label>
                            <input name="nik" type="text" class="form-control" placeholder="Masukan Kembali NIK Siswa Untuk Validasi" maxlength="16" required>
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
                                                <input name="kk" type="text" class="form-control" placeholder="Masukkan 16 Digit No Kartu Keluarga" maxlength="16" required>
                                            </div>
                                            </div>

                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nama Ayah*</label>
                                                <input name="nama_ayah" type="text" class="form-control" placeholder="Nama Ayah" maxlength="40" required>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Pendidikan Ayah</label>
                                                <select class="form-control" name="ayahpendidikan">
                                                    <option name="ayahpendidikan" value="SD">SD</option>
                                                    <option name="ayahpendidikan" value="SMP">SMP</option>
                                                    <option name="ayahpendidikan" value="SMA">SMA/SMK/Sederajat</option>
                                                    <option name="ayahpendidikan" value="S1">S1/Sederajat</option>
                                                    <option name="ayahpendidikan" value="S2">S2</option>
                                                    <option name="ayahpendidikan" value="S3">S3</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Pekerjaan Ayah</label>
                                                <select class="form-control" name="ayahpekerjaan">
                                                    <option name="ayahpekerjaan" value="Tidak Bekerja">Tidak Bekerja</option>
                                                    <option name="ayahpekerjaan" value="PNS">PNS</option>
                                                    <option name="ayahpekerjaan" value="Wiraswasta">Wiraswasta</option>
                                                    <option name="ayahpekerjaan" value="Pegawai Swasta">Pegawai Swasta</option>
                                                    <option name="ayahpekerjaan" value="PHL">Pekerja Harian Lepas</option>
                                                    <option name="ayahpekerjaan" value="TNI/Polri">TNI/Polri</option>
                                                    <option name="ayahpekerjaan" value="Buruh">Buruh</option>
                                                    <option name="ayahpekerjaan" value="Pensiun">Pensiun</option>
                                                </select>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Penghasilan Ayah per bulan</label>
                                                <select class="form-control" name="ayahpenghasilan" required>
                                                    
                                                    <option name="ayahpenghasilan" value="500.000-1.000.000">Rp500.000-Rp1.500.000</option>
                                                    <option name="ayahpenghasilan" value="1.500.000-3.500.000">Rp1.500.000-Rp3.500.000</option>
                                                    <option name="ayahpenghasilan" value="3.000.000-5.000.000">Rp3.500.000-Rp5.000.000</option>
                                                    <option name="ayahpenghasilan" value="5.000.000-10.000.000">Rp5.000.000-Rp10.000.000</option>
                                                    <option name="ayahpenghasilan" value="10.000.000-20.000.000">Rp10.000.000-20.000.000</option>
                                                    <option name="ayahpenghasilan" value=">20.000.000">> Rp20.000.000</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>No Telepon</label>
                                                <input name="telepon" type="text" class="form-control" maxlength="15" required>
                                            </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>

                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nama Ibu*</label>
                                                <input name="nama_ibu" type="text" class="form-control" placeholder="Nama Ibu" maxlength="40" required>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Pendidikan Ibu</label>
                                                <select class="form-control" name="ibupendidikan">
                                                    <option name="ibupendidikan" value="SD">SD</option>
                                                    <option name="ibupendidikan" value="SMP">SMP</option>
                                                    <option name="ibupendidikan" value="SMA">SMA/SMK/Sederajat</option>
                                                    <option name="ibupendidikan" value="S1">S1/Sederajat</option>
                                                    <option name="ibupendidikan" value="S2">S2</option>
                                                    <option name="ibupendidikan" value="S3">S3</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Pekerjaan Ibu</label>
                                                <select class="form-control" name="ibupekerjaan">
                                                    <option name="ibupekerjaan" value="Tidak Bekerja">Ibu Rumah Tangga</option>
                                                    <option name="ibupekerjaan" value="PNS">PNS</option>
                                                    <option name="ibupekerjaan" value="Wiraswasta">Wiraswasta</option>
                                                    <option name="ibupekerjaan" value="Pegawai Swasta">Pegawai Swasta</option>
                                                    <option name="ibupekerjaan" value="PHL">Pekerja Harian Lepas</option>
                                                    <option name="ibupekerjaan" value="TNI/Polri">TNI/Polri</option>
                                                    <option name="ibupekerjaan" value="Buruh">Buruh</option>
                                                    <option name="ibupekerjaan"value="Pensiun">Pensiun</option>
                                                </select>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Penghasilan Ibu per bulan</label>                                 
                                                <select class="form-control" name="ibupenghasilan">
                                                    
                                                    <option name="ibupenghasilan" value="500.000-1.000.000">Rp500.000-Rp1.500.000</option>
                                                    <option name="ibupenghasilan" value="1.500.000-3.500.000">Rp1.500.000-Rp3.500.000</option>
                                                    <option name="ibupenghasilan" value="3.000.000-5.000.000">Rp3.500.000-Rp5.000.000</option>
                                                    <option name="ibupenghasilan" value="5.000.000-10.000.000">Rp5.000.000-Rp10.000.000</option>
                                                    <option name="ibupenghasilan" value="10.000.000-20.000.000">Rp10.000.000-20.000.000</option>
                                                    <option name="ibupenghasilan" value=">20.000.000">> Rp20.000.000</option>
                                                </select>    
                                                
                                            </div>
                                            </div>
                                        </div>

                                        <br>
                                        <hr>
                                        <br>
                                        <div class="modal-footer">
                                            <button name="submit1" class="btn btn-primary"><span>Submit</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>                                        
