<?
// I variant
// //primitives
// $original = 'abc';

// //passed by value,copy. The original is not motified;
// $copy = $original;

// $copy[0] = 'A';

// $copy_of_copy = str_replace('b', 'B', $copy);
// var_dump($original);
// var_dump($copy);
// var_dump($copy_of_copy);



//II variant
// declare(strict_types=1); // directives

// function &increment(int &$value): int {
//     $value++;
//     return $value;
// }
// #--------------------------------------
// $original = 1000;
// $result = &increment($original);

// $result++;

// var_dump($original);

// var_dump($result);



//III variant

$original = 1000;
//passed by reference;
//In this case the original is also modified
$ref = &$original;

$ref++;

var_dump($original);
var_dump($ref);



