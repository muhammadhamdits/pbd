<?php
date_default_timezone_set('Asia/Jakarta');

$conn = pg_connect("host=localhost port=5433 dbname=gas user=postgres password=ad");

function asign($conn, $var){
    $asign = htmlspecialchars(trim(pg_escape_string($conn, $var)));
    return $asign;
}
// <?php
// date_default_timezone_set('Asia/Jakarta');

// $conn = pg_connect("host=otto.db.elephantsql.com port=5432 dbname=gas user=qkkerqft password=h1nKPFttWl_61VkW7Rz-aQqB4gBXqMt8");

// function asign($conn, $var){
//     $asign = htmlspecialchars(trim(pg_escape_string($conn, $var)));
//     return $asign;
// }