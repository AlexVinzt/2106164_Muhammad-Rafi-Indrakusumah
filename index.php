<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Data Input Barang</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>DATA BARANG</h1>
  <h4>MUHAMMAD RAFI INDRAKUSUMAH</h4>
  <h4>2106164</h4>
  <center>
    <form action="input_data.php" method="post">
      <label for="nama_barang">Nama Barang:</label>
      <input type="text" id="nama_barang" name="nama_barang" required><br><br>

      <label for="jumlah">Jumlah:</label>
      <input type="number" id="jumlah" name="jumlah" required><br><br>

      <label for="tanggal">Tanggal:</label>
      <input type="datetime-local" id="tanggal" name="tanggal" required></input><br><br>

      <label>Jenis Barang :</label>
        <center>
          <input type="radio" id="Baru" name="keadaan" value="Baru" class="">
          <label for="Baru">Baru</label>
          <input type="radio" id="Bekas" name="keadaan" value="bekas" class="">
          <label for="Bekas">Bekas</label>
          <center>
      </div>

      <br><br>
      <input type="submit" value="Submit">
    </form>
  <center>

  </div>
</body>

</html>