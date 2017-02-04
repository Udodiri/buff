<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Stripe_payment extends CI_Controller {
 
	public function __construct() {
 
		parent::__construct();
 
		}
 
          public function index()
         {	
         	//$data['pay_url'] = "https://connect.stripe.com/oauth/authorize?response_type=code&client_id=ca_9MSmI571aMlM4OghKXM8xUyJ4mSFuFKK&scope=read_write";	
             $this->load->view('index');
          }
 
	public function checkout()
	{  

		
		try {
                    
			require_once(APPPATH.'libraries/Stripe/lib/Stripe.php');//or you
			//Stripe::setApiKey("sk_test_rZzdFupalVZsMFbnM2PoYloA"); //Replace with your Secret Key
 
 			Stripe::setApiKey("sk_test_rZzdFupalVZsMFbnM2PoYloA");
			//Stripe::setApiKey($_POST['access_token']);


 			
			// $charge = Stripe_Charge::create(array(
			// 	"amount" => 2500,
			// 	"currency" => "usd",
			// 	"card" => $_POST['stripeToken'],
			// 	"description" => "Demo Transaction"
			// ));

// Get the credit card details submitted by the form
         if(isset($_POST['stripeToken'])){$token = $_POST['stripeToken'];}else{$token ="";}
 	// 	if(isset($_POST['access_token'])){$token = $_POST['access_token'];}else{$token ="";}
  //       echo $token;

		

		// Create the charge with Stripe
//		$charge = Stripe_Charge::create(
//		  array(
//		    "amount" => 400, // amount in cents
//		    "currency" => "usd",
//		    "source" => $token,     /// replace source with card
//		    "description" => "Example charge",
//		    "application_fee" => 200 // amount in cents
//		  ),
//		  		   array("stripe_account" => "dev.sunilbhawsar@gmail.com")
//		);

         
         
           $user =  Stripe_Account::retrieve("sk_test_McMK6iOo8kR8rvSROFBxtltS");
            
             $array =  (array) $user;
		 $arrayName = array();
		 foreach ($array as $key => $value) {
		 $arrayName[]=$value;
		 	# code...
		 }

          $acc_id = $arrayName[1]['id'];
            
                             
         $charge = Stripe_Charge::create(
		  array(
		    "amount" => 4000, // amount in cents
		    "currency" => "usd",
		    "source" => $token,     /// replace source with card
		    "description" => "Example charge",
		    "application_fee" => 2000,
		    "destination"=> $acc_id
		     // amount in cents
		   )
		    		//array("stripe_account" => $acc_id) 
                  //array("stripe_account" => "deepaks.snv@gmail.com")    /// email have consultant 
                 // array("stripe_account" => "dev.sunilbhawsar@gmail.com")    /// email have consultant  dev.sunilbhawsar@gmail.com
		);

	echo "<h1>Your payment has been completed.</h1><pre>";	
     	
	   $result  =  (array) $charge;
		echo "<Pre>";
		print_r($result);
		die;

		}
 
		catch(Stripe_CardError $e) {
 		$error1 = $e->getMessage();
 		echo "error1";
 		var_dump($error1);
		}
		catch (Stripe_InvalidRequestError $e) {
 		$error2 = $e->getMessage();
 		echo "error2";
 		var_dump($error2);
		} catch (Stripe_AuthenticationError $e) {
			echo "error3";
			$error3 = $e->getMessage();
 		var_dump($error3);
		} catch (Stripe_ApiConnectionError $e) {
			echo "error4";
			$error4 = $e->getMessage();
 		var_dump($error4);
		} catch (Stripe_Error $e) {
			echo "error5";
			$error5 = $e->getMessage();
 		var_dump($error5);
		} catch (Exception $e) {
			echo "error6";
			$error6 = $e->getMessage();
 		var_dump($error6);
		}
	}
 
}