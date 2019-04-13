<?php
    require_once("config.php");
    $data = [];
    
    for($i=1;$i<=9;$i++){
        $o=$i-1;
        $data[$o] = pg_query($conn, "SELECT * FROM tabung WHERE id='$i'");
        $data[$o] = pg_fetch_assoc($data[$o])['saldo'];
    }

    echo json_encode($data);