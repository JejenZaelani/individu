<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Hasil Registrasi</h2>
    <?php
    if (isset($_POST['nama'], $_POST['alamat'], $_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['jenis_kelamin'], $_POST['pendidikan'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $pendidikan = $_POST['pendidikan'];

        echo "<div class='alert alert-success' role='alert'>";
        echo "<strong>Data Registrasi Berhasil!</strong><br>";
        echo "Nama: $nama<br>";
        echo "Alamat: $alamat<br>";
        echo "Tempat Lahir: $tempat_lahir<br>";
        echo "Tanggal Lahir: $tanggal_lahir<br>";
        echo "Jenis Kelamin: $jenis_kelamin<br>";
        echo "Pendidikan: $pendidikan<br>";
        echo "</div>";
    } else {
        echo "<div class='alert alert-warning' role='alert'>";
        echo "Silakan isi formulir dengan lengkap dan kirimkan data.";
        echo "</div>";
    }
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>