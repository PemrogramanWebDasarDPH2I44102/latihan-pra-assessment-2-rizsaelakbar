<form action="" method="post">
  <input type="text" placeholder="No KTP" name="noktp"><br>
  <input type="text" placeholder="Nama Penghuni" name="nama"><br>
  <input type="text" placeholder="Unit" name="unit"><br>
  <input type="submit" value="Submit" name="submit">
</form>
<?php
if (isset($_POST['submit'])) {
  $noktp = $_POST['noktp'];
  $nama = $_POST['nama'];
  $unit = $_POST['unit'];
  include 'koneksi.php';
  $sql="INSERT INTO penghuni (noktp,nama,unit) VALUES ('$noktp','$nama','$unit')";
  if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('Registrasi Berhasil');
    </script>";
    // header('Location:login.php');
  }else {
    echo "Ada Error : $sql<br><b>$conn->error</b>";
  }
}
?>
<br><br><br>
<H1>LIST PAKET</H1>
<table border="1">
<?php
  include 'koneksi.php';
    $sql = mysqli_query($conn, "SELECT * from penghuni");
    $no=1;
          foreach ($sql as $row){
          echo "  <td>".$row['noktp']."</td>";
          echo "  <td>".$row['nama']."</td>";
          echo "  <td>".$row['unit']."</td>";
          $no++;
            if ($no>1) {
              echo "<tr></tr>";
              $no = 1;
            }
          }
          echo "<a href='inp_paket.php'><mark>Kembali</mark></a>";
?>
</table>
