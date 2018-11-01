<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data"><br>
      <input type="text" placeholder="Nama Penerima" name="sasaran"><br>
      <input type="text" placeholder="Isi Paket" name="isi_paket"><br>
      <input type="text" placeholder="No KTP" name="noktp"><br>
      <input type="date" name="tanggal_ambil"><br>
      <input type="submit" value="Submit" name="submit">
      <br><br>
      <input type="submit" name="keluar" value="Keluar">
      <br><br>
      <input type="submit" name="penghuni" value="penghuni">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $sasaran = $_POST['sasaran'];
  $isi_paket = $_POST['isi_paket'];
  $noktp = $_POST['noktp'];
  session_start();
  $penerima = $_SESSION['penerima'];
  include 'koneksi.php';
  $sql="INSERT INTO paket (tanggal_datang,sasaran,penerima,isi_paket,status,noktp) VALUES (now(),'$sasaran','$penerima','$isi_paket','Belum Diambil','$noktp')";
  if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('Registrasi Berhasil');
    </script>";
    // header('Location:login.php');
  }else {
    echo "Ada Error : $sql<br><b>$conn->error</b>";
  }
}
if (isset($_POST['keluar'])) {
  session_destroy();
  header('Location:login.php');
}
if (isset($_POST['penghuni'])) {
  session_destroy();
  header('Location:penghuni.php');
}
?>
<br><br><br>
<H1>LIST PAKET</H1>
<table border="1">
<?php
echo "<a href='all.php'>Lihat Semua Paket</a>";
  include 'koneksi.php';
    $sql = mysqli_query($conn, "SELECT * from paket WHERE status = 'Belum Diambil'");
    $no=1;
          foreach ($sql as $row){
          echo "  <td>
          <a href='detail.php?id=".$row['id']."'>".$row['sasaran']."</a>
          </td>";
          echo "  <td>
          <a href='detail.php?id=".$row['id']."'>".$row['isi_paket']."</a>
          </td>";
          echo "  <td>
          <a href='detail.php?id=".$row['id']."'>".$row['tanggal_datang']."</a>
          </td>";
          echo "  <td>
          <a href='detail.php?id=".$row['id']."'>".$row['penerima']."</a>
          </td>";
          echo "  <td>
          <a href='detail.php?id=".$row['id']."'>".$row['status']."</a>
          </td>";
          $no++;
            if ($no>1) {
              echo "<tr></tr>";
              $no = 1;
            }
          }
?>
</table>
<?php
//keluar

?>
