<?php
// $name = function($first,$last)
// {
//     return("$first $last");
// };
// echo $name ("Rahul","CM")."<br>";



// 1. Anonymous Functions as Closures:

// $message = "Hello ";

// $greeting = function ($name) use ($message) {
//     echo $message . $name;
// };

// $greeting('rahul'); 



// 2. Passing Anonymous Functions as Arguments:

// function processNumbers($numbers, $func) {
//     foreach ($numbers as $number) {
//         echo $func($number) . " ";
//     }
// }

// $numbers = [1, 2, 3];

// processNumbers($numbers, function($n) {
//     return $n * 2;
// });
// // Output: 2 4 6



// // 3. Assigning Anonymous Functions to Variables:


// $addition = function($a, $b) {
//     return $a + $b;
// };

// $result = $addition(5, 3); // Output: 8



// // 4. Arrow Functions


// $addition = fn($a, $b) => $a + $b;

// $result = $addition(5, 3); // Output: 8



// // 5. Callback Functions in Array Functions:


// $numbers = [1, 2, 3];

// $filtered = array_filter($numbers, fn($n) => $n % 2 === 0);

// print_r($filtered); // Output: [2]


function add(&$value) {
  $value += 5;
}

$num = 2;
add($num);
echo $num;
?>
