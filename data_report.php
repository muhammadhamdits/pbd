<?php 
  require_once("config.php");
  $i=1;
  $datas = pg_query($conn, "SELECT * FROM transaksi WHERE tanggal >= '2019-04-01' AND tanggal < '2019-05-01' AND jenis='3'");
  $data = pg_fetch_assoc($datas);
  echo json_encode($data);
?>