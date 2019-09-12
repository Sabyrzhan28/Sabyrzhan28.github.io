<?php
require_once('config.php');

$sql = "UPDATE users SET name = :name , surname = :surname , email = :email  WHERE users.id = :id ";

$stmt = $db->prepare($sql);
$stmt->bindValue(':id',$_POST['user_id']);
$stmt->bindValue(':name',$_POST['user_name']);
$stmt->bindValue(':surname',$_POST['user_surname']);
$stmt->bindValue(':email',$_POST['user_email']);

$stmt->execute();

header("location: index.php", true, 301 ); exit;

?>