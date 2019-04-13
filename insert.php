<?php
require_once("config.php");
require_once("vendor/autoload.php");

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

  if(isset($_POST['tambah1'])){
    $ukuran = asign($conn, $_POST["ukuran"]);
    $jumlah = asign($conn, $_POST["jumlah"]);
    $query1 = pg_query($conn, "SELECT * FROM tabung WHERE ukuran='$ukuran' AND jenis='Kosong'");
    $data = pg_fetch_assoc($query1);
    $jumlah = $jumlah + $data['saldo'];
    $id = $data['id'];
    pg_query($conn, "UPDATE tabung SET saldo='$jumlah' WHERE id='$id'");
  } else if(isset($_POST['jual1'])){
    $ukuran = asign($conn, $_POST["ukuran"]);
    $jumlah = asign($conn, $_POST["jumlah"]);
    $query1 = pg_query($conn, "SELECT * FROM tabung WHERE ukuran='$ukuran' AND jenis='Kosong'");
    $data = pg_fetch_assoc($query1);
    if($data['saldo'] < $jumlah){
      echo "YES";
    } else{
      $jumlah = $data['saldo'] - $jumlah;
      $id = $data['id'];
      pg_query($conn, "UPDATE tabung SET saldo='$jumlah' WHERE id='$id'");
    }
  } else if(isset($_POST['tambahpel'])){
    $uuid = Uuid::uuid4()->toString();
    $nama = asign($conn, $_POST['nama1']);
    $alamat = asign($conn, $_POST['alamat1']);
    $kat = asign($conn, $_POST['kat1']);
    $kep = asign($conn, $_POST['kep1']);
    pg_query($conn, "INSERT INTO pembeli VALUES ('$uuid', '$nama', '$alamat', '$kep', '$kat')");
  } else if(isset($_POST['editpel'])){
    $id = asign($conn, $_POST['idedpel']);
    $nama = asign($conn, $_POST['nama2']);
    $alamat = asign($conn, $_POST['alamat2']);
    $kat = asign($conn, $_POST['kat2']);
    $kep = asign($conn, $_POST['kep2']);
    pg_query($conn, "UPDATE pembeli SET nama='$nama', alamat='$alamat', keperluan='$kep', jenis='$kat' WHERE id='$id'");
  } else if(isset($_POST['jualgass'])){
    $id = Uuid::uuid4()->toString();
    $pel = asign($conn, $_POST['plg']);
    $tanggal = date("Y-m-d");
    $jumlah = asign($conn, $_POST['jumlah']);
    $jenis = 3;
    $gas = asign($conn, $_POST['ukuran']);

    $query1 = pg_query($conn, "SELECT * FROM tabung WHERE id='$gas'");
    $data = pg_fetch_assoc($query1);
    
    if($data['saldo'] < $jumlah){
      echo "YES";
    }else{
      $jml = $data['saldo'] - $jumlah;
      $ukuran = $data['ukuran'];
      $query2 = pg_query($conn, "SELECT * FROM tabung WHERE jenis='Kosong' AND ukuran='$ukuran'");
      $data2 = pg_fetch_assoc($query2);
      $saldokosong = $data2['saldo'] + $jumlah;
      $id2 = $data2['id'];
      pg_query($conn, "UPDATE tabung SET saldo='$saldokosong' WHERE id='$id2'");
      pg_query($conn, "UPDATE tabung SET saldo='$jml' WHERE id='$gas'");
      pg_query($conn, "INSERT INTO transaksi VALUES('$id', '$pel', '$tanggal', '$jumlah', '$jenis', '$gas')");
    }
  } else if(isset($_POST['restokgas'])){
    $id = Uuid::uuid4()->toString();
    $tanggal = date("Y-m-d");
    $jumlah = asign($conn, $_POST['jumlah']);
    $jenis = 1;
    $gas = asign($conn, $_POST['ukuran']);

    $qgas = pg_query($conn, "SELECT * FROM tabung WHERE id='$gas'");
    $gas1 = pg_fetch_assoc($qgas);
    
    if($gas1['saldo'] < $jumlah){
      echo "YES";
    } else{
      $jk = $gas1['saldo'] - $jumlah;
      $ukuran = $gas1['ukuran'];
      $q2 = pg_query($conn, "SELECT * FROM tabung WHERE jenis='Berisi' AND ukuran='$ukuran'");
      $data2 = pg_fetch_assoc($q2);
      $q3 = pg_query($conn, "SELECT * FROM tabung WHERE jenis='Retur' AND ukuran='$ukuran'");
      $data3 = pg_fetch_assoc($q3);
      $idretur=$data3['id'];
      $idisi = $data2['id'];
      $jr = $data3['saldo'];
      $saldoberisi = $data2['saldo'] + $jumlah + $jr;
      $s = $jumlah + $jr;
      pg_query($conn, "UPDATE tabung SET saldo=0 WHERE id='$idretur'");
      pg_query($conn, "UPDATE tabung SET saldo='$jk' WHERE id='$gas'");
      pg_query($conn, "UPDATE tabung SET saldo='$saldoberisi' WHERE id='$idisi'");
      pg_query($conn, "INSERT INTO transaksi VALUES('$id', 'ownerPangkalan', '$tanggal', '$s', '$jenis', '$idisi')");
    }
  } else if(isset($_POST['returgas'])){
    $id = Uuid::uuid4()->toString();
    $tanggal = date("Y-m-d");
    $jumlah = asign($conn, $_POST['jumlah']);
    $jenis = 2;
    $idgas = asign($conn, $_POST['ukuran']);
    $pel = asign($conn, $_POST['plg']);
    $tgltrans = asign($conn, $_POST['tanggal']);

    $gb = pg_query($conn, "SELECT * FROM tabung WHERE id='$idgas'");
    $gb1= pg_fetch_assoc($gb);
    if($gb1['saldo'] < $jumlah){
      echo "YES";
    } else{
      $trans = pg_query($conn, "SELECT * FROM transaksi WHERE pel='$pel' AND tanggal='$tgltrans' AND jumlah>='$jumlah' AND jenis=3 AND gas='$idgas'");
      if(pg_fetch_assoc($trans)){
        $ukuran = $gb1['ukuran'];
        $gr = pg_query($conn, "SELECT * FROM tabung WHERE jenis='Retur' AND ukuran='$ukuran'");
        $gr1= pg_fetch_assoc($gr);
        $idr= $gr1['id'];
        $jr = $jumlah + $gr1['saldo'];
        $jb = $gb1['saldo'] - $jumlah;

        pg_query($conn, "UPDATE tabung SET saldo='$jr' WHERE id='$idr'");
        pg_query($conn, "UPDATE tabung SET saldo='$jb' WHERE id='$idgas'");
        pg_query($conn, "INSERT INTO transaksi VALUES('$id', '$pel', '$tanggal', '$jumlah', '$jenis', '$idr')");
      } else{
        echo "YES";
      }
    }
  }