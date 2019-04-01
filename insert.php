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
    if($jumlah > $data['saldo']){
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
      $idkosong = $gas1['id'];
      $q2 = pg_query($conn, "SELECT * FROM tabung WHERE jenis='Berisi' AND ukuran='$ukuran'");
      $data2 = pg_fetch_assoc($q2);
      $saldoberisi = $data2['saldo'] + $jumlah;
      pg_query($conn, "UPDATE tabung SET saldo='$jk' WHERE id='$idkosong'");
      pg_query($conn, "UPDATE tabung SET saldo='$saldoberisi' WHERE id='$gas'");
      pg_query($conn, "INSERT INTO transaksi VALUES('$id', '', '$tanggal', '$jumlah', '$jenis', '$gas')");
    }
  } else if(isset($_POST['returgas'])){
    
  }