<?php
/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/
// Echo - Output strings, numbers, html, etc
echo 'Hello';
echo 123;
echo '<h1>Emmanuel PHP</h1>';


// print - Similar to echo, but a bit slower(prints only one value)
print 123;

// print_r - Gives a bit more info. Can be used to print arrays
// print_r([1,2,3])

// var_dump - Even more info like data type and length
var_dump(true);
var_export('hello');


// Escaping characters with a backslash

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo 'Post one'; ?></h1>
</body>
</html>