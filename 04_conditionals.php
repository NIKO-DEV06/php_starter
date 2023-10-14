<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

// if($age >= 18){
//   echo 'You are old enough to vote';
// } else {
//   echo 'Sorry, you are not old enough to vote';
// }

$t = date('H');

// if($t < 12) {
//   echo 'Good Morning';
// } elseif($t<17) {
// echo 'Good Afternoon';
// } else {
//    echo 'Good Evening';
//   }

$posts = ['First Post'];

  // if(!empty($posts)){
  //   echo $posts[0];
  // } else {
  //   echo 'No posts...';
  // }

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// echo !empty($posts) ? $posts[0] : 'No Posts...';

// $firstPost = !empty($posts) ? $posts[0] : 'No Posts...';
// $firstPost = !empty($posts) ? $posts[0] : null;
// $firstPost = $posts[0] ?? null;

// echo $firstPost;

/* -------- Switch Statements ------- */

$favcolor = 'red';

switch($favcolor) {
  case 'red';
    echo 'Your favourite color is red';
    break;
  case 'blue';
    echo 'Your favourite color is blue';
    break; 
  case 'green';
    echo 'Your favourite color is green';
    break; 
  default:
  echo 'Your favourite color is not red, green or blue';
}
