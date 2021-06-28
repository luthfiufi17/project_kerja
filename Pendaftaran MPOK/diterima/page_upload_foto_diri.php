<?php

$Id = $_GET['id'];

echo'
<form action="../../process/upload_foto_diri_mpok.php?id='.$Id.'" enctype="multipart/form-data" method="post" autocomplete="off" style="padding:0px;">
<div align="center" style="padding-bottom:50px;margin:auto;">

	
	<div style="background:#fff;padding:25px 20px;margin-bottom:10px;">
    
    <h6 style="margin-top:50px;">Upload Foto Diri</h6>
    
    <div style="border:dashed 2px #ddd;padding:15px 10px;margin-top:15px;">
    <h6>Upload foto diri anda</h6>
    <div style="background:#fff;margin-top:15px;border-radius:3.5px;">
	<input class="input_form_default" type="file" accept="image/*" name="gambar" size="40" style="background:#fff;float:none;margin-top:5px;padding:0px;box-shadow:none;border:none;" required>
	</div>
	</div>

	<button class="btn_default efek_hover" type="submit" style="min-width:150px;margin:auto;margin-top:50px;width:100%;">UPLOAD</button>
	
	</div>


</div>
</form>

'; ?>