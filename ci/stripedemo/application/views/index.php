<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Stripe Payment Gateway Using PHP</title>
        
      
</head>

<body>

	




	<div class='tLink'><strong>Tutorial Link:</strong> <a href='how-to-integrate-stripe-payment-gateway-using-php' target='_blank'>Click Here</a></div><br/>

<div class='web'>
	<h1>Stripe Payment Gateway Using PHP</h1>

	<p>Price: $40.00</p>

	<p>Name: Demo Transaction</p>

	<form action="<?php echo base_url("Stripe_payment/checkout");?>" method="POST">
	<?php 
//	define('AUTHORIZE_URI', 'https://connect.stripe.com/oauth/authorize');

// if (isset($_GET['code']))
//  { 
// 	$code = $_GET['code'];
// 	 $token_request_body = array(
//     'grant_type' => 'authorization_code',
//     'client_id' => 'ca_9MSmI571aMlM4OghKXM8xUyJ4mSFuFKK',
//     'code' => $code,
//     'client_secret' => 'sk_test_rZzdFupalVZsMFbnM2PoYloA'
//   );

//   $req = curl_init("https://connect.stripe.com/oauth/token");
//   curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
//   curl_setopt($req, CURLOPT_POST, true );
//   curl_setopt($req, CURLOPT_POSTFIELDS, http_build_query($token_request_body));
//   curl_setopt($req, CURLOPT_SSL_VERIFYPEER, FALSE);
//   //curl_setopt($req, CURLOPT_CAINFO, "assets/cacert.pem");

//   // TODO: Additional error handling
//   $respCode = curl_getinfo($req, CURLINFO_HTTP_CODE);
//   $resp = json_decode(curl_exec($req), true);
//   curl_close($req);


// } else if (isset($_GET['error'])) { // Error
//   echo $_GET['error_description'];
// } else { // Show OAuth link
//   $authorize_request_body = array(
//     'response_type' => 'code',
//     'scope' => 'read_write',
//     'client_id' => 'ca_9MSmI571aMlM4OghKXM8xUyJ4mSFuFKK' 
//   );

//   $url = AUTHORIZE_URI . '?' . http_build_query($authorize_request_body);
//   echo "<a href='$url'>Connect with Stripe</a>";
// } 

	

	?>

	<!-- <input type="hidden" value="?php echo $resp['access_token']; ?>" name="access_token" />
	<input type="hidden" value="?php echo $resp['stripe_publishable_key']; ?>" name="stripe_publishable_key" />
	<input type="hidden" value="?php echo $resp['stripe_user_id'];?>" name="stripe_user_id" /> -->




<!-- data-key="pk_test_wFw6m2cQpzJPAuC9TLsWJ6ys"  -->


		<!-- script src="https://checkout.stripe.com/checkout.js" 

		class="stripe-button"  

		data-key="?php echo $resp['stripe_publishable_key']; ?>" 

		data-image="http://www.stepblogging.com/wp-content/uploads/2014/12/logo1.png" 

		data-name="StepBlogging.com" 

		data-description="Demo Transaction ($40)"

		data-amount="400" />

		</script> -->

		<script src="https://checkout.stripe.com/checkout.js" 

		class="stripe-button"  

		data-key="pk_test_wFw6m2cQpzJPAuC9TLsWJ6ys" 

		data-image="http://www.stepblogging.com/wp-content/uploads/2014/12/logo1.png" 

		data-name="StepBlogging.com" 

		data-description="Demo Transaction ($40)"

		data-amount="400" />

		</script>

	</form>

	<p class='error'>

		<strong>Testing Card Number</strong> - 4242424242424242<br />

		<strong>CVV Number</strong> - 1234 <br />

		<strong>Card Expiry Date</strong> - Use any future date <br />

	</p>

</div>

</body>

</html>

<style>

.web{

	font-family:tahoma;

	size:12px;

	top:10%;

	border:1px solid #CDCDCD;

	border-radius:10px;

	padding:10px;

	width:45%;

	margin:auto;

	height:auto;

}

h1, h2{

	margin:3px 0;

	font-size:13px;

	text-decoration:underline;

}

.tLink{

	font-family:tahoma;

	size:12px;

	padding-left:10px;

	text-align:center;

}



.talign_right{

	text-align:right;

}

.username_availability_result{

	display:block;

	width:auto;

	float:left;

	padding-left:10px;

}

.input{

	float:left;

}

.error{

	color:#FF0000;

	font-size:12px;

}



</style>