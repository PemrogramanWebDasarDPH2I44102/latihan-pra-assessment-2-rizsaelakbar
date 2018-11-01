<?php
$conn = new mysqli('localhost','root','','pos');
if ($conn->connect_error) {
  die('Erornya :'.$conn->connect_error);
}
?>
