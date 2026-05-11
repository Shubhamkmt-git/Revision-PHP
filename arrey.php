<?php
// ==========================================
// ARRAYS IN PHP - COMPLETE NOTES
// Direct Copy-Paste for VS Code
// ==========================================


/*
------------------------------------------------
WHAT IS AN ARRAY?
------------------------------------------------
Array is a variable that can store multiple values
in a single variable.

Example:
$colors = ["Red", "Blue", "Green"];
*/


// ==========================================
// 1. INDEXED ARRAY
// ==========================================

echo "===== INDEXED ARRAY ===== <br>";

$colors = ["Red", "Blue", "Green"];

// Access elements
echo $colors[0] . "<br>";
echo $colors[1] . "<br>";
echo $colors[2] . "<br>";

// Add new element
$colors[] = "Yellow";

echo "<pre>";
print_r($colors);
echo "</pre>";



// ==========================================
// 2. ASSOCIATIVE ARRAY
// ==========================================

echo "===== ASSOCIATIVE ARRAY ===== <br>";

$student = [
    "name" => "Shubham",
    "age" => 21,
    "course" => "BCA"
];

// Access values
echo $student["name"] . "<br>";
echo $student["age"] . "<br>";
echo $student["course"] . "<br>";



// ==========================================
// 3. MULTIDIMENSIONAL ARRAY
// ==========================================

echo "===== MULTIDIMENSIONAL ARRAY ===== <br>";

$students = [
    ["Shubham", 21, "BCA"],
    ["Rahul", 22, "BBA"],
    ["Aman", 20, "B.Tech"]
];

// Access data
echo $students[0][0] . "<br>";
echo $students[1][2] . "<br>";
echo $students[2][1] . "<br>";



// ==========================================
// 4. ARRAY USING array() FUNCTION
// ==========================================

echo "===== ARRAY() FUNCTION ===== <br>";

$numbers = array(10, 20, 30, 40);

echo $numbers[2] . "<br>";



// ==========================================
// 5. LOOP THROUGH ARRAY
// ==========================================

echo "===== LOOP THROUGH ARRAY ===== <br>";

$fruits = ["Apple", "Banana", "Mango"];

for($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}



// ==========================================
// 6. FOREACH LOOP
// ==========================================

echo "===== FOREACH LOOP ===== <br>";

foreach($fruits as $fruit) {
    echo $fruit . "<br>";
}



// ==========================================
// 7. FOREACH WITH KEY => VALUE
// ==========================================

echo "===== FOREACH KEY => VALUE ===== <br>";

$person = [
    "name" => "Shubham",
    "city" => "Jodhpur",
    "course" => "BCA"
];

foreach($person as $key => $value) {
    echo $key . " : " . $value . "<br>";
}



// ==========================================
// 8. ARRAY FUNCTIONS
// ==========================================

echo "===== ARRAY FUNCTIONS ===== <br>";

$nums = [5, 2, 8, 1, 9];


// count() -> total elements
echo "Total Elements: " . count($nums) . "<br>";


// sort() -> ascending
sort($nums);

echo "Ascending Order: <br>";

foreach($nums as $n) {
    echo $n . " ";
}

echo "<br>";


// rsort() -> descending
rsort($nums);

echo "Descending Order: <br>";

foreach($nums as $n) {
    echo $n . " ";
}

echo "<br>";



// ==========================================
// 9. array_push()
// ==========================================

echo "===== array_push() ===== <br>";

$cars = ["BMW", "Audi"];

array_push($cars, "Tesla", "Toyota");

echo "<pre>";
print_r($cars);
echo "</pre>";



// ==========================================
// 10. array_pop()
// ==========================================

echo "===== array_pop() ===== <br>";

array_pop($cars);

echo "<pre>";
print_r($cars);
echo "</pre>";



// ==========================================
// 11. array_shift()
// ==========================================

echo "===== array_shift() ===== <br>";

array_shift($cars);

echo "<pre>";
print_r($cars);
echo "</pre>";



// ==========================================
// 12. array_unshift()
// ==========================================

echo "===== array_unshift() ===== <br>";

array_unshift($cars, "Mercedes");

echo "<pre>";
print_r($cars);
echo "</pre>";



// ==========================================
// 13. in_array()
// ==========================================

echo "===== in_array() ===== <br>";

