<?php
$file = fopen("p5test1.txt", "r");
echo fgets($file);
fclose($file);
?>