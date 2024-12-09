<!-- 3 -->
<?php
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];


for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "ASC: " . implode(", ", $array) . "<br>";

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] < $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "DESC: " . implode(", ", $array);
?>
<br>
<!-- 4 -->
<?php
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$sum = 0;

foreach ($array as $num) {
    $sum += $num;
}

$avg = $sum / count($array);
echo "Average: " . $avg;
?>
<br>
<!-- 5 -->
<?php
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

// Filter even numbers
$filtered = array_filter($array, function ($num) {
    return $num % 2 !== 0; // Keep only odd numbers
});

// Delete even numbers
$array = array_values($filtered);
echo "Filtered Array: " . implode(", ", $array);
?>
<br>
<!-- 6 -->
<?php
$numbers = [10, 30, 20];
$max = $numbers[0];

if ($numbers[1] > $max) {
    $max = $numbers[1];
}
if ($numbers[2] > $max) {
    $max = $numbers[2];
}

echo "Max Number: " . $max;
?>
<br>
<!-- 7 -->
<?php
$date = "2012-12-21";
$newDate = date("Y-m-d", strtotime("+1 month", strtotime($date)));
echo "New Date: " . $newDate;
?>
<br>
<!-- 8 -->
<?php
$currentMonth = date("n");
$previousMonth = $currentMonth - 1;

if ($previousMonth < 1) {
    $previousMonth = 12; 
}

echo "Previous Month Number: " . $previousMonth;
?>
<br>
<!-- 9 -->
<?php
$string = "Hello, welcome to the PHP world!";
$search = "PHP";

if (preg_match("/\b$search\b/", $string)) {
    echo "The string contains '$search'.";
} else {
    echo "The string does not contain '$search'.";
}
?>
<br>
<!-- 10 -->
<?php
function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
$number = 29;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>