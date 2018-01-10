<?php
require "config/config.php";
require "config/db.php";
  session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username =  $_POST['username'];
$password = $_POST['password'];

$salted = "qhguqe9gqgqegoqeg9mqegm9".$password."qhguqe9gqgqegoqeg9mqegm9";
$hashed = hash('sha512', $salted);

$query = "SELECT * FROM adminlogin WHERE username='$username' AND password='$hashed'";
$result = mysqli_query($conn, $query);
if (!$row = $result->fetch_assoc()) {
  echo "Käyttäjänimi tai salasana on väärin!";
} else {
  $_SESSION['message'] = 'Kirjauduttu sisään';
  $_SESSION['username'] = $username;
  header("location: userpanel.php");
}
}
?>
