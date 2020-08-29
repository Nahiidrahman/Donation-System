<!-- 
<?php
try {
	$db = new mysqli("localhost", "root", "", "online_donation_management");

} catch (Exception $exc) {
	echo $exc->getTraceAsString();
}

if(isset($_POST['campign']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])){

	$campign = $_POST['campign'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	if ($is_insert == TRUE) {
		echo ' <script> alert("success! Wait for you get email"); window.location="index.php" </script> ';
		exit();
	}
}

?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Donate</title>
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
	background-color: #313131;
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

/*donate  Section*/

#donate{
	background-image: url("img/donateBG5.jpg");
	background-size: cover;
	position: relative;
	z-index: 1;
	width: 100%;
	height: 900px;

}
#donate::after{
	content: '';
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-color: #1a1a2e;
	opacity: .9;
	z-index: -1;
}
#donate .donate .donate-form{
	float: right;
	margin-right: 10px;
	width: 500px;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	color:  white;

}
#donate .donate .donate-form h1{
	float: left;
	font-size: 3rem;
	margin-bottom: 20px;
	padding: 13px 0;
	letter-spacing: 0.4rem;
	text-transform: uppercase;
}
#donate .donate .donate-form h2{
	float: left;
	font-size: 1.5rem;
	margin-bottom: 5px;
	padding: 13px 0;
	color: #a4b494;
}
#donate .donate .donate-form .donate-box{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 20px 0;
	border:  1px solid white;
	border-radius: 7px;
}
#donate .donate .donate-form .donate-box input{
	border: none;
	outline: none;
	background: none;
	color: white;
	margin: 5px 8px;
	font-size: 16px;
	width: 488px;
}

#donate .donate .donate-form .donate-box select{
	width: 495px;
	height: 33px;
	border: none;
	outline: none;
	background: none;
	color: white;
	font-size: 16px;
}

#donate .donate .donate-form .donate-send-botton{
	display: inline-block;
	width: 500px;
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
#donate .donate .donate-form .donate-send-botton:hover{
	background-color: black;
	color: white;
	border: 1px solid black;
	cursor: pointer;
}

/*End Donate Section*/

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

	<!--Ddnate -->

	<section id="donate">
		<div class="donate donate-container">

		<form method="post" action="payment.php?amount=<?php echo $amount?>,campign=<?php echo $campign?>,name=<?php echo $name?>,email=<?php echo $email?>,phone=<?php echo $phone?>">
			<div class="donate-form">
				<h1>Donation Information</h1>
				<div>
					<h2>How much would you like to donate?</h2>
				</div>
				<div class="donate-box">
					<input type="text" onkeypress="isInputNumber(event)" placeholder="Amount" name="amount" value="" required>
				</div>

				<div>
					<h2>Would you like to donate this to a specific campaign?</h2>
				</div>

				<div class="donate-box">
					<select name="campign">
						<option  value="Select_Donation_Type" selected>Select Donation Type</option>
						<option  value="Education_for_child">Education for child</option>
						<option  value="Food_for_hungry_people">Food for hungry people</option>
						<option  value="Providing_cloth_people">Providing cloth people</option>
						<option  value="One_time_Donation">One Time Donation</option>
					</select>
				</div>

				<div>
					<h1>Your Details</h1>
				</div>

				<div class="donate-box">
					<input type="text" placeholder="Enter your Name" name="name" value="" required>
				</div>
				<div class="donate-box">
					<input type="text" placeholder="Enter your Email" name="email" value="" required>
				</div>
				<div class="donate-box">
					<input type="tel" onkeypress="isInputNumber(event)" placeholder="Enter your Phone no (01858XXXXXX)" name="phone" value="" pattern="[0-9]{11}" required>
				</div>

				<input class="donate-send-botton" type="submit" name="" value="PROCEED TO PAYMENT">

				<div>
					<a href="#" title="SSLCommerz" alt="SSLCommerz"><img style="width:500px;height:auto; margin-top: 20px;" src="img/SSLCZ.png"/></a>
				</div>
			</div>

		</form>	
	
		</div>
	</section>

	<!--End Donate-->


	<script>
		function isInputNumber(evt){
			var ch = String.fromCharCode(evt.which);

			if(!(/[0-9]/.test(ch))){
				evt.preventDefault();
			}
		}
	</script>



</body>
</html>