<?php 
  require_once("config.php");
  $bulan = $_GET['bln'];
  $tahun = $_GET['thn'];
  $gas   = $_GET['gas'];
  $datas = pg_query($conn, "SELECT pembeli.nama, case when pembeli.jenis = 'Rumah Tangga' then 'v' end as k1, case when pembeli.jenis = 'Usaha Mikro' then 'v' end as k2, case when pembeli.jenis = 'Lainnya' then 'v' end as k3, pembeli.alamat, pembeli.keperluan, sum(case when EXTRACT(day from transaksi.tanggal) = 1 THEN transaksi.jumlah end) as h1, sum(case when EXTRACT(day from transaksi.tanggal) = 2 THEN transaksi.jumlah end) as h2, sum(case when EXTRACT(day from transaksi.tanggal) = 3 THEN transaksi.jumlah end) as h3, sum(case when EXTRACT(day from transaksi.tanggal) = 4 THEN transaksi.jumlah end) as h4, sum(case when EXTRACT(day from transaksi.tanggal) = 5 THEN transaksi.jumlah end) as h5, sum(case when EXTRACT(day from transaksi.tanggal) = 6 THEN transaksi.jumlah end) as h6, sum(case when EXTRACT(day from transaksi.tanggal) = 7 THEN transaksi.jumlah end) as h7, sum(case when EXTRACT(day from transaksi.tanggal) = 8 THEN transaksi.jumlah end) as h8, sum(case when EXTRACT(day from transaksi.tanggal) = 9 THEN transaksi.jumlah end) as h9, sum(case when EXTRACT(day from transaksi.tanggal) = 10 THEN transaksi.jumlah end) as h10, sum(case when EXTRACT(day from transaksi.tanggal) = 11 THEN transaksi.jumlah end) as h11, sum(case when EXTRACT(day from transaksi.tanggal) = 12 THEN transaksi.jumlah end) as h12, sum(case when EXTRACT(day from transaksi.tanggal) = 13 THEN transaksi.jumlah end) as h13, sum(case when EXTRACT(day from transaksi.tanggal) = 14 THEN transaksi.jumlah end) as h14, sum(case when EXTRACT(day from transaksi.tanggal) = 15 THEN transaksi.jumlah end) as h15, sum(case when EXTRACT(day from transaksi.tanggal) = 16 THEN transaksi.jumlah end) as h16, sum(case when EXTRACT(day from transaksi.tanggal) = 17 THEN transaksi.jumlah end) as h17, sum(case when EXTRACT(day from transaksi.tanggal) = 18 THEN transaksi.jumlah end) as h18, sum(case when EXTRACT(day from transaksi.tanggal) = 19 THEN transaksi.jumlah end) as h19, sum(case when EXTRACT(day from transaksi.tanggal) = 20 THEN transaksi.jumlah end) as h20, sum(case when EXTRACT(day from transaksi.tanggal) = 21 THEN transaksi.jumlah end) as h21, sum(case when EXTRACT(day from transaksi.tanggal) = 22 THEN transaksi.jumlah end) as h22, sum(case when EXTRACT(day from transaksi.tanggal) = 23 THEN transaksi.jumlah end) as h23, sum(case when EXTRACT(day from transaksi.tanggal) = 24 THEN transaksi.jumlah end) as h24, sum(case when EXTRACT(day from transaksi.tanggal) = 25 THEN transaksi.jumlah end) as h25, sum(case when EXTRACT(day from transaksi.tanggal) = 26 THEN transaksi.jumlah end) as h26, sum(case when EXTRACT(day from transaksi.tanggal) = 27 THEN transaksi.jumlah end) as h27, sum(case when EXTRACT(day from transaksi.tanggal) = 28 THEN transaksi.jumlah end) as h28, sum(case when EXTRACT(day from transaksi.tanggal) = 29 THEN transaksi.jumlah end) as h29, sum(case when EXTRACT(day from transaksi.tanggal) = 30 THEN transaksi.jumlah end) as h30, sum(case when EXTRACT(day from transaksi.tanggal) = 31 THEN transaksi.jumlah end) as h31 FROM transaksi join pembeli on transaksi.pel=pembeli.id where extract(month from transaksi.tanggal)='$bulan' and extract(year from transaksi.tanggal)='$tahun' and transaksi.jenis='3' and transaksi.gas='$gas' group by pembeli.nama, pembeli.jenis,pembeli.alamat, pembeli.keperluan");
  $penerimaan = pg_query($conn, "SELECT  sum(case when EXTRACT(day from transaksi.tanggal) = 1 THEN transaksi.jumlah end) as h1, sum(case when EXTRACT(day from transaksi.tanggal) = 2 THEN transaksi.jumlah end) as h2, sum(case when EXTRACT(day from transaksi.tanggal) = 3 THEN transaksi.jumlah end) as h3, sum(case when EXTRACT(day from transaksi.tanggal) = 4 THEN transaksi.jumlah end) as h4, sum(case when EXTRACT(day from transaksi.tanggal) = 5 THEN transaksi.jumlah end) as h5, sum(case when EXTRACT(day from transaksi.tanggal) = 6 THEN transaksi.jumlah end) as h6, sum(case when EXTRACT(day from transaksi.tanggal) = 7 THEN transaksi.jumlah end) as h7, sum(case when EXTRACT(day from transaksi.tanggal) = 8 THEN transaksi.jumlah end) as h8, sum(case when EXTRACT(day from transaksi.tanggal) = 9 THEN transaksi.jumlah end) as h9, sum(case when EXTRACT(day from transaksi.tanggal) = 10 THEN transaksi.jumlah end) as h10, sum(case when EXTRACT(day from transaksi.tanggal) = 11 THEN transaksi.jumlah end) as h11, sum(case when EXTRACT(day from transaksi.tanggal) = 12 THEN transaksi.jumlah end) as h12, sum(case when EXTRACT(day from transaksi.tanggal) = 13 THEN transaksi.jumlah end) as h13, sum(case when EXTRACT(day from transaksi.tanggal) = 14 THEN transaksi.jumlah end) as h14, sum(case when EXTRACT(day from transaksi.tanggal) = 15 THEN transaksi.jumlah end) as h15, sum(case when EXTRACT(day from transaksi.tanggal) = 16 THEN transaksi.jumlah end) as h16, sum(case when EXTRACT(day from transaksi.tanggal) = 17 THEN transaksi.jumlah end) as h17, sum(case when EXTRACT(day from transaksi.tanggal) = 18 THEN transaksi.jumlah end) as h18, sum(case when EXTRACT(day from transaksi.tanggal) = 19 THEN transaksi.jumlah end) as h19, sum(case when EXTRACT(day from transaksi.tanggal) = 20 THEN transaksi.jumlah end) as h20, sum(case when EXTRACT(day from transaksi.tanggal) = 21 THEN transaksi.jumlah end) as h21, sum(case when EXTRACT(day from transaksi.tanggal) = 22 THEN transaksi.jumlah end) as h22, sum(case when EXTRACT(day from transaksi.tanggal) = 23 THEN transaksi.jumlah end) as h23, sum(case when EXTRACT(day from transaksi.tanggal) = 24 THEN transaksi.jumlah end) as h24, sum(case when EXTRACT(day from transaksi.tanggal) = 25 THEN transaksi.jumlah end) as h25, sum(case when EXTRACT(day from transaksi.tanggal) = 26 THEN transaksi.jumlah end) as h26, sum(case when EXTRACT(day from transaksi.tanggal) = 27 THEN transaksi.jumlah end) as h27, sum(case when EXTRACT(day from transaksi.tanggal) = 28 THEN transaksi.jumlah end) as h28, sum(case when EXTRACT(day from transaksi.tanggal) = 29 THEN transaksi.jumlah end) as h29, sum(case when EXTRACT(day from transaksi.tanggal) = 30 THEN transaksi.jumlah end) as h30, sum(case when EXTRACT(day from transaksi.tanggal) = 31 THEN transaksi.jumlah end) as h31 from transaksi where extract(month from transaksi.tanggal)='$bulan' and extract(year from transaksi.tanggal)='$tahun' and transaksi.jenis='1' and transaksi.gas='$gas'");

  $in  = pg_query($conn, "SELECT sum(jumlah) from transaksi where gas='$gas' and jenis='1' and extract(month from transaksi.tanggal)<'$bulan' and extract(year from transaksi.tanggal)='$tahun'");
  $in  = pg_fetch_assoc($in);
  $out = pg_query($conn, "SELECT sum(jumlah) from transaksi where gas='$gas' and jenis='3' and extract(month from transaksi.tanggal)<'$bulan' and extract(year from transaksi.tanggal)='$tahun'");
  $out = pg_fetch_assoc($out);
  $stok= $in['sum']-$out['sum'];

  $rt = pg_query($conn, "SELECT sum(transaksi.jumlah) from transaksi join pembeli on transaksi.pel=pembeli.id where pembeli.jenis='Rumah Tangga' and extract(month from transaksi.tanggal)='$bulan' and extract(year from transaksi.tanggal)='$tahun'");
  $rt = pg_fetch_assoc($rt);
  $rt = $rt['sum'];
  $um = pg_query($conn, "SELECT sum(transaksi.jumlah) from transaksi join pembeli on transaksi.pel=pembeli.id where pembeli.jenis='Usaha Mikro' and extract(month from transaksi.tanggal)='$bulan' and extract(year from transaksi.tanggal)='$tahun'");
  $um = pg_fetch_assoc($um);
  $um = $um['sum'];
  $l = pg_query($conn, "SELECT sum(transaksi.jumlah) from transaksi join pembeli on transaksi.pel=pembeli.id where pembeli.jenis='Lainnya' and extract(month from transaksi.tanggal)='$bulan' and extract(year from transaksi.tanggal)='$tahun'");
  $l = pg_fetch_assoc($l);
  $l = $l['sum'];

  while($data=pg_fetch_assoc($datas)){
    $d[] = $data;
  }
  while($pens=pg_fetch_assoc($penerimaan)){
    $p[] = $pens;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div>
  <center><b>LOGBOOK PENYALURAN PANGKALAN LPG 3KG</b></center>
  <table style="width: 100%;">
    <tr>
      <td>Nama Pangkalan</td>
      <td> : </td>
      <td>Armizal</td>
    </tr>
    <tr>
      <td>No. Reg Pangkalan</td>
      <td> : </td>
      <td>1252-2474-1174-015</td>
      <td style="text-align:right;width:50%;">
        <td>Rumah Tangga</td>
        <td>:</td>
        <td><?= $rt; ?></td>
        <td>Tbg</td>
      </td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td> : </td>
      <td>Piai nan xx No. 46</td>
      <td>
        <td>Usaha Mikro</td>
        <td>:</td>
        <td><?= $um; ?></td>
        <td>Tbg</td>
      </td>
    </tr>
    <tr>
      <td>Agen</td>
      <td> : </td>
      <td>PT Bintang Bintangur</td>
      <td>
        <td>Lainnya</td>
        <td>:</td>
        <td><?= $l; ?></td>
        <td>Tbg</td>
      </td>
    </tr>
    <tr>
      <td>Bulan</td>
      <td> : </td>
      <td><?= $bulan." ".$tahun;  ?></td>
    </tr>
  </table>
  <table border="1" cellspacing=0 cellpadding="2" style="width: 100%;">
    <thead>
      <tr>
        <th colspan=7>Tanggal</th>
        <?php
          for($i=1;$i<=31;$i++){ 
        ?>
        <th><?= $i; ?></th>
        <?php
          }
        ?>
      </tr>
      <tr>
        <th colspan=7>Stok Awal</th>
        <?php
          for($i=1;$i<=31;$i++){ 
        ?>
        <th><?php 
          $total = 0;
          foreach($d as $data){
            if(isset($data['h'.($i-1)])){
              $total += $data['h'.($i-1)];
            }
          }
          $masuk = 0;
          if(isset($p[0]['h'.($i-1)])){
            $masuk = $p[0]['h'.($i-1)];
          }
          $stok += $masuk;
          $stok -=$total;
          echo $stok; 
        ?></th>
        <?php
          }
        ?>
      </tr>
      <tr>
        <th colspan=7>Penerimaan</th>
        <?php
          for($i=1;$i<=31;$i++){ 
        ?>
        <th><?php 
          $masuk = 0;
          $masuk += $p[0]['h'.$i];
          echo $masuk;
        ?></th>
        <?php
          }
        ?>
      </tr>
      <tr>
        <th>No</th>
        <th>Nama Pembeli</th>
        <th>RT</th>
        <th>UM</th>
        <th>Lain</th>
        <th>Alamat Pembeli</th>
        <th>Keterangan</th>
        <th colspan=31></th>
      </tr>
    </thead>
    <tbody>
        <?php $k=1; foreach($d as $data){ ?>
          <tr>
            <td><?= $k++; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['k1']; ?></td>
            <td><?= $data['k2']; ?></td>
            <td><?= $data['k3']; ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><?= $data['keperluan']; ?></td>
          <?php for($i=1;$i<=31;$i++){ ?>
              <td><?= $data['h'.$i]; ?></td>
          <?php } ?>
          </tr>
        <?php } ?>
    </tbody>
  </table>
</body>
</html>