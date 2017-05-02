<?php
	if(isset($_POST['submitButton'])){
		
		$url = 'https://google.com/recaptcha/api/siteverify';
		$privatekey = "6LeOWRQTAAAAAJeor88FZprs6z8dRc_TnGGUWny3";
		
		$response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
		$data = json_decode($response);
		
		if(isset($data->success) AND $data->success==true){

			
			
				$name = $_POST['inputName'];
				$email = $_POST['inputEmail'];
				$phone = $_POST['inputPhone'];
				$company = $_POST['inputCompany'];
				$serviceType = $_POST['inputServiceType'];
				$comments = $_POST['comments'];
				
				 
				$email_message = "
					Name: ".$name."
					E-mail: ".$email."
					Phone: ".$phone."
					Company Name: ".$company."
					Service Type:".$serviceType."
					Additional Comments: ".$comments."
				";
				
		

//				mail('jovita@dsdcompanies.com, evelyn@dsdcompanies.com', 'New Account Request', $email_message);
				mail('michelleprather@gmail.com', 'New Account Request', $email_message);
				header('Location:request-account.php?CaptchaPass=True');
				
				}else{

			header('Location:request-account.php?CaptchaFail=True');
		}
	}
//header("Location: thank-you.php");
 
?>