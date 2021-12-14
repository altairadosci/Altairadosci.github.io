<?php
require_once'Config/connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Snaken</title>
	<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
	<div class="header-wrap">
	<header>
		<div class="logo-wrapper">
			<div class="logo">
				<div class="ring"></div>
				<div class="ring"></div>
				<div class="ring"></div>
			</div>
		</div>
		<div class="navigation">
			<a href="#">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				Home
			</a>
			<a href="#">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				News
			</a>
			<a href="#">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				Game
			</a>
			<a href="#">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				Message
			</a>
		</div>
	</header>
	</div>
	<section>
		<div class="container">	
			<div class="description">
				<div class="avatar">
					<img src="Image/avatar.jpg" alt="avatar">
				</div>
				<div class="name">
					<p>Eremeev Roman</p>
				</div>


				<?php
					$descriptions = mysqli_query($connect, "SELECT * FROM descriptions");
					$descriptions = mysqli_fetch_all($descriptions);
					foreach ($descriptions as $descriptions) {
						?>
							<div class="info">
						 	<div class="info-item">
						 		Status: <span> <?=$descriptions[1] ?></span>
						 	</div>
						 	<div class="info-item">
						 		Born: <span><?=$descriptions[2] ?></span>
						 	</div>
						 	<div class="info-item">
						 		City: <span><?=$descriptions[3] ?></span>
						 	</div>
						 </div>

						<?php 
					}
				?>
				<div class="btn" id="change">
					<a href="#" id="click-to-hide">Change</a>
				</div>
			</div>
			<div class="posts-block">
				<div class="posts-wrap">
					<div class="head-posts">
						<h1>My life</h1>
					</div>
					<div class="new-post">
						<form action="Vendor/creation-post.php" method="post">
							<input type="text" placeholder="Input your new post" name="new_pst">
							<button type="submit">Save</button>
							<!-- <div class="btn">
								<a href="#">Save</a>
							</div> -->
						</form>
					</div>
					<?php
					$posts = mysqli_query($connect, "SELECT * FROM posts");
					$posts = mysqli_fetch_all($posts);
					foreach ($posts as $posts) {
						?>
						<div class="post">
						<p class="post-text"> <?=$posts[1] ?> </p>
						<div class="btn-like">
							<div class="btn">
								<a href="Vendor/delete.php?id=<?=$posts[0]?>">Delete</a>
							</div>
							<div class="btn">
								<a href="Vendor/update.php?id=<?=$posts[0]?>">Change</a>
							</div>
<!-- 							<div class="like_dislike">
								<img src="Image/like.png" alt=""><p>2</p>
								<img src="Image/dislike.png" alt=""><p>3</p>
							</div> -->
						</div>
						</div>
						<?php 
					}
				?>
				</div>
			</div>	
		</div>
	</section>
	<div class="change-descrip-win" id="hidden-element">
			<div class="new-desc">
				<form action="Vendor/upload-description.php" method="post">
					<input type="text" placeholder="Input your new status" name="status">
					<input type="text" placeholder="Input your new born" name="born">
					<input type="text" placeholder="Input your new city" name="city">
					<button id="save-hidden" type="submit">Save</button>
				</form>
			</div>
	</div>
	<script src="JS/index.js"></script>
</body>
</html>