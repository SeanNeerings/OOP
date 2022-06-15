<?php

class bottle {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    private function get_name() {
      return $this->name;
    }
     protected function get_color() {
      return $this->color;
    }
  }

  class metal_bottle extends bottle {
    public $id;
    public $use;
  
    function __construct($id, $use) {
      $this->id = $id;
      $this->use = $use;
    }
    function get_id() {
      return $this->id;
    }
    function get_use() {
      return $this->use;
    }
    
  }




  
  $bottle = new bottle("bottle", "red");
  echo $bottle->get_color();
  echo " ";
  echo $bottle->get_name();
    

  
  $metal_bottle = new metal_bottle("420", "koffie warm houden");
  echo " ";
  echo $metal_bottle->get_id();
  echo " ";
  echo $metal_bottle->get_use();


?>