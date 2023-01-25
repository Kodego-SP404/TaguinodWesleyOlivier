<?php

// Arrays

//Simple Array

// $numbers = [1,2,3,4,5];
// $fruit = ['apple', 'orange','banana'];

// echo $numbers [0];
// var_dump($numbers);

// echo $fruit[1];

// echo $numbers[2] + $numbers[3];

//Associative Arrays

// $colors = [
//     1=> 'red',
//     2=> 'green',
//     3=> 'blue',
//     4=> 'yellow',
// ];


// echo $colors[3];

//Strings as keys

// $hex = [
// 'red' => '#f00',
// 'green' => '#0f0',
// 'blue' => '#00f',
// ];

// echo $hex['red'];
// var_dump ($hex);


//Single Person

// $person = [
//     'firstname' => 'John',
//     'lastname' => 'Doe',
//     'address' => 'Manila',
// ];

// echo $person ['firstname'];


//Multidimensional array
$people = [
    [
    'firstname' => 'John',
    'lastname' => 'Doe',
    'address' => 'Manila',
],
[
    'firstname' => 'Mary',
    'lastname' => 'Doe',
    'address' => 'New York',
],
[
    'firstname' => 'Joe',
    'lastname' => 'Boy',
    'address' => 'Cebu',
],
];

echo $people[2]['lastname'];

//Encode to JSON
var_dump(json_encode($people));

//Decode to JSON
$jsonobj = '{"firstname":"John","lastname":"Doe","email":"jdoe@email.com"}';

var_dump(json_decode($jsonobj));