<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="x-ua-compitable" content="if=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio Website</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
<div class="container">
<div class="profile-card">
<div class="profile-pic">
<img src="bo.jpeg" alt="user avatar">
</div>
<div class="profile-detailes">
<div class="intro">
<h2><?php echo 'Zekariyas Shetaye'; ?></h2>
<h4><?php echo 'Web Developer'; ?></h4>
<div class="social">
<a href="#"><i class="fab fa-facebook" style="color:var(--blue)"></i></a>
<a href="#"><i class="fab fa-twitter" style="color:var(--skyblue)"></i></a>
<a href="#"><i class="fab fa-dribbble" style="color:var(--dark-pink)"></i></a>
<a href="#"><i class="fab fa-linkedin" style="color:var(--light-blue)"></i></a>
</div>
</div>
<div class="contact-info">
<div class="row">
<div class="icon">
<i class="fa fa-phone" style="color:var(--dark-magenta)"></i>
</div>
<div class="content">
<span>Phone</span>
<h5><?php echo '0910814674'; ?></h5>
</div>
</div>
<div class="row">
<div class="icon">
<i class="fa fa-envelope-open" style="color:var(--light-green)"></i>
</div>
<div class="content">
<span>Email</span>
<h5><?php echo 'zekishitaye19@gmail.com'; ?></h5>
</div>
</div>
<div class="row">
<div class="icon">
<i class="fa fa-map-marker" style="color:var(--light-purple)"></i>
</div>
<div class="content">
<span>Location</span>
<h5><?php echo "St'M University"; ?></h5>
</div>
</div>
</div>
<button class="downloade-btn">Download CV</button>
</div>
</div>
<div class="about">
<h1>About Me</h1>
<p><?php echo 'I am a creative web developer. '; ?></p>
<h2>What I Do !!!</h2>
<div class="project">
<div class="projectbox">
<div class="icon">
<img src="images/" alt="">
</div>
<div class="desc">
<h3>Web Developer</h3>
<p><?php echo ';
?></p>
</div>
</div>
<div class="projectbox">
<div class="icon">
<img src="images/" alt="">
</div>
<div class="desc">
<h3>App Developer</h3>
<p><?php echo '';
?></p>
</div>
</div>
<div class="projectbox">
<div class="icon">
<img src="images/" alt="">
</div>
<div class="desc">
<h3>API Developer</h3>
<p> <?php echo '';
?></p>
</div>
</div>
</div>
</div>
</div>
<a href="logout.php">Logout</a>
</body>
</html>