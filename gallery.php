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
		echo ' <script> alert("success! Wait for you get email"); window.location="gallery.php" </script> ';
		exit();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>

	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">

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
	background-image: url("img/mainBG.jpg");
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
	opacity: .7;
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

/*Gallery Section*/

.gallery{
	margin: 50px 50px;

}
.gallery img{
	width: 230px;
	padding: 10px;
	filter: grayscale(100%);
	transition: .5s;
}
.gallery img:hover{
	filter: grayscale(0);
	transform: scale(1.1);
}

/*End Gallery Section*/

/*volunteer signup Section*/
#volunteer-signup{
	background-image: url("img/volunteers.jpg");
	background-size: cover;
	position: relative;
	z-index: 1;
	width: 100%;
	height: 600px;

}
#volunteer-signup::after{
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-color: #60bc0f;
	opacity: .7;
	z-index: -1;
}
#volunteer-signup .volunteer .volunteer-img img{
	width: 600px;
	height: 400px;
	box-shadow: 0 14px 18px 0 rgba(0,0,0,.60), 0 17px 50px 0 rgba(0,0,0,.50);
	border-radius: 9px;
	float: left;
	margin-left: 70px;
	margin-top: 100px;
}
#volunteer-signup .volunteer .volunteer-form{
	float: right;
	margin-right: 10px;
	width: 500px;
	top: 48%;
	left: 75%;
	position: absolute;
	transform: translate(-50%,-50%);
	color:  white;
}
#volunteer-signup .volunteer .volunteer-form h2{
	float: left;
	font-size: 2rem;
	margin-bottom: 10px;
	padding: 13px 0;
}
#volunteer-signup .volunteer .volunteer-form .volunteer-box{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 20px 0;
	border:  2px solid white;
}
#volunteer-signup .volunteer .volunteer-form .volunteer-box input{
	border: none;
	outline: none;
	background: none;
	color: white;
	margin: 5px 8px;
	font-size: 16px;
	font-style: italic;
}
#volunteer-signup .volunteer .volunteer-form .volunteer-box textarea{
	height: 100px;
	width: 500px;
	border: none;
	outline: none;
	background: none;
	color: white;
	font-size: 18px;
	margin: 0 8px;
	font-style: italic;
}
#volunteer-signup .volunteer .volunteer-form .volunteer-send-botton{
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
#volunteer-signup .volunteer .volunteer-form .volunteer-send-botton:hover{
	background-color: black;
	color: white;
	border: 1px solid black;
}

/*volunteer signup Section*/

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
						<li><a href="#" data-after="BLOG">BLOG</a></li>
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
				<h1>Our Gallery<span></span></h1>
			</div>
		</div>
	</section>

	<!-- Hero section END-->

	<!--gallery section -->

	<div class="gallery">

		<a href="img/c1.jpg" data-lightbox="gallery"><img src="img/1.jpg"></a>
		<a href="img/c2.jpg" data-lightbox="gallery"><img src="img/2.jpg"></a>
		<a href="img/c3.jpg"data-lightbox="gallery"><img src="img/3.jpg"></a>
		<a href="img/c4.jpg" data-lightbox="gallery"><img src="img/4.jpg"></a>
		<a href="img/c5.jpg" data-lightbox="gallery"><img src="img/5.jpg"></a>
		<a href="img/c6.jpg" data-lightbox="gallery"><img src="img/6.jpg"></a>
		<a href="img/c7.jpg" data-lightbox="gallery"><img src="img/7.jpg"></a>
		<a href="img/c8.jpg" data-lightbox="gallery"><img src="img/8.jpg"></a>
		<a href="img/c9.jpg" data-lightbox="gallery"><img src="img/9.jpg"></a>
		<a href="img/c10.jpg" data-lightbox="gallery"><img src="img/10.jpg"></a>
		<a href="img/c11.jpg" data-lightbox="gallery"><img src="img/11.jpg"></a>
		<a href="img/c12.jpg" data-lightbox="gallery"><img src="img/12.jpg"></a>
		<a href="img/c13.jpg" data-lightbox="gallery"><img src="img/13.jpg"></a>
		<a href="img/c14.jpg" data-lightbox="gallery"><img src="img/14.jpg"></a>
		<a href="img/c15.jpg" data-lightbox="gallery"><img src="img/15.jpg"></a>
		<a href="img/c16.jpg" data-lightbox="gallery"><img src="img/16.jpg"></a>
		<a href="img/c17.jpg" data-lightbox="gallery"><img src="img/17.jpg"></a>
		<a href="img/c18.jpg" data-lightbox="gallery"><img src="img/18.jpg"></a>
		<a href="img/c19.jpg" data-lightbox="gallery"><img src="img/19.jpg"></a>
		<a href="img/c20.jpg" data-lightbox="gallery"><img src="img/20.jpg"></a>

	</div>

	<!--end gallery section -->

	<script src="js/app.js"></script>
	<script src="js/lightbox-plus-jquery.min.js"></script>

</body>
</html>
