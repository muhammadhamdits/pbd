<?php
date_default_timezone_set('Asia/Jakarta');

$conn = pg_connect("host=localhost port=5433 dbname=gas user=postgres password=ad");

function asign($conn, $var){
    return htmlspecialchars(trim(pg_escape_string($conn, $var)));
}

function autoFetch($conn, $query){
    return pg_fetch_assoc(pg_query($conn, $query));
}