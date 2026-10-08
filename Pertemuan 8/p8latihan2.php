<html>
<head>
    <title>Contoh Penggunaan UDF</title>
</head>
<body>

    <!-- Form Input -->
    <form action="" method="post">
        Masukkan Bilangan Pertama : <br>
        <input type="text" name="A" size="10" required> <br>
        Masukkan Bilangan Kedua : <br>
        <input type="text" name="B" size="10" required> <br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

<?php
if (isset($_POST['submit'])) {
    // Mengambil data input
    $A = $_POST["A"];
    $B = $_POST["B"];

    // Definisi fungsi aritmatika
    function jumlah($A, $B) {
        return $A + $B;
    }

    function kurang($A, $B) {
        return $A - $B;
    }

    function kali($A, $B) {
        return $A * $B;
    }

    function bagi($A, $B) {
        return $A / $B;
    }

    // Menampilkan input
    echo "<br>";
    echo "Bilangan Pertama : " . $A . "<br>";
    echo "Bilangan Kedua : " . $B . "<br><br>";

    // Memanggil fungsi & menampilkan hasil
    echo "Hasil Penjumlahan 2 buah bilangan <br>";
    printf("Penjumlahan antara : %d + %d = %d", $A, $B, jumlah($A, $B));
    echo "<br><br>";

    echo "Hasil Pengurangan 2 buah bilangan <br>";
    printf("Pengurangan antara : %d - %d = %d", $A, $B, kurang($A, $B));
    echo "<br><br>";

    echo "Hasil Perkalian 2 buah bilangan <br>";
    printf("Perkalian antara : %d * %d = %d", $A, $B, kali($A, $B));
    echo "<br><br>";

    echo "Hasil Pembagian 2 buah bilangan <br>";
    printf("Pembagian antara : %d / %d = %d", $A, $B, bagi($A, $B));
    echo "<br><br>";
}
?>

</body>
</html>