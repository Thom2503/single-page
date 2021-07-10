<?php
  require '../config.php';

  $rijen = [];

  $result = mysqli_query($mysql, "SELECT * FROM learn_things");

  while ($row = mysqli_fetch_array($result))
  {
    $rijen[] = $row;
  }

  // echo json_encode($data);
  $data = json_encode($rijen);
  echo $data;
 ?>
