<?php

$Id = $_GET['id'];

echo'
<form action="../../process/pendaftaran_kuesioner_mpok.php?id='.$Id.'" enctype="multipart/form-data" method="post" autocomplete="off" style="padding:0px;">
    <div align="center" style="margin:auto;">
        <div align="left" style="background:#fff;">
    	<div style="padding:25px 15px;">
    	    
    	    <h6>Form berwarna merah wajib diisi</h6>
	 
            <h6 class="form_text" style="color:#f00;">Memiliki Laptop dan HP Android *</h6>
	        <h6 class="form_text_info">Apakah anda memiliki laptop dan handphone android</h6>
            <select class="input_form_default" name="memiliki_laptop_handphone_android" required>
                <option value=""></option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            <select>
                
            <h6 class="form_text" style="color:#f00;">Memiliki Pengalaman Organisasi *</h6>
            <h6 class="form_text_info">Apakah anda pernah memiliki pengalaman dalam berorganisasi</h6>
	        <select class="input_form_default" name="memiliki_pengalaman_organisasi" required>
                <option value=""></option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            <select>
                
            <h6 class="form_text" style="color:#f00;">Memiliki Kendaraan Roda Dua (Sepeda atau Motor) *</h6>
            <h6 class="form_text_info">Apakah anda memiliki kendaraan jenis roda dua seperti sepeda atau motor</h6>
	        <select class="input_form_default" name="memiliki_kendaraan_roda_dua" required>
                <option value=""></option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            <select>
                
            <h6 class="form_text" style="color:#f00;line-height:25px;">Terikat Pekerjaan di Perusahaan atau Tempat Lain *</h6>
            <h6 class="form_text_info">Apakah anda sedang terikat pekerjaan di perusahaan atau tempat lain (Bersedia Full Time)</h6>
	        <select class="input_form_default" name="terikat_pekerjaan_di_perusahaan" required>
                <option value=""></option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            <select>
                
            <h6 class="form_text" style="color:#f00;">Informasi Lowongan *</h6>
            <h6 class="form_text_info">Dari mana anda mendapatkan informasi lowongan ini</h6>
	        <select class="input_form_default" name="informasi_lowongan" required>
                <option value=""></option>
                <option value="Media Sosial">Media Sosial (Facebook, Instagram, Telegram, Twitter)</option>
                <option value="Jobstreet">Jobstreet</option>
                <option value="Undangan">Undangan</option>
                <option value="Teman Atau Keluarga">Teman Atau Keluarga</option>
                <option value="Lainnya">Lainnya</option>
            <select>
    
	        <button class="btn_default efek_hover" type="submit" style="margin-top:50px;">Selanjutnya</button>
	        <img src="../../assets/img/shadow.png" style="width:95%;height:20px;opacity:0.65;display:block;margin-top:1px;">
	        </div>
	    </div>
    </div>
</form>

'; ?>