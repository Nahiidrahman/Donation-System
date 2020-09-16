<?php 

$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("onlin5f435807b43a2");
$store_passwd=urlencode("onlin5f435807b43a2@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	/* 
	$cus_campign=$result->cus_campign;
	$cus_name=$result->cus_name;
	$cus_email=$result->cus_email;
	$cus_phone=$result->cus_phone;
    */

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;


 try {
	$db = new mysqli("localhost", "root", "", "online_donation_management");

} catch (Exception $exc) {
	echo $exc->getTraceAsString();
}

if($db-> connect_error){
	die("connection failed".$db-> connect_error);
}

$amount = $amount;
$cus_campign = $_POST["campign"];
$cus_name = $_POST["name"];
$cus_email = $_POST["email"];
$cus_phone = $_POST["phone"];
$tran_date = $tran_date;
$tran_id = $tran_id;
$card_type = $card_type;

	$is_insert = $db->query("INSERT INTO trans_history (`amount`, `cus_campign`, `cus_name`, `cus_email`, `cus_phone`, `tran_date`, `tran_id`, `card_type`) VALUES (
		'$amount', '$cus_campign', '$cus_name', '$cus_email', 
		'$cus_phone', '$tran_date', '$tran_id', '$card_type')");

	if ($is_insert == TRUE) {
		echo ' <script> alert("Transaction Succeeded! Thanks For Your Donation."); window.location="donate.php" </script> ';
		exit();
	} 

} else {
	echo "Failed to connect with SSLCOMMERZ";
}

?>