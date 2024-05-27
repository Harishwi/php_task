<?php
// Adds one or more elements to the end of an array
$array = ["apple", "banana"];
array_push($array, "cherry", "date");
print_r($array);
echo "<br>"; // Outputs: Array ( [0] => apple [1] => banana [2] => cherry [3] => date )

// Removes the last element from an array and returns it.
$array = ["apple", "banana", "cherry"];
$fruit = array_pop($array);
print_r($array);
echo "<br>"; // Outputs: Array ( [0] => apple [1] => banana )

// Removes the first element from an array and returns it.
$array = ["apple", "banana", "cherry"];
$fruit = array_shift($array);
print_r($array);
echo "<br>"; // Outputs: Array ( [0] => banana [1] => cherry )

// Adds one or more elements to the beginning of an array.
$array = ["banana", "cherry"];
array_unshift($array, "apple");
print_r($array); 
echo "<br>";// Outputs: Array ( [0] => apple [1] => banana [2] => cherry )

// Merges one or more arrays into one array.
$array1 = ["apple", "banana"];
$array2 = ["cherry", "date"];
$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);
echo "<br>"; // Outputs: Array ( [0] => apple [1] => banana [2] => cherry [3] => date )

// Creates an array by using one array for keys and another for its values.
$keys = ["fruit1", "fruit2", "fruit3"];
$values = ["apple", "banana", "cherry"];
$combinedArray = array_combine($keys, $values);
print_r($combinedArray);
echo "<br>"; // Outputs: Array ( [fruit1] => apple [fruit2] => banana [fruit3] => cherry )

// Returns all the keys or a subset of the keys of an array.
$array = ["fruit1" => "apple", "fruit2" => "banana", "fruit3" => "cherry"];
$keys = array_keys($array);
print_r($keys);
echo "<br>"; // Outputs: Array ( [0] => fruit1 [1] => fruit2 [2] => fruit3 )

// Returns all the values of an array.
$array = ["fruit1" => "apple", "fruit2" => "banana", "fruit3" => "cherry"];
$values = array_values($array);
print_r($values);
echo "<br>"; // Outputs: Array ( [0] => apple [1] => banana [2] => cherry )

// Extracts a slice of the array.
$array = ["apple", "banana", "cherry", "date"];
$slice = array_slice($array, 1, 2);
print_r($slice);
echo "<br>"; // Outputs: Array ( [0] => banana [1] => cherry )

// Removes a portion of the array and replaces it with something else.
$array = ["apple", "banana", "cherry", "date"];
array_splice($array, 1, 2, ["kiwi", "lemon"]);
print_r($array); 
echo "<br>"; // Outputs: Array ( [0] => apple [1] => kiwi [2] => lemon [3] => date )

// Searches the array for a given value and returns the corresponding key if successful.
$array = ["apple", "banana", "cherry"];
$key = array_search("banana", $array);
echo $key; 
echo "<br>"; // Outputs: 1

// Checks if a value exists in an array.
$array = ["apple", "banana", "cherry"];
$exists = in_array("banana", $array);
var_dump($exists); 
echo "<br>"; // Outputs: bool(true)

// Removes duplicate values from an array.
$array = ["apple", "banana", "cherry", "apple"];
$uniqueArray = array_unique($array);
print_r($uniqueArray); 
echo "<br>";// Outputs: Array ( [0] => apple [1] => banana [2] => cherry )

// Returns an array with elements in reverse order.
$array = ["apple", "banana", "cherry"];
$reversedArray = array_reverse($array);
print_r($reversedArray);
echo "<br>"; // Outputs: Array ( [0] => cherry [1] => banana [2] => apple )

// Sorts an array in ascending order.
$array = [3, 2, 5, 4, 1];
sort($array);
print_r($array);
echo "<br>"; // Outputs: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

// Applies a callback to the elements of the given arrays.
function makeUpperCase($item) {
    return strtoupper($item);
}
$array = ["apple", "banana", "cherry"];
$uppercasedArray = array_map("makeUpperCase", $array);
print_r($uppercasedArray);
echo "<br>"; // Outputs: Array ( [0] => APPLE [1] => BANANA [2] => CHERRY )

// Filters elements of an array using a callback function.
function isEven($num) {
    return $num % 2 == 0;
}
$array = [1, 2, 3, 4, 5, 6];
$evenNumbers = array_filter($array, "isEven");
print_r($evenNumbers); 
echo "<br>";// Outputs: Array ( [1] => 2 [3] => 4 [5] => 6 )

?>
