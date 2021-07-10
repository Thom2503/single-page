<?php
  if (isset($_POST['knop_verwijder']))
  {
    require 'config_pdo.php';

    $id = htmlentities($_POST['data_id'], ENT_QUOTES);

    if (filter_var($id, FILTER_VALIDATE_INT))
    {
      if (!empty($id))
      {
        $query = "DELETE FROM `learn_things` WHERE thing_ID = '$id'";
        $result = mysqli_query($mysql, $query);

        if ($result)
        {
          header('location: index.html');
          exit;
        } else
        {
          header('location: index.html');
          exit;
        }
      } else
      {
        header('location: index.html');
        exit;
      }
    } else
    {
      header('location: index.html');
      exit;
    }
  }

  // header('location: index.html');
  // exit;
 ?>
