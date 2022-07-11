<?php 

/**
    * @param Int $lenght
    * @return String
    * @author Godstime
    * This task generate random password of 8 length
*/

function passwordGenerator($lenght)
{
	$char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#$&*";
	$password = "";
	for ($i=0; $i <= $lenght; $i++) { 
		$password .= $char[rand(0,strlen($char)-1)];
	}
	return $password;
}

echo passwordGenerator(8);

echo "<br>--------------------------<br>";
/*
DESCRIPTION:
Write a function that takes a list of strings as an argument and returns a filtered list containing the same elements but with the 'geese' removed.
The geese are any strings in the following array, which is pre-populated in your solution:
*/
function gooseFilter($birds) {
    $geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"];
    $newArr = [];
    foreach ($birds as $value) {
       if (!in_array($value, $geese)) {
            array_push($newArr, $value);
       }
    }
    return $newArr;
}
print_r(gooseFilter(["Mallard", "Hook Bill", "African", "Crested", "Pilgrim", "Toulouse", "Blue Swedish"]));
echo "<br>--------------------------<br>";



/*
DESCRIPTION:
Return the number (count) of vowels in the given string.

We will consider a, e, i, o, u as vowels for this Kata (but not y).

The input string will only consist of lower case letters and/or spaces.
*/

function getCount($str) {

    $vowels = ['a','e','i','o','u'];
    $vowelsCount = 0;

    for ($i=0; $i < strlen($str); $i++) { 
        $char = $str[$i];
        $vowelsCount += in_array($char, $vowels);
    }

    return $vowelsCount;
}
echo getCount("abracadabra");
echo "<br>";
echo getCount("Godstime");
echo "<br>--------------------------<br>";

/*
DESCRIPTION:
A simple calculator built with OOP approach in php
*/

class Calc {
	private $a;
	private $b;
	public function __construct($a,$b){
		$this->a = $a;
		$this->b = $b;
	}

	public function add(){
		return $this->a + $this->b;
	}
	public function multiply(){
		return $this->a * $this->b;
	}
	public function subtract(){
		
	}
	public function divide(){
			
	}
}
$mycalc = new Calc(12, 6);
echo $mycalc-> add()."<br>";
echo $mycalc-> multiply()."\n"; 
echo "<br>--------------------------<br>";


/*
DESCRIPTION:
A simple calculator built with OOP approach in php with Constructor property promotion
*/

class Calculator {

	public function __construct(public int $a, public int $b, public string $operator){

	}

	public function calculate(){
		switch ($this->operator) {
			case 'add':
				return $this->a + $this->b;
				break;
			case 'sub':
				return $this->a - $this->b;
				break;
			case 'divide':
				return $this->a / $this->b;
				break;
			case 'mult':
				return $this->a * $this->b;
				break;
			default:
				echo "Error!";
			break;
		}
	}
}
$add = new Calculator(3,3,"add");
$sub = new Calculator(10,3,"sub");
$divide = new Calculator(12,3,"divide");
$mult = new Calculator(8,3,"mult");
try {
	echo $add->a. " + ".$add->b. " = " .$add->calculate()."<br>";
	echo $sub->a. " - ".$sub->b. " = " .$sub->calculate()."<br>";
	echo $divide->a. " / ".$divide->b. " = " .$divide->calculate()."<br>";	
	echo $mult->a. " * ".$mult->b. " = " .$mult->calculate()."<br>";
	
} catch (TypeError $e) {
	echo "Error!: ".$e->getMessage();
}
echo "<br>--------------------------<br>";

/*
DESCRIPTION:
Complete the function that accepts a string parameter, and reverses each word in the string. 
All spaces in the string should be retained.
*/

function reverseWords($str) {
   $newArr = [];
    $a = explode(" ",$str);
    for ($i=0; $i < count($a); $i++) { 
       array_push($newArr,strrev($a[$i]));
    }
    return join(" ",$newArr);
}
echo reverseWords('ehT kciuq nworb xof spmuj revo eht yzal .god');
// print_r(reverseWords('The quick brown fox jumps over the lazy dog.'));
echo "<br>";
echo reverseWords('Godstime is the best');
echo "<br>--------------------------<br>";

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
		array_push($newArr,$countPositive,$sumOfNegative);
	}
   return $newArr;
}
print_r(countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]));
echo '<br>';
var_dump(countPositivesSumNegatives([]));
echo '<br>';
echo json_encode(countPositivesSumNegatives([-15, 2, 3, 4, 5, -11, 7, 8, 9, 10, 6, -12, -13, -14,1]));
echo "<br>--------------------------<br>";





?>