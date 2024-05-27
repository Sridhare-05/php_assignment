<!DOCTYPE html>
<html>
<body>

<?php 
// STRING FUNCTIONS 

//string length
$length = strlen("Hello Whereitz Technology!");
echo $length."<br>";

//string to lowercase
$lowercase = strtolower("Hello Whereitz Technology!"); 
echo $lowercase."<br>";

//string to upper case
$uppercase = strtoupper("have a nice day!"); 
echo $uppercase."<br>";

//string to substring (string,index value)
$substring = substr("I am TSunami", 5);
echo $substring."<br>";

//strpos(): Finds the position of the first occurrence of a substring in a string.
$position = strpos("Hello World", "rld");
echo $position."<br>";

//replace the string
$new_string = str_replace("Paradise", "Universe", "Green Paradise");
echo $new_string."<br>";

//trim(): Removes whitespace or other predefined characters from the beginning and end of a string.
$trimmed = trim("        Today I am going to          School        !  ");
echo $trimmed."<br>";

//explode(): Splits a string by a specified delimiter into an array of substrings.

$array = explode(" ", "Hello World");
print_r ($array);
echo "<br>";

//Joins array elements with a string.
$string = implode(", ", ["Apple", "Banana", "Orange"]);
print_r($string);
echo "<br>";

//addcslashes() Add a backslash in front of the character "S":
$str = addcslashes("Hello Sridhar!","S");
echo($str)."<br>";

//Add a backslash in front of each double quote ("):
$str = addslashes('What does "Whereitz" mean?');
echo($str)."<br>";

//reverse a string starts with last index to first
echo $reversed = strrev("Hello World")."<br>";

//Pads a string to a certain length with another string.
echo $padded = str_pad("Hello", 8, "-")."<br>";

//repeat a string
echo $repeated = str_repeat("SRIDHAR 05 ", 3)."<br>";

//to convert first character in to upper
echo $ucfirst = ucfirst("why world")."<br>";

//to convert first character in to lower
echo $lcfirst = lcfirst("WHY WORLD")."<br>";

// Converts the first character of each word in a string to uppercase.
echo $ucwords = ucwords("hello world , good bye!")."<br>";

//to randomly shuffle the string
echo $shuffled = str_shuffle("Money makes many things")."<br>";

//Splits a string into an array.
print_r ( $array = str_split("Joy the full of Magic"));
echo "<br>";

// Replaces a part of a string with another string.
echo $new_string = substr_replace("HelloWorldisKing", "Google", 4, 5)."<br>";

//wordwrap split the string
echo wordwrap("The boy makes angry with his brother", 15,"<br>\n")."<br>";

//md5 encrypt the data like password
echo md5("Hey Girl I wanna a Drink before we Go!")."<br>";

//
echo sprintf("MY Favouite number is %d and birth date is %d.",5,10);
?>


</body>
</html>