<?php
// local
// $host = 'localhost';
// $db = 'chat_app';
// $user = 'root';
// $pass = '';
// $charset = 'utf8mb4';

//vps
$host = 'localhost';
$db = 'klas4s23_587164';
$user = 'klas4s23_587164';
$pass = 'yleAcKZE';
$charset = 'utf8mb4';

try {
    $conn = new pdo ("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
    var_dump($conn);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>