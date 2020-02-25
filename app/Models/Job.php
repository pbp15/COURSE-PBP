<?php

require_once 'BaseElement.php';

class Job extends BaseElement  {


  public function __construct($title, $description){
    $newTitle = 'Job : '. $title;
    //parent::__construct($newTitle, $description);
    $this->title =  $newTitle; //heredado desde su clase Hija gracias al protected(hrencia con las hijas)
  }
  public function getDuracionAsString(){
    $years =  floor($this->months/12) ; 
    $extraMonths = $this->months % 12 ;
    if($years<=0){
      return " Job duration: $extraMonths meses";
    }elseif($extraMonths <= 0){
      return " Job duration: $years años";
    }else {
      return " Job duration: $years años $extraMonths meses";
    }

      return " Job duration: $years años   $months meses";
  }
   



    

}