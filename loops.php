<!-- =========================================================
PHP LOOPS – COMPLETE NOTES
Author: ChatGPT
Purpose: Easy Notes for VS Code Study
========================================================= -->

<?php

/* =========================================================
1. WHAT IS A LOOP?
========================================================= */

/*
A loop is used to execute a block of code repeatedly.

Why use loops?
✔ Saves time
✔ Reduces repeated code
✔ Makes programs shorter and cleaner

Example:
Instead of writing:

echo "Hello";
echo "Hello";
echo "Hello";

We use loop.
*/


/* =========================================================
2. TYPES OF LOOPS IN PHP
========================================================= */

/*

PHP has 4 main loops:

1. while loop
2. do...while loop
3. for loop
4. foreach loop

Extra Loop Controls:
5. break
6. continue

*/


/* =========================================================
3. WHILE LOOP
========================================================= */

/*
Definition:
The while loop executes code as long as condition is TRUE.

Syntax:

while(condition){
    // code
}

Flow:
1. Condition checked
2. If TRUE → execute code
3. Again check condition
4. Repeat until FALSE
*/


echo "<h2>WHILE LOOP</h2>";

$i = 1;

while($i <= 5){
    echo "Number: $i <br>";
    $i++;
}

/*
Output:
Number: 1
Number: 2
Number: 3
Number: 4
Number: 5
*/


/* =========================================================
WHILE LOOP EXAMPLE – EVEN NUMBERS
========================================================= */

echo "<h2>Even Numbers</h2>";

$num = 2;

while($num <= 10){
    echo "$num <br>";
    $num += 2;
}


/* =========================================================
WHILE LOOP – INFINITE LOOP
========================================================= */

/*
If condition never becomes FALSE,
loop runs forever.

Example:

while(true){
   echo "Infinite";
}

Avoid infinite loops.
*/


/* =========================================================
4. DO WHILE LOOP
========================================================= */

/*
Definition:
The do...while loop executes code FIRST,
then checks condition.

Syntax:

do{
   // code
}while(condition);

Important:
✔ Runs at least ONE time
*/


echo "<h2>DO WHILE LOOP</h2>";

$x = 1;

do{
    echo "Value: $x <br>";
    $x++;
}while($x <= 5);


/* =========================================================
DO WHILE DIFFERENCE
========================================================= */

echo "<h2>Difference Example</h2>";

$y = 10;

do{
    echo "Executed Once <br>";
}while($y < 5);

/*
Condition is FALSE,
but still runs once.
*/


/* =========================================================
5. FOR LOOP
========================================================= */

/*
Definition:
for loop is used when number of repetitions is known.

Syntax:

for(initialization; condition; increment/decrement){
    // code
}

3 Parts:

1. Initialization
   starting value

2. Condition
   loop runs while TRUE

3. Increment/Decrement
   changes variable
*/


echo "<h2>FOR LOOP</h2>";

for($i = 1; $i <= 5; $i++){
    echo "Count: $i <br>";
}


/* =========================================================
FOR LOOP – TABLE
========================================================= */

echo "<h2>Multiplication Table of 2</h2>";

for($i = 1; $i <= 10; $i++){
    echo "2 x $i = " . (2 * $i) . "<br>";
}


/* =========================================================
FOR LOOP – REVERSE
========================================================= */

echo "<h2>Reverse Counting</h2>";

for($i = 10; $i >= 1; $i--){
    echo "$i <br>";
}


/* =========================================================
6. FOREACH LOOP
========================================================= */

/*
Definition:
Used specially for arrays.

Syntax:

foreach($array as $value){
    // code
}

OR

foreach($array as $key => $value){
    // code
}
*/


echo "<h2>FOREACH LOOP</h2>";

$colors = ["Red", "Blue", "Green", "Black"];

foreach($colors as $color){
    echo "$color <br>";
}


/* =========================================================
FOREACH WITH KEY => VALUE
========================================================= */

echo "<h2>FOREACH KEY VALUE</h2>";

$student = [
    "name" => "Shubham",
    "course" => "BCA",
    "city" => "Jodhpur"
];

foreach($student as $key => $value){
    echo "$key : $value <br>";
}


/* =========================================================
7. NESTED LOOPS
========================================================= */

/*
Definition:
Loop inside another loop.

Used in:
✔ Patterns
✔ Tables
✔ Matrix
*/


echo "<h2>NESTED LOOP</h2>";

for($i = 1; $i <= 3; $i++){

    for($j = 1; $j <= 3; $j++){
        echo "$i$j ";
    }

    echo "<br>";
}


