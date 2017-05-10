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
			$shipType = $_POST['inputShipType'];
			$length1 = $_POST['inputLength-1'];
			$width1 = $_POST['inputWidth-1'];
			$height1 = $_POST['inputHeight-1'];
			$length2 = $_POST['inputLength-2'];
			$width2 = $_POST['inputWidth-2'];
			$height2 = $_POST['inputHeight-2'];
			$length3 = $_POST['inputLength-3'];
			$width3 = $_POST['inputWidth-3'];
			$height3 = $_POST['inputHeight-3'];
			$weight = $_POST['inputWeight'];
			$numPieces = $_POST['inputNumPieces'];
			$originZip = $_POST['inputOriginZip'];
			$destinationZip = $_POST['inputDestinationZip'];
			$comments = $_POST['comments'];
			
			 
			$email_message = "
				Name: ".$name."
				E-mail: ".$email."
				Phone: ".$phone."
				Ship Type:".$shipType."
				Package 1 Dimensions: L: ".$length1." W: ".$width1." H:".$height1."
				Package 2 Dimensions: L: ".$length2." W: ".$width2." H:".$height2."
				Package 3 Dimensions: L: ".$length3." W: ".$width3." H:".$height3."
				Total Weight: ".$weight."
				Total Number of Pieces: ".$numPieces."
				Origin Zip: ".$originZip."
				Destination Zip: ".$destinationZip."
				Additional Comments: ".$comments."
			";
			
//			mail('jovita@dsdcompanies.com, evelyn@dsdcompanies.com', 'New Quote Request', $email_message);
			mail('michelleprather@gmail.com', 'New Quote Request', $email_message);
			
			header('Location:request-quote.php?CaptchaPass=True');
				
				}else{

			header('Location:request-quote.php?CaptchaFail=True');
		}
	}
			//header("Location: thank-you.php");
 
?>