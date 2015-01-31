<?php
/**
 *
 * @file: date.inc define MVC for d
 * @usage: $d = new d(); print $d->Y; outputs: 2015
 *         print $d->withFormat("d/m/Y"); outputs: 30/01/2015
 *
/**/

class d{      
  public $year, $month, $week, $day, $date, $time, $miltime, $timestamp, $short, $long, $path;
  
  public function __construct($timezone = "America/New_York"){
    /**
     *
     * @function: __construct()
     * - default function to run when calling $variable = new framr_date();
     *
    /**/
    
    date_default_timezone_set($timezone);
    
    $this->year      = date("Y");                   // Year:  2015
    $this->month     = date("m");                   // Month: 01
    $this->week      = date("W");                   // Week:  5
    $this->day       = date("d");                   // day:   30
    $this->date      = date("m/d/Y");               // date:  01/30/2015
    $this->time      = date("h:i:s a");
    $this->miltime   = date("H:i:s");
    $this->timestamp = date("U");
    $this->short     = date("m/d/Y h:i:s a");
    $this->long      = date("l, F jS, Y h:i:s a T");
    $this->path      = date("Y/m/d");
  }
    
  public function withFormat($f=null){
    return is_null($f) ? date() : date($f);
  }
}