<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Admin Masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminUtama/style.css">
        <link rel="stylesheet" href="../css/AdminUtama/sidebar.css">
        <link rel="stylesheet" href="../css/AdminUtama/ubahAdminMasjid.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="side box span-1-8">

                    </div>
                    <div class="box span-10-3">
                        <div class="kotak-tengah box span-12">
                            <div class="kotak-judul box span-12">
                                Ubah Admin Masjid
                            </div>
                            <div class="wilayah box span-12">
                                <div class="jarak-bawah box span-12">
                                    <div class="padding-combo box span-1">
                                        Wilayah
                                    </div>
                                    <div class="padding-combo box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-9">
                                        <div class="styled-select">
                                            <select onchange="ubahAdminMasjidAU(this.value)">
                                                <option>Pilih Masjid</option>
                                                <?php include '../../function/script/select/wilayahMasjid.php'?>
                                      <!--          <option class="option">Bojonagara</option>
                                                <option class="option">Cibeunying</option>
                                                <option class="option">Tegallega</option>
                                                <option class="option">Karees</option>
                                                <option class="option">Ujung Berung</option>
                                                <option class="option">Gede Bage</option> -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider kotak-isi box span-12" id="ubahAdminMasjidAU">
                                <div class="kolom box span-12">
                                    <div class="judul center box span-2">
                                        Nomer
                                    </div>
                                    <div class="judul center box span-2">
                                        Username
                                    </div>
                                    <div class="judul center box span-6">
                                        Masjid
                                    </div>
                                    <div class="judul center box span-2">
                                        Aksi
                                    </div>
                                </div>
                        <!--        <div class="baris box span-12">
                                    <div class="nomer center box span-2">
                                        01
                                    </div>
                                    <div class="isi center box span-2">
                                        B01
                                    </div>
                                    <div class="masjid inherit center box span-6">
                                        AL Ukhuwwah
                                    </div>
                                    <div class="aksi box span-2">
                                        <div class="ubah box span-12">
                                            <a class="btn btn-block btn-lg btn-ubah-inverse" href="">
                                                <img src="../img/Notification/edit.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="baris box span-12">
                                    <div class="nomer center box span-2">
                                        02
                                    </div>
                                    <div class="isi center box span-2">
                                        B02
                                    </div>
                                    <div class="masjid inherit center box span-6">
                                        Raya Cipaganti
                                    </div>
                                    <div class="aksi box span-2">
                                        <div class="ubah box span-12">
                                            <a class="btn btn-block btn-lg btn-ubah-inverse" href="">
                                                <img src="../img/Notification/edit.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="baris box span-12">
                                    <div class="nomer center box span-2">
                                        03
                                    </div>
                                    <div class="isi center box span-2">
                                        B03
                                    </div>
                                    <div class="masjid inherit center box span-6">
                                        Istiqamah
                                    </div>
                                    <div class="aksi box span-2">
                                        <div class="ubah box span-12">
                                            <a class="btn btn-block btn-lg btn-ubah-inverse" href="">
                                                <img src="../img/Notification/edit.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="baris box span-12">
                                    <div class="nomer center box span-2">
                                        04
                                    </div>
                                    <div class="isi center box span-2">
                                        B04
                                    </div>
                                    <div class="masjid inherit center box span-6">
                                        Salman ITB
                                    </div>
                                    <div class="aksi box span-2">
                                        <div class="ubah box span-12">
                                            <a class="btn btn-block btn-lg btn-ubah-inverse" href="">
                                                <img src="../img/Notification/edit.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="baris box span-12">
                                    <div class="nomer center box span-2">
                                        05
                                    </div>
                                    <div class="isi center box span-2">
                                        B05
                                    </div>
                                    <div class="masjid inherit center box span-6">
                                        Pusdai
                                    </div>
                                    <div class="aksi box span-2">
                                        <div class="ubah box span-12">
                                            <a class="btn btn-block btn-lg btn-ubah-inverse" href="">
                                                <img src="../img/Notification/edit.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
-->
                            </div>
                            <div class="button box span-12">
                                <div class="panah-kiri box span-1">
                                    <a href="">
                                        <img class="panah" src="../img/Panah/Kiri-2.png">
                                    </a>
                                </div>
                                <div class="box span-10">&nbsp;</div>
                                <div class="panah-kanan box span-1">
                                    <a href="">
                                        <img class="panah" src="../img/Panah/Kanan-2.png">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="footer row">

                </div>
            </div>
        </div>
        <script src="../js/custom.js"></script>
        <script src="../js/jquery-2.1.0.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            $(document).ready(function () {
                $(".header").load("header.php");
                $(".side").load("sidebar.php");
            });
        </script>
    </body>
</html>