<?php
$nilai1 = "";
$nilai2 = "";
$operator = "+";
$hasil = "";

if (isset($_POST['submit'])) {
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $operator = $_POST['operator'];

    // Menghitung berdasarkan operator yang dipilih
    if ($operator == '+') {
        $hasil = $nilai1 + $nilai2; // Operator Aritmetik Penjumlahan
    } elseif ($operator == '-') {
        $hasil = $nilai1 - $nilai2; // Operator Aritmetik Pengurangan
    } elseif ($operator == '*') {
        $hasil = $nilai1 * $nilai2; // Operator Aritmetik Perkalian
    } elseif ($operator == '/') {
        if ($nilai2 != 0) {
            $hasil = $nilai1 / $nilai2; // Operator Aritmetik Pembagian
        } else {
            $hasil = "Tidak bisa dibagi 0";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>KALKULATOR SEDERHANA</title>
</head>
<body>
    <center>
        <h2>Kalkulator Sederhana</h2>
        <p>Selamat Mencoba</p>

        <form action="" method="POST">
            <label>Nilai I</label>
            <input type="text" name="nilai1" value="<?php echo $nilai1; ?>" required>

            <select name="operator">
                <option value="+" <?php if ($operator == '+') echo 'selected'; ?>>+</option>
                <option value="-" <?php if ($operator == '-') echo 'selected'; ?>>-</option>
                <option value="*" <?php if ($operator == '*') echo 'selected'; ?>>*</option>
                <option value="/" <?php if ($operator == '/') echo 'selected'; ?>>/</option>
            </select>

            <label>Nilai II</label>
            <input type="text" name="nilai2" value="<?php echo $nilai2; ?>" required>

            <input type="submit" name="submit" value="submit">
        </form>

<?php
        if ($hasil !== "") {
            echo "<h3>Hasil: $hasil</h3>";
        }
        ?>

        <br><br>
        <p>Created by Endar Nirmala, Nim : 23204104</p>
    </center>
</body>
</html>