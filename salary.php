<?php
echo "2 <br>";
 function calculation($dob){
   echo "4<br>";
   $birthdate = new Datetime($dob);
   echo $birthdate ->format("$dob");
   $currentdate = new Datetime ();
   $age = $currentdate ->diff($birthdate)->y;
   return $age;
 }
 echo "10<br>";
 $dateofbirth = '2004-06-27 ';
 $age = calculation($dateofbirth);
 echo "14 <br>";
//  echo "</br>";
 echo "</br>Current age is:" . $age;
echo "<br>";
echo "17<br>";
 if ($age >= 18){
   echo"you can give vote";
 } elseif ($age <= 18) {
   echo " </br>You will not give vote";
 }
 echo "23 <br>";
?>