<?php
// Cek tombol submit
if (isset($_POST['Submit'])) {
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    // Validasi data kosong
    if (empty($id_mahasiswa) || empty($nama) || empty($alamat) || empty($telepon)) {
        echo "<script language='JavaScript'>
                alert('Data Harap Dilengkapi!');
                document.location='form-input.php';
              </script>";
    } else {
        // Koneksi ke database menggunakan mysqli
        $Open = mysqli_connect("localhost", "root", "", "lat_dbase");
        if (!$Open) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Cek apakah NIM sudah terdaftar di database
        $cek = mysqli_num_rows(mysqli_query($Open, "SELECT id_mahasiswa FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'"));
        if ($cek > 0) {
            echo "<script language='JavaScript'>
                    alert('NIM sudah dipakai!, silahkan ganti NIM yang lain');
                    document.location='form-input.php';
                  </script>";
        } else {
            // Masukkan data ke tabel mahasiswa
            $input = "INSERT INTO mahasiswa (id_mahasiswa, nama, jurusan, alamat, telepon) VALUES ('$id_mahasiswa', '$nama', '$jurusan', '$alamat', '$telepon')";
            $query_input = mysqli_query($Open, $input);

            if ($query_input) {
                echo "<script language='JavaScript'>
                        alert('Input Data Mahasiswa Berhasil');
                        document.location='form-input.php';
                      </script>";
            } else {
                echo "Input Data Mahasiswa Gagal!, Silahkan diulangi!";
            }
        }

        // Tutup koneksi database
        mysqli_close($Open);
    }
}
?>