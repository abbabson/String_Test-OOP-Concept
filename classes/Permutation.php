<?php

  class Permutation{

    private $result;

    public function __construct(){
        $this->result = array();

    }

    public function permutate($string, $start, $length){
       if ($start==$length){
          //echo $string."\n";
         array_push($this->result, $string);
       }else{
            for($i = $start; $i<=$length; $i++){
                $string = $this->swap($string, $start, $i);
                $this->permutate($string, $start+1, $length);
                $string = $this->swap($string, $start, $i);
            }
        }

        return $this->result;
    }


    private function swap($string, $i, $j){
        $temp;
        $charArray = str_split($string);
        $temp = $charArray[$i];
        $charArray[$i] = $charArray[$j];
        $charArray[$j] = $temp;
        return implode($charArray);
    }




}

?>
