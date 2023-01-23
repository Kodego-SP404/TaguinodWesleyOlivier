<?php

// $fruits = ['apple', 'banana', 'orange'];

// //Get array length
// $length = count($fruits);



// $fruits[] = 'grape';
// array_push($fruits, 'mango', 'raspberry');
// array_unshift($fruits, 'kiwi');
// print_r ($fruits);

// //remove from an array

// array_pop($fruits);
// array_shift($fruits);
// print_r ($fruits);

// //remove specific element

// unset($fruits[2]);
// print_r ($fruits);

// //split into chunks of 2

// $chunkedArray = array_chunk($fruits,2);
// print_r ($chunkedArray);


//concatenate arrays
// $arr1 = [1,2,3];
// $arr2 = [4,5,6];
// $arr3 = array_merge($arr1,$arr2);
// print_r($arr3);
// $arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

//Combine arrays (keys and values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a,$b);
print_r($c);

//Array of keys
$keys = array_keys($c);
print_r($keys);

//Flip keys with values
$flipped = array_flip($c);
print_r($flipped);

//create array of numbers with range
$numbers = range(1,10);
print_r($numbers);

//map through array and create a new one

$newNumbers = array_map(function ($number){
    return "Number $number";
}, $numbers);








