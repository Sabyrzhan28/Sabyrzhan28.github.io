<?php
require_once('config.php');


$sql = "DELETE FROM users WHERE users.id = :id ";

$stmt = $db->prepare($sql);
$stmt->bindValue(':id',$_POST['user_id']);

$stmt->execute();

header("location: index.php", true, 301 ); exit;

?>