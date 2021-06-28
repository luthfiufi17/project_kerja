<?php

$Width1 = ($Step/10)*100;
$Width2 = 100 - $Width1;

if($Step==1){
    $ProggressInfo = "Isi Biodata Diri";
}else if($Step==2){
    $ProggressInfo = "Isi Kuesioner";
}else if($Step==3){
    $ProggressInfo = "Upload foto diri";
}else if($Step==4){
    $ProggressInfo = "Upload foto kartu tanda penduduk (KTP)";
}else if($Step==5){
    $ProggressInfo = "Upload foto kartu keluarga";
}else if($Step==6){
    $ProggressInfo = "Upload foto ijazah";
}else if($Step==7){
    $ProggressInfo = "Upload CV format pdf atau word";
}else if($Step==8){
    $ProggressInfo = "Verifikasi surat perjanjian";
}else if($Step==9){
    $ProggressInfo = "Selesai";
}

  
echo'
<div align="center" style="background:#fff;padding:35px 15px;">
<h5 style="color:#3fbc91;">Tahap '.$Step.'</h5>
<div style="float:left;background:#a1f4b7;height:8px;margin:5px 0;border-radius:15px 0 0 15px;width:'.$Width1.'%;"></div>
<div style="float:right;background:#f5f5f5;height:8px;margin:5px 0;border-radius: 0 15px 15px 0;width:'.$Width2.'%;"></div>
<div style="clear:both;"></div>
<h6 style="color:#ccc;">'.$ProggressInfo.'</h6>
</div>
'; ?>