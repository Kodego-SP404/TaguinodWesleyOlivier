<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($x = 0; $x <= 10; $x++) {
//   echo "Number: $x <br>";
// }

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
initiial Value
  while (condition) {
  // code to be executed
  //Increment
  }
*/

// $x = 1;

// while ($x <= 5) {
//     echo "Number: $x <br>";
//     $x++;
// }

/* ---------- Do While Loop --------- */


/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 1;

// do {
// echo "Number: $x <br>";
// $x++;
// } while ($x <= 5);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// $numbers = array(1, 2, 3, 4, 5);

// foreach ($numbers as $x) {
// echo "Number: $x <br>";
// }


// $posts = ['First Post', 'Second Post', 'Third Post'];
// for ($x = 0; $x < count($posts);$x++) {
//     echo "$posts[$x] <br>";
// }

// foreach ($posts as $post) {
//     echo "$post <br>";
// };

// $person = [
//     'firstname' => 'John',
//     'lastname' => 'Doe',
//     'address' => 'Manila',
//     ];
    
//     foreach ($person as $key => $val) {
//     echo "$key - $val <br>";
//     }

