<div>
	<a href="<?php echo $pay_url;?>">Connect with owner</a>
</div>

<?php 
	define('AUTHORIZE_URI', 'https://connect.stripe.com/oauth/authorize');

if (isset($_GET['code']))
 { 
	$code = $_GET['code'];
	
	 $token_request_body = array(
    'grant_type' => 'authorization_code',
    'client_id' => 'ca_9MSmI571aMlM4OghKXM8xUyJ4mSFuFKK',
    'code' => $code,
    'client_secret' => 'sk_test_rZzdFupalVZsMFbnM2PoYloA'
  );

  $req = curl_init("https://connect.stripe.com/oauth/token");
  curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($req, CURLOPT_POST, true );
  curl_setopt($req, CURLOPT_POSTFIELDS, http_build_query($token_request_body));
  curl_setopt($req, CURLOPT_SSL_VERIFYPEER, FALSE);
  //curl_setopt($req, CURLOPT_CAINFO, "assets/cacert.pem");

  // TODO: Additional error handling
  $respCode = curl_getinfo($req, CURLINFO_HTTP_CODE);
  $resp = json_decode(curl_exec($req), true);


  curl_close($req);

  echo "<Pre>";
  print_r($resp);
  //echo $resp['access_token'];
  //       echo "<br/>";
  // echo  $resp['stripe_publishable_key'];
  //       echo "<br/>";
  // echo $resp['stripe_user_id'];

} else if (isset($_GET['error'])) { // Error
  echo $_GET['error_description'];
} 

// else { // Show OAuth link
//   $authorize_request_body = array(
//     'response_type' => 'code',
//     'scope' => 'read_write',
//     'client_id' => 'ca_9MSmI571aMlM4OghKXM8xUyJ4mSFuFKK' 
//   );

//   $url = AUTHORIZE_URI . '?' . http_build_query($authorize_request_body);
//   echo "<a href='$url'>Connect with Stripe</a>";
// } 

	

	?>