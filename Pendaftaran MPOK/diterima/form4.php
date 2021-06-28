<?php

$NamaWarung = $_GET['nama_warung'];

echo'
<form action="../process/add_data_warung_step4.php?nama_warung='.$NamaWarung.'" enctype="multipart/form-data" method="post" autocomplete="off" style="padding:0px;">
<div align="center" style="padding-bottom:50px;margin:auto;">
<div style="background:#eee;">
	
	<div style="background:#fff;padding:25px 20px;margin-bottom:10px;">
    
    <h6 style="margin-top:50px;">Upload Foto Warung</h6>
    
    <div style="border:dashed 2px #ddd;padding:15px 10px;margin-top:15px;">
    <h6>Upload foto warung</h6>
    <div style="background:#fff;margin-top:15px;border-radius:3.5px;">
	<input class="input_form_default" type="file" accept="image/*" name="foto_warung" size="40" style="background:#fff;float:none;margin-top:5px;padding:0px;box-shadow:none;border:none;">
	</div>
	</div>

    <!--
    <div style="border:dashed 2px #ddd;padding:15px 10px;margin-top:15px;">
    <h6>Upload foto warung</h6>
    <div style="background:#fff;margin-top:15px;border-radius:3.5px;">
	<input class="input_form_default" type="file" accept="image/*" name="foto_warung" size="40" style="background:#fff;float:none;margin-top:5px;padding:0px;box-shadow:none;border:none;">
	</div>
	</div>
	
	<tr><td>
    <div style="border:dashed 2px #ddd;padding:15px 10px;margin-top:15px;">
    <h6>Upload foto keterangan RT</h6>
    <h6>Silahkan lewati jika tidak ada</h6>
    <div style="background:#fff;margin-top:15px;border-radius:3.5px;">
	<input class="input_form_default" type="file" accept="image/*" name="foto_keterangan_usaha" size="40" style="background:#fff;float:none;margin-top:5px;padding:0px;box-shadow:none;border:none;">
	</div>
	</div>
	-->
	
	<!--
	<table class="table_hide" style="margin-top:20px;">
	    <tr>
	    <td style="padding:10px 0px;">
        <h5 style="margin:0px;margin-top:5px;font-weight:400;">PELATIHAN</h5>
        <h6 class="form_info" style="font-size:14px;margin-top:0px;line-height:20px;color:#999;">Apakah pemilik warung sudah melakukan pelatihan yang di adakan SAHARA</h6>
        </td>
        <td style="padding-left:20px;">
        <label class="switch" style="float:right;margin-top:10px;">
        <input name="tampilkan_harga" type="checkbox" value="0">
        <span class="slider round"></span>
        </label>
        </td>
        </tr>
        
        <tr>
	    <td style="padding:10px 0px;">
        <h5 style="margin:0px;margin-top:5px;font-weight:400;">SURVEI LOKASI</h6>
        <h6 class="form_info" style="font-size:14px;margin-top:0px;line-height:20px;color:#999;">Warung telah di survei oleh team SAHARA</h6>
        </td>
        <td style="padding-left:20px;">
        <label class="switch" style="float:right;margin-top:10px;">
        <input name="tampilkan_harga" type="checkbox" value="0">
        <span class="slider round"></span>
        </label> 
        </td>
        </tr>
        
        <tr>
	    <td style="padding:10px 0px;">
        <h5 style="margin:0px;margin-top:5px;font-weight:400;">BAZAAR</h6>
        <h6 class="form_info" style="font-size:14px;margin-top:0px;line-height:20px;color:#999;">Pemilik warung telah melakukan BAZAR produk SAHARA</h6>
        </td>
        <td style="padding-left:20px;">
        <label class="switch" style="float:right;margin-top:10px;">
        <input name="tampilkan_harga" type="checkbox" value="0">
        <span class="slider round"></span>
        </label> 
        </td>
        </tr>
        
        <tr>
	    <td style="padding:10px 0px;">
        <h5 style="margin:0px;margin-top:5px;font-weight:400;">PERMODALAN</h6>
        <h6 class="form_info" style="font-size:14px;margin-top:0px;line-height:20px;color:#999;">Warung sudah diberikan permodalan oleh SAHARA</h6>
        </td>
        <td style="padding-left:20px;">
        <label class="switch" style="float:right;margin-top:10px;">
        <input name="tampilkan_harga" type="checkbox" value="0">
        <span class="slider round"></span>
        </label> 
        </td>
        </tr>
        
        <tr>
	    <td style="padding:10px 0px;">
        <h5 style="margin:0px;margin-top:5px;font-weight:400;">IT SYSTEM/M-POS</h6>
        <h6 class="form_info" style="font-size:14px;margin-top:0px;line-height:20px;color:#999;">Warung telah dilengkapi dengan Mobile POS</h6>
        </td>
        <td style="padding-left:20px;">
        <label class="switch" style="float:right;margin-top:10px;">
        <input name="tampilkan_harga" type="checkbox" value="0">
        <span class="slider round"></span>
        </label> 
        </td>
        </tr>
        
        <tr>
	    <td style="padding:10px 0px;">
        <h5 style="margin:0px;margin-top:5px;font-weight:400;">BEDAH WARUNG</h6>
        <h6 class="form_info" style="font-size:14px;margin-top:0px;line-height:20px;color:#999;">Warung telah dilakukan perbaikan oleh SAHARA</h6>
        </td>
        <td style="padding-left:20px;">
        <label class="switch" style="float:right;margin-top:10px;">
        <input name="tampilkan_harga" type="checkbox" value="0">
        <span class="slider round"></span>
        </label> 
        </td>
        </tr>
    </table>
    -->
	
	<button class="btn_default efek_hover" type="submit" style="min-width:150px;margin:auto;margin-top:50px;width:100%;">SELESAI</button>
	<a class="abtn_default efek_hover" type="submit" style="min-width:150px;display:block;margin-top:10px;" href="../pendaftaran_warung/?step=5&nama_warung='.$NamaWarung.'">LEWATI</a>
	</div>
	

</div>
</div>
</form>

'; ?>