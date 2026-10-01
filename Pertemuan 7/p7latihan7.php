<HTML>
<HEAD>
    <TITLE> Penggunaan Join / Implode </TITLE>
</HEAD>
<BODY>
<?php
$hobi = array("Membaca", "Koding", "Bermain Musik");
$string_hobi = implode(" - ", $hobi);

echo "Hasil Penggabungan Array: <br>";
echo $string_hobi;
?>
</BODY>
</HTML>