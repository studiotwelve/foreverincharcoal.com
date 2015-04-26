<?php
/*! @user.inc: () */

function user_scheme(){
  return array_filter(array(
    "id"  => array(
      "name"      => "id",
      "type"      => "INT",
      "index"     => "INDEX",
      "increment" => true,
    ),
    
    "key"  => array(
      "name"      => "key",
      "type"      => "VARCHAR",
      "length"    => "255",
      "index"     => "PRIMARY",
    ),
    
    "email"  => array(
      "name"      => "email",
      "type"      => "VARCHAR",
      "length"    => "255",
      "index"     => "UNIQUE",
    ),
    
    "passwd"  => array(
      "name"      => "passwd",
      "type"      => "VARCHAR",
      "length"    => "255",
    ),
    
    "created"  => array(
      "name"      => "created",
      "type"      => "VARCHAR",
      "length"    => "255",
    ),
    
    "updated"  => array(
      "name"      => "updated",
      "type"      => "VARCHAR",
      "length"    => "255",
    ),
    
    "status"  => array(
      "name"      => "status",
      "type"      => "INT",
    ),
  ));
}

function user_register_form(){
  return array(
    "user_register" = array(
      "id" => "user_register",
      "attributes" => array(),
    ),
  );
}

function user_login_form(){
  
}

function user_password_form(){
  
}

function user_settings_form(){
  
}

function user_register_post(){
  
}

function user_login_post(){
  
}

function user_password_post(){
  
}

function user_settings_post(){
  
}

