<?php
	/**************************
	 *	check google recaptcha
	 */

	require_once "../config/g_sk.php";
	$baseUrl = 'https://www.google.com/recaptcha/api/siteverify?';
	$params = http_build_query([
		'secret' => $recaptcha_secret_key,
		'response' => $_POST['g-recaptcha-response'],
		'remoteip' => $_SERVER['REMOTE_ADDR'],
	]);
	$requestToRecaptchaApi = $baseUrl.$params;

	$curlRequest = curl_init();
	curl_setopt($curlRequest, CURLOPT_URL, $requestToRecaptchaApi);
	curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, 1);
	$gResponse = curl_exec($curlRequest);
	curl_close($curlRequest);      

	$gResponse = json_decode($gResponse, true);

	//verify succesfull recaptcha
	if( $gResponse['success'] !== true){
		$errorResponse = '';
		foreach ($gResponse['error-codes'] as $k => $error){
			switch($error){
				case 'missing-input-secret':
					$errorResponse .= "Code Error 1. ";
					break;
				case 'invalid-input-secret':
					$errorResponse .= "Code Error 2. ";
					break;
				case 'missing-input-response': 
					$errorResponse .= "ReCaptha Required. ";
					break;
				case 'invalid-input-response': 
					$errorResponse .= "Please attempt to verify the ReCaptcha field again. ";
					break;
				case 'bad-request':
					$errorResponse .= "Code Error 3. ";
					break;
				case 'timeout-or-duplicate': 
					$errorResponse .= "Please press ctrl-f5 and try again. "; 
					break;
				default:
					$errorResponse .= "Unknown Error";		
			}
		}
		//TODO:
		//CREATE A NICE BOX ON PAGE THAT SAYS THERE WAS AN ERROR
		//LOG ERROR
		header("Location: https://www.tuchsen.net?captcha=failed&message=".$errorResponse);
		die();
	}


	/**************************
	 *	collect form data
	 */

    $name = filter_var( $_POST['personalName'], FILTER_SANITIZE_STRING);
	$company = filter_var( $_POST['companyName'], FILTER_SANITIZE_STRING);
    $message = filter_var( $_POST['message'], FILTER_SANITIZE_STRING);
	$methodType = filter_var($_POST['responseMethod'], FILTER_SANITIZE_STRING);
	switch($methodType){
		case "sms":
			$responseType = "Text Message";
			$responseValue = filter_var( $_POST["phone"], FILTER_SANITIZE_STRING); // type="tel" pattern="[0-9]{3}-?[0-9]{3}-?[0-9]{4}" required />				
			break;

		case "phone":
			$responseType = "Phone Call";
			$responseValue = filter_var( $_POST["phone"], FILTER_SANITIZE_STRING); // type="tel" pattern="[0-9]{3}-?[0-9]{3}-?[0-9]{4}" required />			
			break;

		case "email":
			$responseType = "Email";
			$responseValue = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);
			break;

			//TODO: ADD A DEFEAULT FOR ANOTHER RESPONSE TYPE IN CASE OF HACKING ATTEMPT
	}

	$smsMessage = "";
	$smsMessage .= "From: " .$name ."\n";
	$smsMessage .= "Company: ".$company ."\n";
	$smsMessage .= "Respond Via: " . $responseType ."\n";
	$smsMessage .= "Send Response To: " .$responseValue ."\n";
    $smsMessage .= "Message: " .$message;

	/**************************
	 *	start twilio message
	 */

	require_once '../config/bootstrap.php';
	require_once '../vendor/autoload.php';

    use Twilio\Rest\Client;

	$account_sid = $settings['twillio_sid'];
	$auth_token = $settings['twillio_token'];
    $twilio_number = $settings['twillio_phoneNumber'];
    
	try{
		
		$client = new Client($account_sid, $auth_token);
		$client->messages->create(
			// Where to send a text message (your cell phone?)
			'18583444524',
			array(
				'from' => $twilio_number,
				'body' => $smsMessage,
			)
		);
		
	}catch(Exception $e){
			
			header("Location: https://www.tuchsen.net?error=" .$e->getMessage() );
	}

	//TODO:
	//CREATE A NICE BOX ON PAGE THAT CONFIRMS MESSAGE WAS SENT
	//LOG MESSAGE

	header("Location: https://www.tuchsen.net?message=sent");