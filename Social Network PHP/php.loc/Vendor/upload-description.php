<?php
require_once'../Config/connect.php';
$status = $_POST['status'];
$born = $_POST['born'];
$city = $_POST['city'];

mysqli_query($connect, "UPDATE `descriptions` SET `status` = '$status', `born` = '$born', `city` = '$city' WHERE `descriptions`.`id` = 1");
header('Location: /');
?>

