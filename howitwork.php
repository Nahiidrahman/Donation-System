<!DOCTYPE html>
<html>
<head>
	<title>How It Work?</title>

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
	background-image: url("img/donateBG1.jpg");
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

/* Step-1 section*/

#step1{
	width: 100%;
	min-height: 50vh;
	padding: 10rem 5rem;
	flex-direction: column;
}
#step1 .step1-info{
	text-align: center;
}
#step1 .step1-info .step1-info-heading{
	font-size: 3rem;
	text-transform: uppercase;
	letter-spacing: .2rem;
	color: black;
}
#step1 .step1-info .step1-info-p{
	font-size: 1.3rem;
	line-height: 2rem;
	margin-top: 10px;
}
#step1 .step1-img .step1-img-wrapper{
	margin-top: 50px;
	height: auto;
	max-width: 500px;
	position: relative;
	display: inline-block;
}
#step1 .step1-img .step1-img-wrapper img{
	height: 100%;
	width: 100%; 
}
#step1 .step1-img .step1-img-wrapper::after{
	position: absolute;
	content: '';
	right: -5rem;
	top: 50%;
	transform: translateY(-50%);
	width: 70%;
	height:120%;
	background-color: rgba(34,33,33,0.158);
	z-index: -1;
}
/*End step-1 section*/

/* Step-2 section*/

#step2{
	width: 100%;
	min-height: 50vh;
	padding: 10rem 5rem;
}
#step2 .step2-info{
	text-align: left;

}
#step2 .step2-info .step2-info-heading{
	font-size: 3rem;
	text-transform: uppercase;
	letter-spacing: .2rem;
	color: black;
}
#step2 .step2-info .step2-info-p{
	font-size: 1.3rem;
	line-height: 2rem;
	margin-top: 10px;
}
#step2 .step2-img .step2-img-wrapper img{
	height: 100%;
	width: 100%; 
}
#step2 .step2-img .step2-img-wrapper{
	margin-top: 50px;
	height: auto;
	max-width: 500px;
	position: relative;
	display: inline-block;
}
#step2 .step2-img .step2-img-wrapper::after{
	position: absolute;
	content: '';
	right: 20rem;
	top: 50%;
	transform: translateY(-50%);
	width: 70%;
	height:120%;
	background-color: rgba(34,33,33,0.158);
	z-index: -1;
}
/*End step-2 section*/

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
	/*Causes section*/
	#causes .causes-bottom .causes-item{
		flex-basis: 22%;
		margin: 1.5%;
	}
	/*End Causes section*/

	/*step-1 section*/

	#step1{
		width: 100%;
		margin: auto;
		flex-direction: row;
	}
	#step1 .step1-info{
		width: 50%;
		text-align: left;
		padding-right: 17rem;
	}

	/*End step-1 section*/

	/*step-2 section*/

	#step2{
		width: 100%;
		margin: auto;
	}
	#step2 .step2-info{
		width: 50%;
		text-align: left;
		padding-left: 17rem;
	}

	/*End step-1 section*/

}

/*End media for desktop*/

	
</style>

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
				<h1>How It Works?<span></span></h1>
			</div>
		</div>
	</section>

	<!-- Hero section END-->

	<!--step-1 section-->

	<section id="step1" class="step1 container">
		<div class="step1-info">
			<h1 style="color: #52575d; padding:20px 0px;">STEP 01</h1>
			<h1 class="step1-info-heading">Create Your Fundraising Campaign</h1>
			<p class="step1-info-p">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. </p>
		</div>
		<div class="step1-img">
			<div class="step1-img-wrapper">
				<img src="img/volunte3.jpg">
			</div>
		</div>
	</section>

	<!--End step-1 section-->

	<!--Step-2 section-->

	<section id="step2" class="step2 container">
		<div class="step2-img">
			<div class="step2-img-wrapper">
				<img src="img/volunte5.jpg">
			</div>
		</div>
		<div class="step2-info">
			<h1 style="color: #52575d; padding:20px 0px;">STEP 02</h1>
			<h1 class="step2-info-heading">Share with <br>Family and Friends</h1>
			<p class="step2-info-p">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. </p>
		</div>
	</section>

	<!--End step-2 section-->

</body>
</html>