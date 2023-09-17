<?php
 
$db = new PDO('mysql:host=localhost;dbname=my_database', 'root', '');
 
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
 
if (empty($name) || empty($email) || empty($password)) {
  echo 'Please fill in all of the required fields.';
  exit;
}
 
$hash = password_hash($password, PASSWORD_DEFAULT);
 
$sql = 'INSERT INTO users (name, email, password) VALUES (?, ?, ?)';
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $hash);
$stmt->execute();
 
header('Location: login.php');

?>