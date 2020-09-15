<?php

try {
	$db = new mysqli("localhost", "root", "", "online_donation_management");

} catch (Exception $exc) {
	echo $exc->getTraceAsString();
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];

	$is_insert = $db->query("INSERT INTO `volunteer`(`name`, `email`, `msg`) VALUES ('$name', '$email', '$msg')");

	if ($is_insert == TRUE) {
		echo ' <script> alert("success! Wait for you get email"); window.location="index.php" </script> ';
		exit();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Online Donation Management</title>
</head>
<body>
	<!-- header section-->
	<section id="header">
		<div class="header container">
			<div class="nav-bar">
				<div class="brand">
					<a href="#hero"><h1><span>G</span>IVE<span>L</span>IFE</h1></a>
				</div>
				<div class="nav-list">
					<div class="hamburger"><div class="bar"></div></div>
					<ul>
						<li><a href="#" data-after="HOME">HOME</a></li>
						<li><a href="donate.php" data-after="DONATE">DONATE</a></li>
						<li><a href="#" data-after="CAUSES">CAUSES</a></li>
						<li><a href="gallery.php" data-after="GALLERY">GALLERY</a></li>
						<li><a href="howitwork.php" data-after="HOW IT WORKS?">HOW IT WORKS?</a></li>
						<li><a href="blog.php" data-after="BLOG">BLOG</a></li>
						<li><a href="contact.php" data-after="CONTACT">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</div>

	</section>


	<!-- end header section-->


	<!-- Hero section-->

	<section id="hero">
		<div class="hero container">
			<?php
					include('admin/database/DBconfig.php');
					$query = "SELECT * FROM hero ";
					$query_run = mysqli_query($connection, $query);
						if(mysqli_num_rows($query_run) > 0){
							foreach ($query_run as $row) {
			?>
				<div>
					<h1><?php echo $row['title']; ?><span></span></h1>
					<h1> <?php echo $row['subtitle']; ?><span></span></h1>
					<a href="donate.php" type="button" class="cta"> <?php echo $row['button']; ?> 

					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-reply" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M9.502 5.013a.144.144 0 0 0-.202.134V6.3a.5.5 0 0 1-.5.5c-.667 0-2.013.005-3.3.822-.984.624-1.99 1.76-2.595 3.876C3.925 10.515 5.09 9.982 6.11 9.7a8.741 8.741 0 0 1 1.921-.306 7.403 7.403 0 0 1 .798.008h.013l.005.001h.001L8.8 9.9l.05-.498a.5.5 0 0 1 .45.498v1.153c0 .108.11.176.202.134l3.984-2.933a.494.494 0 0 1 .042-.028.147.147 0 0 0 0-.252.494.494 0 0 1-.042-.028L9.502 5.013zM8.3 10.386a7.745 7.745 0 0 0-1.923.277c-1.326.368-2.896 1.201-3.94 3.08a.5.5 0 0 1-.933-.305c.464-3.71 1.886-5.662 3.46-6.66 1.245-.79 2.527-.942 3.336-.971v-.66a1.144 1.144 0 0 1 1.767-.96l3.994 2.94a1.147 1.147 0 0 1 0 1.946l-3.994 2.94a1.144 1.144 0 0 1-1.767-.96v-.667z"/>
					</svg>

					</a>
				</div>
		<?php
						}
						}
						else{
							echo "No Record Found";
						}
		?>	
		</div>
	</section>

	<!-- Hero section END-->
	

	<!--Our major causes Section-->

	<section id="causes">
		<div class="causes container">
			<div class="causes-top">
				<h1 class="section-title">Our ma<span>j</span>or causes</h1>
				<p>Creepeth called face upon face yielding midst is after moveth</p>
			</div>
			<div class="causes-bottom">
				<div class="causes-item">
					<div class="icon"><img src="img/causes4.png"></div>
					<h2>Our Mission</h2>
					<p>It you're. Was called you're fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful</p>
				</div>
				<div class="causes-item">
					<div class="icon"><img src="img/causes1.png"></div>
					<h2>Give Donation</h2>
					<p>It you're. Was called you're fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful</p>
				</div>
				<div class="causes-item">
					<div class="icon"><img src="img/causes2.png"></div>
					<h2>Give Inspiration</h2>
					<p>It you're. Was called you're fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful</p>
				</div>
				<div class="causes-item">
					<div class="icon"><img src="img/causes3.png"></div>
					<h2>Become Volunteer</h2>
					<p>It you're. Was called you're fowl grass lesser land together waters beast darkness earth land whose male all moveth fruitful</p>
				</div>
			</div>
		</div>
	</section>

	<!--End Our major causes Section-->

	<!--volunteer section-->
	<section id="volunteer" class="volunteer container">
		<div class="volunteer-info">
			<h1 class="volunteer-info-heading">We are nonprofit team and work worldwide</h1>
			<p class="volunteer-info-p">Their multiply doesn't behold shall appear living heaven second roo lights. Itself hath thing for won't herb forth gathered good bear fowl kind give fly form winged for reason</p> <br> <br>
			<p class="volunteer-info-p">Land their given the seasons herb lights fowl beast whales it after multiply fifth under to it waters waters created heaven very fill agenc to. Dry creepeth subdue them kind night behold rule stars him grass waters our without </p>
			<a href="#" type="button" class="volunteer-info-botton">LEARN MORE</a>
		</div>
		<div class="volunteer-img">
			<div class="volunteer-img-wrapper">
				<img src="img/volunteeer.jpg">
			</div>
		</div>
	</section>

	<!--volunteer section-->

	<!--Featured causes-->
	<section id="featured">
		<div class="featured container">
			<div class="featured-top">
				<h1 class="section-title">Feat<span>u</span>red ca<span>u</span>ses</h1>
				<p>Creepeth called face upon face yielding midst is after moveth</p>
			</div>

			<div class="featured-bottom">
				<div class="featured-item">
					<div class="img-box">
						<img src="img/education.jpg">
						<h1>Education for child</h1>
						<p>Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.</p>
						<h4>Raised: 1000Tk</h4> <h4 class="goal-green">Goal: 5000Tk</h4>
						<a href="donate.php" type="button" class="cta">Donate</a>
					</div>
				</div>

				<div class="featured-item">
					<div class="img-box">
						<img src="img/foood.jpg">
						<h1>Food for hungry people</h1>
						<p>Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.</p>
						<h4>Raised: 1000Tk</h4> <h4 class="goal-green">Goal: 5000Tk</h4>
						<a href="donate.php" type="button" class="cta">Donate</a>
					</div>
				</div>
				
				<div class="featured-item">
					<div class="img-box">
						<img src="img/cloth2.jpg">
						<h1>Providing cloth people</h1>
						<p>Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.</p>
						<h4>Raised: 1000Tk</h4>
						<h4 class="goal-green">Goal: 5000Tk</h4>
						<a href="donate.php" type="button" class="cta">Donate</a>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!--End Featured causes-->

	<!--Volunteer Sign up-->
	<section id="volunteer-signup">
		<div class="volunteer volunteer-container">
			<div class="volunteer-img">
				<img src="img/volunteers.jpg">
			</div>

		<form method="post" action="">

			<div class="volunteer-form">
				<h2>Be A Volunteer Today</h2>
				<div class="volunteer-box">
					<input type="text" placeholder="Enter your name" name="name" value="">
				</div>
				<div class="volunteer-box">
					<input type="text" placeholder="Enter your email" name="email" value="">
				</div>
				<div class="volunteer-box">
					<textarea type="textarea" placeholder="Write your massage" name="msg"></textarea>
				</div>
				<input class="volunteer-send-botton" type="submit" name="" value="Send">
			</div>

		</form>
		</div>
	</section>

	<!--End Volunteer Sign up-->

	<script src="js/app.js"></script>

</body>
</html>
