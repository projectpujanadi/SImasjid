<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Admin Masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminUtama//style.css">
        <link rel="stylesheet" href="../css/AdminUtama/sidebar.css">
        <link rel="stylesheet" href="../css/AdminUtama/tambahAdminMasjid.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="side box span-1-8">

                    </div>
                    <form method='GET' action='../../function/script/add/addAdminMasjid.php'>
                    <div class="box span-10-3">
                        <div class="kotak-atas box span-12">
                            <div class="kotak-judul box span-12">
                                Tambah Admin Masjid
                            </div>
                        </div>
                        <div class="kotak-tengah box span-12">
                            
                            <div class="jarak box span-12">
                                <div class="padding box span-2">
                                    Username
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-9">
                                    <input class="form field id" type="text" placeholder="Username" value="" name="username">
                                </div>
                            </div>
                            <div class="jarak box span-12">
                                <div class="padding box span-2">
                                    Password
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-9">
                                    <input class="form field pass" type="password" placeholder="Password" value="" name="password" id="password">
                                </div>
                            </div>
                            <div class="jarak box span-12">
                                <div class="padding box span-2">
                                    Konfirmasi password anda
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-9">
                                    <input class="form field pass" type="password" placeholder="Konfirmasi password" value="" id="confimPassword">
                                </div>
                            </div>
                            <div class="jarak box span-12">
                                <div class="padding-combo box span-2">
                                    Scan sertifikat 
                                </div>
                                <div class="padding-combo box span-0-5">
                                    :
                                </div>
                                <div class="box span-1-7">
                                    <a class="btn btn-block btn-lg btn-inverse" href="">Unduh</a>
                                    <input class="visible" type="file" name="sertifikat" />
                                </div>
                                <div class="padding-combo box span-7-8">
                                    *Validitas masjid
                                </div>
                            </div>
                            <div class="jarak box span-12">
                                <div class="padding-combo box span-2">
                                    Wilayah masjid
                                </div>
                                <div class="padding-combo box span-0-5">
                                    :
                                </div>
                                <div class="box span-9">
                                    <div class="styled-select">
                                        <select name="wilayahMasjid">
                                        <?php include '../../function/script/select/wilayahMasjid.php'?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="jarak box span-12">
                                <div class="padding-combo box span-2">
                                    Foto masjid 
                                </div>
                                <div class="padding-combo box span-0-5">
                                    :
                                </div>
                                <div class="box span-9">
                                    <a class="btn btn-block btn-lg btn-inverse" href="">Unduh</a>
                                    <input class="visible" type="file" name="fotoMasjid" />
                                </div>
                            </div>
                            <div class="jarak box span-12">
                                <div class="padding box span-2">
                                    Nama masjid
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-9">
                                    <input class="form field nama" type="text" placeholder="Nama masjid" value="" name="namaMasjid">
                                </div>
                            </div>
                            <div class="jarak box span-12">
                                <div class="padding box span-2">
                                    Alamat
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-9">
                                    <input class="form field jalan" type="text" placeholder="Nama jalan" value="" name="alamat">
                                </div>
                            </div>
                            <div class="jarak box span-12">
                                <div class="padding box span-2">
                                    Email
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-9">
                                    <input class="form field jalan" type="text" placeholder="Email" value="" name="email">
                                </div>
                            </div>
                            <div class="jarak box span-12">
                                <div class="padding box span-2">
                                    RT
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-9">
                                    <input class="form field non-jeda" type="text" placeholder="RT" value="" name="rt">
                                </div>
                            </div>
                            <div class="jarak box span-12">
                                <div class="padding box span-2">
                                    RW
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-9">
                                    <input class="form field non-jeda" type="text" placeholder="RW" value="" name="rw">
                                </div>
                            </div>
                            <div class="jarak box span-12">
                                <div class="padding box span-2">
                                    Kecamatan
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-9">
                                    <input class="form field non-jeda" type="text" placeholder="Kecamatan" value="" name="kecamatan">
                                </div>
                            </div>
                            <div class="jarak box span-12">
                                <div class="padding box span-2">
                                    No.Telepon
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-9">
                                    <input class="form field non-jeda" type="text" placeholder="No.Telepon" value="" name="noTelp">
                                </div>
                            </div>
                            <div class="simpan jarak-bawah box span-12">
                                <input type='submit' class="btn btn-block btn-lg btn-inverse" value='buat' name="adminutama_tambahadmin_submit">
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="footer row">

                </div>
            </div>
        </div>
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