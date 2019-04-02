<?php 
  require_once("config.php");
  $i=1;
  $datas = pg_query($conn, "SELECT * FROM transaksi WHERE tanggal >= '2019-04-01' AND tanggal < '2019-05-01' AND jenis='3'");
  $d = [];
  while($data = pg_fetch_assoc($datas)){
    $d[] = $data;
  };
  echo json_encode($d);
?>