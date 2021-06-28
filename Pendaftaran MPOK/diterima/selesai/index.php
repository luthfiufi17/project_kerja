<!DOCTYPE html>
<?php $Page="Selesai"; ?>
<html>
<head>
<?php include "../../../../sub/sub/sub/sub/html_head.php"; ?>

    <style>
    #map-canvas {width:100%;height:400px;border:solid #999 1px;}
    select {width:240px;}
    #kab_box,#kec_box,#kel_box,#lat_box,#lng_box{display:none;}
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="ajax_daerah.js"></script>
  
</head>

<style type="text/css">
  body{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

* {
   -webkit-user-select: none;
}
</style>



<script type="text/javascript">
  function disableselect(e) {return false}
document.onselectstart = new Function (return false)
document.onmousedown = disableselect
</script>


 <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;
    
    background-color: none;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #4367b2;
}

input:focus + .slider {
  box-shadow: 0 0 1px #4367b2;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<body>
<div class="screen" style="background:#f5f5f5;">
  <?php
  include '../../../../sub/sub/sub/sub/header.php';
  
  echo'
  <div align="left" >
  '; include "content.php"; echo'
  </div>
  ';
  ?>
</div>
</body>
</html>
