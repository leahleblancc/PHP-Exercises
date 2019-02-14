<?php 

/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/

$count = 0;

while ($count <= 10) {
        echo $count . "<br>";
    $count++;
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/


/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

for($i = 5; $i <= 100; $i+=5) {
  if ($i % 2 == 0) {
      echo "<br>";
  } else {
      echo $i;
  }
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = array("pizza", "pasta", "guacamole", "cheesecake", "ice cream");



/*
Use while-loop to print array elements (every food in a new row).
*/
$l = count($food);
$i = 0;
while ($i < $l) {
    print $food[$i] . "<br>";
    $i++;
}

echo "<br>";

/*
Use for-loop to print array elements (every food in a new row).
*/

$l = count($food);
for ($i = 0; $i < $l; $i++) {
  print $food[$i] . "<br>";
}

echo "<br>";

/*
Use foreach-loop to print array elements (every food in a new row).
*/

foreach ($food as $item) {
    echo $item . "<br>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/

echo "<ul>";

$l = count($food);
for ($i = 0; $i < $l; $i++) {
  print "<li>" . $food[$i] . "</li> <br>";
}

echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

*/
$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "pasta" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
    "guacamole" => [
    "type" => "appetizer",
    "origin" => "Mexico"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ],
  "ice cream" => [
    "type" => "desert",
    "origin" => "China"
  ]
];

    /*
So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/
foreach($food_assoc as $item => $details) {
    echo print_r($food_assoc) . "<br>";
};
/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/

echo "<ul>";
    
foreach($food_assoc as $item => $details) {
    echo "<li>" . $item . "</li><br>";
    foreach ($item as $detail => $description) {
        echo "<li> {$detail}: {$description} </li> <br>";
    }
};

echo "</ul>"
?>