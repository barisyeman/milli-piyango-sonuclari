<?php 
$data=file_get_contents("http://www.mpi.gov.tr/sonuclar/cekilissontarihlerinumaralar.php");
$data=json_decode($data);
$date=explode(".",$data->piyango->tarih);
$date=$date[2].$date[1].$date[0];

$piyango=file_get_contents("http://www.mpi.gov.tr/sonuclar/cekilisler/piyango/".$date.".json");
echo $piyango;
 ?>
 