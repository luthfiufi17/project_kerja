<?php

$NamaWarung         = $_GET['nama_warung'];

$Data               = mysqli_fetch_assoc(mysqli_query($ConnectDatabase,"SELECT * FROM konten"));
$SyaratKetentuan  	= $Data['syarat_ketentuan_mpok'];

echo'
<div align="center" style="background:#fff;">
    <div align="center" style="padding:25px 15px;text-align:center;">
        <img src="../../../../assets/img/pendaftaran.png" style="width:100%;max-width:200px;margin-top:50px;">
        <div style="padding:15px;border-radius:2.5px;">
            <h4 style="color:#5bd882;font-size:22px;">Selesai</h4>
            <h5 style="text-align:center;color:#3fbc91;">Terima kasih karena anda telah mendaftar menjadi MPOK SAHARA</h5>
        </div>
       
        <a class="abtn_default efek_hover" type="submit" style="display:block;margin-top:10px;text-align:center;margin-top:50px;" href="../../../../">OK</a>

        <img src="../../../../assets/img/shadow.png" style="width:95%;height:20px;opacity:0.65;display:block;margin-top:1px;">
       
    </div>
</div>

'; ?>