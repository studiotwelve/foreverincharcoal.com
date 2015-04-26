<?php
#! @system.inc:
#  - system scaffolding



function o($str){ // obfuscate a string
  
}

#! string t(string $str [, array $rep])
#  - sanitize str [optionally: replace tokens]

function t($str, $rep = null){
#   - @$str: string to be cleaned and subbed
#   - @$rep: assoc array [tokens => replacements]
#            *Does not listen to system tokens use token_replace($str);

  return is_array($rep) ? str_ireplace(array_keys($rep), $rep, plain($str)) : plain($str);
}

#! string plain(string $str)
#  - remove all tags, line breaks, consecutive spaces, etc. from strings 

function plain($str){
  $to_strip = "/(<[^>]*>|\\x3C[^>]*>|[\r\n\t]|\s\s+|(java)?script:?|document.write\(\*\);?)/");
  
  $str = stripslashes($str);
  
  while(preg_match($to_strip, $str)){
    $str = preg_replace($to_strip, ' ', $str);
  }
  
  return trim($str);
}

#! string a(string $href, string $content [, array $attibutes])
#  - output formatted html links

function a($href, $content, $attributes){
  
}

abstract class model {
  
  public function __array(){
    return $this->__arrayrecursive();
  }
  
  public function __arrayrecursive($a = null){
    $a = is_null($a) ? get_object_vars($this) : $a;
    
    foreach($a as $k => $v){
      $a[$k] = is_object($v) ? $v->__array() : is_array($v) ? $this->__arrayrecursive($v) : $v ;
    }
    
    return $a;
  }
  
  public function __json(){
    return json_encode($this->__array());
  }
  
  public function __string(){
    return 
  }
}