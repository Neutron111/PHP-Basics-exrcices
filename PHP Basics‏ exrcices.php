
<?php
/*******************************************************************************************************************/
//Write a PHP program to check whether the first two characters and last two characters of a given string are same.
$string = 'my name is belal';
$first = substr($string, 0,2);
$last = substr($string, -2,2);
echo "first 2 chars are ($first)";
echo "first 2 chars are ($last)";
/*******************************************************************************************************************/
//Write a PHP program to check if a given string starts with 'Go' or not. (Don't use "str_starts_with"function
$text = 'Go to Nawa!';
if (stripos($text,'Go')=== 0){
    echo '"Go" is in the first o fthe string';
}
/*******************************************************************************************************************/

//Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.

$num =5;
if ($num % 3 == 0 | $num % 7 == 0){
    echo "  the number is a multiple of 3";
}else{
    echo "the number is a multiple of 7";
}

/*******************************************************************************************************************/

//Write a PHP program to check the largest number among three given numbers.?
$num1=1;
$num2 =2;
$num3 =3;
if($num1 >$num2 & $num1> $num3){
    echo $num1 ."is the largest";
}
elseif( $num2 >$num1 && $num2> $num3){
    echo $num2 ."is the largest";
}
else{
    echo $num3. "the largest";
}
/******************************************************************************************************************** */
//Write a PHP program to check which number nearest to the value 100 among two given integers.
//Return 0 if the two numbers are equal

$firstnum = 80 ;
$secoendnum = 90 ;
$midnum =100;

if ($firstnum=$secoendnum){
    echo "both are equal";
}elseif(abs($midnum - $firstnum) > abs($midnum - $secondnum)){   //abs() function is used to calculate the absolute values
    echo $secoendnum."The nearest" ;
}else{
    echo $firstnum."the nearest";
}
/******************************************************************************************************************** */

//Write a PHP program to find the larger value from two positive integer values that is in the range
//20..30 inclusive or return 0 if neither is in that range.

$n1 =25 ;
$n2 =21 ;
if($n1>=20 && $n1<=30  && $n2 >=20 && $n2 <=30){
    if($n1>$n2){
        echo $n1."the largest";
    }elseif($n2>$n1){
        echo $n2."the largest";
    }
}
/******************************************************************************************************************** */
//Write a PHP program to count the number of occurrences of any digit in a string.

$text = " belal basheer ";
$char = "e";
$count = 0;

for ($i = 0; $i < strlen($text); $i++) {
    if (substr($text, $i, 1) == $char) {
    $count++;
}
}

echo $count ;



/******************************************************************************************************************** */
//Write a PHP program to return the sum of digits of an integer number.

$count=0;
$x=501;
        while ($x>0) {
            $count+=$x%10; //5 0 1 
            $x/=10;
}
echo $count;

/*********************************************************************************************************************/
//Write a PHP program to reverse any string. (Don't use "strrev" function.
    $str="belal";
    $length = strlen($str);
    $result = '';
    for ($i = $length - 1; $i >= 0; $i--) {
        $result .= $str[$i];
    }
echo $result;

?>