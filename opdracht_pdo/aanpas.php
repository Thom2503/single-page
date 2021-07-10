<?php
  require 'config_pdo.php';

  $titel = htmlentities($_POST['titel_aanpas'], ENT_QUOTES);
  $betekenis = htmlentities($_POST['betekenis_aanpas'], ENT_QUOTES);
  $ezelbrug = htmlentities($_POST['ezelbrug_aanpas'], ENT_QUOTES);
  $id = htmlentities($_POST['id_aanpas'], ENT_QUOTES);

  // $query = "UPDATE `learn_things` SET `Title`= '$titel',`Meaning`= '$betekenis',`Mnemonic`= '$ezelbrug' WHERE `thing_ID` = ". $id;
  $query = "UPDATE `learn_things` SET `Title`= ?,`Meaning`= ?,`Mnemonic`= ? WHERE `thing_ID` = ?";

  $foutmelding = "";

  if (empty($titel) || empty($id) || empty($betekenis) || empty($ezelbrug))
  {
    $foutmelding .= "Er is een veld niet ingevuld!";
    exit;
  }

  $gegevens = [$titel, $betekenis, $ezelbrug, $id];

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
