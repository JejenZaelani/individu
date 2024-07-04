<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
<h2>Form Registrasi</h2>
<form method="post" action="proses_registrasi.php">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br><br>

    <label for="alamat">Alamat:</label><br>
    <textarea id="alamat" name="alamat" rows="4" cols="50"></textarea><br><br>

    <label for="tempat_lahir">Tempat Lahir:</label><br>
    <input type="text" id="tempat_lahir" name="tempat_lahir"><br><br>

    <label for="tanggal_lahir">Tanggal Lahir:</label><br>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br><br>

    <label for="jenis_kelamin">Jenis Kelamin:</label><br>
    <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
    <label for="laki_laki">Laki-laki</label>
    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
    <label for="perempuan">Perempuan</label><br><br>

    <label for="pendidikan">Pendidikan:</label><br>
    <select id="pendidikan" name="pendidikan">
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="S1">S1</option>
    </select><br><br>

    <input type="submit" name="submit" value="Submit">
    <input type="button" onclick="window.location.href='cancel.php';" value="Batal">
</form>
</body>
</html>