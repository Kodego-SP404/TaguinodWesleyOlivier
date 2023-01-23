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

// $age = 17;

// if ($age >= 18) {
//     echo "You are old enough to vote";
// }
// else {
//     echo "You are not old enough to vote";
// }

// $t = date('H');
// echo $t;

// if ($t <=12) {
//     echo "Mornin'!";
// } elseif ($t<=17){
//     echo "Afternoon!";
// } else {
//     echo "Evening!";
// }


// $posts = [];

// if(!empty($posts)){
//     echo $posts[0];
// } else {
//     echo 'there are no posts';
// }


// $firstPost = !empty($posts) ? $posts[0] : 'No posts';
// echo $firstPost;


//SWITCH

$favcolor = 'red';

switch ($favcolor) {
    case'red':
        echo 'Your favorite color is red!';
        break;
    case 'green':
        echo 'Your favorite color is green!';
        break;
    case 'blue':
        echo 'Your favorite color is blue!';
        break;
    case 'blue':
        echo 'Your favorite color is yellow!';
        break;
    default:
        echo 'NANANANANANANANANANANANANANA';
}