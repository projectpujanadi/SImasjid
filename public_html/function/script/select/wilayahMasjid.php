<?php
    require_once '../../function/connectDB.php';

$masjid = querySelect('*',
                      'wilayah',
                      null,
                      null);   


$wilayah = '';
for($i = 0; $i < count($masjid) ; $i++){
    $wilayah .= '
        <option class="option" value="'.$masjid[$i]['id_wilayah'].'">'.$masjid[$i]['nama_wilayah'].'</option>
    ';  
}    

      
echo $wilayah;
?>