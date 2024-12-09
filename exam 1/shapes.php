<?php
for ($i = 1; $i <= 11; $i++) {
    for ($j = 1; $j <= 11; $j++) {
        if ($i >= abs($j - 6) && $i <= 11 - abs($j - 6)) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

echo "<br><br>";

for ($i = 1; $i <= 7; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br><br>";

for($i= 1; $i <=3; $i++){
    for ($j = 1; $j <= $i; $j++) {
        for ($z = 1; $z <= $j; $z++) {
            echo "*";
        }
    }
    echo "<br>";
}
for($i= 2; $i >=1; $i--){
    for ($j = 1; $j <= $i; $j++) {
        for ($z = 1; $z <= $j; $z++) {
            echo "*";
        }
    }
    echo "<br>";
}

?>

