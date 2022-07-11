<?php

/**
 	* @param  $input
	* @return $array
	* @author Godstime
	* @challengs Given an array of integers.
	* Return an array, where the first element is the count of positives numbers and 
	* the second element is sum of negative numbers. 0 is neither positive nor negative.
	* If the input is an empty array or is null, return an empty array. 
*/

function countPositivesSumNegatives($input) {
	$newArr = [];
   $countPositive = 0;
	$sumOfNegative = 0;
	if (empty($input)) {
		return [];
	} else { 
   for ($i=0; $i <=count($input); $i++) { 
      if ($input[$i] > 0) {
         $countPositive++;
      } else {
         $sumOfNegative = $sumOfNegative + $input[$i];
      }
   }
   array_push($newArr,$countPositive,$sumOfNegative);}
   return $newArr;
}

// echo countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]);
// echo countPositivesSumNegatives([]);
var_dump(countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]));
// var_dump(countPositivesSumNegatives([]));
echo "<br>--------------------------<br>";

?>