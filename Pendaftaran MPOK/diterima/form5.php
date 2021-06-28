<?php

$JumlahPaket1 	= $_GET['jumlah_paket1'];
$JumlahPaket2 	= $_GET['jumlah_paket2'];
$JumlahPaket3   = $_GET['jumlah_paket3'];

echo'
<div align="left" style="background:#fff;padding:15px 10px;padding-top:50px;">

    <a href="success">
    <div style="margin:10px 0px;">
    <div style="background:#fff;text-align:left;padding:15px;border-radius:3.5px;">
    <h5 style="font-size:20px;">WARUNG BERHASIL</h5>
    <h6 class="form_text" style="margin-top:0px;margin-left:0px;font-size:16px;color:#999;">Data-data warung berhasil didapat dan pemilik warung bersedia untuk bekerja sama</h6>
    </div>
    </div>
    </a>
    
    <div style="background:#ddd;height:1px;"></div>
    
    <a href="warung_tidak_berminat">
    <div style="margin:10px 0px;">
    <div style="background:#fff;text-align:left;padding:15px;border-radius:3.5px;">
    <h5 style="font-size:20px;">WARUNG TIDAK BERMINAT</h5>
    <h6 class="form_text" style="margin-top:0px;margin-left:0px;font-size:16px;color:#999;">Pemilik warung menolak untuk melakukan pendataan dan kerjasama</h6>
    </div>
    </div>
    </a>
    
    <div style="background:#ddd;height:1px;"></div>
    
    <a href="success">
    <div style="margin:10px 0px;">
    <div style="background:#fff;text-align:left;padding:15px;border-radius:3.5px;">
    <h5 style="font-size:20px;">WARUNG TIDAK SESUAI KRITERIA</h5>
    <h6 class="form_text" style="margin-top:0px;margin-left:0px;font-size:16px;color:#999;">Warung tidak sesuai dengan kriteria yang berikan</h6>
    </div>
    </div>
    </a>

</div>

'; ?>
