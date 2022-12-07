<?php
ini_set('display_errors', 1);

// using PDO

$host = "";
$dbname = "";
$user = "";
$pass = "";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

  // Ativar modo de error
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
  $error = $e->getMessage();
  echo "Erro: $error";
}