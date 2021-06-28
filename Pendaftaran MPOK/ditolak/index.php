<!DOCTYPE html>
<?php $Page="Pendaftaran Ditolak"; ?>

<html>
<head>
  <?php include "../../../sub/sub/sub/html_head.php"; ?>
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
<body>
<div class="screen" style="background:#f0f0f0;padding-bottom:50px;">
  <?php
  include '../../../sub/sub/sub/header.php'; 
  
  echo'
  <div align="left">
  '; include "content.php"; echo'
  </div>
  ';
  ?>
</div>
</body>
</html>
