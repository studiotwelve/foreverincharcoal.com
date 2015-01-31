<?php
/**
 *
 * @file: site.inc
 * - define MVC for site
 *
/**/
class site{
  protected $options;
  
  protected $error_messages = array(
    
  );
  
  public $id, $domain, $name, $slogan, $contact, $location, $head_title, $mode;
  
  public function __construct($options = null, $initialize = true, $error_messages = null){
    $this->options = array(
      
    );
    
    //first get the domain name
    $this->domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
    
    if ($options) {
        $this->options = $options + $this->options;
    }
    
    if ($error_messages) {
        $this->error_messages = $error_messages + $this->error_messages;
    }
    
    if ($initialize) {
        $this->initialize();
    }
  }
  
  protected function initialize(){
    /**
     *
     * @function: initialize()
     * - initialize the site object
     *
    /**/

  }
  
  protected function conf(){
    
  }
  
  protected function idgen(){
    
  }
  
  protected function dbconnect(){
    
  }
  
  protected function dbselect($what="*", $table="sites", $where=null, $misc=null){
    
  }
  
  protected function dbinsert(){
    
  }
  
  protected function dbupdate(){
    
  }
  
  public function render($type){
    switch($type){
      case "string":
        break;
        
      case "array":
        break;
        
      case "json":
        break;
        
      case "html":
        break;
    }
  }
  
  public function add($vars=null){
    
  }
  
  public function update($vars=null){
    
  }
  
  public function enable($vars=null){
    
  }
  
  public function disable($vars=null){
    
  }
  
  public function remove($vars=null){
    
  }
}
