<H1>LIST SEMUA PAKET</H1>
<table border="1">
<?php
  include 'koneksi.php';
    $sql = mysqli_query($conn, "SELECT * from paket");
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
          <a href='detail.php?id=".$row['id']."'>".$row['tanggal_ambil']."</a>
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

          echo "<a href='inp_paket.php'>Kembali</a>";
          echo "<br>";

?>
</table>
