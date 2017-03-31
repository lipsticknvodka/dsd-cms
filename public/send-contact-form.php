<?php
if(isset($_POST['submitButton'])){
		
		$url = 'https://google.com/recaptcha/api/siteverify';
		$privatekey = "6LeOWRQTAAAAAJeor88FZprs6z8dRc_TnGGUWny3";
		
		$response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
		$data = json_decode($response);
		
		if(isset($data->success) AND $data->success==true){
			
			$recipient = array( 
			 'general'=>'evelyn@dsdcompanies.com, jovita@dsdcompanies.com', //general
			  //'general'=>'michelleprather@gmail.com',
			  'air-freight'=>'carlos@dsdcompanies.com', //Air Freight
			  'ocean-freight'=>'jose@dsdcompanies.com', //Ocean Freight/Intermodal
			  'trucking-pick-up'=>'roberto@dsdcompanies.com', //Trucking-Pick up ??
			  'trucking-deliveries'=>'simon@dsdcompanies.com', //Trucking-Deliveries ??
			 // 'hot-shot'=>'', 
			  'warehousing'=>'fausto@dsdcompanies.com', //Warehousing - Carlos ???
			  'cargo-screening'=>'edbuccio@dsdcompanies.com', //Cargo Screening
			 
			); 
			
			$name = $_POST['inputName'];
			$email = $_POST['inputEmail'];
			$phone = $_POST['inputPhone'];
			$companyName = $_POST['inputCompanyName'];
			$subject = $_POST['recipient'];
			$message = $_POST['inputMessage'];
			
			 
			$email_message = "
				Name: ".$name."
				E-mail: ".$email."
				Phone: ".$phone."
				Company:".$companyName."
				Subject:".$subject.";
				Message:".$message.";
			";
			
			//$my_email = $recipient[$_REQUEST['recipient']];
			$exploded_recipients = explode(",",$_REQUEST['recipient']);
			
			foreach($exploded_recipients as $value) 
			{
			
			$my_email = $recipient[$value];
			
			mail($my_email, 'New Contact Form Inquiry', $email_message);
			
			//header("Location: thank-you.php");
}

			header('Location:contact.php?CaptchaPass=True');
				
				}else{

			header('Location:contact.php?CaptchaFail=True');
		}
	}
?>