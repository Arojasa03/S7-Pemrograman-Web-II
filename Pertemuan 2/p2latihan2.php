<?php
// Inisialisasi variabel nama barang[cite: 1]
$brg1 = "Buku"; 
$brg2 = "Mouse"; 
$brg3 = "FlashDisk"; 
$brg4 = "Pulpen"; 

// Harga per unit[cite: 1]
$harga1 = 17500; 
$harga2 = 30000; 
$harga3 = 70000; 
$harga4 = 22300; 

// Jumlah barang[cite: 1]
$jmlbrg1 = 2; 
$jmlbrg2 = 5; 
$jmlbrg3 = 1; 
$jmlbrg4 = 3; 

// Total harga per jenis peralatan[cite: 1]
$th1 = $jmlbrg1 * $harga1; 
$th2 = $jmlbrg2 * $harga2; 
$th3 = $jmlbrg3 * $harga3; 
$th4 = $jmlbrg4 * $harga4; 

// Grand total & hitung diskon[cite: 1]
$tharga = $th1 + $th2 + $th3 + $th4; 
$diskon = 5; 
$tdiskon = ($diskon * $tharga) / 100; 
$tdibayar = $tharga - $tdiskon; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peralatan Yang Dibeli</title>
    <style type="text/css">
        body { font-size: 14pt; font-family: sans-serif; }
        table { font-size: 12pt; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 8px 12px; }
    </style>
</head>
<body>
<center>
    <font face="comic sans ms" size="5" color="blue">Contoh Perhitungan dengan PHP</font><br><br>
    
    <table border="1" cellspacing="0" cellpadding="3">
        <tr>
            <td colspan="4" align="center" valign="middle"><b>Daftar Pemesanan Peralatan Kantor</b></td>
        </tr>
        <tr>
            <td><b>Nama Peralatan</b></td>
            <td><b>Jumlah</b></td>
            <td><b>Harga Satuan</b></td>
            <td><b>Jumlah Harga</b></td>
        </tr>
        <tr>
            <td align="left"><?php echo $brg1; ?></td>
            <td align="right"><?php echo $jmlbrg1; ?></td>
            <td align="right"><?php echo number_format($harga1, 0, ',', '.'); ?></td>
            <td align="right"><?php echo number_format($th1, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td align="left"><?php echo $brg2; ?></td>
            <td align="right"><?php echo $jmlbrg2; ?></td>
            <td align="right"><?php echo number_format($harga2, 0, ',', '.'); ?></td>
            <td align="right"><?php echo number_format($th2, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td align="left"><?php echo $brg3; ?></td>
            <td align="right"><?php echo $jmlbrg3; ?></td>
            <td align="right"><?php echo number_format($harga3, 0, ',', '.'); ?></td>
            <td align="right"><?php echo number_format($th3, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td align="left"><?php echo $brg4; ?></td>
            <td align="right"><?php echo $jmlbrg4; ?></td>
            <td align="right"><?php echo number_format($harga4, 0, ',', '.'); ?></td>
            <td align="right"><?php echo number_format($th4, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td colspan="3" align="right"><b>Total Harga</b></td>
            <td align="right"><?php echo number_format($tharga, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td colspan="3" align="right"><b>Diskon <?php echo "($diskon%)"; ?></b></td>
            <td align="right"><?php echo number_format($tdiskon, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td colspan="3" align="right"><b>Jumlah Harus Dibayar</b></td>
            <td align="right"><b><?php echo number_format($tdibayar, 0, ',', '.'); ?></b></td>
        </tr>
    </table>
</center>
</body>
</html>