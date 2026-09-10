<?php
$A = 123; // Variable global

function Test() {
    global $A; // Mengambil variabel global dari luar fungsi
    echo "Nilai A dalam fungsi = $A <br>";
}

Test();
echo "Nilai A luar fungsi = $A <br>";
?>