<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'orange', 'pear'];

// GET LENGTH
// echo count($fruits);

// SEARCH ARRAY
// var_dump((in_array('apple', $fruits)));

// ADD TO ARRAY
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry'); // PUSH TO END
array_unshift($fruits, 'mango'); // ADD TO TOP

// REMOVE FROM ARRAY
array_pop($fruits); // TAKE FROM END
array_shift($fruits); //TAKE FROM TOP
// unset($fruits[2]);

// SPLIR INTO 2 CHUNKS
$chunked_array = array_chunk($fruits,2);

// print_r($chunked_array);


// print_r($fruits);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r(($c));

$keys =array_keys(($c));
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1, 20);

// print_r($numbers);

$newNumbers = array_map(function($number) {
  return "Number $number";
}, $numbers);

// print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
// print_r($lessThan10);

$sum = array_reduce($numbers, fn($carry, $number)=> $carry + $number);
var_dump($sum);