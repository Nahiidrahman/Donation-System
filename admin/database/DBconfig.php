  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "online_donation_management";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
$DBconfig = mysqli_select_db($connection,$db_name);

if($DBconfig)
{
	// echo "Database Connected";
}
else
{
	echo '
		<div class="container">
			<div class="row">
				<div class="col-md-8 mr-auto text--center py-5 mt-5">
					<div class="card">
						<div class="card-body">
							<h1 class="card-title gb-warning"> Database Connected Failed</h1>
							<h2 class="card-title"> Dtabase Failure </h2>
							<p class="card-title"> Please Check Your database connection </p>
							<a href="#" class="btn btn-primary"> :( </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	';
}

?>