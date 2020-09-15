<?php

try {
	$db = new mysqli("localhost", "root", "", "online_donation_management");

} catch (Exception $exc) {
	echo $exc->getTraceAsString();
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['msg'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$msg = $_POST['msg'];

	$is_insert = $db->query("INSERT INTO `contact`(`name`, `email`, `subject`, `msg`) VALUES ('$name', '$email', '$subject', '$msg')");

	if ($is_insert == TRUE) {
		echo ' <script> alert("success! Wait for you get email"); window.location="contact.php" </script> ';
		exit();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>


<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap');

*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
html{
	font-size: 10px;
	font-family: 'Montserrat', sans-serif;
	scroll-behavior: smooth;
}
a{
	text-decoration: none;
}
.container{
	min-height: 100vh;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
}
img{
	height: 100%;
	width: 100%;
	object-fit: cover;
}
p{
	color: black;
	text-align: left;
	font-size: 1.4rem;
	line-height: 1.9rem;
}
.brand h1{
	font-size: 3rem;
	text-transform: uppercase;
	color: white;
	letter-spacing: .5rem;
	margin-right: 180px;
}
.brand h1 span{
	color: #60bc0f;
}
/*Header scetion*/
#header{
	position: fixed;
	z-index: 1000;
	left: 0;
	top: 0;
	width: 100vw;
	height: auto;
}
#header .header{
	min-height: 8vh;
	background-color: rgba(31, 30, 30, 0.24);
	transition: .3s ease background-color
}
#header .nav-bar{
	display: flex;
	align-items: center;
	justify-content: space-between;
	width: 100%;
	height: 100%;
	max-width: 1300px;
	padding: 0 10px;
}
#header .nav-list ul{
	list-style: none;
	position: absolute;
	background-color: rgb(31,30,30);
	width: 100vw;
	height: 100vh;
	left: 100%;
	top: 0;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	z-index: 1;
	overflow-x: hidden;
	transition: .5s ease left;
}
#header .nav-list ul.active{
	left: 0;
}
#header .nav-list ul a{
	font-size: 2.5rem;
	font-weight: 500;
	letter-spacing: .2rem;
	text-decoration: none;
	color: white;
	text-transform: uppercase;
	padding: 20px;
	display: block;
}
#header .nav-list ul a::after{
	content: attr(data-after);
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%) scale(0);
	color: rgba(140,148,155,0.021);
	font-size: 13rem;
	letter-spacing: 50px;
	z-index: -1;
	transition: .3s ease letter-spacing;
}
#header .nav-list ul li:hover a::after{
	transform: translate(-50%, -50%) scale(1);
	letter-spacing: initial;

}
#header .nav-list ul li:hover a{
	color: #60bc0f;
}
#header .hamburger{
	height: 60px;
	width: 60px;
	display: inline-block;
	border: 3px solid white;
	border-radius: 50%;
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	z-index: 100;
	cursor: pointer;
	transform: scale(.7);
	margin-right: 20px;
}
#header .hamburger::after{
	position: absolute;
	content: '';
	height: 100%;
	width: 100%;
	border-radius: 50%;
	border: 3px solid white;
	animation: hambuger_puls .8s ease infinite;

}
#header .hamburger .bar{
	height: 2px;
	width: 30px;
	position: relative;
	background-color: white;
	z-index: -1;
}
#header .hamburger .bar::after,
#header .hamburger .bar::before{
	content: '';
	position: absolute;
	height: 100%;
	width: 100%;
	left: 0;
	background-color: white;
	transition: .3s ease;
	transition-property: top, bottom;
}
#header .hamburger .bar::after{
	top: 8px;
}
#header .hamburger .bar::before{
	bottom: 8px;
}
#header .hamburger.active .bar::before{
	bottom: 0;
}
#header .hamburger.active .bar::after{
	top: 0;
}

/*End Header scetion*/

/*Hero section*/
#hero{
	background-image: url("img/volunteeringBG.jpg");
	background-size: cover;
	background-position: top;
	position: relative;
	z-index: 1;
}
#hero::after{
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-color: black;
	opacity: .8;
	z-index: -1;
}
#hero .hero{
	max-width: 1200px;
	margin: 0 auto;
	padding: 0 50px;
	justify-content: flex-start;
}
#hero h1{
	display: block;
	width: fit-content;
	font-size: 4rem;
	position: relative;
	color: transparent;
	animation: text_reveal .5s ease forwards;
	animation-delay: 1s;
}
#hero h1:nth-child(1){
	animation-delay: 1s;
}
#hero h1 span{
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 0;
	background-color: #60bc0f;
	animation: text_reveal_box 1s ease;
	animation-delay: .3s;
}
#hero h1:nth-child(1) span{
	animation-delay: .5s;
}
/*END Hero section*/

