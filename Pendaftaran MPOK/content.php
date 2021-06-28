<div style="padding-top:55px;">
    
<?php

$Step = $_GET['step'];

if($Step==''){
    $Step=1;
}

include 'tahapan.php';

if($Step=="1"){
    include 'page_form.php';
}else if($Step=="2"){
    include 'page_kuesioner.php';
}else if($Step=="3"){
    include 'page_upload_foto_diri.php';
}else if($Step=="4"){
    include 'page_upload_foto_ktp.php';
}else if($Step=="5"){
    include 'page_upload_foto_diri_ktp.php';
}else if($Step=="6"){
    include 'page_upload_foto_ijazah.php';
}else if($Step=="7"){
    include 'page_upload_cv.php';    
}else{
    include 'page_syarat_ketentuan.php';
}

?>

</div>