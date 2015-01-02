<?php
    require_once '../../connectDB.php';

$masjid = querySelect('*',
                      'masjid',
                      'id_wilayah = '.$_GET['idWilayah'],
                      null);   


$masjidByWilayah = '';
for($i = 0; $i < count($masjid) ; $i++){
    $masjidByWilayah .= '
        <option class="option" value="'.$masjid[$i]['id_masjid'].'">'.$masjid[$i]['nama_masjid'].'</option>
    ';  
}    

echo $masjidByWilayah;
?>