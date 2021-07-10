<?php
  require '../../back2_ajax/config.php';

  $invoer = htmlentities($_POST['invoer'], ENT_QUOTES);

  $result = mysqli_query($mysql, "INSERT INTO `todo` (`title`)
  VALUES ('{$invoer}')");

  if ($result)
  {
    echo "OK";
  } else
  {
    echo "FOUT";
  }
 ?>
