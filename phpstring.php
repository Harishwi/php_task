<?php

// Returns the length of a string.
echo strlen("Hello World!") . "<br>"; // Outputs: 12

// Finds the position of the first occurrence of a substring in a string.
echo strpos("Hello World!", "World") . "<br>"; // Outputs: 6


echo strstr("Hello World! ppp", "ppp") . "<br>"; // Outputs: World!

// Replaces all occurrences of a search string with a replacement string.
echo str_replace("World", "PHP", "Hello World!") . "<br>";// Outputs: Hello PHP!

// Returns a part of a string.
echo substr("Hello World!", 6,5) . "<br>"; // Outputs: World

// Strips whitespace (or other characters) from the beginning and end of a string.
echo trim("  Hello World!  ") . "<br>"; // Outputs: Hello World!

// Converts a string to lowercase.
echo strtolower("HELLO WORLD!"). "<br>"; // Outputs: hello world!

// Converts a string to uppercase.
echo strtoupper("hello world!"). "<br>"; // Outputs: HELLO WORLD!

// Converts the first character of a string to uppercase.
echo ucfirst("hello world!"). "<br>"; // Outputs: Hello world!

// Converts the first character of a string to lowercase.
echo lcfirst("Hello World!"). "<br>"; // Outputs: hello World!

// Converts the first character of each word in a string to uppercase.
echo ucwords("hello world!"). "<br>"; // Outputs: Hello World!

// Reverses a string.
echo strrev("Hello World!"). "<br>"; // Outputs: !dlroW olleH

// Converts special characters to HTML entities.
echo htmlspecialchars("<a href='test'>Test</a>"). "<br>"; // Outputs: &lt;a href='test'&gt;Test&lt;/a&gt;

// Converts HTML entities back to characters.
echo html_entity_decode("&lt;a href='test'&gt;Test&lt;/a&gt;"). "<br>"; // Outputs: <a href='test'>Test</a>

// Calculates the MD5 hash of a string.
echo md5("Hello World!"). "<br>"; // Outputs: ed076287532e86365e841e92bfc50d8c


// Formats a number with grouped thousands.
echo number_format(123456789). "<br>"; // Outputs: 123,456,789

// Joins array elements into a single string.
$arr = array('Hello', 'World', '!');
echo implode(" ", $arr). "<br>"; // Outputs: Hello World !

// Splits a string by a specified string into an array.
print_r(explode(" ", "Hello World!")). "<br>"; // Outputs: Array ( [0] => Hello [1] => World! )

// Adds backslashes before certain characters in a string.
echo addslashes("O'Reilly"). "<br>"; // Outputs: O\'Reilly

// Splits a string into an array.
print_r(str_split("Hello")). "<br>"; // Outputs: Array ( [0] => H [1] => e [2] => l [3] => l [4] => o )

// Repeats a string a specified number of times.
echo str_repeat("Hello ", 3). "<br>"; // Outputs: Hello Hello Hello 

// Wraps a string to a given number of characters.
echo wordwrap("The quick brown fox jumps over the lazy dog.", 19, "<br>\n"). "<br>"; 
// Outputs:
// The quick brown fox<br>
// jumps over the lazy<br>
// dog.

// Returns a formatted string.
echo sprintf("There are %d apples and %d oranges.", 5, 10). "<br>"; // Outputs: There are 5 apples and 10 oranges.

// Pads a string to a new length.
echo str_pad("Hello", 10, "."). "<br>"; // Outputs: Hello.....


$shuffledString = str_shuffle("Hello World");
echo $shuffledString; // Outputs a randomly shuffled version of "HelloWorld", e.g., "ldloerHoWl"


?>