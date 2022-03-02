<?php

  class Vowel{

        private $matches;

        public function __construct(){
            $this->matches = null;
        }


        public function getVowels($string){
            preg_match_all('/[aeiou]/i', $string, $this->matches);

            return $this->matches;
        }

}

?>
