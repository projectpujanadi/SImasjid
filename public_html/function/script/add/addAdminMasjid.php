<?php
    require_once '../../connectDB.php';
    
if(isset($_GET['adminutama_tambahadmin_submit'])){
    $sertifikat = $_GET['sertifikat'];
    $fotoMasjid = $_GET['fotoMasjid'];   
    
    $sertifikat = "tes url";
    $fotoMasjid = "tes foto";
    
    $addAdmin = queryInsert('user',
                            '"", "'.$_GET['username'].'" , "'.md5($_GET['password']).'" ,1 , null');
    
    $idAdmin = querySelect('id_user',
                            'user',
                            'username = "'.$_GET['username'].'" AND password = "'.md5($_GET['password']).'"',
                            '0,1');
    
    $addMasjid = queryInsert('masjid',
                                        ' "", "'.$idAdmin[0]['id_user'].'" , '.$_GET['wilayahMasjid'].', "'.$sertifikat.'", "'.$fotoMasjid
                                        .'", "'.$_GET['alamat'].'", "'.$_GET['namaMasjid']
                                        .'", "'.$_GET['rt'].'", "'.$_GET['rw'].'", "'.$_GET['kecamatan']
                                        .'", "'.$_GET['noTelp'].'", "'.$_GET['email'].'"'
                                        .' "", "", "", "", "", "", "", "", "", "", "", "" ');
    
    
}

header('Location: ../../../view/adminUtama/index.php');
    


?>