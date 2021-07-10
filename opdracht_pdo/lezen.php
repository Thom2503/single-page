<?php
  require 'config_pdo.php';

  $rijen = [];

  $query = "SELECT * FROM learn_things";

  $result = $mysql->query($query);

  while ($row = $result->fetch())
  {
    $rijen[] = $row;
  }

  // echo json_encode($data);
  $data = json_encode($rijen);
  echo $data;
 ?>
