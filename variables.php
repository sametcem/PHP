<?php
//comment
# comment
/* Multiline comment */


#VARIABLES
/*
    - Prefix $
    - Start with a letter or an underscore
    - Only letters, numbers and undescores
    - caseSensitive
*/

#DATA TYPES
/*
    String single or double quotes
    Integers
    Floats
    Booleans
    Arrays
    Objects
    NULL
    Resource -> reference to a i.e function

*/

$output='Samet';
$num1 = 4;
$num2 = 10;

$sum = $num1 + $num2;
echo $sum;

$string1 = 'Hello';
$string2 = 'World';
$greeting = $string1 .' '. $string2. '!';
$greeting2 = "$string1 $string2";

$string3 = 'They\'re Here';
$string4 = "They're Here";

echo $greeting2;

echo $greeting;

$float1 = 4.21;
$bool1 = true;
echo $output;
echo $num1;

define('GREETING','Hello Everyone', TRUE);

echo greeting;

?>