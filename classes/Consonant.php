<?php

class Consonant{

  private $matches;

  public function __construct(){
      $this->matches = null;
  }

  public function getConsonant($string){
        $regex = ("/[bcdfghjklmnpqrstvwxyz]/i");
        preg_match_all($regex, $string, $this->matches);

        return $this->matches;

  }

}

?>
