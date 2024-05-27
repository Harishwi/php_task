<?php
// echo readfile("text.txt"); 

// $myfile = fopen("text.txt", "w") or die("Unable to open file!");
// echo fread($myfile,filesize("text.txt"));
// fclose($myfile);

// $myfile = fopen("text.txt", "w") or die("Unable to open file!");
// $txt = "John Doe\n";
// fwrite($myfile, $txt);
// $txt = "Jane Doe\n";
// fwrite($myfile, $txt);
// echo readfile("text.txt");
// fclose($myfile);


// $myfile = fopen("text.txt", "r") or die("Unable to open file!");
//   echo fgetc($myfile);
// fclose($myfile);


// $myfile = fopen("text.txt", "w") or die("Unable to open file!");
// $txt = "Mickey Mouse\n";
// fwrite($myfile, $txt);
// $txt = "Minnie Mouse\n";
// fwrite($myfile, $txt);
// echo readfile("text.txt");
// fclose($myfile);
?>


<!-- callback Function -->

<!-- 1. Named Function
A named function can be passed as a callback by using its name as a string. -->

<?php
function sayHello() {
    echo "Hello, World!";
}
function executeCallback($callback) {
    $callback();
}
executeCallback('sayHello');
?>
<BR><BR>

<!-- 2. Anonymous Function
An anonymous function (also known as a closure) can be passed directly. -->

<?php
function executeCallback2($callback) {
    $callback();
}
executeCallback2(function() {
    echo "Hello2, World!";
});
?>
<br><br>

<!-- 3.Example with Parameters
If the callback function requires parameters, you can pass them within the calling function. -->

<?php
function sayHello1($name) {
    echo "Hello, $name!";
}
function executeCallback3($callback, $name) {
    $callback($name);
}
executeCallback3('sayHello1', 'John');
?>
<Br><BR>

