<?php
// Membuka koneksi ke MySQL server menggunakan mysqli
$con = mysqli_connect("localhost", "root", "", "lat_dbase"); 
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
} 

// Menjalankan query DELETE
$result = mysqli_query($con, "DELETE FROM tbl_mhs WHERE LastName='Prabowo'");

if ($result) {
    echo "<h3>Data berhasil dihapus!</h3>";
} else {
    echo "<h3>Gagal menghapus data: " . mysqli_error($con) . "</h3>";
}

// Menutup koneksi
mysqli_close($con);
?>