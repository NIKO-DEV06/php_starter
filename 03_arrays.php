<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// SIMPLE ARRAY
$numbers = [1,2,3,4,5];
$fruits=array('apple', 'orange', 'pear');

// var_dump($numbers);

// echo $fruits[1];

// Associative Array

$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green',
];

// echo $colors[4];

$hex = [
  'red'=>'#f00',
  'blue'=>'#0f0',
  'green'=>'#00f',
];

// echo $hex['blue'];

$person = [
  'first_name'=> 'Emma',
  'last_name'=> 'Ayeniko',
  'email'=> 'ayenikoemmanuel06@gmail.com',
];

// echo $person['first_name'];

$people = [
  [
    'first_name'=> 'Emma',
    'last_name'=> 'Ayeniko',
    'email'=> 'ayenikoemmanuel06@gmail.com',
  ],
  [
    'first_name'=> 'John',
    'last_name'=> 'doe',
    'email'=> 'johndoe@gmail.com',
  ],
  [
    'first_name'=> 'Dan',
    'last_name'=> 'Ayeniko',
    'email'=> 'dan@gmail.com',
  ]
  ];

  // echo $people[1]['email'];
  var_dump(json_encode($people));