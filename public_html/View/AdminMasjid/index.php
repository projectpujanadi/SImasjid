<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: ../../index.php');
    }
?>
<html>
    <head>
        <title>Admin Masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminMasjid/style.css">
        <link rel="stylesheet" href="../css/AdminMasjid/sidebar.css">
        <link rel="stylesheet" href="../css/AdminMasjid/index.css">
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
                        <div class="slider box span-12">
                            <div class="content-gambar box span-12 center">
                                <div class="col-2">
                                    <div class="valid center box span-12">
                                        Akun anda menunggu di konfirmasi oleh admin utama untuk validitas
                                    </div>
                                    <div class="gambar box span-12">
                                        <img src="../img/Icon/gambar2.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer row">

                </div>
            </div>
        </div>
        <script src="../js/jquery-2.1.0.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            $(document).ready(function () {
                $(".header").load("header.html");
                $(".side").load("sidebar.html");
            });
        </script>
    </body>
</html>