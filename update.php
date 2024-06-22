<?php
            include "koneksi.php";

            if(isset($_POST['submit3'])){
                mysqli_query($koneksi, "update siswa set
                password = '$_POST[password]',
                namalengkap = '$_POST[namalengkap]',
                jeniskelamin = '$_POST[jeniskelamin]',
                tempatlahir = '$_POST[tempatlahir]',
                tgllahir = '$_POST[tgllahir]',
                alamat = '$_POST[alamat]',
                agama = '$_POST[agama]',
                where nik = '$_POST[nik]
                ");

                echo"Data telah diubah!!";
                echo"<meta http-equiv=refresh content=1;URL='admin_menu.php'>";
            }
            ?>