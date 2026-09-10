<?php
$A = 123; // Variable global

function Test() {
    $A = "Test"; // Variable lokal
    echo "Nilai A dalam fungsi = $A <br>";
}

Test();
echo "Nilai A luar fungsi = $A <br>";
?>