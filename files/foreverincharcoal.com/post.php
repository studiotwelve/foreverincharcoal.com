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
  extract($_POST);
  include(ROOT."/inc/mysql.inc");
  
  $schema = "CREATE TABLE IF NOT EXISTS orders (
    uuid VARCHAR(255) UNIQUE KEY PRIMARY KEY,
    
  )";
}