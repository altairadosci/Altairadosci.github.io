<?php
require_once'../Config/connect.php';

$id = $_POST['id'];
$mypost = $_POST['mypost'];
mysqli_query($connect, "UPDATE `posts` SET `text` = '$mypost' WHERE `posts`.`id` = '$id'");
header('Location: /');
?>