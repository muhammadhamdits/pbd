<?php
require_once('config.php');
$id = $_POST['id'];
$result = pg_query($conn, "DELETE FROM pembeli WHERE id='$id'");
if(isset($result)) {
   echo "YES";
} else {
   echo "";
}