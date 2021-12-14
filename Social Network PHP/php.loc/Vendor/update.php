<?php
require_once'../Config/connect.php';

$posts_id = $_GET['id'];
$posts = mysqli_query($connect, "SELECT * FROM `posts` WHERE `id` = '$posts_id'");
$posts = mysqli_fetch_assoc($posts);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Update-posts</title>
	<link rel="stylesheet" href="../CSS/update.css">
</head>
<body>
	<div class="change-post-win">
	<div class="new-post">
		<h1>Change your post</h1>
		<form action="../Vendor/update-post.php" method="post">
			<input type="hidden" name="id" value="<?= $posts['id'] ?>">
			<input type="text" placeholder="Input your new post" name="mypost"
			value="<?= $posts['text'] ?>">
			<button type="submit">Save</button>
		</form>
	</div>
</div>
</body>
</html>	