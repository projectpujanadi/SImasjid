<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Berita Masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminUtama/style.css">
        <link rel="stylesheet" href="../css/AdminUtama/sidebar.css">
        <link rel="stylesheet" href="../css/AdminUtama/tambahBeritaMasjid.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="side box span-1-8">

                    </div>
                    <form method='GET' action='../../function/script/add/addBeritaMasjid.php'>
                    <div class="box span-10-3">
                        <div class="kotak-tengah box span-12">
                            <div class="kotak-judul box span-12">
                                Tambah Berita Masjid
                            </div>
                            <div class="judul box span-12">
                                <div class="padding box span-1">
                                    Wilayah
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-10-3">
                                    <div class="styled-select">
                                        <select name="wilayahMasjid" onchange="getMasjidByWilayah(this.value)">
                                            <option>Pilih Wilayah</option>
                                            <?php include '../../function/script/select/wilayahMasjid.php'?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="judul box span-12">
                                <div class="padding box span-1">
                                    Masjid
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-10-3">
                                    <div class="styled-select">
                                        <select name="masjid" id="tambahBeritaMasjid_selectMasjid">
                                            <option>Pilih Masjid</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="judul box span-12">
                                <div class="padding box span-1">
                                    Judul
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-10-3">
                                    <input class="form field judul-berita" type="text" placeholder="Judul berita" value="" name="judulBerita">
                                </div>
                            </div>
                            <div class="judul box span-12">
                                <div class="padding box span-1">
                                    Gambar
                                </div>
                                <div class="padding box span-0-5">
                                    :
                                </div>
                                <div class="box span-10-3">
                                    <a class="btn btn-block btn-lg btn-inverse" href="">Unduh</a>
                                    <input class="visible" type="file" name="gambar" />
                                </div>
                            </div>
                            <div class="judul box span-12">
                                <div class="box span-1">
                                    Isi Berita
                                </div>
                                <div class="box span-0-5">
                                    :
                                </div>
                                <div class="box span-10-3">
                                    <textarea class="textarea" rows="15" cols="85" name="isiBerita"></textarea>
                                </div>
                            </div>
                            <div class="simpan box span-12">
                                <input type='submit' class="btn btn-block btn-lg btn-inverse" value='Simpan' name="adminutama_tambahberitamasjid_submit">
                            </div>
                        </div>
                    </div>
                    </form>
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