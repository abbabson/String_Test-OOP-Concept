<html>
<head>
  <title>String Test</title>
</head>

<body style="margin-top:30px; margin-left:50px;">

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <table>
              <tr>
                  <td>
                      <input type="text" name="stringInput" style="font-size:25px;" required />
                  </td>
                  <td>
                      <input type="submit" name="btnSubmit" style="font-size:25px;"/>
                  </td>
              </tr>
          </table>
  </form>

  <?php

      require_once('classes/Consonant.php');
      require_once('classes/Palindrome.php');
      require_once('classes/Permutation.php');
      require_once('classes/Vowel.php');

      if (isset($_POST['btnSubmit'])){
            $stringInput = $_POST['stringInput'];
            $start = 0;
            $length = strlen($stringInput);

            // ----------- Permutate --------------------------------------------
            $permutation = new Permutation();
            $permutate = $permutation->permutate($stringInput, $start, $length-1);


            echo "<h3>All Possible Combinations (".count($permutate).")</h3>";
            foreach($permutate as $key=>$value){
                echo $value."  ";
            }

            //-------------- End of Permutate ----------------------------------



            //-------------- Vowels --------------------------------------------
            $vowel = new Vowel();
            $getVowels = $vowel->getVowels($stringInput);

            echo "<h3>Vowels </h3>";
            foreach($getVowels as $key=>$value){
               foreach($value as $key=>$vowel){
                 echo $vowel.", ";
               }
            }
            //-------------- End of Vowels -------------------------------------


            //--------------- Consonants ---------------------------------------
            $consonant  = new Consonant();
            $getConsonants = $consonant->getConsonant($stringInput);

            echo "<h3>Consonants</h3>";
            foreach($getConsonants as $key=>$value){
               foreach($value as $key=>$consonant){
                 echo $consonant.",  ";
               }
            }


            //--------------- End of Consonants -------------------------------



            //-------------- Palindrome ----------------------------------------
            $palindrome = new Palindrome();
            $isPalindrome = $palindrome->determinePalindrome($stringInput);

            echo "<h3>Palindrome Check</h3>";
            echo $isPalindrome;

            //------------- End of Palindrome ----------------------------------
      }


  ?>
