<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
	$connect= new mysqli("localhost", "root", "", "2106164_rafialex");

	if ($connect->connect_error) {
    	  die("Koneksi gagal: " . $connect->connect_error);
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nama_barang = $_POST['nama_barang'];
          $jumlah = $_POST['jumlah'];
          $tanggal = $_POST['tanggal'];
          $keadaan = $_POST['keadaan'];

          $data = "INSERT INTO input_barang (nama_barang, jumlah, tanggal, keadaan)
          VALUES ('$nama_barang', '$jumlah', '$tanggal', '$keadaan')";

         if ($connect->query($data) === TRUE) {
           echo "Data udah di simpan yaa, Lanjut input lagi gan😒😉";
         } else {
           echo "Yahh koneksi gagal : " . $sql . "<br>" . $connect->error;
         }
      }
          $connect->close();
    ?>
   </div>
</body>
</html>
