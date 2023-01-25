

<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
    $fname = "Wesley"; //String
    $age = "32"; //Integer
    $hasKids = False; //Boolean
    $cashOnHand = 10.5; //Float
 
    // echo "Name is $fname. $age years old."; 
    
    // echo "<br>";

    // print 'Hello';
    // echo "<br>";

    // print_r('Hello');
    // echo "<br>";
    // print_r([1,2,3]);
    // echo "<br>";
    // var_dump($cashOnHand);
    //  b

    

    echo $fname . ' is ' . $age . ' years old';

    echo nl2br("\n$fname is $age years old");


    //Arithmetic Operators
    echo "<br>";

    echo '5' +'5';
    $x = '5' +'5';
    echo "<br>";
    echo $x;
    echo "<br>";
    var_dump($x);    
    echo "<br>";
    echo 5 + 5;
    echo "<br>";
    echo 10 - 6;
    echo "<br>";
    echo 95 * 95;
    echo "<br>";
    echo 500 / 25;

    //Constants

    echo "<br>";
    define('HOST', 'localhost');
    define('DB', 'dev_db');
    var_dump(HOST);





    
    ?>