<?php
require "config/config.php";
require "config/db.php";
session_start();
$id = mysqli_real_escape_string($conn, $_GET['id']);
$query = "DELETE FROM eivalmiitprojektit WHERE id=$id";



if (mysqli_query($conn, $query)) {
    echo "Poistettu";
    header("location: projektit.php");
} else {
    echo "Virhe poistamisessa: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
