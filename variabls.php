 <!-- variables in PHP -->
  <?php
$name = "Shubham";
$age = 21;
echo  "Name: " . $name . "<br>";
echo  "Age: " . $age;
// Rules of Variables
// $ se start hona chahiye
// Number se start nahi ho sakta  $1name
// Spaces allowed nahi  $my name
// Case-sensitive hai ($name ≠ $Name)


$name = "Shubham";   // String
$age = 21;          // Integer
$price = 99.5;      // Float
$isActive = true;   // Boolean
?>
A variable is used to store data in memory.
syntax:
$variable_name = value;
<?php

/*
========================================
PHP VARIABLES - COMPLETE THEORY & DETAILS
========================================
*/


/*
-------------------------------------------------
1. WHAT IS A VARIABLE?
-------------------------------------------------

A variable is used to store data in memory.

Syntax:
$variable_name = value;
*/

$name = "Shubham";


/*
-------------------------------------------------
2. RULES FOR DECLARING VARIABLES
-------------------------------------------------

1. Must start with $
2. Must start with letter or underscore
3. Cannot start with number
4. Case-sensitive
*/

$name = "Shubham";
$_age = 21;
$city1 = "Jaipur";

// Invalid Variables
// $1name = "Wrong";
// $my-name = "Wrong";


/*
-------------------------------------------------
3. CASE SENSITIVITY
-------------------------------------------------
*/

$name = "Shubham";
$Name = "Rahul";

echo $name . "<br>";
echo $Name . "<br>";


/*
-------------------------------------------------
4. DATA TYPES IN PHP VARIABLES
-------------------------------------------------
*/


// STRING
$string = "Hello PHP";


// INTEGER
$integer = 100;


// FLOAT / DOUBLE
$float = 99.99;


// BOOLEAN
$isLogin = true;


// ARRAY
$colors = array("Red", "Blue", "Green");


// OBJECT
class Car {
    public $brand = "BMW";
}

$carObj = new Car();


// NULL
$data = null;


/*
-------------------------------------------------
5. OUTPUT VARIABLES
-------------------------------------------------
*/

echo $string . "<br>";

print $integer . "<br>";


/*
-------------------------------------------------
6. CONCATENATION
-------------------------------------------------

Dot (.) operator is used.
*/

$firstName = "Shubham";
$lastName = "Kumawat";

echo $firstName . " " . $lastName . "<br>";


/*
-------------------------------------------------
7. VARIABLE INTERPOLATION
-------------------------------------------------
*/

$name = "Shubham";

echo "Hello $name <br>";

echo 'Hello $name <br>';


/*
-------------------------------------------------
8. DYNAMIC TYPING
-------------------------------------------------

PHP automatically detects datatype.
*/

$x = 10;
$x = "Hello";
$x = true;


/*
-------------------------------------------------
9. CHECK VARIABLE TYPE
-------------------------------------------------
*/

$number = 10;

echo gettype($number) . "<br>";

var_dump($number);

echo "<br>";


/*
-------------------------------------------------
10. VARIABLE VARIABLES
-------------------------------------------------
*/

$var = "city";

$$var = "Jaipur";

echo $city . "<br>";


/*
-------------------------------------------------
11. VARIABLE SCOPE
-------------------------------------------------

Types:
1. Local
2. Global
3. Static
*/


/*
-------------------------------------------------
12. LOCAL VARIABLE
-------------------------------------------------
*/

function localDemo() {

    $localVar = 50;

    echo $localVar . "<br>";
}

localDemo();


/*
-------------------------------------------------
13. GLOBAL VARIABLE
-------------------------------------------------
*/

$globalVar = 100;

function globalDemo() {

    global $globalVar;

    echo $globalVar . "<br>";
}

globalDemo();


/*
-------------------------------------------------
14. $GLOBALS ARRAY
-------------------------------------------------
*/

$value = 500;

function globalsDemo() {

    echo $GLOBALS['value'] . "<br>";
}

globalsDemo();


/*
-------------------------------------------------
15. STATIC VARIABLE
-------------------------------------------------
*/

function counter() {

    static $count = 0;

    $count++;

    echo $count . "<br>";
}

counter();
counter();
counter();


/*
-------------------------------------------------
16. SUPERGLOBAL VARIABLES
-------------------------------------------------

$_GET
$_POST
$_REQUEST
$_SESSION
$_COOKIE
$_SERVER
$_FILES
$_ENV
*/


/*
-------------------------------------------------
17. CONSTANTS VS VARIABLES
-------------------------------------------------
*/


// VARIABLE
$site = "Old Name";
$site = "New Name";


// CONSTANT
define("COMPANY", "Aim Grow Done");

echo COMPANY . "<br>";


/*
-------------------------------------------------
18. unset() FUNCTION
-------------------------------------------------
*/

$temp = "Temporary Data";

unset($temp);

// echo $temp;


/*
-------------------------------------------------
19. isset() FUNCTION
-------------------------------------------------
*/

$username = "Admin";

if(isset($username)) {

    echo "Variable Exists <br>";
}


/*
-------------------------------------------------
20. empty() FUNCTION
-------------------------------------------------
*/

$emptyVar = "";

if(empty($emptyVar)) {

    echo "Variable is Empty <br>";
}


/*
-------------------------------------------------
21. TYPE CASTING
-------------------------------------------------
*/

$num = "100";

$convertedNum = (int)$num;

echo gettype($convertedNum) . "<br>";


/*
-------------------------------------------------
22. REFERENCES IN VARIABLES
-------------------------------------------------
*/

$a = 10;

$b = &$a;

$b = 20;

echo $a . "<br>";


/*
-------------------------------------------------
23. REAL-LIFE EXAMPLE
-------------------------------------------------
*/

$product = "Laptop";
$price = 50000;
$inStock = true;

echo "Product: $product <br>";
echo "Price: $price <br>";

if($inStock) {

    echo "In Stock <br>";
}


/*
-------------------------------------------------
24. COMMON ERRORS
-------------------------------------------------
*/


// Undefined Variable
// echo $undefinedVar;


// Wrong Quotes
$user = "Shubham";

echo 'Hello $user <br>';

echo "Hello $user <br>";


/*
-------------------------------------------------
25. BEST PRACTICES
-------------------------------------------------

Use meaningful variable names.

GOOD:
$userName
$totalPrice
$isLoggedIn

BAD:
$a
$x1
$data123
*/


/*
-------------------------------------------------
26. INTERVIEW QUESTIONS
-------------------------------------------------

Q1. Is PHP strongly typed?
ANS: No, PHP is loosely typed.

Q2. Difference between local and global variable?
ANS:
Local = Inside function
Global = Outside function

Q3. Difference between isset() and empty()?
ANS:
isset() = Checks variable exists
empty() = Checks variable empty or not

Q4. What is variable interpolation?
ANS:
Using variables directly inside double quotes.
*/


/*
-------------------------------------------------
27. SUMMARY
-------------------------------------------------

PHP Variables:
- Store data
- Start with $
- Are case-sensitive
- Dynamically typed
- Support multiple datatypes
- Have scopes
- Support references
- Work with isset(), empty(), unset()

*/

?>