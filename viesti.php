<?php
require "config/config.php";
require "config/db.php";

$viesti = mysqli_real_escape_string($conn, $_GET['viesti']);
$positiivinen = mysqli_real_escape_string($conn, $_GET['positiivinen']);
$nimi = mysqli_real_escape_string($conn, $_GET['nimi']);
if ($positiivinen == "positiivinen") {
$query = "INSERT INTO aanet(aanestanyt, viesti) VALUES ('$nimi', '$viesti')";
} else {
$query = "INSERT INTO eiaanestanyt(nimi, viesti) VALUES ('$nimi', '$viesti')";
}

if (mysqli_query($conn, $query)) {
  mail('jesper.borgelin@gmail.com', 'Uusi viesti', $viesti);
  header("location: index.php");
}else {
  echo 'ERROR '. mysqli_error($conn) ;
  mysqli_close($conn);
}



?>