$animals = ["Dog", "Cat", "Lion"];

if(in_array("Cat", $animals)) {
    echo "Cat Found <br>";
} else {
    echo "Cat Not Found <br>";
}



// ==========================================
// 14. array_merge()
// ==========================================

echo "===== array_merge() ===== <br>";

$a1 = [1, 2, 3];
$a2 = [4, 5, 6];

$result = array_merge($a1, $a2);

echo "<pre>";
print_r($result);
echo "</pre>";



// ==========================================
// 15. explode()
// ==========================================

echo "===== explode() ===== <br>";

$text = "PHP,HTML,CSS,JavaScript";

$data = explode(",", $text);

echo "<pre>";
print_r($data);
echo "</pre>";



// ==========================================
// 16. implode()
// ==========================================

echo "===== implode() ===== <br>";

$lang = ["PHP", "HTML", "CSS"];

$final = implode(" - ", $lang);

echo $final . "<br>";



// ==========================================
// 17. array_keys()
// ==========================================

echo "===== array_keys() ===== <br>";

$user = [
    "name" => "Shubham",
    "age" => 21,
    "city" => "Jodhpur"
];

$keys = array_keys($user);

echo "<pre>";
print_r($keys);
echo "</pre>";



// ==========================================
// 18. array_values()
// ==========================================

echo "===== array_values() ===== <br>";

$values = array_values($user);

echo "<pre>";
print_r($values);
echo "</pre>";



// ==========================================
// 19. array_reverse()
// ==========================================

echo "===== array_reverse() ===== <br>";

$numbers = [1, 2, 3, 4, 5];

$reverse = array_reverse($numbers);

echo "<pre>";
print_r($reverse);
echo "</pre>";



// ==========================================
// 20. array_unique()
// ==========================================

echo "===== array_unique() ===== <br>";

$data = [1, 2, 2, 3, 4, 4, 5];

$unique = array_unique($data);

echo "<pre>";
print_r($unique);
echo "</pre>";



// ==========================================
// 21. SEARCH IN ARRAY
// ==========================================

echo "===== SEARCH IN ARRAY ===== <br>";

$fruits = ["Apple", "Banana", "Mango"];

$index = array_search("Banana", $fruits);

echo "Banana Found at Index: " . $index . "<br>";



// ==========================================
// 22. ARRAY SUM
// ==========================================

echo "===== ARRAY SUM ===== <br>";

$marks = [50, 60, 70, 80];

$total = array_sum($marks);

echo "Total Marks: " . $total . "<br>";



// ==========================================
// 23. ARRAY MIN & MAX
// ==========================================

echo "===== MIN & MAX ===== <br>";

$values = [10, 5, 90, 25];

echo "Minimum: " . min($values) . "<br>";
echo "Maximum: " . max($values) . "<br>";



// ==========================================
// 24. ARRAY SORTING FUNCTIONS
// ==========================================

echo "===== SORTING FUNCTIONS ===== <br>";

$data = [4, 2, 8, 1];

sort($data);     // Ascending
rsort($data);    // Descending

$person = [
    "c" => "Cat",
    "a" => "Apple",
    "b" => "Ball"
];

ksort($person);  // Sort by key
asort($person);  // Sort by value



// ==========================================
// 25. ARRAY PRACTICE PROGRAM
// ==========================================

echo "===== PRACTICE PROGRAM ===== <br>";

$marks = [80, 70, 90, 60, 75];

$total = array_sum($marks);
$average = $total / count($marks);

echo "Total Marks = " . $total . "<br>";
echo "Average Marks = " . $average . "<br>";



// ==========================================
// IMPORTANT ARRAY FUNCTIONS LIST
// ==========================================

/*

count()          -> Count elements
sort()           -> Ascending sort
rsort()          -> Descending sort
array_push()     -> Add at end
array_pop()      -> Remove from end
array_shift()    -> Remove first element
array_unshift()  -> Add at beginning
array_merge()    -> Merge arrays
explode()        -> String to array
implode()        -> Array to string
array_keys()     -> Get all keys
array_values()   -> Get all values
array_reverse()  -> Reverse array
array_unique()   -> Remove duplicates
array_search()   -> Search value
array_sum()      -> Sum of array
min()            -> Smallest value
max()            -> Largest value

*/





?>