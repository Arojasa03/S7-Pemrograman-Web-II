<?php
// Membuka koneksi ke MySQL server menggunakan mysqli
$con = mysqli_connect("localhost", "root", "", "lat_dbase");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
} 

// Menjalankan query UPDATE
$result = mysqli_query($con, "UPDATE tbl_mhs SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'"); 

if ($result) {
    echo "<h3>Data berhasil di-update!</h3>";
} else {
    echo "<h3>Gagal meng-update data: " . mysqli_error($con) . "</h3>";
}

// Menutup koneksi
mysqli_close($con);
?>