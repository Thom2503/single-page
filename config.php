<?php 
  $db_hostname = 'localhost';
  $db_username = 'root';
  $db_password = '';
  $db_database = 'MijnDatabase';

  $mysql = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
  mysqli_set_charset($mysql, "utf8");

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
 ?>