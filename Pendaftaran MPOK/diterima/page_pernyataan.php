<?php

$IdUser             = $_COOKIE["PendafataranMpok_IdUser"];
	
$Data               = mysqli_fetch_assoc(mysqli_query($ConnectDatabase,"SELECT * FROM pendaftaran_mpok WHERE id='$IdUser'"));
$Nama               = $Data['nama'];
$NomorKtp           = $Data['no_ktp'];
$Alamat             = $Data['alamat'];

$Data               = mysqli_fetch_assoc(mysqli_query($ConnectDatabase,"SELECT * FROM konten"));
$SyaratKetentuan  	= $Data['syarat_ketentuan_mpok'];

$SyaratKetentuan     = str_replace( "\n", "<br>", $SyaratKetentuan);

echo'
<div style="padding:15px;padding-top:60px;">
<div align="center" style="background:#fff;border-radius:15px;">
    <div align="center" style="padding:25px 15px;text-align:center;">
        <div id="box_conten">
            <h4 style="text-align:center;margin-top:15px;">SURAT PERNYATAAN</h4>
            <h6>Surat Pernyataan Menjadi MPOK SAHARA</h6>
            <div align="left" style="margin-top:35px;">
                <table class="table_hide">
                    <tr>
                        <td style="width:70px;"><h6>Nama</h6></td><td style="width:10px;"><h6>:</h6></td><td><h6>'.$Nama.'</h6></td>
                    </tr>
                    <tr>
                        <td style="width:70px;"><h6>KTP</h6></td><td style="width:10px;"><h6>:</h6></td><td><h6>'.$NomorKtp.'</h6></td>
                    </tr>
                    <tr>
                        <td style="width:70px;"><h6>Alamat</h6></td><td style="width:10px;"><h6>:</h6></td><td><h6>'.$Alamat.'</h6></td>
                    </tr>
                </table>
    
                <h6 style="margin-top:25px;">Menyatakan Bersedia Memenuhi Tanggung Jawab sebagai MPOK sebagai berikut :</h6>
                <ol style="list-style-type:decimal;margin-left:15px;">
                    <li>Menyeleksi 1 RT 1 Warung Perkelurahan (maksimal 20 Warung) yang akan dibina berdasarkan data & kriteria warung SAHARA</li>
                    <li>Melakukan kunjungan ke warung secara berkala dan rutin</li>
                    <li>Mendidik warung cara memesan barang secara digital melalui link sembakosahara.com/pesan_online</li>
                    <li>Meningkatkan transaksi warung ke SAHARA melalui belanja online dengan pembayaran melalui dompet SAHARA (Transfer/Top Up/Utangan) yang tepat waktu dan tepat sasaran</li>
                    <li>Membantu memastikan Warung bisa memiliki Konsumen tetap minimal 20 UKM Kuliner di Kelurahan setempat.</li>
                    <li>Melakukan pertemuan dg supervisor / manajement sahara ( 1 x seminggu ) by zoom setiap hari jumat jam 15.30 - 16.30</li>
                </ol>       
        
            </div>
            <a id="btn_ya" class="abtn_default efek_hover" type="submit" style="display:block;margin-top:10px;text-align:center;margin-top:50px;" href="../../../process/pendaftaran_mpok_selesai.php">Ya, Saya Bersedia</a>
            <a id="btn_tidak" class="abtn_default2 efek_hover" type="submit" style="display:block;margin-top:10px;text-align:center;margin-top:10px;" href="menolak">Saya Tidak Bersedia</a>
            <img src="../../../assets/img/shadow.png" style="width:95%;height:20px;opacity:0.65;display:block;margin-top:1px;">
        
    </div>
    <div id="box_loading" style="display:none;">
	    <img src="../../../assets/img/loading.gif?2" style="width:65%;">
	    <h5 style="font-weight:600;">LOADING</h5>
	    <h6>Pendaftaran anda sedang di proses, silahkan tunggu beberapa saat</h6>
	</div>
</div>
</div>

'; ?>

<script>
    $( "#btn_ya" ).click(function(){
        $("#box_conten").hide();
        $("#box_loading").show();
    });
</script>