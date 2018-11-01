<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data"><br>
      <input type="text" placeholder="Nama Penerima" name="nama"><br>
      <input type="text" placeholder="Isi Paket" name="nip"><br>
      <input type="submit" value="Submit" name="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $nip = $_POST['nip'];

include 'koneksi.php';
  $sql=mysqli_query($conn, "SELECT * FROM karyawan WHERE nama = '$nama' AND nip = '$nip'");
  $cek = mysqli_num_rows($sql);
      if ($cek > 0) {
        session_start();
        $_SESSION['penerima'] = $nama;
        echo "<script>
        alert('Login Berhasil');
        </script>";
        header('Location:inp_paket.php');
      }else {
        echo "<script>
        alert('Login Gagal');
        </script>";
      }
}
?>
