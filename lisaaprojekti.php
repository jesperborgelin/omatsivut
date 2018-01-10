<?php
require "config/config.php";
require "config/db.php";
function make_thumb($src, $dest, $desired_width) {

  $imageFileType = pathinfo($dest,PATHINFO_EXTENSION);

  if ($imageFileType == "jpg") {
    /* read the source image */
  	$source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
  	$height = imagesy($source_image);
  	/* find the "desired height" of this thumbnail, relative to the desired width  */
  	$desired_height = floor($height * ($desired_width / $width));

  	/* create a new, "virtual" image */
  	$virtual_image = imagecreatetruecolor($desired_width, $desired_height);

  	/* copy source image at a resized size */
  	imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

  	/* create the physical thumbnail image to its destination */
  	imagejpeg($virtual_image, $dest);

  } else if ($imageFileType == "png") {
    /* read the source image */
  	$source_image = imagecreatefrompng($src);
    $width = imagesx($source_image);
  	$height = imagesy($source_image);
  	/* find the "desired height" of this thumbnail, relative to the desired width  */
  	$desired_height = floor($height * ($desired_width / $width));

  	/* create a new, "virtual" image */
  	$virtual_image = imagecreatetruecolor($desired_width, $desired_height);

  	/* copy source image at a resized size */
  	imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

  	/* create the physical thumbnail image to its destination */
  	imagepng($virtual_image, $dest);
} else if ($imageFileType == "gif") {
  /* read the source image */
  $source_image = imagecreatefromgif($src);
  $width = imagesx($source_image);
  $height = imagesy($source_image);
  /* find the "desired height" of this thumbnail, relative to the desired width  */
  $desired_height = floor($height * ($desired_width / $width));

  /* create a new, "virtual" image */
  $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

  /* copy source image at a resized size */
  imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

  /* create the physical thumbnail image to its destination */
  imagegif($virtual_image, $dest);
}else{
        return false;
  }
  return true;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$projekti = mysqli_real_escape_string($conn, $_POST['projekti']);
$nimi = mysqli_real_escape_string($conn, $_POST['nimi']);
$kuvaus = mysqli_real_escape_string($conn, $_POST['kuvaus']);
$kuvanimi = $_FILES['fileToUpload']['name'];



$target_dir = "uploads/";
$target_dir2 = "uploads/thumb/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file2 = $target_dir2 . 'thumb_'.basename($_FILES["fileToUpload"]["name"]);

$desired_width = 100;

if ($projekti == "valmis") {
$query = "INSERT INTO valmiitprojektit (nimi, kuvaus, post_image) VALUES ('$nimi', '$kuvaus', '$kuvanimi')";
} else {
$query = "INSERT INTO eivalmiitprojektit (nimi, kuvaus, post_image) VALUES ('$nimi', '$kuvaus', '$kuvanimi')";
}



$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
      if (make_thumb($_FILES["fileToUpload"]["tmp_name"], $target_file2, $desired_width) && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
if(mysqli_query($conn, $query)) {
header("location: userpanel.php");
}
else {
echo "Jokin epäonnistui";
}
}
?>
