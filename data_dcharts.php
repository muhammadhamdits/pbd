<?php
    require_once("config.php");
    $data1 = pg_query($conn, "SELECT * FROM tabung WHERE id='1'");
    $data2 = pg_query($conn, "SELECT * FROM tabung WHERE id='2'");
    $data3 = pg_query($conn, "SELECT * FROM tabung WHERE id='3'");
    $data4 = pg_query($conn, "SELECT * FROM tabung WHERE id='4'");
    $data5 = pg_query($conn, "SELECT * FROM tabung WHERE id='5'");
    $data6 = pg_query($conn, "SELECT * FROM tabung WHERE id='6'");
    $data7 = pg_query($conn, "SELECT * FROM tabung WHERE id='7'");
    $data8 = pg_query($conn, "SELECT * FROM tabung WHERE id='8'");
    $data9 = pg_query($conn, "SELECT * FROM tabung WHERE id='9'");

    $data = [];

    $data[] = pg_fetch_assoc($data1)['saldo'];
    $data[] = pg_fetch_assoc($data2)['saldo'];
    $data[] = pg_fetch_assoc($data3)['saldo'];
    $data[] = pg_fetch_assoc($data4)['saldo'];
    $data[] = pg_fetch_assoc($data5)['saldo'];
    $data[] = pg_fetch_assoc($data6)['saldo'];
    $data[] = pg_fetch_assoc($data7)['saldo'];
    $data[] = pg_fetch_assoc($data8)['saldo'];
    $data[] = pg_fetch_assoc($data9)['saldo'];

    echo json_encode($data);