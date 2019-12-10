<?php

for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo'*';
    }
    echo'<br>';
}

for ($row = 1; $row <= 5; $row++) {
    for ($col = 5; $col >= $row; $col--) {
        echo'*';
    }
    echo'<br>';
}


for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {

        if ($row >= (6 - $col)) {
            echo'*';
        } else {
            echo'&nbsp;&nbsp;';
        }
    }
    echo'<br>';
}
for ($row = 1; $row <= 5; $row++) {
    for ($col = 5; $col >= 1; $col--) {

        if ($row <= (6 - $col)) {
            echo'*';
        } else {
            echo'&nbsp;&nbsp;';
        }
    }
    echo'<br>';
}



$n = 5;
$k = 2 * $n - 2;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $k; $j++) {
        echo '&nbsp;';
    }
    $k--;
    for ($j = 0; $j <= $i; $j++) {
        echo '* ';
    }
    echo'<br>';
}

$n = 5;
$k = 2 * $n - 7 ;
for ($i = 0; $i < $n; $i++) {
    for ($j = $k; $j > 0; $j--) {
        echo '&nbsp;';
    }
    $k++;
    for ($j = 5; $j >$i; $j--) {
        echo ' *';
    }
    echo'<br>';
}

function factorial($number = 4)
{
    if ($number == 1)
        return 1;
    else
        return $number * factorial($number - 1);
}

echo factorial(6);
echo'<BR>';

//reverse a string

function reverse($string)
{
    $i = 0;
    $reverse = '';
    while (isset($string[$i])) {
        $reverse = $string[$i] . $reverse;
        $i++;
    }
    return $reverse;
}

echo reverse('testing');
echo'<BR>';

//fibbonici series
function fibbonici($number)
{
    if (in_array($number, [0, 1]))
        return $number;
    else {
        return fibbonici($number - 1) + fibbonici($number - 2);
    }
}

for ($i = 0; $i <= 6; $i++) {
    echo fibbonici($i);
}
echo'<BR>';

// prime no.

function isPrime($number)
{
    if ($number == 1)
        return 0;
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}

$number = 31;
$flag = isPrime($number);
if ($flag == 1)
    echo "Prime";
else
    echo "Not Prime";

//function to sum digits of argument

function digitSum($argument)
{
    $sum = 0;
    while (!empty($argument)) {
        $sum += $argument % 10;
        $argument = $argument / 10;
    }
    return $sum;
}

echo digitSum(123);



//Selection Sort


$arr = array(64, 25, 12, 22, 11); 
$len = count($arr); 
selection_sort($arr, $len); 
echo "Sorted array : \n";  
  
for ($i = 0; $i < $len; $i++)  
    echo $arr[$i] . " ";  

?>