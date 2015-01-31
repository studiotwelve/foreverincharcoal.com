<?php
include($_SERVER["DOCUMENT_ROOT"]."/conf/foreverincharcoal.com.php");
$db = new mysqli($host, $username, $passwd, $dbname, $port, $socket);

if($db->connect_error){
  $db_connect_error = "Database Connection Error (".$db->connect_error_no.") ".$db->connect_error;
  
  error_log($db_connect_error, 3, $_SERVER["DOCUMENT_ROOT"]."/framr.error.log");
}
//don't forget to $db->close();