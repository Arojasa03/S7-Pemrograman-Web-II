<?php
session_start();
require 'koneksi.php';

// Proses simpan data
if (isset($_POST['simpan'])) {
    $tgl_input = $_POST['tgl_input'];
    $kode = strtoupper(trim($_POST['kode']));
    $nama = trim($_POST['nama']);
    $jk = $_POST['jk'];
    $asal = trim($_POST['asal_sekolah']);
    $ortu = trim($_POST['pekerjaan_ortu']);
    $tempat = trim($_POST['tempat_lahir']);
    $lahir = $_POST['tgl_lahir'];

    $mat = (int) $_POST['mat'];
    $bing = (int) $_POST['bing'];
    $umum = (int) $_POST['umum'];

    // Hitung rata-rata
    $rata = ($mat + $bing + $umum) / 3;

    // Tentukan kelulusan
    if ($rata >= 70) {
        $ket = "Lulus";
    } elseif ($rata >= 60) {
        $ket = "Cadangan";
    } else {
        $ket = "Tidak Lulus";
    }

    // Tentukan tempat tes
    $awal = substr($kode, 0, 1);

    if ($awal == "A") {
        $tes = "Gedung A";
    } elseif ($awal == "B") {
        $tes = "Gedung B";
    } elseif ($awal == "V") {
        $tes = "Viktor";
    } else {
        $tes = "Tidak Diketahui";
    }

    // Simpan ke database
    $sql = "INSERT INTO pendaftar
    (tgl_input, kode, nama, jk, asal_sekolah,
    pekerjaan_ortu, tempat_lahir, tgl_lahir,
    mat, bing, umum, rata, tempat_tes, keterangan)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $tgl_input, $kode, $nama, $jk, $asal,
        $ortu, $tempat, $lahir, $mat, $bing,
        $umum, $rata, $tes, $ket
    ]);

    // Mencegah data masuk ulang saat refresh
    header("Location: index.php?sukses=1");
    exit;
}

// Ambil data dari database
$stmt = $pdo->query(
    "SELECT * FROM pendaftar ORDER BY id ASC"
);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$total = count($data);
$lulus = 0;
$cadangan = 0;
$tidak_lulus = 0;

foreach ($data as $d) {
    if ($d['keterangan'] == "Lulus") {
        $lulus++;
    } elseif ($d['keterangan'] == "Cadangan") {
        $cadangan++;
    } else {
        $tidak_lulus++;
    }
}

function h($nilai) {
    return htmlspecialchars((string)$nilai, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UTS PHP - Pendaftaran Mahasiswa</title>

<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 30px;
    background: #f4f4f4;
}
.container {
    width: 95%;
    max-width: 1100px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}
h2 { text-align: center; }
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
table, th, td { border: 1px solid black; }
th, td {
    padding: 8px;
    text-align: center;
    font-size: 14px;
}
input[type=text], input[type=number], input[type=date] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    box-sizing: border-box;
}
.btn {
    background: blue;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}
.info {
    margin-top: 20px;
    padding: 10px;
    background: #eef;
}
.success { color: green; }
</style>
</head>

<body>
<div class="container">

<h2>FORM PENDAFTARAN MAHASISWA BARU</h2>

<?php if (isset($_GET['sukses'])): ?>
<p class="success">Data berhasil disimpan ke database!</p>
<?php endif; ?>

<form method="POST">
<label>Tanggal Input</label>
<input type="date" name="tgl_input" required>

<label>Kode Pendaftaran</label>
<input type="text" name="kode" placeholder="Contoh: A2" required>

<label>Nama Pendaftar</label>
<input type="text" name="nama" required>

<label>Jenis Kelamin</label><br>
<label><input type="radio" name="jk" value="Laki-Laki" required> Laki-Laki</label>
<label><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
<br><br>

<label>Asal Sekolah</label>
<input type="text" name="asal_sekolah" required>

<label>Pekerjaan Orang Tua</label>
<input type="text" name="pekerjaan_ortu" required>

<label>Tempat Lahir</label>
<input type="text" name="tempat_lahir" required>

<label>Tanggal Lahir</label>
<input type="date" name="tgl_lahir" required>

<label>Matematika</label>
<input type="number" name="mat" min="0" max="100" required>

<label>Bahasa Inggris</label>
<input type="number" name="bing" min="0" max="100" required>

<label>Umum</label>
<input type="number" name="umum" min="0" max="100" required>

<button type="submit" name="simpan" class="btn">SIMPAN</button>
</form>

<h3>DAFTAR PESERTA TERDAFTAR</h3>

<div style="overflow-x:auto">
<table>
<tr>
<th>No</th>
<th>Kode</th>
<th>Nama</th>
<th>JK</th>
<th>Tempat, Tgl Lahir</th>
<th>Asal Sekolah</th>
<th>Pekerjaan Ortu</th>
<th>Tempat Tes</th>
<th>MAT</th>
<th>B. Inggris</th>
<th>Umum</th>
<th>Rata-rata</th>
<th>Keterangan</th>
</tr>

<?php foreach ($data as $i => $row): ?>
<tr>
<td><?= $i + 1 ?></td>
<td><?= h($row['kode']) ?></td>
<td><?= h($row['nama']) ?></td>
<td><?= h($row['jk']) ?></td>
<td><?= h($row['tempat_lahir']) ?>, <?= h($row['tgl_lahir']) ?></td>
<td><?= h($row['asal_sekolah']) ?></td>
<td><?= h($row['pekerjaan_ortu']) ?></td>
<td><?= h($row['tempat_tes']) ?></td>
<td><?= h($row['mat']) ?></td>
<td><?= h($row['bing']) ?></td>
<td><?= h($row['umum']) ?></td>
<td><?= number_format($row['rata'], 2) ?></td>
<td><?= h($row['keterangan']) ?></td>
</tr>
<?php endforeach; ?>

</table>
</div>

<div class="info">
<h3>Rekap Data</h3>
<p>Jumlah Pendaftar: <b><?= $total ?></b></p>
<p>Jumlah Peserta Lulus: <b><?= $lulus ?></b></p>
<p>Jumlah Peserta Cadangan: <b><?= $cadangan ?></b></p>
<p>Jumlah Tidak Lulus: <b><?= $tidak_lulus ?></b></p>
</div>

<div class="info">
<h3>Keterangan</h3>
<p>A = Gedung A, B = Gedung B, V = Viktor</p>
<p>Rata-rata ≥ 70 = Lulus</p>
<p>Rata-rata 60 sampai kurang dari 70 = Cadangan</p>
<p>Rata-rata kurang dari 60 = Tidak Lulus</p>
</div>

</div>
</body>
</html>