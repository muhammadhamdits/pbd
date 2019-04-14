<?php
require_once("config.php");
require_once("vendor/autoload.php");

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

  if(isset($_POST['tambah1'])){
    $ukuran = asign($conn, $_POST["ukuran"]);
    $jumlah = asign($conn, $_POST["jumlah"]);
    $data   = autoFetch($conn, "SELECT * FROM tabung WHERE ukuran='$ukuran' AND jenis='Kosong'");
    $jumlah = $jumlah + $data['saldo'];
    $id     = $data['id'];
    $q      = pg_query($conn, "UPDATE tabung SET saldo='$jumlah' WHERE id='$id'");
    if(pg_affected_rows($q) <= 0){
      echo "YES";
    }
  } else if(isset($_POST['jual1'])){
    $ukuran = asign($conn, $_POST["ukuran"]);
    $jumlah = asign($conn, $_POST["jumlah"]);
    $data   = autoFetch($conn, "SELECT * FROM tabung WHERE ukuran='$ukuran' AND jenis='Kosong'");
    if($data['saldo'] < $jumlah){
      echo "YES";
    } else{
      $jumlah = $data['saldo'] - $jumlah;
      $id     = $data['id'];
      $q      = pg_query($conn, "UPDATE tabung SET saldo='$jumlah' WHERE id='$id'");
      if(pg_affected_rows($q)<=0){
        echo "YES";
      }
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
    $id      = Uuid::uuid4()->toString();
    $pel     = asign($conn, $_POST['plg']);
    $jumlah  = asign($conn, $_POST['jumlah']);
    $gas     = asign($conn, $_POST['ukuran']);
    $tanggal = date("Y-m-d");
    $jenis   = 3;
    $data    = autoFetch($conn, "SELECT * FROM tabung WHERE id='$gas'");
    
    if($data['saldo'] < $jumlah){
      echo "YES";
    }else{
      $jml    = $data['saldo'] - $jumlah;
      $ukuran = $data['ukuran'];
      $data2  = autoFetch($conn, "SELECT * FROM tabung WHERE jenis='Kosong' AND ukuran='$ukuran'");
      $id2    = $data2['id'];
      $saldokosong = $data2['saldo'] + $jumlah;
      pg_query($conn, "UPDATE tabung SET saldo='$saldokosong' WHERE id='$id2'");
      pg_query($conn, "UPDATE tabung SET saldo='$jml' WHERE id='$gas'");
      pg_query($conn, "INSERT INTO transaksi VALUES('$id', '$pel', '$tanggal', '$jumlah', '$jenis', '$gas')");
    }
  } else if(isset($_POST['restokgas'])){
    $id       = Uuid::uuid4()->toString();
    $jumlah   = asign($conn, $_POST['jumlah']);
    $gas      = asign($conn, $_POST['ukuran']);
    $tanggal  = date("Y-m-d");
    $jenis    = 1;
    $gas1     = autoFetch($conn, "SELECT * FROM tabung WHERE id='$gas'");
    
    if($gas1['saldo'] < $jumlah){
      echo "YES";
    } else{
      $jk      = $gas1['saldo'] - $jumlah;
      $ukuran  = $gas1['ukuran'];
      $data2   = autoFetch($conn, "SELECT * FROM tabung WHERE jenis='Berisi' AND ukuran='$ukuran'");
      $data3   = autoFetch($conn, "SELECT * FROM tabung WHERE jenis='Retur' AND ukuran='$ukuran'");
      $idisi   = $data2['id'];
      $idretur = $data3['id'];
      $jr      = $data3['saldo'];
      $s       = $jumlah + $jr;
      $saldoberisi = $data2['saldo'] + $jumlah + $jr;
      pg_query($conn, "UPDATE tabung SET saldo=0 WHERE id='$idretur'");
      pg_query($conn, "UPDATE tabung SET saldo='$jk' WHERE id='$gas'");
      pg_query($conn, "UPDATE tabung SET saldo='$saldoberisi' WHERE id='$idisi'");
      pg_query($conn, "INSERT INTO transaksi VALUES('$id', 'ownerPangkalan', '$tanggal', '$s', '$jenis', '$idisi')");
    }
  } else if(isset($_POST['returgas'])){
    $id       = Uuid::uuid4()->toString();
    $jumlah   = asign($conn, $_POST['jumlah']);
    $idgas    = asign($conn, $_POST['ukuran']);
    $pel      = asign($conn, $_POST['plg']);
    $tgltrans = asign($conn, $_POST['tanggal']);
    $tanggal  = date("Y-m-d");
    $jenis    = 2;
    $gb1      = autoFetch($conn, "SELECT * FROM tabung WHERE id='$idgas'");
    if($gb1['saldo'] < $jumlah){
      echo "YES";
    } else{
      if($xx = autoFetch($conn, "SELECT * FROM transaksi WHERE pel='$pel' AND tanggal='$tgltrans' AND jumlah>='$jumlah' AND jenis=3 AND gas='$idgas'")){
        $ukuran = $gb1['ukuran'];
        $gr1    = autoFetch($conn, "SELECT * FROM tabung WHERE jenis='Retur' AND ukuran='$ukuran'");
        $idr    = $gr1['id'];
        $jr     = $jumlah + $gr1['saldo'];
        $jb     = $gb1['saldo'] - $jumlah;

        pg_query($conn, "UPDATE tabung SET saldo='$jr' WHERE id='$idr'");
        pg_query($conn, "UPDATE tabung SET saldo='$jb' WHERE id='$idgas'");
        pg_query($conn, "INSERT INTO transaksi VALUES('$id', '$pel', '$tanggal', '$jumlah', '$jenis', '$idr')");
      } else{
        echo "YES";
      }
    }
  }