/*Contact Form*/

#contact{
	position: relative;
	z-index: 1;
	width: 100%;
	height: 600px;

}

#contact .contact .contact-form{
	float: left;
	margin-right: 10px;
	width: 500px;
	top: 50%;
	left: 25%;
	position: absolute;
	transform: translate(-50%,-50%);
	color:  white;
}
#contact .contact .contact-form h2{
	float: left;
	font-size: 2rem;
	margin-bottom: 10px;
	padding: 13px 0;
	color: black;
}
#contact .contact .contact-form .contact-box{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 20px 0;
	border:  2px solid #333;
}
#contact .contact .contact-form .contact-box input{
	border: none;
	outline: none;
	background: none;
	color: white;
	margin: 5px 8px;
	font-size: 16px;
	font-style: italic;
	color: black;
}
#contact .contact .contact-form .contact-box textarea{
	height: 100px;
	width: 500px;
	border: none;
	outline: none;
	background: none;
	color: black;
	font-size: 18px;
	margin: 0 8px;
	font-style: italic;
}
#contact .contact .contact-form .contact-send-botton{
	display: inline-block;
	padding: 10px 40px;
	color: black;
	background-color: #fdbb00;
	border: 1px solid #fdbb00;
	font-size: 1.5rem;
	text-transform: uppercase;
	letter-spacing: .1rem;
	margin-top: 10px;
	transition: .3s ease;
	transition-property: background-color, color;

}
#contact .contact .contact-form .contact-send-botton:hover{
	background-color: black;
	color: white;
	border: 1px solid black;
}

#contact .contact .maps{
	float: left;
	margin-right: 10px;
	width: 500px;
	top: 50%;
	left: 68%;
	position: absolute;
	transform: translate(-50%,-50%);
	color:  white;


}

/* End Contact Form*/


/*Keyframes*/
@keyframes hambuger_puls{
	0%{
		opacity: 1;
		transform: scale(1);
	}
	100%{
		opacity: 0;
		transform: scale(1.4);
	}
}
@keyframes text_reveal_box{
	50%{
		width: 100%;
		left: 0;
	}
	100%{
		width: 0;
		left: 100%;
	}
}

@keyframes text_reveal{
	100%{
		color: white;
	}
}
@keyframes text_reveal_bigchange{
	100%{
		color: #fdbb00;
		font-weight: 500px;
	}
}

/*END Keyframes*/

/*media for desktop*/

@media only screen and (min-width: 1200px){
	/*header section*/
	#header .hamburger{
		display: none;
	}
	#header .nav-bar ul{
		position: initial;
		display: block;
		height: auto;
		width: fit-content;
		background-color: transparent;
	}
	#header .nav-list ul li{
		display: inline-block;

	}
	#header .nav-list ul li a{
		font-size: 1.6rem;
	}
	#header .nav-bar ul a:after{
		display: none;
	}
	/*End header section*/
}

</style>

</head>
<body>

	<!-- header section-->
	<section id="header">
		<div class="header container">
			<div class="nav-bar">
				<div class="brand">
					<a href="index.html"><h1><span>G</span>IVE<span>L</span>IFE</h1></a>
				</div>
				<div class="nav-list">
					<div class="hamburger"><div class="bar"></div></div>
					<ul>
						<li><a href="index.php" data-after="HOME">HOME</a></li>
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
			<div>
				<h1>Get In Touch<span></span></h1>
			</div>
		</div>
	</section>

	<!-- Hero section END-->

	<!--Contact form-->

	<section id="contact">
		<div class="contact contact-container">
			<div class="contact-form">
				<h2>Get In Touch</h2>

			<form method="post" action="">
				
				<div class="contact-box">
					<input type="text"  placeholder="Enter your name" name="name" value="">
				</div>
				<div class="contact-box">
					<input type="email" required  placeholder="Enter your email" name="email" value="">
				</div>
				<div class="contact-box">
					<input type="text" placeholder="Subject" name="subject" value="">
				</div>
				<div class="contact-box">
					<textarea type="textarea" placeholder="Write your massage" name="msg"></textarea>
				</div>

				<input class="contact-send-botton" type="submit" name="" value="Send">

			</form>

			</div>
			<div class="maps">
				<p ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7884187036348!2d90.37417245036698!3d23.75492329444518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ada2664e21%3A0x3c872fd17bc11ddb!2sCSE%20Building%2C%20Daffodil%20International%20University!5e0!3m2!1sen!2sbd!4v1598098640520!5m2!1sen!2sbd" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
			</div>

		</div>
	</section>

	<!--End Contact form-->

</body>
</html>