/* =========================================================
STAR PATTERN USING LOOPS
========================================================= */

echo "<h2>Star Pattern</h2>";

for($i = 1; $i <= 5; $i++){

    for($j = 1; $j <= $i; $j++){
        echo "* ";
    }

    echo "<br>";
}


/* =========================================================
8. BREAK STATEMENT
========================================================= */

/*
Definition:
break stops the loop immediately.
*/


echo "<h2>BREAK</h2>";

for($i = 1; $i <= 10; $i++){

    if($i == 5){
        break;
    }

    echo "$i <br>";
}

/*
Output:
1
2
3
4
*/


/* =========================================================
9. CONTINUE STATEMENT
========================================================= */

/*
Definition:
continue skips current iteration.
*/


echo "<h2>CONTINUE</h2>";

for($i = 1; $i <= 5; $i++){

    if($i == 3){
        continue;
    }

    echo "$i <br>";
}

/*
Output:
1
2
4
5
*/


/* =========================================================
10. LOOP WITH ARRAY
========================================================= */

echo "<h2>Array Loop</h2>";

$numbers = [10, 20, 30, 40];

for($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i] . "<br>";
}


/* =========================================================
11. LOOP WITH HTML
========================================================= */

echo "<h2>HTML List Using Loop</h2>";

$fruits = ["Apple", "Banana", "Mango"];

echo "<ul>";

foreach($fruits as $fruit){
    echo "<li>$fruit</li>";
}

echo "</ul>";


/* =========================================================
12. COMMON LOOP INTERVIEW QUESTIONS
========================================================= */

/*

Q1. Difference between while and do while?

while:
✔ Checks condition first
✔ May run 0 times

do while:
✔ Executes first
✔ Runs at least once


Q2. Which loop is best for arrays?

✔ foreach loop


Q3. Which loop is best when repetitions known?

✔ for loop


Q4. What is infinite loop?

✔ Loop that never stops


Q5. What does break do?

✔ Stops loop immediately


Q6. What does continue do?

✔ Skips current iteration

*/


/* =========================================================
13. LOOP FLOW SUMMARY
========================================================= */

/*

WHILE LOOP
-----------
Check condition → Run code → Repeat


DO WHILE
-----------
Run code → Check condition → Repeat


FOR LOOP
-----------
Start → Check → Run → Increment → Repeat


FOREACH LOOP
-----------
Take array item one by one


*/


/* =========================================================
14. REAL LIFE EXAMPLES
========================================================= */

/*

for loop:
✔ counting
✔ tables
✔ fixed repetitions

while loop:
✔ login attempts
✔ loading data

foreach:
✔ displaying users
✔ products
✔ database records

nested loop:
✔ patterns
✔ grids
✔ tables

*/


/* =========================================================
15. PRACTICE PROGRAMS
========================================================= */

/*

Practice:
1. Print 1 to 100
2. Print even numbers
3. Print odd numbers
4. Reverse counting
5. Multiplication table
6. Sum of numbers
7. Factorial
8. Star patterns
9. Array printing
10. Nested loop patterns

*/


/* =========================================================
16. FACTORIAL PROGRAM
========================================================= */

echo "<h2>Factorial</h2>";

$num = 5;
$fact = 1;

for($i = 1; $i <= $num; $i++){
    $fact *= $i;
}

echo "Factorial of $num = $fact";


/* =========================================================
17. SUM OF NUMBERS
========================================================= */

echo "<h2>Sum of Numbers</h2>";

$sum = 0;

for($i = 1; $i <= 10; $i++){
    $sum += $i;
}

echo "Total Sum = $sum";


/* =========================================================
18. ODD NUMBERS
========================================================= */

echo "<h2>Odd Numbers</h2>";

for($i = 1; $i <= 10; $i++){

    if($i % 2 != 0){
        echo "$i <br>";
    }

}


/* =========================================================
19. EVEN NUMBERS
========================================================= */

echo "<h2>Even Numbers</h2>";

for($i = 1; $i <= 10; $i++){

    if($i % 2 == 0){
        echo "$i <br>";
    }

}


/* =========================================================
20. LOOP SHORT NOTES
========================================================= */

/*

while
------
Used when repetitions unknown

do while
---------
Runs at least once

for
----
Best for counting/fixed repetitions

foreach
--------
Best for arrays

break
-----
Stops loop

continue
--------
Skips iteration

nested loop
-----------
Loop inside loop

*/

?>