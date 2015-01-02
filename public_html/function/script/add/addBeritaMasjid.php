<?php
    session_start();
    require_once '../../connectDB.php';
    
if(isset($_GET['adminutama_tambahberitamasjid_submit'])){
    $wilayahMasjid = $_GET['wilayahMasjid'];
    $masjid = $_GET['masjid'];
    $judulBerita = $_GET['judulBerita'];
    $gambar = 'url';//$gambar = $_GET['gambar'];
    $isiBerita = $_GET['isiBerita'];
    $date = date("Y-m-d H:i:s");
    
    // nama admin masjid menggunakan session[user]    
    $addBerita = queryInsert('berita_tertulis',
                            '"", '.$masjid.' , "'.$_SESSION['user'][1].'" , "'.$judulBerita.'" , "'.$gambar.'", "'.$isiBerita.'" , "'.$date.'"');
    
}

header('Location: ../../../view/adminUtama/index.php');
    


?>