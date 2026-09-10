<!DOCTYPE html>
<html>
<head>
    <title>Penggunaan Switch - Case</title>
</head>
<body>
    <h3>Agenda Hari Ini:</h3>

    <?php
        // Step 1: Ambil nama hari sistem saat ini (Format bahasa Inggris: Sunday, Monday, dst.)
        $nama_hari = date("l");

        // Step 2: Periksa hari dan tampilkan pesan/agenda yang sesuai
        switch ($nama_hari) {
            case "Sunday":
                print("Minggu <br>");
                print "Waktu untuk istirahat";
                break;
            case "Monday":
                print("Senin <br>");
                print "Meeting awal minggu jam 08.00";
                break;
            case "Tuesday":
                print("Selasa <br>");
                print "Pembukaan Workshop Diklat";
                break;
            case "Wednesday":
                print("Rabu <br>");
                print "Seminar Launching Windows Vista di JHCC";
                break;
            case "Thursday":
                print("Kamis <br>");
                print "Pertemuan dengan Mahasiswa";
                break;
            case "Friday":
                print("Jum'at <br>");
                print "Jogging bersama";
                break;
            default:
                print("Sabtu <br>");
                print "Survey harga ke Dusit, Mangga Dua";
                break;
        }
    ?>
</body>
</html>