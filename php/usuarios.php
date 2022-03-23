<?php
// Connect to MySQL
$link = mysql_connect('localhost', 'root', '12345678');
if (!$link) {
    die('conexión fallida: ' . mysql_error());
}

// Make my_db the current database
$db_selected = mysql_select_db('BDverde', $link);

if (!$db_selected) {
  // If we couldn't, then it either doesn't exist, or we can't see it.
  $sql = 'CREATE DATABASE BDverde';

  if (mysql_query($sql, $link)) {
      echo "base de datos BDverde creada\n";
  } else {
      echo 'Error al crear base de datos: ' . mysql_error() . "\n";
  }
}

mysql_close($link);
?>