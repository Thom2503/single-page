<?php
  require '../config.php';

  $id = htmlentities($_POST['data_id'], ENT_QUOTES);

  $query = "DELETE FROM `learn_things` WHERE thing_ID = '$id'";
  $result = mysqli_query($mysql, $query);
  
  $foutmelding = "";

  if (empty($id))
  {
    $foutmelding .= "Er is een veld niet ingevuld!";
    exit;
  }

  if ($result)
  {
    echo "OK";
    header('location: index.html');
  } else
  {
    echo "FOUT";
    header('location: index.html');
  }
 ?>