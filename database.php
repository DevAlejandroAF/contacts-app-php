<?php
$host = "localhost:3306";
$database = "contacts_app";
$user = "root";
$password = "Pass*Word#123";

try {
  $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
  /* foreach ($conn->query("SHOW DATABASES") as $row) { */
  /*   print_r($row); */
  /* } */
  /* die(); */
} catch (PDOException $e) {
  die("PDO connection error: " . $e->getMessage());
}
