<HTML>
<HEAD>
    <TITLE> Penggunaan Split / Explode </TITLE>
</HEAD>
<BODY>
<?php
$teks = "PHP,HTML,CSS,JavaScript";
// Menggunakan explode (pengganti split pada PHP versi baru)
$array_program = explode(",", $teks);

echo "Teks asal: $teks <br><br>";
echo "Hasil setelah dipecah (explode): <br>";
print_r($array_program);
?>
</BODY>
</HTML>