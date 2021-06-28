<?php

$NamaWarung         = $_GET['nama_warung'];

$Data               = mysqli_fetch_assoc(mysqli_query($ConnectDatabase,"SELECT * FROM konten"));
$SyaratKetentuan  	= $Data['syarat_ketentuan_mpok'];

echo'
<div align="center" style="background:#fff;">
<div align="left" style="padding:25px 15px;text-align:left;">
<h5 style="text-align:center;font-weight:600;margin-bottom:35px;">Syarat dan Ketentuan Menjadi MPOK</h5>
'.$SyaratKetentuan.'
<a class="abtn_default efek_hover" type="submit" style="display:block;margin-top:10px;text-align:center;margin-top:50px;" href="?step=2">Saya Setuju</a>
</h6>
</div>
</div>
</div>

'; ?>