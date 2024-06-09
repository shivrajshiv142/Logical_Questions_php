<?php
  $number = 150;
   
 if ($number >= 100) {
    echo"error";
 } else if ($number >= 90){
    echo"A";
 }else if($number >= 80){
     echo "B";   
    }elseif($number >= 70){
        echo "C";
    }elseif ($number >= 60) {
        echo"D";
    }elseif($number >= 50){
        echo"E";
    }elseif ($number >= 40) {
        echo "F";
    }elseif ($number <= 30) {
     echo"Fail";
    }

  ?>