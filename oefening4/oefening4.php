<?php
  require '../../back2_ajax/config.php';

  $data = [];

  $result = mysqli_query($mysql, "SELECT * FROM todo");

  while ($row = mysqli_fetch_array($result))
  {
    $data[] = $row;
  }

  echo json_encode($data);
 ?>
