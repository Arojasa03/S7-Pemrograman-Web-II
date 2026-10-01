<?php
$file = fopen("p5test1.txt", "r");
while(! feof($file)) {
    echo fgets($file) . "<br />";
}
fclose($file);
?>