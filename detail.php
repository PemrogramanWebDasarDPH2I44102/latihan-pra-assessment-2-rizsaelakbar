<?php
$id = $_GET['id'];
include 'koneksi.php';
$sql = mysqli_query($conn, "SELECT * from paket WHERE id = '$id'");
  foreach ($sql as $row){
    echo $row['sasaran'].'<br>';
    echo $row['isi_paket'].'<br>';
    echo $row['tanggal_datang'].'<br>';
    echo $row['penerima'].'<br>';
  }
?>
<form method="post" action="">
<input type="submit" value="Diambil" name="hapus">
<?php
if (isset($_POST['hapus'])) {
  $sql = mysqli_query($conn, "UPDATE paket SET tanggal_ambil=now(),status='Telah Diambil' WHERE id='$id'");
  $conn->query($sql) === TRUE;
      header("Location:inp_paket.php");
}
?>
