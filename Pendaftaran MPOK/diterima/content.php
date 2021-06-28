<?php

$Step = $_GET['step'];

if($Step=="1"){
    include 'page_video.php';
}else if($Step=="2"){
    include 'page_video.php';
}else if($Step=="3"){
    include 'page_persetujuan.php';
}else if($Step=="4"){
    include 'page_pernyataan.php';
}else if($Step=="5"){
    include 'page_upload_foto_kartu_keluarga.php';
}else if($Step=="6"){
    include 'page_upload_foto_ijazah.php';
}else if($Step=="7"){
    include 'page_upload_cv.php';    
}else{
    include 'page_syarat_ketentuan.php';
}

?>
