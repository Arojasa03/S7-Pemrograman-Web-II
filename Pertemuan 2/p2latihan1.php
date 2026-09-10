<?php
  $a = 1; 
  $b = 2; 
  $c = $a . $b; // Nilai $c menjadi "12" (menggabungkan '1' dan '2')
  
  $d = $c + 1;  // Nilai $d menjadi 13 (12 + 1)
  echo $d . "<br>"; // Output: 13

  $e = "Number"; 
  $f = $e . $d; // Nilai $f menjadi "Number13"
  echo $f;      // Output: Number13
?>