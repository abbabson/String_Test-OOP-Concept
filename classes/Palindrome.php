<?php

class Palindrome{

    private $result;

    public function __construct(){
        $this->result = null;
    }

    public function determinePalindrome($string){
        $i = 0;
        $length = strlen($string)-1;
        $flag = 0;

        while($length>$i){
          if ($string[$i] != $string[$length]){
             $flag = 1;
             break;
          }
          $i++;
          $length--;
        }

        if ($flag==0){
          $this->result = $string.' is a Palindrome ';
        }else{
          $this->result = $string.' is not a Palindrome';
        }

        return $this->result;
    }


}


?>
