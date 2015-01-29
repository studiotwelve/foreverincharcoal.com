<?php
include(ROOT."/conf/foreverincharcoal.com.php");
$db = new mysqli($host, $username, $passwd, $dbname, $port, $socket);

if($db->connect_error){
  $db_connect_error = "Database Connection Error (".$db->connect_error_no.") ".$db->connect_error;
  
  error_log($db_connect_error, 3, ROOT."framr.error.log");
}
//don't forget to $db->close();