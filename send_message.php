<?php

session_start();

require_once 'testconnect.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){ 


// haal de data op van het formulier

// gebruik de keys om uit je $_POST  array te krijgen wat er in zit
//voorbeeld
$name = $_POST['name'];
$message = $_POST['text'];

// w3 schools file upload opzoeken
$target_dir = "uploads/";
$uniqueFilename = uniqid() . '_' . basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $uniqueFilename;
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

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if already posted
if (isset($_SESSION['posted']))
{
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

  $_SESSION['posted'] = true;

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    $imagePath = $target_file;
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

// opzoeken hoe je tekst sanitized
if (isset($_POST['name'])) {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Your username is: $username and your password is: $password";
    header( 'Location: index.php' );
}




// dit komt pas op het einde
$stmt = $conn->prepare('INSERT INTO `messages` (`name`, `message`, `imagePath`) VALUES (?, ?, ?)');
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $message);
$stmt->bindParam(3, $imagePath);
$stmt->execute();

}