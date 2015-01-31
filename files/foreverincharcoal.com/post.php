<?php
// @file: handles post ops and optionally returns json

function post(){
  if(is_array($_POST) && !empty($_POST["fid"]) && function_exists($_POST["fid"]."_post")){
    return call_user_func($_POST["fid"]."_post");
  } else {
    return false;
  }
}

function checkout_post(){
  include($_SERVER["DOCUMENT_ROOT"]."/inc/mysql.inc");
  
  unset($_POST["fid"]);
  
  $arr = array();
  
  foreach($_POST as $key => $val){
    $arr[urldecode($key)] = $db->real_escape_string(urldecode($val));
  }
  
  $keys = implode("`, `", array_keys($arr));
  $vals = implode("','", $arr);
  $query = "INSERT INTO orders (`$keys`) VALUES ('$vals')";
    
  if($db->real_query($query) === TRUE){
    $ret = json_encode($arr);
  } else {
    $ret = json_encode(array("error" => $db->error, "query" => $query));
  }
  
  $db->close();
  return $ret;
}

print post();