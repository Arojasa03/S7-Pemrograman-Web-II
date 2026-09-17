<?php
// Bagian 1: Perintah Foreach
$arr = array("senin", "selasa", "rabu");
foreach ($arr as $hari){
    echo "Hari: " . $hari . "<br>";
}

echo "<hr>";

// Bagian 2: Tabel Perkalian (Sesuai modul Latihan 5)
echo "<table border=\"1\" cellpadding=\"5\" align=\"center\">";
echo "<tr><th colspan=\"3\">Tabel Perkalian</th></tr>";

for ($i = 15; $i <= 45; $i += 2) {
    $hasil = 12 * $i;
    echo "<tr>";
    echo "<td>12</td>";
    echo "<td>* " . $i . "</td>";
    echo "<td>= " . $hasil . "</td>";
    echo "</tr>";
}

echo "</table>";
