<?php
require_once('config.php');


$sql = "INSERT INTO users (name, surname, email) 			
			VALUES (:name, :surname, :email)";

$stmt = $db->prepare($sql);

$stmt->bindValue(':name',$_POST['name']);
$stmt->bindValue(':surname',$_POST['surname']);
$stmt->bindValue(':email',$_POST['email']);


$stmt->execute();

header("location: index.php", true, 301 ); exit;

?>