		<?php
		
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
		
		require 'vendor/autoload.php';
		?>
		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<meta name="description" content="Satisfaction Survey form Wizard by Ansonika.">
			<meta name="author" content="Ansonika">
			<title>CK Prime Dispatch | We Deliver Excellence</title>

			<!-- Favicons-->
			<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
			<link rel="apple-touch-icon" type="image/x-icon" href="img/favicon.png">
			<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/favicon.png">
			<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/favicon.png">
			<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/favicon.png">

			<!-- GOOGLE WEB FONT -->
			<link href="https://fonts.googleapis.com/css?family=Caveat|Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

			<!-- BASE CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet">
			<link href="css/vendors.css" rel="stylesheet">

			<!-- YOUR CUSTOM CSS -->
			<link href="css/custom.css" rel="stylesheet">


		</head>

		<!-- <body onLoad="setTimeout('delayedRedirect()', 8000)" style="background:#fff;"> -->
			<body class="style_2">

				<header>
					<div class="container-fluid">
						<div class="row" style="text-align: center; display: block;">
							<div class="col-8" style="display: inline-block;">
								<a href="index.php"><img src="img/logo.png" alt="" style="width:200px;"></a>

							</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /container -->
				</header>
				<!-- /header -->
				<?php

			$mail = $_POST['email'];
			$to = "crsglobal7@gmail.com";/* YOUR EMAIL HERE */
			$subject = "CK Prime Dispatch";
			$message = "DETAILS\n";
			$message .= "\nA. What is most important to you as a driver? " ."\n". "- " .$_POST['question_1']. "\n";

			$message .= "\nB. What kind of equipment do you drive?\n";
			foreach($_POST['question_2'] as $value) 
			{ 
				$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
			};

			$message .= "\nC. How many trucks do you own? " ."\n"."- " . $_POST['question_3']. "\n";
			$message .= "\nD. Why type of loads do you prefer? " ."\n"."- " . $_POST['question_4']. "\n";
			$message .= "\nE. What other areas of the business would you prefer assistance in?\n";
			foreach($_POST['question_5'] as $value) 
			{ 
				$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
			};

			$message .= "\nName: " . $_POST['firstname'];
			$message .= "\nEmail: " . $_POST['email'];

			if( isset( $_POST['telephone'] ) && $_POST['telephone']) {
				$message .= "\nTelephone: " . $_POST['telephone'];
			}

			$mail = new PHPMailer(true);
	
	try {
		$mail->SMTPDebug = false;                                       
		$mail->isSMTP();                                            
		$mail->Host       = 'smtp.gmail.com';                    
		$mail->SMTPAuth   = true;                             
		$mail->Username   = 'crsglobal7@gmail.com';                 
		$mail->Password   = 'jmlbfdoifegqnrry';                        
		$mail->SMTPSecure = 'tls';                              
		$mail->Port       = 587;  
	
		$mail->setFrom('crsglobal7@gmail.com', $subject);           
		$mail->addAddress($to);
		
		$mail->isHTML(false);                                  
		$mail->Subject = $subject;
		$mail->Body    = $message;
		// $mail->AltBody = $message;
		$mail->send();
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
		
			?> 
				<!-- END SEND MAIL SCRIPT -->   


				<div class="wrapper_centering">
					<div class="container_centering" style="">
						<div class="container">
							<div class="row justify-content-between">
								<div class="col-xl-12 col-lg-12 d-flex align-items-center" style="display: block;!important">
									<div class="main_title_1">
										<div class="icon icon--order-success svg" style="text-align: center;">
											<svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
												<g fill="none" stroke="#8EC343" stroke-width="2">
													<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
													<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
												</g>
											</svg>
										</div>
										<p style="margin-top: 25px">Thank you for submitting your information. The CK Prime Dispatch Team will review your needs and contact you shortly. Whether you are looking to simply outsource some of the tasks you currently have or would like to grow your fleet, CK Prime Dispatch is here for you.</p>
										<p>If you would like to submit any additional information or questions please feel free to contact us at ckprimedispatch@gmail.com</p>
									</div>
								</div>

							</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /container_centering -->
					<footer>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-3">
									© <?php echo date('Y'); ?> CK Prime Dispatch
								</div>
								<div class="col-md-9">
	                   <!--  <ul class="clearfix">
	                        <li><a href="#0" class="animated_link">Purchase this template</a></li>
	                        <li><a href="index.html" class="animated_link">Demo 1</a></li>
	                        <li><a href="index-2.html" class="animated_link">Demo 2</a></li>
	                        <li><a href="index-3.html" class="animated_link">Demo 3</a></li>
	                    </ul> -->
	                </div>
	            </div>
	            <!-- /row -->
	        </div>
	        <!-- /container-fluid -->
	    </footer>
	    <!-- /footer -->
	</div>
	<!-- /wrapper_centering -->



	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>

	<!-- Wizard script -->
	<script src="js/survey_func.js"></script>
</body>
</html>