<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ambil.php" method="post">
    <h2> Ruang </h2>
      Nama Gedung:
    <select name="nama_gedung">
        <option value="-pilih-">
        <option value="bakrietower">Bakrie Tower
        <option value="gammatower">Gamma Tower
        <option value="capitaltower">Capital Tower           
</select>        
<br>
      Pilih Lantai:
    <select name="lantai">
        <option value="pilih">
        <option value="lantai1">lantai 1
        <option value="lantai2">lantai 2
        <option value="lantai3">lantai 3      
</select>
<br>
<label for="kode_ruang">Kode Ruang*</label><br>
<input type="text" name="kode_ruang" required><br>
<label for="nama_ruang">Nama Ruang*</label><br>
<input type="text" name="nama_ruang" required><br>
<label for="kapasitas">Kapasitas*</label><br>
<input type="text" name="kapasitas" required><br>
<label for="keterangan">Keterangan:</label><br>
<textarea rows="4" name="keterangan" required></textarea>
<br>
<input type="submit" value="Submit">
<input type="reset" value="Cancel">
</form>
</body>
</html>