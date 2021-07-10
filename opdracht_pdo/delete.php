<?php
  require 'config_pdo.php';

  $id = htmlentities($_POST['data_id'], ENT_QUOTES);

  // $query = "DELETE FROM `learn_things` WHERE thing_ID = '$id'";
  $query = "DELETE FROM `learn_things` WHERE thing_ID = ?";

  $foutmelding = "";

  if (empty($id))
  {
    $foutmelding .= "Er is een veld niet ingevuld!";
    exit;
  }

  $gegevens = [$id];

  if ($stmt = $mysql->prepare($query))
  {
    if ($stmt->execute($gegevens))
    {
      echo "OK";
      header('location: index.html');
    } else
    {
      echo "FOUT";
      header('location: index.html');
    }
  } else
  {
    echo "FOUT";
    header('location: index.html');
  }

  // if ($result)
  // {
  //   echo "OK";
  //   header('location: index.html');
  // } else
  // {
  //   echo "FOUT";
  //   header('location: index.html');
  // }
 ?>
