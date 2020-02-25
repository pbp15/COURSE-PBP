<?php
require_once 'Printable.php';
//el nombre de la clase es identico al del archivo
class BaseElement  implements Printable {
  protected  $title ; 
  public $description;
  public $visible =  true ;
  public $months;

  public function __construct($title, $description) {
      $this->setTitle( $title);
      $this->description = $description ;

  }

  public function setTitle( $t){
    if($t == ' '){
      $this->title  ='N/A';
    }else {
      $this->title  = $t;
    }

  }

  public  function getTitle() {
      return $this->title;
  }
  //convertido a un metodo interno 
 public function getDuracionAsString(){
    $years =  floor($this->months/12) ; 
    $extraMonths = $this->months % 12 ;
    if($years<=0){
      return "$extraMonths meses";
    }elseif($extraMonths <= 0){
      return "$years años";
    }else {
      return "$years años $extraMonths meses";
    }

      return " $years años   $months meses";
  }
  public function getDescription(){
    return $this->description;

  }
}
























