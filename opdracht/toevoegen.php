<?php
  require '../config.php';

  $titel = htmlentities($_POST['titel'], ENT_QUOTES);
  $betekenis = htmlentities($_POST['betekenis'], ENT_QUOTES);
  $ezelbrug = htmlentities($_POST['ezelbrug'], ENT_QUOTES);

  $query = "INSERT INTO `learn_things`(`Title`, `Meaning`, `Mnemonic`) VALUES ('$titel', '$betekenis', '$ezelbrug')";

  $result = mysqli_query($mysql, $query);

  $foutmelding = "";

  if (empty($titel) || empty($betekenis) || empty($ezelbrug))
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
