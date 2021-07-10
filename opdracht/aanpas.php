<?php 
  require '../config.php';

  $titel = htmlentities($_POST['titel_aanpas'], ENT_QUOTES);
  $betekenis = htmlentities($_POST['betekenis_aanpas'], ENT_QUOTES);
  $ezelbrug = htmlentities($_POST['ezelbrug_aanpas'], ENT_QUOTES);
  $id = htmlentities($_POST['id_aanpas'], ENT_QUOTES);

  $query = "UPDATE `learn_things` SET `Title`= '$titel',`Meaning`= '$betekenis',`Mnemonic`= '$ezelbrug' WHERE `thing_ID` = ". $id;

  $result = mysqli_query($mysql, $query);

  $foutmelding = "";

  if (empty($titel) || empty($id) || empty($betekenis) || empty($ezelbrug))
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