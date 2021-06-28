<?php

$Id = $_GET['id'];

echo'
<form action="../../process/upload_foto_ktp_mpok.php?id='.$Id.'" enctype="multipart/form-data" method="post" autocomplete="off" style="padding:0px;">
    <div align="center" style="padding-bottom:50px;margin:auto;">
	    <div style="background:#fff;padding:25px 20px;margin-bottom:10px;">
            <div id="box_form">
                <h6 style="margin-top:50px;">Upload Foto KTP</h6>
    
                <div style="border:dashed 2px #ddd;padding:15px 10px;margin-top:15px;">
                    <h6>Upload foto KTP anda</h6>
                    <div style="background:#fff;margin-top:15px;border-radius:3.5px;">
	                    <input id="form_input" class="input_form_default" type="file" accept="image/*" name="gambar" size="40" style="background:#fff;float:none;margin-top:5px;padding:0px;box-shadow:none;border:none;" required>
	                </div>
	            </div>

                <a id="btn_upload_disable" class="abtn_default" type="submit" style="margin-top:50px;background:#ddd;">Upload</a>
	            <button id="btn_upload" class="btn_default efek_hover" type="submit" style="min-width:150px;margin:auto;margin-top:50px;width:100%;display:none;">UPLOAD</button>
	            <img src="../../assets/img/shadow.png" style="width:95%;height:20px;opacity:0.65;display:block;margin-top:1px;">
	       </div>
	       
	       <div id="box_loading" style="display:none;">
	            <img src="../../assets/img/loading.gif?2" style="width:65%;">
	            <h5 style="font-weight:600;">LOADING</h5>
	            <h6>Silahkan tunggu beberapa saat sampai proses upload selesai</h6>
	        </div>
        </div>
    </div>
</form>

'; ?>

<script>
    $( "#form_input" ).change(function(){
        $("#btn_upload").show();
        $("#btn_upload_disable").hide();
    });

    $( "#btn_upload" ).click(function(){
        $("#box_form").hide();
        $("#box_loading").show();
        $("#form").submit();
    });
</script>