<?php
$nilai1 = "";
$nilai2 = "";
$operator = "";
$hasil = "";

// Cek apakah tombol submit diklik[cite: 1]
if (isset($_POST['submit'])) {
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $operator = $_POST['operator'];

    if (is_numeric($nilai1) && is_numeric($nilai2)) {
        switch ($operator) {
            case '+':
                $hasil = $nilai1 + $nilai2; // Penjumlahan[cite: 1]
                break;
            case '-':
                $hasil = $nilai1 - $nilai2; // Pengurangan[cite: 1]
                break;
            case '*':
                $hasil = $nilai1 * $nilai2; // Perkalian[cite: 1]
                break;
            case '/':
                if ($nilai2 != 0) {
                    $hasil = $nilai1 / $nilai2; // Pembagian[cite: 1]
                } else {
                    $hasil = "Tidak dapat dibagi dengan 0";
                }
                break;
        }
    } else {
        $hasil = "Masukkan angka yang valid!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>KALKULATOR</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #800000;
            font-size: 32px;
            margin-bottom: 5px;
        }
        .motto {
            color: #d35400;
            font-family: 'Comic Sans MS', cursive;
            font-size: 20px;
            margin-bottom: 20px;
        }
        .labels {
            font-weight: bold;
            color: #800000;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .result-box {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: blue;
        }
        .footer {
            margin-top: 40px;
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Kalkulator Sederhana</h1>
    <div class="motto">Selamat Mencoba</div>

    <form method="POST" action="">
        <table align="center" cellpadding="5">
            <tr class="labels">
                <td>Nilai I</td>
                <td></td>
                <td>Nilai II</td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <input type="number" step="any" name="nilai1" value="<?php echo htmlspecialchars($nilai1); ?>" required>
                </td>
                <td>
                    <select name="operator">
                        <option value="+" <?php if ($operator == '+') echo 'selected'; ?>>+</option>
                        <option value="-" <?php if ($operator == '-') echo 'selected'; ?>>-</option>
                        <option value="*" <?php if ($operator == '*') echo 'selected'; ?>>*</option>
                        <option value="/" <?php if ($operator == '/') echo 'selected'; ?>>/</option>
                    </select>
                </td>
                <td>
                    <input type="number" step="any" name="nilai2" value="<?php echo htmlspecialchars($nilai2); ?>" required>
                </td>
                <td>
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
    </form>

    <?php if ($hasil !== ""): ?>
        <div class="result-box">
            Hasil: <?php echo $hasil; ?>
        </div>
    <?php endif; ?>

    <div class="footer">
        Created by Endar Nirmala, Nim : 23204104
    </div>

</body>
</html>