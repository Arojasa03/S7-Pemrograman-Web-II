<?php
// Parameter $num memiliki nilai default = 10
function repeat($text, $num = 10)
{
    echo "<ol>\r\n";
    for ($i = 0; $i < $num; $i++) {
        echo "<li>$text</li>\r\n";
    }
    echo "</ol>";
}

// Pemanggilan dengan 2 argumen
echo "<b>Pemanggilan Pertama (15 kali):</b>";
repeat("I'm the best", 15);

// Pemanggilan dengan 1 argumen (otomatis mengulang 10 kali)
echo "<b>Pemanggilan Kedua (Default 10 kali):</b>";
repeat("You're the man");
?>