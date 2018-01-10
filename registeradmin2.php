<?php
require "config/config.php";
require "config/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_POST['password'] == $_POST['c_password']) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']); //md5
    $salted = "qhguqe9gqgqegoqeg9mqegm9".$password."qhguqe9gqgqegoqeg9mqegm9";
    $hashed = hash('sha512', $salted);
    $_SESSION['username'] =  $username;
    $query = "INSERT INTO adminlogin (username, password) VALUES ('$username', '$hashed')";


    //If succesful
    if(mysqli_query($conn, $query)) {
    header("location: index.php");
    }
    else {
    echo "Rekisteröityminen epäonnistui";
    }
  }
  else {
    echo "Salasanat eivät täsmää";
  }
}
?>
