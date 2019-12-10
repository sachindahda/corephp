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
$k = 2 * $n - 7;
for ($i = 0; $i < $n; $i++) {
    for ($j = $k; $j > 0; $j--) {
        echo '&nbsp;';
    }
    $k++;
    for ($j = 5; $j > $i; $j--) {
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

echo'<BR>';
echo digitSum(123);
echo'<BR>';

//Selection Sort

function selection_sort(&$arr, $n)
{
    for ($i = 0; $i < $n; $i++) {
        $low = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$low] > $arr[$j]) {
                $low = $j;
            }
        }
        if ($arr[$i] > $arr[$low]) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$low];
            $arr[$low] = $tmp;
        }
    }
}

$arr = array(13, 7, 21, 3, 63);
$len = count($arr);
selection_sort($arr, $len);
echo "Sorted array : \n";
for ($i = 0; $i < $len; $i++)
    echo $arr[$i] . " ";

//-------------------------

$array = [
    2, 3, 4, 5, 6, 7, 8, 9, 10, 11, [
        20, 30, 40, 50, 60, 70, 80, 90, 100, 110
    ]
];
$final_array = [];
function multiples($array, &$final_array)
{
    echo'<pre>';

    foreach ($array as $single) {
        if (is_array($single)) {
            multiples($single, $final_array);
        } else {
            if ($single % 2 == 0 and $single % 3 != 0) {
                $final_array[2][] = $single;
            } elseif ($single % 2 != 0 and $single % 3 == 0) {
                $final_array[3][] = $single;
            }
            elseif($single % 2 == 0 and $single % 3 == 0){
                $final_array['common'][] = $single;
            }
        }
    }
//    return $final_array;
}

multiples($array, $final_array);
echo'<PRE>';
print_R($final_array);
die('here');
?>