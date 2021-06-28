<?php

$Id = $_GET['id'];

echo'
<div style="padding-top:50px;">
    <div align="center" style="background:#fff;margin:5px 0px;">
        <div align="center" style="margin:auto;">
	        <div style="padding:25px 10px;margin-bottom:10px;">
	            <div align="center" style="padding-bottom:10px;margin:auto;">
	                <h5 style="font-size:20px;color:#5bd882;">VIDEO MPOK</h5>
	                <h6 style="color:#3fbc91;">Silahkan saksikan video dibawah ini untuk mengenal dan memahami lebih jauh tentang MPOK SAHARA</h6>
                    <video width="100%" height="300" controls style="background:#000;margin-top:35px;">
                        <source src="../../../../assets/video/mpok.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <p style="color:#aaa;margin:15px 0;">Jika anda sudah selesai menyaksikan video diatas dan sudah memahami bagaimana kinerja MPOK silahkan klik tombol dibawah. Jika belum silahkan saksikan videonya kembali</p>
                    <a class="abtn_default efek_hover" type="submit" style="display:block;margin-top:10px;" href="?step=3">Ok, Saya Mengerti</a>
                    <img src="../../../assets/img/shadow.png" style="width:95%;height:20px;opacity:0.65;display:block;margin-top:1px;">
                </div>
	        </div>
        </div>
    </div>
</div>

'; ?>