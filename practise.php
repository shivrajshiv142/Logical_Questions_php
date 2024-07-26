
 <?php
 // Get the basic salary from user input
 echo " Ramesh's basic salary: ";
 $basic_salary = 100;
 
 // Calculate allowances
 $dearness_allowance = 0.40 * $basic_salary;
 $house_rent_allowance = 0.20 * $basic_salary;
 
 // Calculate gross salary
 $gross_salary = $basic_salary - $dearness_allowance -  $house_rent_allowance;
 
 // Display the results
//  echo "Basic Salary: $basic_salary\n";
//  echo "Dearness Allowance (40%): $dearness_allowance\n";
//  echo "House Rent Allowance (20%): $house_rent_allowance\n";
 echo "Gross Salary: $gross_salary\n";

 echo"Ramesh basic salary :";
 echo "<br>"; 
  echo "Ramesh basic salary: ";  
 $basic_salary= 10000;
 $dearness_allowance = 0.40 *$basic_salary;
 $house_rent_allowance = 0.20 * $basic_salary;

 $gross_salary = $basic_salary - $dearness_allowance - $house_rent_allowance;
 echo "gross salary : $gross_salary\n";
//   echo"Ramesh basic  salary:";
 ?>

<?php 
 echo"Ramesh basic salary";
$basic_salary = 1000;

$dearness_allowance = $basic_salary * 0.40;
$house_rent_allowance  = $basic_salary * 0 . 20;

$gross_salary = $basic_salary - $dearness_allowance - $house_rent_allowance;

echo "Gross salary : $gross_salary"
?>